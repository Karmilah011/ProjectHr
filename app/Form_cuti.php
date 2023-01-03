<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_cuti extends Model
{
    protected $table = "form_cutis";
    protected $fillable = ["no_pegawai", "nama", "jabatan", "departemen", "tgl_musuk", "lama_cuti", "jcuti", "alasan", "file", "status_hrd", "status_pim"];

    protected $primaryKey = "id";
}
