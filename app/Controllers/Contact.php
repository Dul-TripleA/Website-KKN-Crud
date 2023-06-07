<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{

    protected $contact;
    public function __construct()
    {
        $this->contact = new ContactModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Panel | Contact',
            'contact' => $this->contact->findAll(),
        ];

        return view('admin/v_admin/Contact/v_contact', $data);
    }

    public function edit($email)
    {
        $data = [
            'title' => 'Admin Panel | Edit Contact',
            'validation' => \Config\Services::validation(),
            'contact' => $this->contact->getContact($email)
        ];

        return view('admin/v_admin/Contact/v_editContact', $data);
    }

    public function update($id)
    {
        $dataLama = $this->contact->getContact($this->request->getVar('email'));
        $dataLama = $this->contact->find($id);

        if ($dataLama['email'] == $this->request->getVar('email')) {
            $rule_email = 'required';
        } else {
            $rule_email = 'required';
        }

        if (!$this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => $rule_email,
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
            
        ])) {
            return redirect()->to('admin/v_admin/Contact/v_editContact' . $this->request->getVar('email'))->withInput();
        }

        $this->contact->update($id, [
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'ig' => $this->request->getVar('ig')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('Contact/');
    }

    public function salam()
    {
        $data = [
            'title' => 'Contact Desa Salam',
            'kontak' => $this->contact->findAll(),
        ];

        return view('user/v_contact', $data);
    }
}
