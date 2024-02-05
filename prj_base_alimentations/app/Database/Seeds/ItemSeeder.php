<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['id' => 13, 'description' => 'Une journée homme de développement', 'price' => 500.00],
            ['id' => 12, 'description' => 'Consultation technique (par heure)', 'price' => 80.00],
            ['id' => 11, 'description' => 'Conception graphique (logo, bannières)', 'price' => 100.00],
            ['id' => 10, 'description' => 'Intégration de système de paiement', 'price' => 250.00],
            ['id' => 9, 'description' => 'Formation utilisateur', 'price' => 400.00],
            ['id' => 8, 'description' => 'Audit de sécurité', 'price' => 500.00],
            ['id' => 7, 'description' => 'Création de contenu et blog', 'price' => 50.00],
            ['id' => 6, 'description' => 'Maintenance et mises à jour (par mois)', 'price' => 150.00],
            ['id' => 5, 'description' => 'Hébergement web (par an)', 'price' => 100.00],
            ['id' => 4, 'description' => 'Support technique (par mois)', 'price' => 200.00],
            ['id' => 3, 'description' => 'Optimisation SEO', 'price' => 300.00],
            ['id' => 2, 'description' => 'Développement backend API', 'price' => 1500.00],
            ['id' => 1, 'description' => 'Conception de site web', 'price' => 1500.00],
        ];

        // Utilisation de insertBatch pour insérer plusieurs enregistrements en une seule requête
        $this->db->table('items')->insertBatch($data);
    }
}
