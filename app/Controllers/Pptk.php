<?php

namespace App\Controllers;

class Pptk extends BaseController
{
    public function index()
    {
        if (session()->get('role') !== 'pptk') {
            return redirect()->to('/login');
        }

        return view('pptk/index');
    }
}
