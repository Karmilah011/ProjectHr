<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    protected $table = "strukturs";
    protected $fillable = ['namaorganisasi', 'parent', 'status'];

    protected $primaryKey = "id";
}
