<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table = 'arsip';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'slug', 'tanggal', 'link', 'dokumentasi', 'kategori'];

    public function getGaleri($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
