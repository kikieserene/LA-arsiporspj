<?php

namespace App\Controllers;

use App\Models\SpjModel;

class LaporanController extends BaseController
{
    protected $spjModel;

    public function __construct()
    {
        $this->spjModel = new SpjModel();
    }

    public function index()
    {
        // Ambil hanya SPJ yang sudah tervalidasi
        $data['spj'] = $this->spjModel
            ->where('status_validasi', 'Disetujui')
            ->findAll();

        return view('laporan/index', $data);
    }
}
