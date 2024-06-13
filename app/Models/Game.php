<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Specify the fields that are mass assignable
    protected $fillable = [
        'team1_id',
        'team2_id',
        'team1_score',
        'team2_score',
        'field',
        'referee_id',
        'time',
    ];
}
