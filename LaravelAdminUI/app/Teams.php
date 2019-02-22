<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    //

    protected $fillable = [
        'team_name',
        'team_location',
        'team_sponsor',
        'team_arena',
        'arena_capacity',
        'year_founded',
        'year_joined'
    ];
}
