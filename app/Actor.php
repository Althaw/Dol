<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable=['name','gender'];

    public function actors($value='')
    {
    	return $this->belongsToMany('App\Actor','movie_actor');
                
    }
}
