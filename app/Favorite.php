<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'favorite_count',
        'user_id',
        'movie_id'
    ];
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
