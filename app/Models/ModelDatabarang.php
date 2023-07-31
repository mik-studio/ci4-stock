<?php

namespace App\Models;

use CodeIgniter\Model;
use \Hermawan\DataTables\DataTable;

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

    public function JsonListBarang()
    {
        $db = db_connect();
        $builder = $db->table('barang')
                    ->select('barang.id, barang.nama_barang, kategori.nama_kategori, barang.jumlah_barang')
                    ->join('kategori', 'kategori.id = barang.id_kategori');

        return DataTable::of($builder)->add('action', function($row) {
            return '<a href="'.base_url().'databarang/edit/'.$row->id.'" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> EDIT</a>';
        }, 'last')->hide('id')->postQuery(function($builder){
            $builder->orderBy('barang.id', 'asc');
        })->toJson(true);
    }
}