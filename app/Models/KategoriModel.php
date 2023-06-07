<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['kategori', 'sampul', 'ket'];

    public function getKategori($kategori = false)
    {
        if ($kategori == false) {
            return $this->findAll();
        }

        return $this->where(['kategori' => $kategori])->first();
    }
}
