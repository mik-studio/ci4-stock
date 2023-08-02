<?php

namespace App\Models;

use CodeIgniter\Model;
use \Hermawan\DataTables\DataTable;

class ModelKategori extends Model
{
    protected $table      = 'kategori';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['nama_kategori'];

    public function JsonListKategori() {
        $db = db_connect();
        $builder = $db->table('kategori')->select('id, nama_kategori');

        return DataTable::of($builder)->add('action', function($row) {
            return '<a href="'.base_url().'datakategori/edit/'.$row->id.'" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> EDIT</a>';
        }, 'last')->hide('id')->postQuery(function($builder){
            $builder->orderBy('id', 'asc');
        })->toJson(true);
    }
}