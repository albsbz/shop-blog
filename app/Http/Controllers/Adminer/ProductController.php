<?php

namespace App\Http\Controllers\Adminer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Product;
use App\Product_category;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin2.product.index');
    }
    public function productData()
    {
        $products=Product::select(['id', 'name', 'imgPath', 'price', 'category_id', 'recommended', 'instock']);

        return Datatables::of($products)
     
        ->addColumn('action', function ($product) {
                return '<a href="/admin2/products/'.$product->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>'.
                '<span class="btn btn-xs btn-danger" data-id="'.$product->id.'"><i class="glyphicon glyphicon-remove"></i>Delete</a>';
        })
        ->addColumn('category', function($product){
            return $product->category?$product->category->name:'';
        })
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Product_category::pluck('name', 'id');
        $product=new Product;
        return view('admin2.product.edit', compact('product', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
            'name'=>'required|unique:products|min:2|max:32',
        ]);
        $product=new Product;
        $product->name=$request->name;
        $product->slug=$request->slug;
        $product->category_id=$request->category_id;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->recommended=($request->recommended)?1:0;
        $product->instock=($request->instock)?1:0;
        $images=explode(', ', $request->imgPath);
        $product->imgPath=$images[0];
        $product->gallery=$request->gallery;

        $product->save();
        return redirect('/admin2/products')->with ('success', 'Product Edited');
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
        $product=Product::find($id);
        $categories=Product_category::pluck('name', 'id');
        return view('admin2.product.edit', compact('product', 'categories'));
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
        $product=Product::find($id);
             $this->validate($request, [
            'name'=>'required|unique:products,name,'.$product->id.'|min:2|max:32',
            'slug'=>'sometimes|nullable|required|unique:products,slug,'.$product->id.'|min:2|max:32',
        ]);
        $product->name=$request->name;
        $product->slug=$request->slug;
        $product->category_id=$request->category_id;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->recommended=($request->recommended)?1:0;
        $product->instock=($request->instock)?1:0;
        $images=explode(',', $request->imgPath);
        $product->imgPath=$images[0];

        $product->gallery=json_encode( explode(',', $request->gallery) );
        $product->save();
        return redirect('/admin2/products')->with('success', 'Product Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
    }
     public function export() 
    {
        return Excel::download(new ProductsExport, 'Products.xlsx');
    }
      public function import(Request $request) 
    {
       // $file = $request->file('image');
        Excel::import(new ProductsImport, request()->file('myFile'));
        
        return redirect('/admin2/products')->with('success', 'All good!');
    }
}
