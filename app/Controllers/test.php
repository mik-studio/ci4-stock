<?php

namespace App\Controllers;

use \Hermawan\DataTables\DataTable;
use App\Models\ModelTest;

class Test extends BaseController
{
    public $databarangModel;

    public function __construct()
    {
        helper('form');
        $this->databarangModel = new ModelTest();
    }

    public function getIndex()
    {
        $data = [
            'page_title' => 'Data Barang',
            'page_code' => 'MASTER.BARANG'
        ];
        return view('master/test', $data);
    }

    public function getBasic_model()
    {
        $customerModel = new ModelTest();
        $customerModel->select('id,nama_barang,jumlah_barang,id_kategori');

        return DataTable::of($customerModel)->toJson();
    }
}
