<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pos extends Model
{
    protected $fillable = [
        'image',
        'judul',
        'isi_berita',
        'author',
        'posisi',
    ];
}
