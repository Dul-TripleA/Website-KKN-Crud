<?php

namespace App\Controllers;


class Lisensi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Copy Right 2022 KKN-T UDB 15 ',
            'developer' => 'Fitroh Ahmad Abdul Aziz',
            'email' => 'fitrohahmad8@gmail.com',
            'kelompok' => 'KKN-T UDB 15 | 5 Desember s/d 18 Januari 2023'
        ];

        return view('user/v_lisensi', $data);
    }

}