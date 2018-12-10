<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    function users(){
    	return $this->belongToMany('App\User', 'users_roles', 'role_id', 'user_id');
    }
}
