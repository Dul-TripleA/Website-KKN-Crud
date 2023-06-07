<?php

namespace App\Models;

use CodeIgniter\Model;

class PerangkatDesaModel extends Model
{
    protected $table = 'perangkat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'jabatan', 'foto'];

    public function getPerangkatDesa($nama = false)
    {
        if ($nama == false) {
            return $this->findAll();
        }

        return $this->where(['nama' => $nama])->first();
    }
}
