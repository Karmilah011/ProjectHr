<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    protected $table = "leave_types";
    protected $fillable = ["leave_type_name"];

    protected $primaryKey = "leave_type_id";
}
