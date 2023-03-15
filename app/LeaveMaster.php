<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveMaster extends Model
{
    protected $table = "leave_masters";
    protected $fillable = ["leave_type_id", "day"];

    protected $primaryKey = "leave_master_id";
}
