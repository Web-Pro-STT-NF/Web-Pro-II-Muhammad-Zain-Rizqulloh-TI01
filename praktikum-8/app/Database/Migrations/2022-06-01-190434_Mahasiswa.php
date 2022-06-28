<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                    => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'nim'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'nama'                  => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'jenis_kelamin'         => [
                'type'              => 'ENUM',
                'constraint'        => "'Laki-Laki', 'Perempuan'"
            ],
            'tgl_lahir'             => [
                'type'              => 'DATETIME',
            ],
            'tempat_lahir'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'program_study'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'ipk'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'created_at'            => [
                'type'              => 'TIMESTAMP',
                'null'              => true,
                'on update'         => 'NOW()'
            ],
            'updated_at'            => [
                'type'              => 'TIMESTAMP',
                'null'              => true,
                'on update'         => 'NOW()'
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
