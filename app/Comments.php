<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function users($value='')
    {
    	return $this->hasMany('App\User');
    }
    public function movies($value='')
    {
    	return $this->hasMany('App\Movie');
    }
}
