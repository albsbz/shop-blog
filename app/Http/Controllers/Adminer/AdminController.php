<?php

namespace App\Http\Controllers\Adminer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function index(){


        // $directories = Storage::directories('public/photos/shares/products/');
        // foreach ($directories as $directory) { 
        //     $directory = implode('/', array_slice(explode ('/',$directory), 1));
        //     $name=str_random(5);
        //     $mainPath=asset('storage/public/'.$directory.'/');
        //     $mainImg=asset('storage/public/'.implode('/', array_slice(explode ('/',Storage::files('public/'.$directory.'/')['0']), 1)));
        //     $gallery=Storage::files('public/'.$directory.'/gallery');
        //     foreach($gallery as $key=>$galImg){
        //         $gallery[$key]=asset('storage/public/'.implode('/', array_slice(explode ('/',$galImg), 1)));
        //     }
           
        //     $galImgs=implode(', ', $gallery);
           
        // }
         return view('admin2.index');
    }
}
//try