<?php namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';
    protected $allowedFields = ['description', 'price'];

    // Ajoutez des méthodes supplémentaires si nécessaire
}
