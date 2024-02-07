<?php

namespace App\Controllers;


/*
    TODO:
        * VALIDATE FORM


*/


class CreateAccount extends BaseController {

    public function index(): string {
        return view('registerview');
    }

    public function create() {
        $email      = $this->request->getPost('email');
        $password   = $this->request->getPost('pswrd');
        $name       = $this->request->getPost('name');
        
        $db         = \Config\Database::connect();
        $sql        = 'INSERT INTO tbluser (name, email, password) VALUES (' . $db->escape($name) . ', ' . $db->escape($email) . ', ' . $db->escape($password).')';
        $db->query($sql);
        return redirect()->to('public/');
    }

    
}
