<?php

namespace App\Controllers;

use App\Models\SettingWebModel;

class Setting extends BaseController
{

    protected $setting;
    public function __construct()
    {
        $this-> setting = new SettingWebModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Panel | Setting',
            'setting' => $this->setting->findAll(),
        ];

        return view('admin/v_admin/Setting/v_setWeb', $data);
    }

    public function edit($judul)
    {
        $data = [
            'title' => 'Admin Panel | Edit Banner',
            'setting' =>$this->setting->getSetting($judul)
        ];

        return view('admin/v_admin/Setting/v_editData', $data);
    }

    public function update($id)
    {
        $dataLama = $this->setting->getSetting($this->request->getVar('judul'));
        $dataLama = $this->setting->find($id);

        if ($dataLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[setting.judul]';
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
            'sampul' => [
                'label' => 'Sampul',
                'rules' => 'ext_in[sampul,jpg,jpeg,png,mp4,mkv]',
                'errors' => [
                    'ext_in' => '{field} harus berupa gambar\video dengan format jpg,jpeg,png'
                ]
            ]
        ])) {
            return redirect()->to('admin/v_admin/Setting/v_editData' . $this->request->getVar('judul'))->withInput();
        }

        $fileGambar = $this->request->getFile('sampul');

        if ($fileGambar->getError() == 4) {
            $nama = $this->request->getVar('gambarLama');
        } else {
            $nama = $fileGambar->getRandomName();
            // pindahkan gambar
            $fileGambar->move('img', $nama);
            // hapus file lama
            unlink('img/' . $this->request->getVar('gambarLama'));
        }

        $this->setting->update($id, [
            'judul' => $this->request->getVar('judul'),
            'desk' => $this->request->getVar('desk'),
            'sampul' => $nama
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('Setting/');
    }
    
    
}
