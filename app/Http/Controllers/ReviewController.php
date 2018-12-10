<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Auth;

class ReviewController extends Controller
{
    public function save(Request $request){
    	
		$review= new Review;
    	$review->text=$request->text;
    	$review->rating=$request->rating;
    	$review->product_id=$request->product_id;
    	$review->user_id=Auth::user()->id;
    	$review->save();
    	return;
    }
}
