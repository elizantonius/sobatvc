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
        if (!is_null($data)) {
            $pass = $data['password'];
            if (password_verify($password, $pass)) {
                $data['isLogin'] = true;
                $sesi->set($data);
                if ($data['role'] == 'admin') {
                    return redirect()->to(base_url('Admin/Home'));
                } else {
                    return redirect()->to(base_url('Sales/Home'));
                }
            } else {
                echo "<script>Maaf , Username dan Password Salah</script>";
                return redirect()->to(base_url('Auth'));
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('Auth'));
    }
}
