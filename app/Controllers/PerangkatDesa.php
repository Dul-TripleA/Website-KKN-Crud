<?php

namespace App\Controllers;

use App\Models\PerangkatDesaModel;

class PerangkatDesa extends BaseController
{
    protected $perangkatDesa;
    public function __construct()
    {
        $this->perangkatDesa = new PerangkatDesaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Panel | Perangkat Desa',
            'perangkatDesa' => $this->perangkatDesa->findAll()
        ];

        return view('admin/v_admin/PerangkatDesa/v_perangkat.php', $data);
    }

    public function detail($nama)
    {
        $data = [
            'title' => 'Admin Panel | Detail Peragkat Desa',
            'perangkatDesa' => $this->perangkatDesa->getPerangkatDesa($nama)
        ];

        return view('admin/v_admin/PerangkatDesa/v_detailPerangkat', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Admin Panel | Tambah Perangkat Desa',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/v_admin/PerangkatDesa/v_tambahData', $data);
    }

    public function save()
    {
        $valid = $this->validate(
            [
                'foto' => [
                    'label' => 'foto',
                    'rules' => 'ext_in[foto,jpg,jpeg,png]',
                    'errors' => [
                        'ext_in' => '{field} harus berupa gambar\video dengan format jpg,jpeg,png'
                    ]
                ]
            ]
        );

        if ($valid) {
            $fileGambar = $this->request->getFile('foto');

            //apakah tidak ada gambar yang diupload
            if ($fileGambar->getError() == 4) {
                $nama = 'default.png';
            } else {
                //geberate nama gambar
                //pindahkan file ke folder img
                $nama = $fileGambar->getRandomName();
                $fileGambar->move('img/', $nama);
            }

            $this->perangkatDesa->save([
                'nama' => $this->request->getVar('nama'),
                'jabatan' => $this->request->getVar('jabatan'),
                'foto' => $nama
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Diupload');

            return redirect()->to('/PerangkatDesa');
        } else {
            return redirect()->to(base_url('/PerangkatDesa/create'))->withInput();
        }
    }

    public function edit($nama)
    {
        $data = [
            'title' => 'Admin Panel | Edit Data Perangkat Desa',
            'perangkatDesa' => $this->perangkatDesa->getPerangkatDesa($nama),
            'validation' => \Config\Services::validation()

        ];

        return view('admin/v_admin/PerangkatDesa/v_editData', $data);
    }

    public function update($id)
    {
        $dataLama = $this->perangkatDesa->getPerangkatDesa($this->request->getVar('nama'));
        $dataLama = $this->perangkatDesa->find($id);

        if ($dataLama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required';
        }

        if (!$this->validate([
            'nama' => [
                'label' => 'Nama',
                'rules' => $rule_nama,
                'errors' => [
                    'is_unique' => '{field} sudah digunakan !',
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'foto' => [
                'label' => 'Foto',
                'rules' => 'ext_in[foto,jpg,jpeg,png]',
                'errors' => [
                    'ext_in' => '{field} harus berupa gambar\video dengan format jpg,jpeg,png'
                ]
            ]
        ])) {
            return redirect()->to('admin/v_admin/PerankatDesa/v_editData' . $this->request->getVar('nama'))->withInput();
        }

        $fileGambar = $this->request->getFile('foto');

        if ($fileGambar->getError() == 4) {
            $nama = $this->request->getVar('gambarLama');
        } else {
            $nama = $fileGambar->getRandomName();
            // pindahkan gambar
            $fileGambar->move('img', $nama);
            // hapus file lama
            unlink('img/' . $this->request->getVar('gambarLama'));
        }

        $this->perangkatDesa->update($id, [
            'nama' => $this->request->getVar('nama'),
            'jabatan' => $this->request->getVar('jabatan'),
            'foto' => $nama
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('PerangkatDesa/');
    }

    public function delete($id)
    {
        // cari foto berdasaraakan id
        $perangkatDesa = $this->perangkatDesa->find($id);
        // ceek jika file gambarnya default
        if ($perangkatDesa['foto'] != 'default.png') {
            // hapus foto
            unlink('img/' . $perangkatDesa['foto']);
        }

        $this->perangkatDesa->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/PerangkatDesa');
    }
}
