<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'kontak',
        'alamat',
        'sejarah',
        'visi',
        'misi',
        'struktur_organisasi',
        'fasilitas_desa',
    ];
}
