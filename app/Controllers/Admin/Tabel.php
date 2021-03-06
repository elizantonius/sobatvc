<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Daftar;

class Tabel extends BaseController
{
    public function index()
    {
        $model = new Daftar();
        $data['list'] = $model->getData();
        echo view('Admin/component/Header');
        echo view('Admin/component/Sidebar');
        echo view('Admin/Tabel_vw', $data);
        echo view('Admin/component/Footer');
    }

    public function edit($id)
    {
        $model = new Daftar();
        $data['list'] = $model->edit($id);
        return view('Admin/Tabel_vw', $data);
    }

    public function updata($id)
    {

        $model = new Daftar();
        $status = [
            'status' => 'closing'
        ];
        $model->update($id, $status);
        return redirect()->to(base_url('admin/tabel'));
        $model->update($id, $status);
    }

    public function hapus($id)
    {

        $model = new Daftar();
        $model->where('idreperal', $id)->delete();
        return redirect()->to(base_url('admin/tabel'));
    }

    public function download($id)
    {
        $model = new Daftar();
        $data = $model->where('idreperal', $id)->get()->getRowArray();
        return $this->response->download('admin/fotoktp/' . $data['foto'], null);
    }
}
