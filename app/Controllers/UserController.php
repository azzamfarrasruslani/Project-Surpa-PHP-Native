<?php

namespace App\Controllers;

use App\Models\ModelUser;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function login()
    {
        return view('auth/login_view');
    }

    public function authenticate()
    {
        $ModelUser = new ModelUser();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $password = filter_var($password, FILTER_SANITIZE_STRING);



        if (empty($username) || empty($password)) {
            session()->setFlashdata('error', 'Silahkan masukan username dan password');
            return redirect()->to('login');
        }

        $dataUser = $ModelUser->where("username", $username)->first();

        if (!$dataUser || $dataUser['password'] !== md5($password)) {
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->to('login');
        }

        $dataSesi = [
            'id_security' => $dataUser['id_security'],
            'nama_security' => $dataUser['nama_security'],
            'noHp_security' => $dataUser['noHp_security'],
            'username' => $dataUser['username'],
        ];
        session()->set($dataSesi);
        return redirect()->to('dashboard');
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
