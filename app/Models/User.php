<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// In the User model
class User extends Authenticatable
{
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function createdTeams()
    {
        return $this->hasMany(Team::class, 'creator_id');
    }

    public function gamesAsReferee()
    {
        return $this->hasMany(Game::class, 'referee_id');
    }

    public function goals()
    {
        return $this->hasMany(Goal::class, 'player_id');
    }

    protected $fillable = [
        'name', 'email', 'password', 'admin', 'team_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

