<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveMaster extends Model
{
    protected $table = "leave_masters";
    protected $fillable = ["leave_type", "day"];
    protected $primaryKey = "id";

    public function cuti()
    {
        return $this->hasMany(Form_cuti::class , 'leave_master_id', 'id');
    }   
     
}
