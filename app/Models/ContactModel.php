<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'alamat', 'no_hp','ig'];

    public function getContact($email = false)
    {
        if ($email == false) {
            return $this->findAll();
        }

        return $this->where(['email' => $email])->first();
    }
}
