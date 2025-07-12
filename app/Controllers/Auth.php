<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Set session
            $session->set([
                'id'         => $user['id'],
                'username'   => $user['username'],
                'role'       => $user['role'],
                'isLoggedIn' => true
            ]);

            // Redirect berdasarkan role
            switch ($user['role']) {
                case 'admin':
                    return redirect()->to('/dashboard');
                case 'pptk':
                    return redirect()->to('/pptk');
                case 'bendahara':
                    return redirect()->to('/bendahara');
                case 'verifikator':
                    return redirect()->to('/verifikator'); // ✅ Redirect untuk verifikator
                default:
                    return redirect()->to('/login')->with('error', 'Role tidak dikenali.');
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
