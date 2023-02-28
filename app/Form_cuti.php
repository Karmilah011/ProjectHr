<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_cuti extends Model
{
    protected $table = "form_cutis";
    protected $fillable = ["no_karyawan", "jeniscuti", "sisacuti", "alsncuti", "tanggalmulai", "tanggalselesai", "atsn", "status_hrd", "status_pim", "created_at"];

    protected $primaryKey = "id";
}
