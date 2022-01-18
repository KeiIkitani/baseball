<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = array('id');
    protected $fillable = ['teamname']; 
    public function movies()   
    {
        return $this->hasMany('App\Movie');  
    }
    public function players()   
    {
        return $this->hasMany('App\Player');  
    }
    public function users()   
    {
        return $this->hasMany('App\User');  
    }
    
}
