<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $product_categories = [
            [
                'name' => 'shoes','slug' => 'shoes',
                    'children' => [
                        [    
                            'name' => 'man shoes','slug' => 'man-shoes'
                            
                        ],
                        [    
                            'name' => 'woman shoes','slug' => 'woman-shoes'
                        ],
                    ],
                ],
                [
                    'name' => 'clothes', 'slug' => 'clothes',
                        'children' => [
                        [
                            'name' => 'man clothes','slug' => 'man-clothes'
                        ],
                        [
                            'name' => 'woman clothes','slug' => 'woman-clothes'
                        ],
                    ],
                ],
                  [
                    'name' => 'accessories','slug' => 'accessories',
                        'children' => [
                        [
                            'name' => 'man accessories','slug' => 'man-accessories'
                            
                        ],
                        [
                           'name' => 'woman accessories','slug' => 'woman-accessories'
                        ],
                    ],
                ],
        ];
        foreach($product_categories as $product_category)
        {
            \App\Product_category::create($product_category);
        }
    }
}
