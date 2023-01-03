<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = "karyawans";
    protected $fillable = ["no_pegawai", "nama_pegawai", "jenkel", "tgl_lahir", "alamat", "jabatan", "departemen", "id_atasan"];

    protected $primaryKey = "no_pegawai";
}
