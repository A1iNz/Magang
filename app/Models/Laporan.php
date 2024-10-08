<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'category', 'status', 'user_id'];

    // Definisikan hubungan dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
