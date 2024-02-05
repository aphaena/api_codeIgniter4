<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DevisSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'client_name' => 'Client01',
                'date_created' => '2024-01-26 11:35:09',
            ],
            [
                'id' => 2,
                'client_name' => 'ClicAndClic',
                'date_created' => '2024-01-26 12:12:13',
            ],
            [
                'id' => 3,
                'client_name' => 'ClicAndClic',
                'date_created' => '2024-01-26 14:29:56',
            ],
        ];

        // Utilisation de insertBatch pour insérer plusieurs enregistrements en une seule requête
        $this->db->table('devis')->insertBatch($data);
    }
}
