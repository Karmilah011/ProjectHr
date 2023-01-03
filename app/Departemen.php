<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $table = "departemens";
    protected $fillable = ["nama_dpt"];

    protected $primaryKey = "id";
}
