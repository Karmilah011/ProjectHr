<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sisa_cuti extends Model
{
    protected $table = "sisa_cutis";
    protected $fillable = ["nama_pegawai", "tahun", "jatah_cuti", "cuti_dipakai", "sisa_tahun_lalu", "sisa_tahun_ini", "total_sisa_cuti"];

    protected $primaryKey = "id_peg";
}
