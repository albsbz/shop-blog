<?php

namespace App\Http\Controllers\Adminer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Article;
use App\Article_category;



class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin2.article.index');
    }
    public function articleData()
    {
        $articles=Article::select(['id', 'header', 'imgPath', 'category_id', 'slug']);

        return Datatables::of($articles)
     
        ->addColumn('action', function ($article) {
                return '<a href="/admin2/articles/'.$article->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>'.
                '<span class="btn btn-xs btn-danger" data-id="'.$article->id.'"><i class="glyphicon glyphicon-remove"></i>Delete</a>';
        })
        ->addColumn('category', function($article){
            return $article->category?$article->category->name:'';
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
        $categories=Article_category::pluck('name', 'id');
        $article=new Article;
        return view('admin2.article.edit', compact('article', 'categories'));
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
            'header'=>'required|unique:articles|min:2|max:32',
        ]);
        $article=new Article;
        $article->header=$request->header;
        $article->slug=$request->slug;
        $article->category_id=$request->category_id;
        $article->text=$request->text;
        $images=explode(', ', $request->imgPath);
        $article->imgPath=$images[0];
        $article->gallery=$request->gallery;

        $article->save();
        return redirect('/admin2/articles')->with ('success', 'Article Edited');
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
        $article=Article::find($id);
        $categories=Article_category::pluck('name', 'id');
        return view('admin2.article.edit', compact('article', 'categories'));
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
        $article=Article::find($id);
             $this->validate($request, [
            'header'=>'required|unique:articles,header,'.$article->id.'|min:2|max:32',
            'slug'=>'sometimes|nullable|required|unique:articles,slug,'.$article->id.'|min:2|max:32',
        ]);
        $article->header=$request->header;
        $article->slug=$request->slug;
        $article->category_id=$request->category_id;
        $article->text=$request->text;
        $images=explode(',', $request->imgPath);
        $article->imgPath=$images[0];

        $article->gallery=json_encode( explode(',', $request->gallery) );
        $article->save();
        return redirect('/admin2/articles')->with('success', 'Article Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::find($id)->delete();
    }
}
