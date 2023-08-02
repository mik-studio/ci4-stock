<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class BarangMasuk extends Migration
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
            'id_barang' => [
                'type'       => 'INT',
                'constraint' => 16,
            ],
            'tanggal_masuk' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'jumlah_masuk' => [
                'type' => 'INT',
                'constraint' => 127
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('masuk');
    }

    public function down()
    {
        $this->forge->dropTable('masuk');
    }
}
