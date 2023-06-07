<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','email', 'password'];
    
    
    public function check_member($email)
    {
        return $this->db->table('login')->where('email', $email)->get()->getRowArray();
    }

    public function getLogin($email = false)
    {
        if ($email == false) {
            return $this->findAll();
        }

        return $this->where(['email' => $email])->first();
    }
}
