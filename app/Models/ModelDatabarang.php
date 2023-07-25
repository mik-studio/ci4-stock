<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDatabarang extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['nama_barang', 'jumlah_barang', 'id_kategori'];
    protected $beforeInsert = ['beforeInsertCallback'];

    public function getDatabarang()
    {
        $db = db_connect();

        $builder = $db->table('barang');
        $builder->select('barang.id, barang.nama_barang, barang.jumlah_barang, barang.id_kategori, kategori.nama_kategori');
        $builder->join('kategori', 'kategori.id = barang.id_kategori');
        return $builder->get();
    }

    public function getAllKategori()
    {
        $query = $this->db->query('SELECT * FROM kategori');
        return $query->getResult();
    }

    protected function beforeInsertCallback(array $data)
    {
        $data['data']['nama_barang'] = strtoupper($data['data']['nama_barang']);
        return $data;
    }
}