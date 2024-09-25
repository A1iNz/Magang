<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'category', 'status', 'user_id', 'pic'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
