<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_cuti extends Model
{
    protected $table = "form_cutis";
    protected $fillable = ["no_karyawan", "jeniscuti", "sisacuti", "alsncuti", "periodecuti", "jhari", "atsn","status_hrd", "status_pim"];

    protected $primaryKey = "id";
}
