<?php

namespace App\Controllers;
use App\Models\UserModel;

class UserController extends BaseController
{
    protected $userModel;
    
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data['users'] = $this->userModel->findAll();
        return view('user/index', $data);
    }

    public function create()
    {
        return view('user/create');
    }

    public function store()
    {
        $this->userModel->save([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'     => $this->request->getPost('role'),
        ]);

        return redirect()->to('/user')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['user'] = $this->userModel->find($id);
        return view('user/edit', $data);
    }

    public function update($id)
    {
        $this->userModel->update($id, [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password') 
                ? password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
                : $this->userModel->find($id)['password'],
            'role'     => $this->request->getPost('role'),
        ]);

        return redirect()->to('/user')->with('success', 'User berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('/user')->with('success', 'User berhasil dihapus.');
    }
}
