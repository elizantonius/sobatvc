<?php

namespace App\Controllers\Sales;

use App\Controllers\BaseController;

class Reperal extends BaseController
{
    public function index()
    {

        // $data['nama'] = 'Tambah Reperal';

        echo view('Sales/component/Header');
        echo view('Sales/component/Sidebar');
        echo view('Sales/reperal_add');
        echo view('Sales/component/Footer');
    }

    public function add()
    {
        if (is_null($this->request->getPost('namapemilik'))) {
            // simpan
            return view('sales/reperal');
        } else {
            return view('sales/reperal_add');
        }
    }

    public function update()
    {
        if (is_null($this->request->getPost('update'))) {
            // update
            return view('sales/reperal');
        } else {
            return view('sales/reperal_edit');
        }
    }

    public function delete($id)
    {
        # delete
        return view('sales/reperal');
    }
}
