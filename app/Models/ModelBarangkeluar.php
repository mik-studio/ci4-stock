<?php

namespace App\Models;

use CodeIgniter\Model;
use \Hermawan\DataTables\DataTable;

class ModelBarangkeluar extends Model
{
    protected $table      = 'keluar';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['id_barang', 'jumlah_keluar'];
    protected $afterInsert = ['afterInsertCallback'];

    public function getBarangkeluar() {
        $db = db_connect();

        $builder = $db->table('keluar');
        $builder->select('*');
        $builder->join('barang', 'barang.id = keluar.id_barang');
        $builder->orderBy('keluar.tanggal_keluar', 'DESC');
        return $builder->get();
    }

    public function getBarang() {
        $query = $this->db->query('SELECT * FROM barang');
        return $query->getResult();
    }

    protected function afterInsertCallback(array $data)
    {
        $db = db_connect();
        $builder = $db->table('barang');

        $jumlahkeluar = $data['data']['jumlah_keluar'];
        $idbarang = $data['data']['id_barang'];

        $query = $db->query("SELECT id,jumlah_barang FROM barang WHERE id='$idbarang'");
        $jumlahlama = $query->getRow()->jumlah_barang;

        $jumlahbaru = $jumlahlama - $jumlahkeluar;

        $builder->set('jumlah_barang', $jumlahbaru);
        $builder->where('id', $idbarang);
        $builder->update();

        return $data;
    }

    public function JsonBarangKeluar() {
        $db = db_connect();

        $builder = $db->table('keluar')
                ->select('keluar.id, barang.nama_barang, keluar.tanggal_keluar, keluar.jumlah_keluar')
                ->join('barang', 'barang.id = keluar.id_barang');

        return DataTable::of($builder)->hide('id')->postQuery(function($builder){
            $builder->orderBy('keluar.tanggal_keluar', 'desc');
        })->toJson(true);
    }
}