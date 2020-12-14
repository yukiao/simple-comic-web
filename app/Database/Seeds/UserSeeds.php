<?php 

namespace App\Database\Seeds;

class UserSeeds extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'user_name' => 'yukiao',
            'user_email' => 'yukiao.network@gmail.com',
            'user_password' => password_hash('yukiao19',PASSWORD_DEFAULT)
        ];
        $this->db->table('users')->insert($data);
    }
}