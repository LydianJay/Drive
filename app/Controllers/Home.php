<?php

namespace App\Controllers;

class Home extends BaseController {
    var $data;
    public function index(): string {
        return view('mainview');
    }

    public function login() {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('pswd');

        $db         = \Config\Database::connect();
        $sql        = 'SELECT password FROM tbluser WHERE email = '."'".$email."'".';';
        $res = $db->query($sql)->getRowArray();

        if(empty($res)){
            $data['error'] = 'No account registered with that email';
            return view('mainview', $data);
        }

        if($res['password'] === $password){
            return redirect()->to('public/dashboard');
        }
        else {
            $data['error'] = 'Invalid password!';
            return view('mainview', $data);
        }
                
        //return view('success');*
    }

}
