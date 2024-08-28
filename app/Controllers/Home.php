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
}
