<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imageKegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'desa_id',
        'path_image_kegiatan'
    ];

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }
}