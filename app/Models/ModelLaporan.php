<?php

namespace App\Models;

use CodeIgniter\Model;
use \Hermawan\DataTables\DataTable;

class ModelLaporan extends Model
{
    public function JsonListBarang()
    {
        $db = db_connect();
        $builder = $db->table('barang')
                    ->select('barang.id, barang.nama_barang, kategori.nama_kategori, barang.jumlah_barang')
                    ->join('kategori', 'kategori.id = barang.id_kategori');

        return DataTable::of($builder)->hide('id')->postQuery(function($builder){
            $builder->orderBy('barang.id', 'asc');
        })->toJson(true);
    }
}