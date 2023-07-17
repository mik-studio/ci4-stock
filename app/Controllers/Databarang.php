<?php

namespace App\Controllers;

class Databarang extends BaseController
{
    public function getIndex()
    {
        $data = [
            'page_title' => 'Data Barang',
            'page_code' => 'MASTER.BARANG'
        ];
        return view('master/barang_index', $data);
    }

    public function getAdd() {
        echo 'test';
    }
}
