<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DevisItemSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['id' => 1, 'devis_id' => 1, 'item_id' => 1, 'quantity' => 1, 'custom_price' => NULL],
            ['id' => 2, 'devis_id' => 1, 'item_id' => 2, 'quantity' => 1, 'custom_price' => NULL],
            ['id' => 3, 'devis_id' => 3, 'item_id' => 1, 'quantity' => 1, 'custom_price' => NULL],
            ['id' => 4, 'devis_id' => 3, 'item_id' => 2, 'quantity' => 1, 'custom_price' => NULL],
            ['id' => 5, 'devis_id' => 3, 'item_id' => 3, 'quantity' => 1, 'custom_price' => NULL],
        ];

        // Utilisation de insertBatch pour insérer plusieurs enregistrements en une seule requête
        $this->db->table('devis_items')->insertBatch($data);
    }
}
