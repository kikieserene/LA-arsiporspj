<?php

namespace App\Models;

use CodeIgniter\Model;

class VerifikasiInfoModel extends Model
{
    protected $table = 'validasi_verifikator'; // ✅ sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_spj',
        'nama_verifikator',
        'nama_kegiatan',
        'tgl_kegiatan',
        'bidang',
        'nama_ketuapel',
        'tgl_validasi',
        'status_validasi'
    ];
}
