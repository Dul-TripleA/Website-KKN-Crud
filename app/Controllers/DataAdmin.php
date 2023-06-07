<?php 

namespace App\Controllers;

use App\Models\LoginModel;

class DataAdmin extends BaseController
{
    protected $dataAdmin;
    public function __construct()
    {
        $this->dataAdmin = new LoginModel();
    }

    public function index(){
        $data =[
            'title'=>'Admin Panel | Data Admin',
            'dataAdmin'=>$this->dataAdmin->findAll()
        ];

        return view('admin/v_admin/User/v_user', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Admin Panel | Tambah Admin',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/v_admin/User/v_tambahUser', $data);
    }

    public function save()
    {
        $valid = $this->validate(
            [
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|is_unique[login.email]',
                    'errors' => [
                        'is_unique' => '{field} sudah digunakan !',
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                 'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
            ]
        );

        if ($valid) {

            $this->dataAdmin->save([
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Diupload');

            return redirect()->to('/DataAdmin');
        } else {
            return redirect()->to(base_url('/DataAdmin/create'))->withInput();
        }
    }

    public function delete($id)
    {

        $this->dataAdmin->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/DataAdmin');
    }
}

?>