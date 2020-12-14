<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Comic extends BaseController{
    protected $komikModel;

    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index(){
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $this->komikModel->getComic()
        ];

        return view('comic/index', $data);
    }

    public function detail($slug){
        $komik =  $this->komikModel->getComic($slug);
        $data = 
        [
            'title' => $komik['judul'],
            'komik' => $komik
        ];

        return view('/comic/detail',$data);
    }
}
