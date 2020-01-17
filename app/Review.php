<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
   protected $fillable = array('id', 'user_id', 'product_id','text');

   public function product()
	  {
	    return $this->belongsTo('App\Product');
	  }
	public function user()
	  {
	    return $this->belongsTo('App\User');
	  }
}
