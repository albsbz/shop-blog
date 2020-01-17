<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // \Log::info($row[10]);
        // return new Product([
        // 'name' =>  $row[6],
        // 'slug' => $row[10],
        // 'category_id' =>  $row[3],
        // 'description' =>  $row[8],
        // 'price' =>  $row[7],
        // // 'slug' =>  Product::setSlugAttribute($row[6])
        // ]);
       
        $product = new Product;
        $product->name = $row[6];
        $product->slug = $row[10];
        // $product->slug =$product->setSlugAttribute($row[6]);
        $product->category_id = $row[3];
        $product->description = $row[8];
        $product->price = $row[7];
        return $product;
    }
}
