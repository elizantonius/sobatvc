<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class Auth extends BaseController
{


    public function index()
    {
        $data['judul'] = 'Login Sobat VC';
        return view('Auth_vw', $data);
    }


    public function login()
    {

        $modelusr = new Users();
        $sesi = session();

        $user = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $modelusr->where('username', $user)->first();
        if ($data) {
            $pass = $data['password'];
            $paswd = password_verify($password, $pass);
            if ($paswd) {
                $dataku = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'isLogin' => true
                ];
                $sesi->set($dataku);
                return redirect()->to(base_url('Admin'));
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('Auth');
    }
}
