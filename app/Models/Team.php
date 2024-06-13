<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function gamesAsTeam1()
    {
        return $this->hasMany(Game::class, 'team1_id');
    }

    public function gamesAsTeam2()
    {
        return $this->hasMany(Game::class, 'team2_id');
    }
}