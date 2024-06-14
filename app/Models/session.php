<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'user_id', 'session_token', 'expires_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}