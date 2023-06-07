<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    private $googleClient = NULL;
    protected $login;
    public function __construct()
    {
        session();
        $this->login = new LoginModel();
    }
    public function index(){    

        return view('v_login_2', [
                            'title' => 'Login', 
                            'validation' => \Config\Services::validation()
                            ]);
    }
    
    public function cek_login(){
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $valid = $this->validate([
               'email' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email',
                    'errors' => [
                      'required' => '{field} tidak boleh kosong',
                      'valid_email' => '{field} tidak valid'
                    ]
                  ],
                  'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => [
                      'required' => '{field} tidak boleh kosong',
                    ]
                  ],
            ]);
        
        if ($valid) {
            $dataUser = $this->login->where('email', $email)->get()->getRowArray();
            if ($dataUser) {
                if (password_verify($password, $dataUser['password'])){
                     $userdata = [
                            'email' => $dataUser['email'],
                            'profile' => 'templatesU/img/avatar2.png'
                        ];
                    session()->set("LoggedUserData", $userdata);
                    return redirect()->to(base_url('/Admin'));
                } else {
                    session()->setFlashData('error', 'msg#Password salah');
                    return redirect()->to(base_url('/login'))->withInput();
                }
            } else {
                session()->setFlashData('error', 'msg#E-mail ' .$email. ' tidak terdaftar');
                return redirect()->to(base_url('/login'));
            }
        } else {
            return redirect()->to(base_url('/login'))->withInput();
        }
    }

    public function keluar()
    {
        session()->remove('LoggedUserData');
        session()->remove('AccessToken');


        session()->setFlashData("msg", 'error#Anda Berhasil Keluar');
        return redirect()->to(base_url('/login'));
    }

}