<?php
namespace App\Models;

use CodeIgniter\Model;

class DevisModel extends Model
{
    protected $table = 'devis';
    protected $primaryKey = 'id';
    protected $allowedFields = ['client_name', 'date_created'];

    public function getDevisItemsWithDetails($devisId)
    {
        // Exemple de jointure (ajustez selon votre structure de base de données)
        return $this->db->table('devis_items')
            ->join('items', 'items.id = devis_items.item_id')
            ->where('devis_items.devis_id', $devisId)
            ->select('items.description, devis_items.quantity, items.price')
            ->get()
            ->getResultArray();
    }
}
