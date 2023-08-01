<?php

namespace App\Controllers;

use App\Models\ImageModel;
use CodeIgniter\Controller;

class Image extends Controller
{
    public function index()
    {
        $model = new ImageModel();
        $data['images'] = $model->findAll();
     
        return view('adminPage/image', $data);
    }

    public function create()
    {
        return view('adminPage/add_image');
    }

    public function store()
    {
        // helper(['form']);
    
        // $model = new ImageModel();
    
        // $request = service('request');
        // $image = $request->getFile('image');
        // if ($image->isValid() && !$image->hasMoved()) {
        //     $imagePath = $image->store('uploads');
        //     $data['image'] = $imagePath;
        // }
    
        // $data['title'] = $request->getVar('title');
        // $data['admin_id'] = $request->getVar('admin_id');
    
        // $model->insert($data);
    
        // return redirect()->to('image');

        // helper(['form']);

        $model = new ImageModel();
    
        $request = service('request');
        $image = $request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move('uploads', $newName);
            $data['image'] = $newName;
        }
    
        $data['title'] = $request->getVar('title');
        $data['admin_id'] = $request->getVar('admin_id');
    
        $model->insert($data);
    
        return redirect()->to('image');
    }

    public function edit($id)
    {
        $model = new ImageModel();
        $data['image'] = $model->find($id);

        return view('adminPage/edit-image', $data);
    }

    public function update($id)
    {
        helper(['form']);
    
        $model = new ImageModel();
    
        $request = service('request');
        $image = $request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imagePath = $image->store('uploads');
            $data['image'] = $imagePath;
        }
    
        $data['title'] = $request->getVar('title');
        $data['admin_id'] = $request->getVar('admin_id');
    
        $model->update($id, $data);
    
        return redirect()->to('image');
    }

    public function delete($id)
    {
        $model = new ImageModel();
        $model->delete($id);

        return redirect()->to('image');
    }
}
