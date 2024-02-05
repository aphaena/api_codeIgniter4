<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDevis extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'client_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'date_created' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('devis');
    }

    public function down()
    {
        $this->forge->dropTable('devis');
    }
}
