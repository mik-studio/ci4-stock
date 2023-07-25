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
            'barang' => $this->databarangModel->getDatabarang(),
            'page_title' => 'Data Barang',
            'page_code' => 'MASTER.BARANG'
        ];
        return view('master/barang_index', $data);
    }

    public function getAdd()
    {
        $data = [
            'kategori' => $this->databarangModel->getAllKategori(),
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
            'id_kategori' => $this->request->getPost('kategoribarang', FILTER_SANITIZE_STRING)
        ];
        if ($this->databarangModel->insert($data))
        {
            session()->setTempdata('SUCCESS', 'Data baru berhasil ditambah', 2);
        }
        return redirect()->to(base_url().'databarang');
    }

    public function getEdit($id=null)
    {
        $data = [
            'barang' => $this->databarangModel->find($id),
            'kategori' => $this->databarangModel->getAllKategori(),
            'page_title' => 'Edit Barang',
            'page_code' => 'MASTER.BARANG'
        ];
        return view('master/barang_edit', $data);
    }

    public function postEdit($id=null)
    {
        $data = [
            'nama_barang' => $this->request->getPost('namabarang', FILTER_SANITIZE_STRING),
            'jumlah_barang' => $this->request->getPost('jumlahbarang', FILTER_SANITIZE_STRING),
            'id_kategori' => $this->request->getPost('kategoribarang', FILTER_SANITIZE_STRING)
        ];
        if ($this->databarangModel->update($id, $data) === true)
        {
            session()->setTempdata('SUCCESS', 'Data berhasil diubah', 2);
        }
        return redirect()->to(base_url().'databarang');
    }

    public function getDelete($id=null)
    {
        if ($this->databarangModel->where('id', $id)->delete())
        {
            session()->setTempdata('SUCCESS', 'Data berhasil dihapus', 2);
            return redirect()->to(base_url().'databarang');
        }
    }
}
