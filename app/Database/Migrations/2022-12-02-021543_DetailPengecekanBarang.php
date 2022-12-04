<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailPengecekanBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_pengecekan' => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
            ],
            'id_barang' => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
            ],
            'deskripsi_kerusakan' => [
                'type'       => 'TEXT'
            ],
            'jumlah' => [
                'type'       => 'INT',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('no_pengecekan');
        $this->forge->addKey('id_barang');
        $this->forge->createTable('detail_pengecekan_barang');
    }

    public function down()
    {
        $this->forge->dropTable('detail_pengecekan_barang');
    }
}
