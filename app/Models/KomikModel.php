<?php

namespace App\Models;
use CodeIgniter\Model;

class KomikModel extends Model{
    protected $table = 'comic';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'judul', 'slug','penulis', 'synopsis', 'penerbit','cover'
    ];
    protected $createdField = 'create_at';

    public function search($keyword)
    {
        return $this->table('comic')->like('judul',$keyword);
    }

    public function getComic($slug = false)
    {
        if($slug == false)
        {
            return $this->findAll();
        }
        return $this->where(['slug'=>$slug])->first();
    }

}