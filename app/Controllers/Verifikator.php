<?php

namespace App\Controllers;

use App\Models\SpjModel;
use App\Models\ValidasiVerifikatorModel;

class Verifikator extends BaseController
{
    protected $spjModel;
    protected $validasiModel;

    public function __construct()
    {
        $this->spjModel = new SpjModel();
        $this->validasiModel = new ValidasiVerifikatorModel();
    }

    public function index()
    {
        // Tampilkan dashboard: daftar SPJ yang sudah divalidasi bendahara
        $data['spj'] = $this->spjModel
            ->where('status_validasi', 'Disetujui')
            ->orderBy('tanggal', 'DESC')
            ->findAll();

        return view('verifikator/index', $data);
    }

    public function cariValidasi()
    {
        // Halaman pencarian dokumen validasi (sementara tampilkan semua yang disetujui)
        $data['spj'] = $this->spjModel
            ->where('status_validasi', 'Disetujui')
            ->orderBy('tanggal', 'DESC')
            ->findAll();

        return view('verifikator/cari_validasi', $data);
    }

    public function formTambahInfo($id_spj)
    {
        // Ambil data SPJ yang akan diverifikasi
        $spj = $this->spjModel->find($id_spj);
        if (!$spj) {
            return redirect()->to('/verifikator')->with('error', 'Data SPJ tidak ditemukan.');
        }

        return view('verifikator/tambah_info', ['spj' => $spj]);
    }

    public function simpanInfo()
    {
        // Simpan informasi tambahan validasi oleh verifikator
        $this->validasiModel->insert([
            'id_spj'           => $this->request->getPost('id_spj'),
            'nama_verifikator' => $this->request->getPost('nama_verifikator'),
            'nama_kegiatan'    => $this->request->getPost('nama_kegiatan'),
            'tgl_kegiatan'     => $this->request->getPost('tgl_kegiatan'),
            'bidang'           => $this->request->getPost('bidang'),
            'nama_ketuapel'    => $this->request->getPost('nama_ketuapel'),
            'tgl_validasi'     => $this->request->getPost('tgl_validasi'),
            'status_validasi'  => $this->request->getPost('status_validasi'),
        ]);

        return redirect()->to('/verifikator')->with('success', 'Informasi verifikasi berhasil disimpan.');
    }
}
