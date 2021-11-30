<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Daftar;

class Pendaftaran extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Pendaftaran Sobat VC';
        return view('Pendaftaran_vw', $data);
    }


    public function adddata()
    {
        $model = new Daftar();
        $model->insert([

            'namaowner' => $this->request->getPost('namown'),
            'noktp' => $this->request->getPost('ktp'),
            'alamatusaha' => $this->request->getPost('alamat'),
            'nohp' => $this->request->getPost('nohp')
        ]);

        return redirect()->to('Pendaftaran');
    }
}
