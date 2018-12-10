<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database;
use Kalnoy\Nestedset\NodeTrait;


class Product_category extends Model
{
    use NodeTrait;
    public function product(){
    	// return $this->belongsTo('App\Product', 'category_id'); //односторонняя связь
    	return $this->hasMany('App\Product', 'category_id', 'id');
    }

    function setSlugAttribute($value){
    	if(empty($value)){
    		$this->attributes['slug']=str_slug($this->attributes['name'], '-');
    	}
    	else{
    		$this->attributes['slug']=str_slug($value, '-');
    	}
    }
    function getImgPathAttribute($value){
    	return empty($value)?'/images/noimage.jpg':$value;
    }
}
