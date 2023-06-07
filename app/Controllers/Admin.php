<?php

namespace App\Controllers;

use App\Models\GaleriModel;
use App\Models\BeritaModel;
use App\Models\KategoriModel;
use App\Models\SettingWebModel;
use App\Models\ContactModel;
use App\Models\PerangkatDesaModel;
use App\Models\LoginModel;

class Admin extends BaseController
{
    protected $galeri;
    protected $berita;
    protected $kategori;
    protected $setting;
    protected $contact;
    protected $perangkatDesa;
    protected $user;
    public function __construct()
    {
        $this->galeri = new GaleriModel();
        $this->berita = new BeritaModel();
        $this->kategori = new KategoriModel();
        $this->setting = new SettingWebModel();
        $this->contact = new ContactModel();
        $this->perangkatDesa = new PerangkatDesaModel();
        $this->user = new LoginModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Panel | Galeri Desa Salam',
            'arsip' => $this->galeri->get()->getNumRows(),
            'berita' => $this->berita->get()->getNumRows(),
            'kategori' => $this->kategori->get()->getNumRows(),
            'banner' => $this->setting->get()->getNumRows(),
            'contact' => $this->contact->get()->getNumRows(),
            'perangkatDesa' => $this->perangkatDesa->get()->getNumRows(),
            'user' => $this->user->get()->getNumRows()
        ];

        return view('admin/v_dashboard.php', $data);
    }
}
