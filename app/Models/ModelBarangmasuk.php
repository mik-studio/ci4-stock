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

    public function getBarangmasuk() {
        $db = db_connect();

        $builder = $db->table('masuk');
        $builder->select('*');
        $builder->join('barang', 'barang.id = masuk.id_barang');
        return $builder->get();
    }
}