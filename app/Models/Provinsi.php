<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Provinsi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'nama_provinsi'
    ];


}
