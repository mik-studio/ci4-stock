<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDatabarang extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['nama_barang', 'jumlah_barang', 'kategori_barang'];
}