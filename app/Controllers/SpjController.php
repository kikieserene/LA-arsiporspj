<?php

namespace App\Controllers;

use App\Models\SpjModel;

class SpjController extends BaseController
{
    protected $spjModel;
    protected $session;

    public function __construct()
    {
        $this->spjModel = new SpjModel();
        $this->session = session();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');

        if ($keyword) {
            $this->spjModel->like('nama_kegiatan', $keyword);
        }

        $data['spj'] = $this->spjModel->findAll();
        return view('spj/index', $data);
    }

    public function create()
    {
        if ($this->session->get('role') !== 'pptk') {
            return redirect()->to('/spj')->with('error', 'Akses ditolak: hanya PPTK yang bisa menambahkan SPJ.');
        }

        return view('spj/create');
    }

    public function store()
    {
        if ($this->session->get('role') !== 'pptk') {
            return redirect()->to('/spj')->with('error', 'Akses ditolak: hanya PPTK yang bisa menyimpan SPJ.');
        }

        $file = $this->request->getFile('dokumen');
        $namaFile = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFile = $file->getRandomName();
            $file->move('uploads/dokumen_spj', $namaFile);
        }

        $this->spjModel->save([
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'tanggal'       => $this->request->getPost('tanggal'),
            'jumlah'        => $this->request->getPost('jumlah'),
            'dokumen'       => $namaFile,
        ]);

        return redirect()->to('/spj')->with('success', 'Data SPJ berhasil ditambahkan.');
    }

    public function edit($id)
    {
        if ($this->session->get('role') !== 'pptk') {
            return redirect()->to('/spj')->with('error', 'Akses ditolak: hanya PPTK yang bisa mengedit SPJ.');
        }

        $data['spj'] = $this->spjModel->find($id);
        return view('spj/edit', $data);
    }

    public function update($id)
    {
        if ($this->session->get('role') !== 'pptk') {
            return redirect()->to('/spj')->with('error', 'Akses ditolak: hanya PPTK yang bisa memperbarui SPJ.');
        }

        $file = $this->request->getFile('dokumen');
        $dataLama = $this->spjModel->find($id);
        $namaFile = $dataLama['dokumen']; // default: file lama tetap dipakai

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFileBaru = $file->getRandomName();
            $file->move('uploads/dokumen_spj', $namaFileBaru);
            $namaFile = $namaFileBaru;
        }

        $this->spjModel->update($id, [
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'tanggal'       => $this->request->getPost('tanggal'),
            'jumlah'        => $this->request->getPost('jumlah'),
            'dokumen'       => $namaFile,
        ]);

        return redirect()->to('/spj')->with('success', 'Data SPJ berhasil diperbarui.');
    }

    public function delete($id)
    {
        if ($this->session->get('role') !== 'pptk') {
            return redirect()->to('/spj')->with('error', 'Akses ditolak: hanya PPTK yang bisa menghapus SPJ.');
        }

        $this->spjModel->delete($id);
        return redirect()->to('/spj')->with('success', 'Data SPJ berhasil dihapus.');
    }

    public function print()
    {
        if ($this->session->get('role') !== 'pptk') {
            return redirect()->to('/spj')->with('error', 'Akses ditolak.');
        }

        $data['spj'] = $this->spjModel->findAll();

        return view('spj/print', $data);
    }
}
