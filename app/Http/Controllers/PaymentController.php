<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Order_item;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Hash;
// use GuzzleHttp\Client;
use App\LiqPay;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request)
    {
        /Log::info([$request]);
        $data=$request->data;
        /Log::info([$data]);
        $signature=$request->signature;
        /Log::info([$signature]);
        $sign=base64_encode( sha1($_ENV['PRIVATE_KEY'].$data.$_ENV['PRIVATE_KEY'],1 ));
        /Log::info([$sign]);
        if (($signature===$sign)&&(($data->status=="success")||($data->status=="sandbox"))){
            $order_id=$data->$order_id;
            $order=Order::find($order_id);
            $order->status=3;
            $order->save();
        }

    }

   
}
