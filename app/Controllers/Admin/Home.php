<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Daftar;

class Home extends BaseController
{



    public function index()
    {

        $session = session();
        $data['namasales'] = $session->get('namasales');
        $session->set($data);

        echo view('Admin/component/Header');
        echo view('Admin/component/Sidebar', $data);
        echo view('Admin/Home_vw');
        echo view('Admin/component/Footer');
    }
}
