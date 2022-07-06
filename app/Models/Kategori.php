<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\DB;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'id', 'kategori'
    ];

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class);
    }
}
