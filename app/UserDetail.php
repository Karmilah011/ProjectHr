<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = "user_details";
    protected $fillable = ["name", "employe_id", "email", "job_id", "gender", "tempat_kelahiran", "tanggal_lahir", "alamat_ktp", "alamat_tinggal", "no_hp", "organisasi_id", "tanggal_bergabung", "masa_kerja", "alamat_ktp", "attachment"];
    protected $primaryKey = "id";
}

