<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFamily extends Model
{
    protected $table = "user_families";
    protected $fillable = ["employe_id", "nama_lengkap_family", "tempat_kelahiran_family", "tgl_lahir_family", "alamat_ktp_family", "alamat_tinggal_family", "bpjs_family", "npwp_family", "gender_family", "attachment"];

    protected $primaryKey = "id";
}
