<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; 
use Redirect;
use Illuminate\Http\Response;


class CartController extends Controller
{
    
    public function index()
    {
       $ses=session()->all();
       $cart = session('cart');
       $total=0;
       if (isset($cart[0])) {
           for ($i=0, $total=0;  $i < count($cart); $i++) { 
            // session()->forget('cart');
            // session()->save();
              $total+=$cart[$i]['price']*$cart[$i]['qtt'];
           }
       }
// $request->session()->forget('cart');
       return view('cart', compact('cart', 'total', 'ses'));
    }

    
    // public function store(Request $request)
    // {

    //     $qtt=$request->qtt;
    //     $cartData=unserialize($request->cartData);
    //     $id= $cartData[0];
    //     $product = Product::find($id);
    //     $price=$product->price;
    //     $url=$product->url;
    //     $img=asset('storage/'.$url.'1.JPG');
         
    //     $img=$product->imgExistReturn($product->url, 1);
    //     $itemInCart=array_search($id, array_column((session()->get('cart')?session()->get('cart'):[]), 'id'));
    //     if($itemInCart>=1 || $itemInCart===0) {
    //      $cart=session()->get('cart');
    //      $oldqtt=$cart[$itemInCart]['qtt'];
    //      $cart[$itemInCart]['qtt']=$oldqtt+$qtt;
    //      // dd($cart);
    //      session(['cart'=> $cart]);
    //     } 
    //      else{
    //        session()->push('cart', compact('qtt', 'id', 'price', 'img'));
    //     }
    //     return redirect('/cart');
    // }


        public function store(Request $request)
    {

        $qtt=$request->qtt;
        $cartData=unserialize($request->cartData);
        $id=$cartData[0];
        $product = Product::find($id);
        $price=$product->price;
        $url=$product->url;
        $name=$product->name;
        $img=asset('storage/'.$url.'1.JPG');
         
        $img=$product->imgPath;
        $itemInCart=array_search($id, array_column((session()->get('cart')?session()->get('cart'):[]), 'id'));
        if($itemInCart>=1 || $itemInCart===0) {
         $cart=session()->get('cart');
         $oldqtt=$cart[$itemInCart]['qtt'];
         $cart[$itemInCart]['qtt']=$oldqtt+$qtt;
         // dd($cart);
         session(['cart'=> $cart]);
        } 
         else{
           session()->push('cart', compact('qtt', 'id', 'price', 'img', 'name'));
        }
       
         return array_sum(array_column((session()->get('cart')?session()->get('cart'):[]), 'qtt')); 
      // return '123';
    }

    public function changeqtt(Request $request)
      {
        // dd($request);
        $qtt=$request->qtt;
        foreach ($qtt as $key => $qt) {
          session()->put('cart.'.$key.'.qtt', $qt);
        }
        return redirect('/checkout');
      }
   
    public function destroyall()
    {
       session()->put('cart', []);
       return 0;
    }
    public function destroyone(Request $data)
    {
        $i=$data->i;
        $cart = session('cart');
        array_splice($cart, 0-$i, 1);
        session(['cart'=> $cart]);
       return array_sum(array_column((session()->get('cart')?session()->get('cart'):[]), 'qtt'));
    }
}
