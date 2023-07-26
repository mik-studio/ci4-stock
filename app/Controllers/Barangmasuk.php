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
        $data = [
            'barang' => $this->barangmasukModel->getBarang(),
            'page_title' => 'Tambah Barang Masuk',
            'page_code' => 'BARANG.MASUK'
        ];
        return view('transaksi/masuk_add', $data);
    }

    public function postAdd()
    {
        $data = [
            'id_barang' => $this->request->getPost('idbarang', FILTER_SANITIZE_STRING),
            'jumlah_masuk' => $this->request->getPost('jumlahmasuk', FILTER_SANITIZE_STRING)
        ];
        if ($this->barangmasukModel->insert($data))
        {
            session()->setTempdata('SUCCESS', 'Data baru berhasil ditambah', 2);
        }
        return redirect()->to(base_url().'barangmasuk');
    }
}