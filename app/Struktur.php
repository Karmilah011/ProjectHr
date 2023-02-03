<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    protected $table = "strukturs";
    protected $fillable = ['namaorganisasi', 'deskorganisasi', 'parent', 'status'];

    protected $primaryKey = "id";
}
