<?php

namespace App\Controllers;

use App\Models\ModelKategori;

class Datakategori extends BaseController
{
    public $kategoriModel;

    public function __construct()
    {
        helper('form');
        $this->kategoriModel = new Modelkategori();
    }

    public function getIndex()
    {
        $data = [
            'kategori' => $this->kategoriModel->findAll(),
            'page_title' => 'Data Kategori',
            'page_code' => 'MASTER.KATEGORI'
        ];
        return view('master/kategori_index', $data);
    }

    public function getAdd()
    {
        $data = [
            'page_title' => 'Tambah Kategori',
            'page_code' => 'MASTER.KATEGORI'
        ];
        return view('master/kategori_add', $data);
    }

    public function postAdd()
    {
        // var_dump($this->request->getVar('namabarang', FILTER_SANITIZE_STRING));
        $data = [
            'nama_kategori' => $this->request->getPost('namakategori', FILTER_SANITIZE_STRING)
        ];
        $this->kategoriModel->insert($data);
        return redirect()->to(base_url().'datakategori');
    }

    public function getEdit($id=null)
    {
        $data = [
            'kategori' => $this->kategoriModel->find($id),
            'page_title' => 'Edit Kategori',
            'page_code' => 'MASTER.KATEGORI'
        ];
        return view('master/kategori_edit', $data);
    }

    public function postEdit($id=null)
    {
        $data = [
            'nama_kategori' => $this->request->getPost('namakategori', FILTER_SANITIZE_STRING)
        ];
        if ($this->kategoriModel->update($id, $data) === true)
        {
            session()->setTempdata('SUCCESS', 'Data berhasil diubah', 2);
        }
        return redirect()->to(base_url().'datakategori');
    }

    public function getDelete($id=null)
    {
        if ($this->kategoriModel->where('id', $id)->delete())
        {
            session()->setTempdata('SUCCESS', 'Data berhasil dihapus', 2);
            return redirect()->to(base_url().'datakategori');
        }
    }
}
