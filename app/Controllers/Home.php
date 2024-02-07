<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index(): string {
        return view('mainview');
    }

    public function login() {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('pswd');

        $db         = \Config\Database::connect();
        $sql        = 'INSERT INTO tbluser (name, email, password) VALUES (' . $db->escape($name) . ', ' . $db->escape($email) . ', ' . $db->escape($password).')';
        $db->query($sql);

        echo "email".$email."<br>"."password:".$password;
        //return view('success');*
    }

}
