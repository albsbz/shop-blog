<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Product_category; 

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('roles')->insert([
            'name' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'test@test.com',
            'password' => bcrypt('testtest')
        ]);
        DB::table('users_roles')->insert([
            'user_id' => '1',
            'role_id' => '1'
        ]);
		
		$ids = Product_category::withDepth()->having('depth', '=', 1)->get()->pluck('id');
        $faker = Faker\Factory::create();
		foreach ($ids as $value) {
			$ids2[]=$value;
        }
        $directories = Storage::disk('publiclfm')->directories('files/shares/');
        foreach ($directories as $directory) { 
            $category=$ids2[array_rand($ids2)];
              $directory = implode('/', array_slice(explode ('/',$directory), 1));
            $name=($faker->word).str_random(3);

            $mainImg=asset('uploads/'.Storage::disk('publiclfm')->files('files/'.$directory.'/')[0]);  
            $gallery=Storage::disk('publiclfm')->files('files/'.$directory.'/');
             foreach($gallery as $key=>$galImg){
                   
                        $gallery[$key]=asset('uploads/'.$galImg);

                   
                        
                    
                }
                array_splice($gallery,0,1);

            $product= DB::table('products')->insert([
                'category_id' => $category,
                'slug' => $name,
                'name' => $name,
                'imgPath' =>  $mainImg,
                'gallery' => json_encode($gallery),
                'price' => mt_rand(100, 10000)/100,
                'description'=>$faker->text(600),
                'recommended'=> mt_rand(0, 1)
            ]);
        }
        for ($i=0; $i < 10; $i++) { 
                DB::table('testimonials')->insert([
                'text' => $faker->text(50),
                'author' => $faker->word
            ]);
        }
  
         

    }
}

