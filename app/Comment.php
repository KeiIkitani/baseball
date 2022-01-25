<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment',
        'name',
        'movie_id'
        ];
        
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
    
}
