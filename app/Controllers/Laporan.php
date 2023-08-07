<?php

namespace App\Controllers;

use App\Models\ModelLaporan;

class Laporan extends BaseController
{
    public $laporanModel;

    public function __construct()
    {
        helper('form');
        $this->laporanModel = new ModelLaporan();
    }

    public function getStockbarang()
    {
        $data = [
            // 'barang' => $this->databarangModel->getDatabarang(),
            'page_title' => 'Laporan Stock Barang',
            'page_code' => 'LAPORAN.STOCKBARANG'
        ];
        return view('laporan/stockbarang_index', $data);
    }

    public function getListbarang() {
        return $this->laporanModel->JsonListBarang();
    }
}
