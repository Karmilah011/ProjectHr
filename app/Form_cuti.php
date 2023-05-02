<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_cuti extends Model
{
    protected $table = "form_cutis";
    protected $fillable = ["employe_id", "leave_type", "leave_master_id", "alsncuti", "tanggalmulai", "tanggalselesai", "jhari", "approval_id", "created_at",'attachment'];
    protected $primaryKey = "id";

    public function leave()
    {
        return $this->belongsTo(LeaveMaster::class, 'leave_master_id');
    }
}

