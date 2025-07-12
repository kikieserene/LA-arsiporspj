<?php

namespace App\Models;

use CodeIgniter\Model;

class SpjModel extends Model
{
    protected $table      = 'spj';
    protected $primaryKey = 'id';

    // Tambahkan 'dokumen' ke dalam allowedFields
    protected $allowedFields = ['nama_kegiatan', 'tanggal', 'jumlah', 'status_validasi', 'dokumen'];

    // Aktifkan penggunaan timestamp (created_at dan updated_at)
    protected $useTimestamps = true;
}
