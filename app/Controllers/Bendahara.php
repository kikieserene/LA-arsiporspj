<?php

namespace App\Controllers;

use App\Models\SpjModel;

class Bendahara extends BaseController
{
    protected $spjModel;

    public function __construct()
    {
        $this->spjModel = new SpjModel();
    }

    public function index()
    {
        return view('bendahara/index');
    }

    public function validasi()
    {
        $data['spj'] = $this->spjModel->findAll();
        return view('bendahara/validasi', $data);
    }

    public function updateValidasi($id)
    {
        $status = $this->request->getPost('status_validasi');
        $this->spjModel->update($id, ['status_validasi' => $status]);

        return redirect()->to('/bendahara/validasi')->with('success', 'Status validasi berhasil diperbarui.');
    }
}
