<?php

namespace App\Http\Controllers\Adminer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Review;
use App\User;
use App\Product;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin2.review.index');
    }
    public function reviewData()
    {
        $reviews=Review::select(['id', 'product_id', 'user_id', 'text', 'rating']);
        return Datatables::of($reviews)
        ->addColumn('user_name', function ($review) {
            return User::find($review->user_id)->name;
        })
        ->addColumn('product_name', function ($review) {
            return Product::find($review->product_id)->name;
        })
        ->addColumn('action', function ($review) {
                return '<a href="/admin2/reviews/'.$review->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>'.
                '<span class="btn btn-xs btn-danger" data-id="'.$review->id.'"><i class="glyphicon glyphicon-remove"></i>Delete</a>';
        })
        ->make(true);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     $categories=Article_category::pluck('name', 'id');
    //     $article=new Article;
    //     return view('admin2.article.edit', compact('article', 'categories'));
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
    //         'header'=>'required|unique:articles|min:2|max:32',
    //     ]);
    //     $article=new Article;
    //     $article->header=$request->header;
    //     $article->slug=$request->slug;
    //     $article->category_id=$request->category_id;
    //     $article->text=$request->text;
    //     $images=explode(', ', $request->imgPath);
    //     $article->imgPath=$images[0];
    //     $article->gallery=$request->gallery;

    //     $article->save();
    //     return redirect('/admin2/articles')->with ('success', 'Article Edited');
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

     // * Show the form for editing the specified resource.
     // *
     // * @param  int  $id
     // * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        $review=Review::find($id);
        $ratings=[1=>'1', 2=>'2', 3=>'3', 4=>'4' ,5=>'5'];
        return view('admin2.review.edit', compact('review', 'ratings'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {
        $review=Review::find($id);
             $this->validate($request, [
            'text'=>'required',
        ]);
        $review->text=$request->text;
        $review->rating=$request->rating;
        $review->save();
        return redirect('/admin2/reviews')->with('success', 'Review Edited');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        Review::find($id)->delete();
    }
}
