<?php
namespace App\Controllers;

use App\Models\DevisModel;
use App\Models\DevisItemModel;
use App\Models\ItemModel;

class DevisController extends BaseController
{
    public function index()
    {
        $devisModel = new DevisModel();
        $data['devis'] = $devisModel->findAll();

        return view('devis/list', $data);
    }

    // Ajouter d'autres méthodes pour créer, afficher, et gérer les devis
    public function view($id = null)
    {
        $devisModel = new DevisModel();
        $itemModel = new ItemModel(); // Assurez-vous d'avoir un modèle pour les items
    
        $data['devis'] = $devisModel->where('id', $id)->first();
    
        if (empty($data['devis'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the devis with id: ' . $id);
        }
    
        // Récupérer les items liés au devis avec leurs détails complets
        $data['items'] = $devisModel->getDevisItemsWithDetails($id); // Cette méthode doit être définie dans DevisModel
    
        return view('devis/view', $data);
    }
    

    public function create()
    {
        return view('devis/create');
    }

    public function store()
    {
        $devisModel = new DevisModel();

        $data = [
            'client_name' => $this->request->getVar('client_name'),
            // autres champs...
        ];

        $devisModel->save($data);

        return redirect()->to('/devis');
    }

    public function edit($id = null)
    {
        $devisModel = new DevisModel();

        $data['devis'] = $devisModel->where('id', $id)->first();

        return view('devis/edit', $data);
    }

    public function update($id = null)
    {
        $devisModel = new DevisModel();

        $data = [
            'client_name' => $this->request->getVar('client_name'),
            // autres champs...
        ];

        $devisModel->update($id, $data);

        return redirect()->to('/devis');
    }

    public function delete($id = null)
    {
        $devisModel = new DevisModel();
        $devisModel->delete($id);

        return redirect()->to('/devis');
    }


    public function compose()
    {
        $devisModel = new DevisModel();
        $itemModel = new \App\Models\ItemModel();

        // Récupérer les informations uniques des clients depuis la table devis
        $data['clients'] = $devisModel->select('client_name')->distinct()->findAll();
        $data['items'] = $itemModel->findAll();

        return view('devis/compose', $data);
    }


    public function save()
    {
        $devisModel = new DevisModel();
        $devisItemModel = new DevisItemModel();

        // Récupération des données du formulaire
        $client_name = $this->request->getVar('client_name');
        $items = $this->request->getVar('items');
        $quantities = $this->request->getVar('quantities');

        // Création du devis
        $devisData = [
            'client_name' => $client_name,
            'date_created' => date("Y-m-d H:i:s") // Date et heure actuelles
        ];
        $devisModel->save($devisData);
        $devis_id = $devisModel->getInsertID(); // Récupère l'ID du devis nouvellement créé

        // Enregistrement des items du devis
        foreach ($items as $item_id) {
            $quantity = isset($quantities[$item_id]) ? $quantities[$item_id] : 1;
            $devisItemData = [
                'devis_id' => $devis_id,
                'item_id' => $item_id,
                'quantity' => $quantity
                // 'custom_price' => ... si vous avez un prix personnalisé
            ];
            $devisItemModel->save($devisItemData);
        }

        // Redirection ou affichage d'un message de succès
        return redirect()->to('/devis'); // Redirige vers la liste des devis
    }


}
