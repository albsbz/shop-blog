<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;
use App\Order_item;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Hash;
// use GuzzleHttp\Client;
use App\LiqPay;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cart=session('cart');
        $user=(null !== Auth::user())?Auth::user():(object)['name'=>null, 'phone'=>null, 'email'=>null, 'address'=>null];
        // dd($user);
        $user->name=($user->name)?($user->name):'';
        $user->phone=($user->phone)?($user->phone):'';
        $user->email=($user->email)?($user->email):'';
        $user->address=($user->address)?($user->address):'';
        // $cart;
        // $price;
        return view('checkout', compact('cart', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(session('cart'));

         $this->validate($request, [
            'name'=>'required|min:3|max:32',
            'phone'=>'required|min:9|max:12',
            'address'=>'required|max:32',
            'email'=>'required|email',
        ]);

        $ids=$request->id;
        $qtt=$request->qtt;
        $paymethod=$request->paymethod;
        $address=$request->address;
        if ((null == Auth::user())) {
            $pass= Hash::make(str_random(8));
            $phone=$request->phone;
            $name=$request->name;
            $email=$request->email;
             
            $newuser=new User;
              // $newuser=User::create([
              //   'name' => $name,
              //   'email' =>  $email,
              //   'phone' =>  $phone,
              //   'address' =>  $address,
              //   'password' => bcrypt($pass),
              //  ]);
            $newuser->name = $name;
            $newuser->email =  $email;
            $newuser->phone = $phone;
            $newuser->address =  $address;
            $newuser->password = bcrypt($pass);
            if (!$newuser->save()) {
                // $errors = $newuser->getErrors();
                
                // return redirect('/checkout')
                //     ->with('errors', $errors)
                //     ->withInput();  
                return response()->json(['errors'=>$validator->errors()->all()]);
            }
            Auth::login($newuser);
        }
        $order= new Order;
        $order->user_id=Auth::user()->id;
        $order->address=$address;
        $order->save();
        // $sum=0;
        foreach ($ids as $key => $id) {
              $order_item=new Order_item;
              $product=Product::find($id);
              $order_item->order_id=$order->id;
              $order_item->product_id=$id;
              $order_item->qtt=$qtt[$key];
              $order_item->price= $product->price;
              $product->popularity=($product->popularity)+1;
              $product->save();
              $order_item->save();
              // $sum=$sum+($order_item->price)*($order_item->qtt);
        }
        $order_total=Order::find($order->id);
        // $order_total->price=$sum;
        if ($paymethod=='od'){
            $order_total->status=2;
            $order_total->save();
            session()->put('cart', []);
            
            $data = array('name'=>(Auth::user()->name), "order" => ($order->id));
                
            Mail::send('emails.user.ordermade', $data, function($message) {
                $message->to(Auth::user()->email, Auth::user()->name)
                        ->subject('Order made');
                $message->from(env('MAIL_USERNAME'),'Shop_name');
            });

            return 'onDelivery';



        }
        else {
             $order_total->status=0;
          
        }
      

        if ($paymethod=='lp'){
           $order_total->status=1;
           $order_total->save();
            session()->put('cart', []);


            $public_key=$_ENV['PUBLIC_KEY'];
            $private_key=$_ENV['PRIVATE_KEY'];
            $liqpay = new LiqPay($public_key, $private_key);
           
            $html = $liqpay->cnb_form(array(
            'action'         => 'pay',
            'amount'         => $order_total->price,
            'currency'       => 'UAH',
            'description'    => 'Payment for Order #'.$order->id,
            'order_id'       => $order->id,
            'version'        => '3',
            'result_url'    => url('/payment-status'),
            'language'      =>  'ru',
            'sandbox'=>'1', 
            ));
            return $html;


        //     $data      = $this->encode_params($params);
        // $signature = $this->cnb_signature($params);


            // $error='Error of payment';

            // $res_arr = array("status"=>1, 'form'=>$html,
            //            'order_num'=>$order->id, 'error'=>$error);
            // return json_encode( $res_arr ); 
        }
// https://www.liqpay.ua/documentation/api/aquiring/checkout/doc
// https://softobzor.com.ua/liqpay-php-primery-coda/
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function userOrders(){
        $orders=Auth::user()->orders;
         return view('userorders', compact('orders')); 
    }
     public static  function payAgain($id)
    {
            $order=Order::find($id);
            $public_key=$_ENV['PUBLIC_KEY'];
            $private_key=$_ENV['PRIVATE_KEY'];
            $liqpay = new LiqPay($public_key, $private_key);
           
            $html = $liqpay->cnb_form(array(
            'action'         => 'pay',
            'amount'         => $order->price,
            'currency'       => 'UAH',
            'description'    => 'Payment for Order #'.$order->id,
            'order_id'       => $order->id,
            'version'        => '3',
            'result_url'    => url('/'),
            'language'      =>  'ru',
            'sandbox'=>'1', 
            ));
            return $html;
            // return $order;
    }
}
