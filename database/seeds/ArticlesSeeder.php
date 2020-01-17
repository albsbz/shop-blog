<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Article_category; 

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('article_categories')->insert([
            ['name' => 'Offers','slug' => 'offers'],
            ['name' => 'Shipping info','slug' => 'shipping-info'],
            ['name' => 'Information','slug' => 'information'],
            ['name' => 'About us','slug' => 'about-us'],
        ]);
        $faker = Faker\Factory::create();
        $ids = Article_category::all()->pluck('id');
		foreach ($ids as $category_id) {
			for ($i=0; $i < 5; $i++) { 
                $header=($faker->word).str_random(3);;
                $article= DB::table('articles')->insert([
                    'category_id' => $category_id,
                    'slug' => $header,
                    'header' => $header,
                    'text' =>  $faker->text(1000),
                ]);
            }
        }
        DB::table('contacts')->insert([
            [
                'address' => '69000, Ukraine, Zaporizhzhya, Sobornye, 1',
                'phone' => '+38(999)99-99-99',
                'email' => 'test@test.com',
                'text' => 'Welcome to our shop!',
                'shorttext' => 'Welcome to our shop! best shop of all shops',
                'shopname' => 'Best Shop',
                'description' => 'Best clothes shop all over the world freeshipping',
                'keywords' => 'shop clothes new collection 2019',
                'mapsrc'=> 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d8501.437318596923!2d35.135520251948435!3d47.84375884168317!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1541447194463'
            ]
        ]);
    }
}

