<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProduitModel;
use App\Models\ImagesModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new UserModel();
        $data['user'] = $model->findAll();
        return view('accueil',$data);
    }
    public function admin(): string
    {
        return view('form');
    }
    public function find(): string
    {
        $id = $_GET['id'];
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('update',$data);
    }
    public function create()
    {
        $model = new UserModel();
        $data = [
            'pseudo'=>$this->request->getPost('pseudo'),
            'email'=>$this->request->getPost('email')
        ];
        $model->insert($data);
        return redirect()->to('../');
    }
    public function update()
    {
        $id = $_GET['id'];
        $model = new UserModel();
        $data = [
            'pseudo'=>$this->request->getPost('pseudo'),
            'email'=>$this->request->getPost('email')
        ];
        $model->update($id, $data);
        return redirect()->to('../');
    }
    public function delete()
    {
        $id = $_GET['id'];
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('../');
    }
    public function accueil(): string
    {
        $model = new ProduitModel();
        $data['produits'] = $model->findAll();
        return view('accueil',$data);
    }
    public function search(): string
    {
        $model = new ProduitModel();
        $data['produits'] = $model->findAll();
        return view('search',$data);
    }
    public function detailSearch(): string
    {
        $model = new ImagesModel();
        $data['images'] = $model->findAll();
        return view('detailSearch',$data);
    }
    public function sell(): string
    {
        return view('sell');
    }
    public function detailSell(): string
    {
        return view('detailSell');
    }
    public function membres(): string
    {
        $model = new UserModel();
        $data['user'] = $model->findAll();
        return view('gestionDesMembres',$data);
    }
    public function produits(): string
    {
        $model = new UserModel();
        $data['produit'] = $model->findAll();
        return view('gestionDesProduits',$data);
    }
    public function login(): string
    {
        return view('login');
    }
}
