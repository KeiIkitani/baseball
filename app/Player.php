<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = array('id'); 
    protected $fillable = [
        'team_id',
        'player',
        'number'
        ];
    
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
    public function movies()   
    {
        return $this->hasMany('App\Movie');  
    }
}
