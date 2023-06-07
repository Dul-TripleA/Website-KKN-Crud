<?php

namespace App\Controllers;

use App\Models\GaleriModel;

class Galeri extends BaseController
{

    protected $galeri;
    public function __construct()
    {
        $this->galeri = new GaleriModel();
    }

    // tampil
    public function index()
    {
        $data = [
            'title' => 'Admin Panel | Galeri',
            'galeri' => $this->galeri->findAll()
        ];

        return view('admin/v_admin/Galeri/v_galeri', $data);
    }
    public function detail($slug)
    {
        $data = [
            'title' => 'Admin Panel | Detail Dokumentasi',
            'galeri' => $this->galeri->getGaleri($slug)
        ];

        return view('admin/v_admin/Galeri/v_detail', $data);
    }

    public function create()
    {

        $data = [
            'title' => 'Admin Panel | Tambah Data',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/v_admin/Galeri/v_tambahGaleri', $data);
    }

    public function save()
    {

        $valid = $this->validate(
            [
                'judul' => [
                    'label' => 'Judul',
                    'rules' => 'required|is_unique[arsip.judul]',
                    'errors' => [
                        'is_unique' => '{field} sudah digunakan !',
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'dokumentasi' => [
                    'label' => 'Dokumentasi',
                    'rules' => 'ext_in[dokumentasi,jpg,jpeg,png,mp4,mkv]',
                    'errors' => [
                        'ext_in' => '{field} harus berupa gambar\video dengan format jpg,jpeg,png,mp4,mkv,mov'
                    ]
                ]
            ]
        );

        if ($valid) {
            $fileGambar = $this->request->getFile('dokumentasi');

            //apakah tidak ada gambar yang diupload
            if ($fileGambar->getError() == 4) {
                $nama = 'defaultPicture.png';
            } else {
                //geberate nama gambar
                //pindahkan file ke folder img
                $nama = $fileGambar->getRandomName();
                $fileGambar->move('img/', $nama);
            }

            $slug = url_title($this->request->getVar('judul'), '-', true);
            $this->galeri->save([
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'tanggal' => $this->request->getVar('tanggal'),
                'kategori' => $this->request->getVar('kategori'),
                'link' => $this->request->getVar('link'),
                'dokumentasi' => $nama
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Diupload');

            return redirect()->to('/Galeri');
        } else {
            return redirect()->to(base_url('/Galeri/TambahData'))->withInput();
        }
    }

    public function delete($id)
    {
        // cari foto berdasaraakan id
        $galeri = $this->galeri->find($id);
        // ceek jika file gambarnya default
        if ($galeri['dokumentasi'] != 'defaultPicture.png') {
            // hapus foto
            unlink('img/' . $galeri['dokumentasi']);
        }

        $this->galeri->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/Galeri');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Admin Panel | Update Data',
            'validation' => \Config\Services::validation(),
            'galeri' => $this->galeri->getGaleri($slug)
        ];

        return view('admin/v_admin/Galeri/v_editData', $data);
    }

    public function update($id)
    {
        //validation
        //cek judul
        $dataLama = $this->galeri->getGaleri($this->request->getVar('slug'));
        $dataLama = $this->galeri->find($id);




        if ($dataLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[arsip.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'label' => 'Judul',
                'rules' => $rule_judul,
                'errors' => [
                    'is_unique' => '{field} sudah digunakan !',
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'dokumentasi' => [
                'label' => 'Dokumentasi',
                'rules' => 'ext_in[dokumentasi,jpg,jpeg,png,mp4,mkv]',
                'errors' => [
                    'ext_in' => '{field} harus berupa gambar\video dengan format jpg,jpeg,png,mp4,mkv,mov'
                ]
            ]
        ])) {
            return redirect()->to('admin/v_admin/Galeri/v_editData' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('dokumentasi');


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

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->galeri->update($id, [
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'tanggal' => $this->request->getVar('tanggal'),
            'kategori' => $this->request->getVar('kategori'),
            'link' => $this->request->getVar('link'),
            'dokumentasi' => $nama
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('Galeri/');
    }

    // user

    public function dokumentasi()
    {
        $data = [
            'title' => 'Galeri Salam',
            'galeri' => $this->galeri->findAll()
        ];

        return view('user/v_galeri', $data);
    }
}
