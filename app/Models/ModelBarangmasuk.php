<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBarangmasuk extends Model
{
    protected $table      = 'masuk';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['id_barang', 'jumlah_masuk'];
    protected $afterInsert = ['afterInsertCallback'];

    public function getBarangmasuk() {
        $db = db_connect();

        $builder = $db->table('masuk');
        $builder->select('*');
        $builder->join('barang', 'barang.id = masuk.id_barang');
        $builder->orderBy('masuk.tanggal_masuk', 'DESC');
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

        $jumlahmasuk = $data['data']['jumlah_masuk'];
        $idbarang = $data['data']['id_barang'];

        $query = $db->query("SELECT id,jumlah_barang FROM barang WHERE id='$idbarang'");
        $jumlahlama = $query->getRow()->jumlah_barang;

        $jumlahbaru = $jumlahlama + $jumlahmasuk;

        $builder->set('jumlah_barang', $jumlahbaru);
        $builder->where('id', $idbarang);
        $builder->update();

        return $data;
    }
}