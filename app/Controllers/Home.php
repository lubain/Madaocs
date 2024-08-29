<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProduitModel;
use App\Models\ImagesModel;
use App\Models\UploadModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new UserModel();
        $data['user'] = $model->findAll();
        return view('home',$data);
    }
    public function search(): string
    {
        $model = new ProduitModel();
        $data['produits'] = $model->findAll();
        return view('search',$data);
    }
    public function detailSearch($id): string
    {
        $model = new ImagesModel();
        $data['images'] = $model->findAllWhere($id);
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

    // -----------------------------------

    public function admin(): string
    {
        return view('admin');
    }

    // -------- Users controller -------------

    public function userList(): string
    {
        $model = new UserModel();
        $data['user'] = $model->findAll();
        return view('userList',$data);
    }
    public function formUser(): string
    {
        return view("createUser");
    }
    public function findUser($id): string
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('userUpdate',$data);
    }
    public function createUser()
    {
        $model = new UserModel();
        $data = [
            'pseudo'=>$this->request->getPost('pseudo'),
            'email'=>$this->request->getPost('email')
        ];
        $model->insert($data);
        $url = base_url("public/userList");
        return redirect()->to($url);
    }
    public function userUpdate($id)
    {
        $model = new UserModel();
        $data = [
            'pseudo'=>$this->request->getPost('pseudo'),
            'email'=>$this->request->getPost('email')
        ];
        $model->update($id, $data);
        $url = base_url("public/userList");
        return redirect()->to($url);
    }
    public function deleteUser($id)
    {
        $model = new UserModel();
        $model->delete($id);
        $url = base_url("public/userList");
        return redirect()->to($url);
    }

    // -------------------------------

    // ---------- produit controller ----------

    public function produitList(): string
    {
        $model = new ProduitModel();
        $data['produit'] = $model->findAll();
        return view('produitList',$data);
    }
    public function formProduit(): string
    {
        return view("createProduit");
    }
    public function findProduit($id): string
    {
        $model = new ProduitModel();
        $data['produit'] = $model->find($id);
        return view('produitUpdate',$data);
    }
    public function createProduit()
    {
        $model = new ProduitModel();
        $data = [
            'marque'=>$this->request->getPost('marque'),
            'model'=>$this->request->getPost('model'),
            'photo'=>$_FILES["image"]["name"],
            'nom'=>$this->request->getPost('nom'),
            'annee'=>$this->request->getPost('annee'),
            'km'=>$this->request->getPost('km'),
            'carburant'=>$this->request->getPost('carburant'),
            'transmission'=>$this->request->getPost('transmission'),
            'prix'=>$this->request->getPost('prix'),
            'proprietaire'=>$this->request->getPost('proprietaire'),
            'clee'=>$this->request->getPost('clee'),
            'place'=>$this->request->getPost('place'),
            'couleur'=>$this->request->getPost('couleur'),
            'carrousel'=>$this->request->getPost('carrousel')
        ];
        $model->insert($data);
        $user_id = $model->db->insertID();
        $this->uploadFile($user_id);
        $url = base_url("public/produitList");
        return redirect()->to($url);
    }
    public function produitUpdate($id)
    {
        $model = new ProduitModel();
        $data = [
            'marque'=>$this->request->getPost('marque'),
            'model'=>$this->request->getPost('model'),
            'photo'=>$this->request->getPost('photo'),
            'nom'=>$this->request->getPost('nom'),
            'annee'=>$this->request->getPost('annee'),
            'km'=>$this->request->getPost('km'),
            'carburant'=>$this->request->getPost('carburant'),
            'transmission'=>$this->request->getPost('transmission'),
            'prix'=>$this->request->getPost('prix'),
            'proprietaire'=>$this->request->getPost('proprietaire'),
            'clee'=>$this->request->getPost('clee'),
            'place'=>$this->request->getPost('place'),
            'couleur'=>$this->request->getPost('couleur'),
            'carrousel'=>$this->request->getPost('carrousel')
        ];
        $model->update($id, $data);
        $url = base_url("public/produitList");
        return redirect()->to($url);
    }
    public function deleteProduit($id)
    {
        $model = new ProduitModel();
        $model->delete($id);
        $url = base_url("public/produitList");
        return redirect()->to($url);
    }

    // ---------------------

    public function upload(): string
    {
        return view('upload');
    }
    public function uploadFile($user_id) {
        $model = new UploadModel();
        $model->uploadFile($user_id);
    }
}
