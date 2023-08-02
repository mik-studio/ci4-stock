<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 16,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jumlah_barang' => [
                'type' => 'INT',
                'constraint' => '127',
            ],
            'id_kategori' => [
                'type' => 'INT',
                'constraint' => 16
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
