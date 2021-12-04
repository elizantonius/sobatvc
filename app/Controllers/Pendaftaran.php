<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class Pendaftaran extends BaseController
{
    public function index()
    {
        // $model = new Daftar();
        // $sales = $model->postSales();
        $data['judul'] = 'Pendaftaran Sobat VC';
        return view('Pendaftaran_vw', $data);
    }


    public function adddata()
    {
        $model = new Users();
        $model->insert([

            'namasales' => $this->request->getPost('namasales'),
            'nohp' => $this->request->getPost('nohp'),
            'distributor' => $this->request->getPost('distributor'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'seles'
        ]);

        return redirect()->to(base_url('Auth'));
    }
}
