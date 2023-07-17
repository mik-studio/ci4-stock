<?php

namespace App\Controllers;

class Datakategori extends BaseController
{
    public function getIndex()
    {
        $data = [
            'page_title' => 'Data Kategori',
            'page_code' => 'MASTER.KATEGORI'
        ];
        return view('master/kategori_index', $data);
    }

    public function getAdd() {
        echo 'test';
    }
}
