<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl',
        'jam',
        'nama',
        'topik',
        'deskripsi',
        'kategori',
    ];

}