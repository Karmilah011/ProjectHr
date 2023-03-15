<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyType extends Model
{
    protected $table = "family_types";
    protected $fillable = ["hubungan"];

    protected $primaryKey = "id";
}
