<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $table = "approvals";
    protected $fillable = ["jeniscuti", "nama_karyawan", "tgl_pengajuan", "tgl_mulai", "tgl_selesai", "tanggalselesai", "approved", "status_hrd", "status_pim", "created_at"];
    protected $primaryKey = "id";
}
