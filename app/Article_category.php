<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_category extends Model
{
    public function article(){
    	return $this->hasMany('App\Article', 'category_id', 'id');
    }
}
