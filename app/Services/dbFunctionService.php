<?php
namespace App\Services;
use Illuminate\Support\Facades\DB;

class Categories {

  public function getCategories()  {
    $cats=DB::table('product_categories')->pluck('name', 'id');
    return $cats;
  }
}

