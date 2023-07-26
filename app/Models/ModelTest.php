<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTest extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['nama_barang', 'jumlah_barang', 'id_kategori'];
    protected $beforeInsert = ['beforeInsertCallback'];
}