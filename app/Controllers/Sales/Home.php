<?php

namespace App\Controllers\Sales;

use App\Controllers\BaseController;
use App\Models\Daftar;

class Home extends BaseController
{

    public function __construct()
    {
        $this->model = new Daftar();
    }



    public function index()
    {
        $session = session();
        $data['namasales'] = $session->get('namasales');
        $session->set($data);

        $data['totalReferal'] = count($this->model->where(['status' => 'proses', 'idusers' => $session->get('idusers')])->get()->getResult());
        $data['totalReword'] = $this->model->hitungReward();

        echo view('Sales/component/Header');
        echo view('Sales/component/Sidebar', $data);
        echo view('Sales/Home_vw');
        echo view('Sales/component/Footer');
    }


    public function add()
    {
        helper(['form', 'url']);
        $mreperal = new Daftar();

        $img = $this->request->getFile('fotoktp');
        if ($img->move(ROOTPATH . 'public/admin/fotoktp')) {
            $mreperal->insert([
                'idusers' => session()->get('idusers'),
                'namapemilik' => $this->request->getPost('namapemilik'),
                'nohp' => $this->request->getPost('nohp'),
                'namausaha' => $this->request->getPost('namausaha'),
                'alamatusaha' => $this->request->getPost('alamatusaha'),
                'metode_akusisi' => $this->request->getPost('metode'),
                'foto' => $img->getName(),
                'Tanggal' => $this->request->getPost('tanggal')
            ]);
            return redirect()->to('sales/home');
        } else {
            session()->setFlashdata('pesan', 'Data tidak tersimpan');
            return redirect()->to('sales/home');
        }
    }
}
