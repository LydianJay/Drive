<?php

namespace App\Controllers;


/*
    TODO:
        * VALIDATE FORM


*/


class DashBoard extends BaseController {

    public function index(): string {
        return view('dashboardview');
    }
    
}
