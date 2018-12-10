<?php

namespace App\Http\Controllers\Admin;

use App\Product; 
use App\Product_category; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use App\Services\dbFunctionService;



class AdminProductsController extends Controller
{

    // protected $categoryService;
    // public function __construct(CategoryService $categories)
    // {
    //    $this->categoryService = $categories;
    // }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin/data/products/products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $product=new Product;
        $categories=Product_category::pluck('name', 'id');
        // $categories=$this->categoryService->getCategories();
        return view('admin/data/products/create', compact('product', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->instock=($request->instock)?1:0;
        // save the model to create a new object in the database
        if (!$product->save()) {
            return redirect(url('/adminpanel/products/create'))
                ->withErrors($product->getErrors())->withInput();
        }
        $product->url='images/products/'.$product->id.'/';
        $files = $request->file('image');
        if ($files) {
            foreach ($files as $key =>$file) {
                $file->move('storage/'.$product->url, ($key+1).'.JPG');
            }
        }
        $product->save();
        return redirect(url('/adminpanel/products'))->with('success', 'Product with id '.$product->id.' edited') ; //record to session
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
        return view('admin.data.products.edit', compact('product', 'categories'));
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
        $product->name = isset($request->name)?$request->name:$product->name ;
        $product->category_id = isset($request->category_id)?$request->category_id:$product->category_id;
        $product->price = isset($request->price)?$request->price:$product->price;
        $product->description = isset($request->description)?$request->description:$product->description;
        $product->instock=($request->instock)?1:0;
        // save the model to create a new object in the database
        if (!$product->save()) {
            return redirect(url('/adminpanel/products/edit'))
                ->withErrors($product->getErrors())->withInput();
        }

        // $product->url='images/products/'.$product->id.'/';
        // $files = $request->file('image');
        // if ($files) {
        //     foreach ($files as $key =>$file) {
        //         $file->move('storage/'.$product->url, ($key+1).'.JPG');
        //     }
        // }
        // // $product->save();
        return redirect(url('/adminpanel/products'))->with('success', 'Product with id '.$product->id.' updated') ; //record to session
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= Product::find($id);
        if($product)
            {
                // dump($product->id);
                $url='public/images/products/'.$product->id;
                // dump(Storage::allFiles($url));
               
                    Storage::deleteDirectory($url);
            
                $product->delete();
            }
        return redirect('/adminpanel/products');
    }
}
