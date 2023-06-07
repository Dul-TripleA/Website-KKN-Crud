<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KategoriModel;

class Berita extends BaseController
{
    protected $berita;
    protected $kategori;
    public function __construct()
    {
        $this->berita = new BeritaModel();
        $this->kategori = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Panel | Berita',
            'berita' => $this->berita->findAll()
        ];

        return view('admin/v_admin/Berita/v_berita', $data);
    }

    public function kategori($kategori)
    {
        $kategori = str_replace('-', ' ', $kategori);
        $data =[
            'title' => 'Informasi Desa Salam',
            'kategori' => $this->berita->join('kategori', 'berita.kategori=kategori.kategori')
            ->where('kategori.kategori', $kategori)
            ->get()->getResultArray()
        ]; 
        return view('user/beritaK', $data);
    }

    public function informasi()
    {
        $data = [
            'title' => 'Informasi Desa Salam',
            'kategori' => $this->berita->findAll()
        ];

        return view('user/beritaK', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Admin Panel | Detail Berita',
            'berita' => $this->berita->getBerita($slug)
        ];

        return view('admin/v_admin/Berita/v_detailBerita', $data);
    }

    public function read($slug)
    {
        $data = [
            'title' => 'Baca Informasi Desa Salam',
            'berita' => $this->berita->getBerita($slug)
        ];

        return view('user/v_read', $data);
    }

    
    public function create()
    {

        $data = [
            'title' => 'Admin Panel | Tambah Data Berita',
            'kategori' =>  $this->kategori->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/v_admin/Berita/v_tambahBerita', $data);
    }

    public function save()
    {
        $valid = $this->validate(
            [
                'judul' => [
                    'label' => 'Judul',
                    'rules' => 'required|is_unique[berita.judul]',
                    'errors' => [
                        'is_unique' => '{field} sudah digunakan !',
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'foto' => [
                    'label' => 'foto',
                    'rules' => 'ext_in[foto,jpg,jpeg,png,mp4,mkv]',
                    'errors' => [
                        'ext_in' => '{field} harus berupa gambar\video dengan format jpg,jpeg,png,mp4,mkv,mov'
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

            $slug = url_title($this->request->getVar('judul'), '-', true);
            $this->berita->save([
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'tanggal' => $this->request->getVar('tanggal'),
                'kategori' => $this->request->getVar('kategori'),
                'desk' => $this->request->getVar('desk'),
                'isi' => $this->request->getVar('isi'),
                'foto' => $nama
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Diupload');

            return redirect()->to('/Berita');
        } else {
            return redirect()->to(base_url('/Berita/create'))->withInput();
        }
    }

    public function delete($id)
    {
        // cari foto berdasaraakan id
        $berita = $this->berita->find($id);
        // ceek jika file gambarnya default
        if ($berita['foto'] != 'default.png') {
            // hapus foto
            unlink('img/' . $berita['foto']);
        }

        $this->berita->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/Berita');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Admin Panel | Update Data',
            'validation' => \Config\Services::validation(),
            'berita' => $this->berita->getBerita($slug),
            'kategori' =>  $this->kategori->findAll(),
        ];

        return view('admin/v_admin/Berita/v_editBerita', $data);
    }

    public function update($id)
    {
        $dataLama = $this->berita->getBerita($this->request->getVar('slug'));
        $dataLama = $this->berita->find($id);

        if ($dataLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[berita.judul]';
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
            'foto' => [
                'label' => 'Foto',
                'rules' => 'ext_in[foto,jpg,jpeg,png,mp4,mkv]',
                'errors' => [
                    'ext_in' => '{field} harus berupa gambar\video dengan format jpg,jpeg,png'
                ]
            ]
        ])) {
            return redirect()->to('admin/v_admin/Berita/v_editBerita' . $this->request->getVar('slug'))->withInput();
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
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->berita->update($id, [
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'tanggal' => $this->request->getVar('tanggal'),
            'kategori' => $this->request->getVar('kategori'),
            'desk' => $this->request->getVar('desk'),
            'isi' => $this->request->getVar('isi'),
            'foto' => $nama
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('Berita/');
    }

}
