<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Tabel extends BaseController
{
    public function index()
    {
        echo view('Admin/component/Header');
        echo view('Admin/component/Sidebar');
        echo view('Admin/Tabel_vw');
        echo view('Admin/component/Footer');
    }
}
