<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product; //пространство имен  для Product::find
use App\Product_category;
use App\Order_item;

class MainController extends Controller
{
    
    public function index(){
    $id = Product::all()->random(1)->get('id');


        $relatedOrderId=Order_item::where('product_id', '=', $id)->pluck('order_id');
        if($relatedOrderId->isNotEmpty()){
            $relatedOrderId=$relatedOrderId->random(1);
            $relatedProductId=Order_item::where('order_id', '=', $relatedOrderId)->pluck('product_id');
            $related=Product::wherein('id',  $relatedProductId)->where('id', '!=',  $id)->take(4)->get();
            if (count($related)<4) {
                $nonrelated=Product::all()->random(4-count($related));
                $related=$related->concat($nonrelated);
            }
        } else{
            $related=Product::all()->random(4);
        }
       
       
        $categories = Product_category::withDepth()->where('parent_id', null)->get();
        // $categories = Product_category::withDepth()->having('depth', '=', 1)->get();
        $products = Product::all()->random(10);
        return view('home', compact('products', 'related', 'recomend', 'categories'));
    }

}
