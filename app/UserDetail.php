<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = "user_details";
    protected $fillable = ["employe_id", "name", "tanggal_lahir", "kota", "email", "job", "gender", "tempat_kelahiran", "alamat_ktp", "alamat_tinggal", "no_hp", "organisasi_id", "tanggal_bergabung", "masa_kerja", "npwp", "bpjs", "attachment"];
    
    protected $primaryKey = "id";
}

