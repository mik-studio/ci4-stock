<?php

namespace App\Controllers;

use App\Models\ModelDatabarang;

class Databarang extends BaseController
{
    public $databarangModel;

    public function __construct()
    {
        helper('form');
        $this->databarangModel = new ModelDatabarang();
    }

    public function getIndex()
    {
        $data = [
            'barang' => $this->databarangModel->findAll(),
            'page_title' => 'Data Barang',
            'page_code' => 'MASTER.BARANG'
        ];
        return view('master/barang_index', $data);
    }

    public function getAdd()
    {
        $data = [
            'page_title' => 'Tambah Barang',
            'page_code' => 'MASTER.BARANG'
        ];
        return view('master/barang_add', $data);
    }

    public function postAdd()
    {
        // var_dump($this->request->getVar('namabarang', FILTER_SANITIZE_STRING));
        $data = [
            'nama_barang' => $this->request->getPost('namabarang', FILTER_SANITIZE_STRING),
            'jumlah_barang' => $this->request->getPost('jumlahbarang', FILTER_SANITIZE_STRING),
            'kategori_barang' => $this->request->getPost('kategoribarang', FILTER_SANITIZE_STRING)
        ];
        $this->databarangModel->insert($data);
        return redirect()->to(current_url());
    }

    public function getEdit()
    {
        return view('master/barang_edit');
    }

    public function getDelete()
    {
        return null;
    }
}
