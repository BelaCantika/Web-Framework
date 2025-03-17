<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Edusumatra extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'path_ke_gambar' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'akreditasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255', 
                'null' => TRUE, 
            ],
            'profil' => [
                'type' => 'TEXT',
                'null' => TRUE, 
            ],
            'teks_prodi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE, 
            ],
            'prodi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE, 
            ]
        ]);

        // Primary key
        $this->forge->addPrimaryKey('id');

        // Create the table
        $this->forge->createTable('ptn');
    }

    public function down()
    {
        $this->forge->dropTable('ptn');
    }
}
