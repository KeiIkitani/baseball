<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = array('id');
    protected $fillable = [
    'comment',
    'match_day',
    'team_id',
    'player_id',
    'favorite_count',
    'description',
    'movie'
    ];
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
     public function player()
    {
        return $this->belongsTo('App\Player');
    }
    public function comments()   
    {
        return $this->hasMany('App\Comment');  
    }
    public function favorites()   
    {
        return $this->hasMany('App\Favorite');  
    }
}