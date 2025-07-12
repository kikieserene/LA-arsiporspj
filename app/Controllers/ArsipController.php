<?php

namespace App\Controllers;

use App\Models\VerifikasiInfoModel;

class ArsipController extends BaseController
{
    protected $verifikasiInfoModel;

    public function __construct()
    {
        $this->verifikasiInfoModel = new VerifikasiInfoModel();
    }

    public function index()
    {
        $data['arsip'] = $this->verifikasiInfoModel
            ->orderBy('tgl_validasi', 'DESC')
            ->findAll();

        return view('arsip_spj', $data);
    }
}
