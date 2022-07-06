<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\DB;
use Illuminate\Database\Eloquent\Model;

class Datawarga extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'id', 
        'nik', 
        'user_id',
        'kelurahan_id',
        'jk',
        'ttl',
        'tlp',
        'umur',
        'alamat',
        'rt'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class);
    }
}
