<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSpjTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'auto_increment' => true],
            'nama_kegiatan'  => ['type' => 'TEXT'],
            'tanggal'        => ['type' => 'DATE'],
            'jumlah'         => ['type' => 'DECIMAL', 'constraint' => '15,2'],
            'status_validasi'=> ['type' => 'VARCHAR', 'constraint' => 50, 'default' => 'Belum Valid'],
            'created_at'     => ['type' => 'DATETIME', 'null' => true],
            'updated_at'     => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('spj');
    }

    public function down()
    {
        $this->forge->dropTable('spj');
    }
}
