<?php

namespace App\Controllers;

use App\Models\GaleriModel;
use App\Models\BeritaModel;
use App\Models\KategoriModel;
use App\Models\SettingWebModel;
use App\Models\ContactModel;

class Home extends BaseController
{

    protected $galeri;
    protected $berita;
    protected $kategori;
    protected $setting;
    protected $contact;
    public function __construct()
    {
        $this->galeri = new GaleriModel();
        $this->berita = new BeritaModel();
        $this->kategori = new KategoriModel();
        $this->setting = new SettingWebModel();
        $this->contact = new ContactModel();

    }

    public function index()
    {
        $data =[
            'title' => 'Galeri Desa Salam',
            'arsip' => $this->galeri->findAll(),
            'berita' => $this->berita->findAll(),
            'kategori' => $this->kategori->findAll(),
            'banner' => $this->setting->findAll(),
            'contact' => $this->contact->findAll()
        ];

        return view('user/v_indexU', $data);
    }

    
}
