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
        $marque = $this->request->getPost('search');
        if ($marque) {
            $data['produits'] = $model->like("marque",$marque)->findAll();
        }
        return view('search',$data);
    }
    public function detailSearch($id): string
    {
        $model = new ImagesModel();
        $data['images'] = $model->where('user_id',$id)->findAll();
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

    public function admin()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        return view('admin');
    }

    // -------- Users controller -------------

    public function userList()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new UserModel();
        $data['user'] = $model->findAll();
        return view('userList',$data);
    }
    public function formUser(): string
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        return view("createUser");
    }
    public function findUser($id): string
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('userUpdate',$data);
    }
    public function createUser()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
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
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new UserModel();
        $model->delete($id);
        $url = base_url("public/userList");
        return redirect()->to($url);
    }

    // -------------------------------

    // ---------- produit controller ----------

    public function produitList()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new ProduitModel();
        $data['produit'] = $model->findAll();
        return view('produitList',$data);
    }
    public function searchProduit(): string
    {
        return $this->search();
    }
    public function formProduit()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        return view("createProduit");
    }
    public function findProduit($id)
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new ProduitModel();
        $data['produit'] = $model->find($id);
        return view('produitUpdate',$data);
    }
    public function createProduit()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
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
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
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
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
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
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new UploadModel();
        $model->uploadFile($user_id);
    }
}
