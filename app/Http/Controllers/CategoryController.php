<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_category; 
use App\Product; 

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($slug)
    // {
        
    //     $id=Product_category::where('slug','=', $slug);
    //     $products = Product::where('category_id', $id)->paginate(15);
    //     return view('index', compact('products'));
    // }

    public function show(Request $request, $slug)
    {
        if (isset($request->orderBy)){
            session(['orderBy'=>($request->orderBy)]);
        }
        if (null ==session('orderBy')){
            session(['orderBy'=>'new']);
        }
        if (session('orderBy')=='new') {
            $orderBy='created_at';
            $direction='desc';
        }
        elseif (session('orderBy')=='asc') {
            $orderBy='price';
            $direction='asc';
        }
        elseif (session('orderBy')=='desc') {
            $orderBy='price';
            $direction='desc';
        }
        elseif (session('orderBy')=='pop') {
            $orderBy='popularity';
            $direction='desc';
        }

        if (isset($request->perPage)){
            session(['perPage'=>($request->perPage)]);
        }
        if (null ==session('perPage')){
            session(['perPage'=>'15']);
        }
        $perPage=session('perPage');
     
    //---------------------------------------------------------------
        $id=Product_category::where('slug','=', $slug)->first()->id;
        $descendants= Product_category::descendantsOf($id)->pluck('id');
        
        if ($descendants->isEmpty()) {
            $descendants=[$id];

        };
        

        $filterValues['min']=Product::whereIn('category_id', $descendants)->where('instock','=', 1)->pluck('price')->min();
        if ($filterValues['min']===null) {$filterValues['min']=0;}
        $filterValues['max']=Product::whereIn('category_id', $descendants)->where('instock','=', 1)->pluck('price')->max();
        if ($filterValues['max']===null) {$filterValues['max']=999;}
        // dd($filterValues);
        if (isset($request->priceFilter)){
            session(['priceFilter'=>collect($request->priceFilter)]);
        }
        if (session('priceFilter')==null){
            session(['priceFilter'=>
                collect([
                    'currentMin'=>$filterValues['min'],  
                    'currentMax'=>$filterValues['max']
                ])
            ]);
        }

        $filterValues['currentMin']=session('priceFilter')['currentMin'];
        $filterValues['currentMax']=session('priceFilter')['currentMax'];
        
        if ($filterValues['currentMin']){
            $allproducts = Product::whereIn('category_id', $descendants)
            ->where('instock','=', 1)
            ->where('price','>=', $filterValues['currentMin'])
            ->where('price','<=', $filterValues['currentMax']);
            // dd($allproducts->get());
            $products =   $allproducts->orderBy($orderBy, $direction)->paginate($perPage);
        }
        else{

            $allproducts = Product::whereIn('category_id', $descendants)->where('instock','=', 1);
            $products =   $allproducts->orderBy($orderBy, $direction)->paginate($perPage);
        }
       
        // $breadcrumb_category=
        $breadcrumb_category= Product_category::where('slug','=', $slug)->first();
        // $parent_cat=$breadcrumb_category->parent();
        return view('index', compact('products', 'allproducts','filterValues', 'descendants', 'breadcrumb_category'));
    }


  
}
