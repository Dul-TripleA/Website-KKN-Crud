<?php


namespace App\Controllers;

use App\Models\KategoriModel;

class Kategori extends BaseController
{
    protected $kategori;
    public function __construct()
    {
        $this->kategori = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Panel | Kategori',
            'kategori' => $this->kategori->findAll()
        ];

        return view('admin/v_admin/Kategori/v_kategori', $data);
    }
    

    public function detail($kategori)
    {
        $data = [
            'title' => 'Admin Panel | Detail Dokumentasi',
            'kategori' => $this->kategori->getKategori($kategori)
        ];

        return view('user/beritaK', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Admin Panel | Tambah Data Kategori',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/v_admin/Kategori/v_tambahDataKategori', $data);
    }

    public function save()
    {
        $valid = $this->validate(
            [
                'kategori' => [
                    'label' => 'Kategori',
                    'rules' => 'required|is_unique[kategori.kategori]',
                    'errors' => [
                        'is_unique' => '{field} sudah digunakan !',
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'sampul' => [
                    'label' => 'SAMPUL',
                    'rules' => 'ext_in[sampul,jpg,jpeg,png]',
                    'errors' => [
                        'ext_in' => '{field} harus berupa gambar\video dengan format jpg,jpeg,png'
                    ]
                ]
            ]
        );

        if ($valid) {
            $fileGambar = $this->request->getFile('sampul');

            //apakah tidak ada gambar yang diupload
            if ($fileGambar->getError() == 4) {
                $nama = 'default.png';
            } else {
                //geberate nama gambar
                //pindahkan file ke folder img
                $nama = $fileGambar->getRandomName();
                $fileGambar->move('img/', $nama);
            }

            $this->kategori->save([
                'kategori' => $this->request->getVar('kategori'),
                'ket' => $this->request->getVar('ket'),
                'sampul' => $nama
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Diupload');

            return redirect()->to('/Kategori');
        } else {
            return redirect()->to(base_url('/Kategori/create'))->withInput();
        }
    }

    public function delete($id_kategori)
    {
        // cari foto berdasaraakan id
        $kategori = $this->kategori->find($id_kategori);
        // ceek jika file gambarnya default
        if ($kategori['sampul'] != 'default.png') {
            // hapus foto
            unlink('img/' . $kategori['sampul']);
        }

        $this->kategori->delete($id_kategori);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/Kategori');
    }

    public function edit($kategori)
    {
        $data = [
            'title' => 'Admin Panel | Update Data Kategori',
            'validation' => \Config\Services::validation(),
            'kategori' => $this->kategori->getKategori($kategori)
        ];

        return view('admin/v_admin/Kategori/v_editData', $data);
    }

    public function update($id_kategori)
    {
        $dataLama = $this->kategori->getKategori($this->request->getVar('kategori'));
        $dataLama = $this->kategori->find($id_kategori);

        if ($dataLama['kategori'] == $this->request->getVar('kategori')) {
            $rule_kategori = 'required';
        } else {
            $rule_kategori = 'required|is_unique[kategori.kategori]';
        }

        if (!$this->validate([
            'kategori' => [
                'label' => 'Kategori',
                'rules' => $rule_kategori,
                'errors' => [
                    'is_unique' => '{field} sudah digunakan !',
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'sampul' => [
                'label' => 'Sampul',
                'rules' => 'ext_in[sampul,jpg,jpeg,png,mp4,mkv]',
                'errors' => [
                    'ext_in' => '{field} harus berupa gambar dengan format jpg,jpeg,png'
                ]
            ]
        ])) {
            return redirect()->to('admin/v_admin/Kategori/v_editData' . $this->request->getVar('kategori'))->withInput();
        }

        $fileGambar = $this->request->getFile('sampul');


        // dd($this->request->getVar('tanggal'));

        // cek gambar,apakah ttp gambar lama
        if ($fileGambar->getError() == 4) {
            $nama = $this->request->getVar('gambarLama');
        } else {
            $nama = $fileGambar->getRandomName();
            // pindahkan gambar
            $fileGambar->move('img', $nama);
            // hapus file lama
            unlink('img/' . $this->request->getVar('gambarLama'));
        }

        $this->kategori->update($id_kategori, [
            'kategori' => $this->request->getVar('kategori'),
            'ket' => $this->request->getVar('ket'),
            'sampul' => $nama
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('Kategori/');
    }

}
