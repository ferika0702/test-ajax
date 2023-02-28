<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dosen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_dosen' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_dosen' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nip' => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
            ],
            'no_telepon'=>[
                'type'      => 'VARCHAR',
                'constraint'=> '100',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',

        ]);
        $this->forge->addKey('id_dosen', true);
        $this->forge->createTable('dosen');
    }

    public function down()
    {
        $this->forge->dropTable('dosen');
    }
}
