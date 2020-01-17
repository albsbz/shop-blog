<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;
use Illuminate\Support\Facades\Log;



class Order extends Model
{
   
	protected $fillable = array('id', 'user_id', 'address');
   public function order_items()
	  {
	    return $this->hasMany('App\Order_item');
	  }
   public function user()
	  {
	    return $this->belongsTo('App\User');
	  }
	protected static function boot() {
    	parent::boot();
    	static::saving(function($model){
    		$items=Order_item::where('order_id', $model->id)->get();
    		$sum=0;
    		// Log::info(print_r($items));
    		foreach ($items as $item) {
    			$sum=$sum+($item->qtt)*$item->price;
    		}

        	$model->price = $sum;
    }); 
}
}
