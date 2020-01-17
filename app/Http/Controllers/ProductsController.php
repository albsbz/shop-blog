<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Collection;
use App\Product;
use App\Order_item;  
use Illuminate\Support\Collection;
// use App\Services\dbFunctionService;

class ProductsController extends Controller
{
    // protected $categoryService;
    // public function __construct(Categories $categories)
    // {
    //    $this->categoryService = $categories;
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        
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

        $filterValues['min']=Product::where('instock','=', 1)->pluck('price')->min();
        if ($filterValues['min']===null) {$filterValues['min']=0;}
        $filterValues['max']=Product::where('instock','=', 1)->pluck('price')->max();
        if ($filterValues['max']===null) {$filterValues['max']=999;}
        
        if (isset($request->priceFilter)){
            session(['priceFilter'=>collect($request->priceFilter)]);
        }
        if (null ==session('priceFilter')){
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
            $allproducts = Product::where('instock','=', 1)
            ->where('price',
                '>=', 
                $filterValues['currentMin'])
            ->where('price','<=',  $filterValues['currentMax']);
            $products =   $allproducts->orderBy($orderBy, $direction)->paginate($perPage);
        }
        else{
            $allproducts = Product::where('instock','=', 1);
            $products =   $allproducts->orderBy($orderBy, $direction)->paginate($perPage);
        }
        $breadcrumb_category=collect(['name'=>'', 'slug'=>'']);
        
        return view('index', compact('products', 'allproducts','filterValues', 'breadcrumb_category'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {
        $currentproduct = Product::where('slug', '=', $slug)->first();
        $id=$currentproduct->id;

        $relatedOrderId=Order_item::where('product_id', '=', $id)->pluck('order_id');
        if($relatedOrderId->isNotEmpty()){
            $relatedOrderId=$relatedOrderId->random(1);
            // $relatedOrderId=$relatedOrderId[array_rand($relatedOrderId->toArray())];
            $relatedProductId=Order_item::where('order_id', '=', $relatedOrderId)->pluck('product_id');
            $related=Product::wherein('id',  $relatedProductId)->where('id', '!=',  $id)->take(4)->get();
            if (count($related)<4) {
                $nonrelated=Product::all()->random(4-count($related));
                $related=$related->concat($nonrelated);
            }
        } else{
            $related=Product::all()->random(4);
        }
       
        $recomend=Product::where('recommended','=', 1)->get();
        if($recomend->isNotEmpty()&&($recomend->count()>2)){
            $recomend=$recomend->random(3);
        }else{
           $recomend=Product::all()->random(3);
        }


        $gallery=json_decode($currentproduct->gallery);


        // $relatedproducts = Product::find([1, 2, 3, 4]);
        return view('singleproduct', compact( 'id', 'currentproduct', 'gallery', 'related', 'recomend'));
    }
    public function search(Request  $request)
    {
        $s=$request->s;
        $products = Product::where('instock','=', 1)->where(function($query) use ($s)
            {
                $query->where('name', 'like', '%'.$s.'%')
                      ->orWhere('description', 'like', '%'.$s.'%');
            })->paginate(15);
        return view('search', compact('products'));
    }
    public function clearFilter()
    {
        session(['priceFilter'=>null]);
    }

}

