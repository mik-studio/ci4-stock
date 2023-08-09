<?php

namespace App\Controllers;

// use App\Models\ModelLaporan;

class Test extends BaseController
{
    // public $laporanModel;

    public function __construct()
    {
        helper('form');
        // $this->laporanModel = new ModelLaporan();
    }

    public function getIndex()
    {
        return view("test/test_index");
    }
}
