<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{



    public function index()
    {

        echo view('Admin/component/Header');
        echo view('Admin/component/Sidebar');
        echo view('Admin/Home_vw');
        echo view('Admin/component/Footer');
    }
}
