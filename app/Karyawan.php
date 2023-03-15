<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = "karyawans";
    protected $fillable = ["user_detail_id", "user_family_id", "karyawan_id", "nama_karyawan", "email", "position", "gender", "tempat_kelahiran", "tanggal_lahir", "alamat_ktp", "alamat_tinggal", "no_hp", "organisasi_id", "tanggal_bergabung", "masa_kerja", "alamat_ktp", "attachment"];

    protected $primaryKey = "no_pegawai";
}
