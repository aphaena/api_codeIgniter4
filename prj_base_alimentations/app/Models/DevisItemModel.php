<?php namespace App\Models;

use CodeIgniter\Model;

class DevisItemModel extends Model
{
    protected $table = 'devis_items'; // Nom de la table dans la base de données
    protected $primaryKey = 'id'; // Clé primaire de la table

    protected $allowedFields = ['devis_id', 'item_id', 'quantity', 'custom_price']; // Champs autorisés pour l'insertion et la mise à jour

    // Si vous avez des dates dans votre table, vous pouvez les gérer automatiquement :
    protected $useTimestamps = false;
    protected $createdField  = ''; // Champ pour la date de création
    protected $updatedField  = ''; // Champ pour la date de mise à jour

    // Autres propriétés et méthodes selon vos besoins...
}
