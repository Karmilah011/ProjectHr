<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_cuti extends Model
{
    protected $table = "form_cutis";
    protected $fillable = ["user_id", "leave_type_id", "leave_master_id", "alsncuti", "tanggalmulai", "tanggalselesai", "jhari", "approval_id", "status_hrd", "status_pim", "created_at"];

    protected $primaryKey = "id";
}
