<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Daftar;

class Tabel extends BaseController
{
    public function index()
    {
        $model = new Daftar();
        $data['list'] = $model->findAll();
        echo view('Admin/component/Header');
        echo view('Admin/component/Sidebar');
        echo view('Admin/Tabel_vw', $data);
        echo view('Admin/component/Footer');
    }


    // public function get($id)
    // {

    //     $model = new Daftar();
    //     $data['list'] = $model->where('id', $id)->first();
    //     // echo view('Admin/Tabel_vw', $data);
    // }
}
