<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController{
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data =  $model->where('user_email',$email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password,$pass);
            if($verify_pass){
                $ses_data = [
                    'user_id' => $data['id'],
                    'user_name' => $data['user_name'],
                    'user_email' => $data['user_email'],
                    'logged_in' => true
                ];
                $session->set($ses_data);
                return redirect()->to('/admin/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/admin');
            }
        }else{
            $session->setFlashdata('msg', 'Email not found');
            return redirect()->to('/admin');
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/admin');
    }
}