<?php

namespace App\Controllers;

use App\Models\ModelBarangmasuk;

class Barangmasuk extends BaseController
{
    public $barangmasukModel;

    public function __construct()
    {
        helper('form');
        $this->barangmasukModel = new ModelBarangmasuk();
    }

    public function getIndex()
    {
        $data = [
            'barangmasuk' => $this->barangmasukModel->getBarangmasuk(),
            'page_title' => 'Barang Masuk',
            'page_code' => 'BARANG.MASUK'
        ];
        return view('transaksi/masuk_index', $data);
    }

    public function getAdd()
    {

    }

    public function postAdd()
    {

    }

    public function getEdit($id=null)
    {

    }

    public function postEdit($id=null)
    {

    }

    public function getDelete($id=null)
    {

    }
}
