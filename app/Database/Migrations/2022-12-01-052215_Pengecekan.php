<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\Forge;

class Pengecekan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_pengecekan' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'id_teknisi' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'no_struk' => [
                'type'           => 'BIGINT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_customer' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'deskripsi_pengecekan' => [
                'type'       => 'TEXT',
            ],
            'tanggal' => [
                'type'       => 'DATE',
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
        // $this->db->disableForeignKeyChecks();
        $this->forge->addPrimaryKey('id');
        // $this->forge->addForeignKey('id_teknisi', 'teknisi', 'id', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('id_customer', 'customer', 'id');
        $this->forge->createTable('pengecekan');
    }

    public function down()
    {
        $this->forge->dropTable('pengecekan');
    }
}
