<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

class Order_item extends Model
{
     protected $fillable = array('id', 'order_id', 'product_id', 'qtt');
     public function order()
	  {
	    return $this->belongsTo('App\Order');
	  }
	  public function product()
		{
		  return $this->belongsTo('App\Product');
		}
}
