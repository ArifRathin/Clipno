<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function Usres(){
    	return $this->hasMany('App\user');
    }
}
