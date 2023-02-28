<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    protected $table = "strukturs";
    protected $fillable = ['namaorganisasi', 'deskorganisasi', 'parent', 'emailstruktur', 'status'];

    protected $primaryKey = "id";
}
