<?php namespace App\Controllers;

use App\Models\ItemModel;

class ItemController extends BaseController
{
    public function index()
    {
        $model = new ItemModel();
        $data['items'] = $model->findAll();

        return view('items/list', $data);
    }

    public function create()
    {
        return view('items/create');
    }

    public function store()
    {
        $model = new ItemModel();
        $model->save([
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price')
        ]);

        return redirect()->to('/items');
    }

    public function edit($id = null)
    {
        $model = new ItemModel();
        $data['item'] = $model->find($id);

        return view('items/edit', $data);
    }

    public function update($id = null)
    {
        $model = new ItemModel();
        $model->update($id, [
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price')
        ]);

        return redirect()->to('/items');
    }

    public function delete($id = null)
    {
        $model = new ItemModel();
        $model->delete($id);

        return redirect()->to('/items');
    }
}
