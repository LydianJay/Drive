<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index(): string {
        return view('mainview');
    }

    public function login() {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('pswd');

        echo "email".$email."<br>"."password:".$password;
        //return view('success');*
    }

}
