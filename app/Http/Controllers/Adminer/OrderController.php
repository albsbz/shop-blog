<?php

namespace App\Http\Controllers\Adminer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

use App\Order;
use App\Order_item;
use App\Product;
use App\User;




class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin2.order.index');
    }
    public function orderData()
    {
        $orders=Order::select(['id', 'price', 'address', 'status', 'user_id']);

        return Datatables::of($orders)
        ->addColumn('user_name', function ($order) {

            return User::find($order->user_id)->name;
        })
        ->addColumn('action', function ($order) {
                return '<a href="/admin2/orders/'.$order->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>'.
                '<span class="btn btn-xs btn-danger" data-id="'.$order->id.'"><i class="glyphicon glyphicon-remove"></i>Delete</a>';
        })
        // ->addColumn('category', function($product){
        //     return $product->category?$product->category->name:'';
        // })
        ->make(true);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     $categories=Product_category::pluck('name', 'id');
    //     $product=new Product;
    //     return view('admin2.product.edit', compact('product', 'categories'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //    $this->validate($request, [
    //         'name'=>'required|unique:products|min:2|max:32',
    //     ]);
    //     $product=new Product;
    //     $product->name=$request->name;
    //     $product->slug=$request->slug;
    //     $product->category_id=$request->category_id;
    //     $product->price=$request->price;
    //     $product->description=$request->description;
    //     $product->recommended=($request->recommended)?1:0;
    //     $product->instock=($request->instock)?1:0;
    //     $images=explode(', ', $request->imgPath);
    //     $product->imgPath=$images[0];
    //     $product->gallery=$request->gallery;

    //     $product->save();
    //     return redirect('/admin2/products')->with ('success', 'Product Edited');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // *
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        $order=Order::find($id);
        $order_items=Order_item::where('order_id', $id)->get();
        $products=Product::where('instock', '1');
        return view('admin2.order.edit', compact('order', 'order_items', 'products'));
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
       // dump($request->inorder);
       // dump($request->qtt);

        $order=Order::find($id);
             $this->validate($request, [
            'id'=>'required|unique:orders,id,'.$order->id.'|numeric',
            'user_name'=>'required|min:2|max:32',
            'address'=>'required',
            'status'=>'required',
            'price'=>'required',
        ]);
        $order->id=$request->id;
        $order->user->name=$request->user_name;
        $order->price=$request->price;
        $order->address=$request->address;
        $order->status=$request->status;

        $items=array_combine($request->inorder, $request->qtt);
        // dump($items);
        foreach ($items as $id => $qtt) {
            $expId=explode('-', $id);
            // dd( $expId);
            if (!empty($expId['1'])){
                Order_item::destroy($expId['0']);
            }
            else{
                $order_item=Order_item::find($id);
                $order_item->qtt=$qtt;
                $order_item->save();
            }    

        }


        // $order->recommended=($request->recommended)?1:0;
        // $order->instock=($request->instock)?1:0;
        // $images=explode(', ', $request->imgPath);
        // $product->imgPath=$images[0];
        // $product->gallery=$request->gallery;

        $order->save();
        return redirect('/admin2/orders')->with('success', 'Order Edited');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        Order::find($id)->delete();
    }
}
