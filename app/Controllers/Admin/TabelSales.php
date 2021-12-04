<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Users;

class TabelSales extends BaseController
{


    public function index()
    {
        $model = new Users();
        $data['list'] = $model->where('role', 'seles')->get()->getResultArray();


        echo view('Admin/component/Header');
        echo view('Admin/component/Sidebar');
        echo view('Admin/tbSales', $data);
        echo view('Admin/component/Footer');
    }
}
