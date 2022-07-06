<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;	
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'id', 
        'datawarga_id',
        'kategori_id',
        'prestasi',
        'Validasi',
        'image'
    ];

     function image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->image)))
            return asset('images/post/' . $this->image);
        else
            return asset('images/no_image.png');
    }

    function delete_image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->image)))
            return unlink(public_path('images/post/' . $this->image));
    }
     public function user()
    {
        return $this->belongsTo(User::class);
    }   
     public function datawarga()
    {
        return $this->belongsTo(Datawarga::class);
    }   
    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
