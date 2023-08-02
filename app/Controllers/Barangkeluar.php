<?php

namespace App\Controllers;

use App\Models\ModelBarangkeluar;

class Barangkeluar extends BaseController
{
    public $barangkeluarModel;

    public function __construct()
    {
        helper('form');
        $this->barangkeluarModel = new ModelBarangkeluar();
    }

    public function getIndex()
    {
        $data = [
            // 'barangkeluar' => $this->barangkeluarModel->getBarangkeluar(),
            'page_title' => 'Barang Keluar',
            'page_code' => 'BARANG.KELUAR'
        ];
        return view('transaksi/keluar_index', $data);
    }

    public function getAdd()
    {
        $data = [
            'barang' => $this->barangkeluarModel->getBarang(),
            'page_title' => 'Tambah Barang Keluar',
            'page_code' => 'BARANG.KELUAR'
        ];
        return view('transaksi/keluar_add', $data);
    }

    public function postAdd()
    {
        $data = [
            'id_barang' => $this->request->getPost('idbarang', FILTER_SANITIZE_STRING),
            'jumlah_keluar' => $this->request->getPost('jumlahkeluar', FILTER_SANITIZE_STRING)
        ];
        if ($this->barangkeluarModel->insert($data))
        {
            session()->setTempdata('SUCCESS', 'Data baru berhasil ditambah', 2);
        }
        return redirect()->to(base_url().'barangkeluar');
    }

    public function getListbarangkeluar() {
        return $this->barangkeluarModel->JsonBarangKeluar();
    }
}