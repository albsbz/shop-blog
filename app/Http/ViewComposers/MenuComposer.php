<?php

namespace App\Http\ViewComposers;
// use Illuminate\Support\Facades\DB;
use App\Product_category; 
use App\Article_category; 
use App\Contact; 

//для версии 5.2 и выше:
use Illuminate\View\View;
// use App\Repositories\UserRepository;

//для версии 5.1 и ранее:
//use Illuminate\Contracts\View\View;
//use Illuminate\Users\Repository as UserRepository;

class MenuComposer
{
  /**
   * Реализация пользовательского репозитория.
   *
   * @var UserRepository
   */
  // protected $users;
  protected $categories;
  protected $articleCategories;
  protected $contacts;

  /**
   * Создание построителя нового профиля.
   *
   * @param  UserRepository  $users
   * @return void
   */
  public function __construct()
  {
    // Зависимости автоматически извлекаются сервис-контейнером...


    // $cats=DB::table('product_categories')->pluck('name', 'id');

    $cats=Product_category::withDepth()->having('depth', '=', 0)->get();
     $contacts=Contact::first();
    $art_cats=Article_category::all();
    $this->categories=$cats;
    $this->articleCategories=$art_cats;
    $this->contacts=$contacts;
  }

  // /**
  //  * Привязка данных к представлению.
  //  *
  //  * @param  View  $view
  //  * @return void
  //  */
  public function compose(View $view)
  {
    $view->with('mainCategories', $this->categories);
    $view->with('articleCategories', $this->articleCategories);
    $view->with('contacts', $this->contacts);
    // $view->with('categories', 123);
  }


}