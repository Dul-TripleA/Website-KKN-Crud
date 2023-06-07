<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingWebModel extends Model
{
    protected $table = 'setting';
    protected $primaryKey = 'id';
    protected $allowedFields = ['sampul', 'judul', 'desk'];

    public function getSetting($judul = false)
    {
        if ($judul == false) {
            return $this->findAll();
        }

        return $this->where(['judul' => $judul])->first();
    }
}
