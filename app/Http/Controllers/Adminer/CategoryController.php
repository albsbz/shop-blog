<?php

namespace App\Http\Controllers\Adminer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Product_category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin2.category.index');
    }
    public function categoryData()
    {
        return Datatables::of(Product_category::query())
        // ->addColumn('roles', function(User $user){
        //     return $user->roles->pluck('name')->implode(', ');
        // })
        ->addColumn('action', function ($category) {
                return '<a href="/admin2/categories/'.$category->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>'.
                '<span class="btn btn-xs btn-danger" data-id="'.$category->id.'"><i class="glyphicon glyphicon-remove"></i>Delete</a>';
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
        $category=new Product_category;
        return view('admin2.category.edit', compact('category'));
    }

     public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|unique:product_categories|min:2|max:255',
        ]);
        $category=new Product_category;
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->description=$request->description;
        $images=explode(',', $request->imgPath);
        $category->imgPath=$images[0];
        $category->save();
        return redirect('/admin2/categories')->with ('success', 'Category Edited');

    }

    /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Product_category::find($id);
        return view('admin2.category.edit', compact('category'));

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
        $category=Product_category::find($id);
         $this->validate($request, [
            'name'=>'required|unique:product_categories,name,'.$id.'|min:5|max:255',
            'slug'=>'sometimes|nullable|required|unique:product_categories,slug,'.$category->id.'|min:2|max:32',
        ]);
        
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->description=$request->description;
        $images=explode(',', $request->imgPath);
        $category->imgPath=$images[0];
        $category->save();
        return redirect('/admin2/categories')->with ('success', 'Category Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product_category::find($id)->delete();
    }
}
