<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Admin extends BaseController{
    public function __construct() {
        $this->komikModel = new KomikModel();
    }

    public function index(){
        $session = session();
        if($session->get('logged_in')==true){
            return redirect()->to('/admin/dashboard');
        }
        
        return view('admin/index');
    }

    public function create(){
        session();
        $data = [
            'title' => 'Create Comic Data',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/create',$data);
    }

    public function save(){
        if(!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[comic.judul]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
                ],
            'cover' => [
                'rules' => 'uploaded[cover]|max_size[cover,1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Please select an image before',
                    'max_size' => 'File size is greater than 1 MB',
                    'is_image' => 'Not an image',
                    'mime_in' => 'Not and image',
                ]
                ],
            'penulis' => [
                'rules'=> 'required',
                'errors'=> ['required' => '{field} must be type']
            ],
            'penerbit' => [
                'rules'=> 'required',
                'errors'=> ['required' => '{field} must be type']
            ],
            'synopsis' => [
                'rules'=> 'required',
                'errors'=> ['required' => '{field} must be type']
            ]
        ])){
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin/create')->withInput()->with('validation',$validation);
            return redirect()->to('/admin/create')->withInput();
        }

        $file_gambar = $this->request->getFile('cover');
        
        $nama_gambar = $file_gambar->getRandomName();
        
        $file_gambar->move('images',$nama_gambar);

        $slug = url_title($this->request->getPost('judul'),'-',true);
        $this->komikModel->save([
            'judul' => $this->request->getPost('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getPost('penulis'),
            'synopsis' => $this->request->getPost('synopsis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'cover' => $nama_gambar,
        ]);

        session()->setFlashdata('pesan','Data berhasil ditambahkan');

        return redirect()->to('/admin/dashboard');
        // dd($this->request->getPost());
    }

    public function delete($id){

        $komik = $this->komikModel->find($id);

        if($komik['cover'] != 'default.jpg'){
            unlink('images/'.$komik['cover']);
        }

        $this->komikModel->delete($id);
        session()->setFlashdata('pesan','Data berhasil dihapus');
        return redirect()->to('/admin/dashboard');
    }

    public function dashboard(){

        $komikList = $this->komikModel->getComic();
        
        $data = [
            'title' => 'Dashboard',
            'komik' => $komikList
        ];
        
        return view('admin/dashboard',$data);
    }

    public function edit($slug){
        session();
        $komik = $this->komikModel->getComic($slug);
        $data = [
            'title' => 'Update Comic',
            'validation' => \Config\Services::validation(),
            'komik' => $komik
        ];
        return view('admin/edit',$data);
    }

    public function update($id){
        //Check Judul
        $komikLama = $this->komikModel->getComic($this->request->getVar('slug'));

        if($komikLama['judul'] == $this->request->getVar('judul')){
            $rule_judul = 'required';
        }else{
            $rule_judul = 'required|is_unique[comic.judul]';
        }

        if(!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [ 
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
                ],
            'cover' => [
                'rules' => 'max_size[cover,1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'File size is greater than 1 MB',
                    'is_image' => 'Not an image',
                    'mime_in' => 'Not and image',
                ]
                ],
                'penulis' => [
                    'rules'=> 'required',
                    'errors'=> ['required' => '{field} must be type']
                ],
                'penerbit' => [
                    'rules'=> 'required',
                    'errors'=> ['required' => '{field} must be type']
                ],
                'synopsis' => [
                    'rules'=> 'required',
                    'errors'=> ['required' => '{field} must be type']
                ]
        ])){
            return redirect()->to('/admin/edit/'.$this->request->getVar('slug'))->withInput();
        }

        $fileSampul = $this->request->getFile('cover');

        if($fileSampul->getError() == 4){
            $namaSampul = $this->request->getVar('sampulLama');
        }else{
            $namaSampul = $fileSampul->getRandomName();
            $fileSampul->move('images',$namaSampul);
            unlink('images/'.$this->request->getVar('sampulLama'));
        }
        
        $slug = url_title($this->request->getPost('judul'),'-',true);
        $this->komikModel->save([
            'id' => $id,
            'judul' => $this->request->getPost('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getPost('penulis'),
            'synopsis' => $this->request->getPost('synopsis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'cover' => $namaSampul
        ]);

        session()->setFlashdata('pesan','Data berhasil diubah');

        return redirect()->to('/admin/dashboard');
    }
}
