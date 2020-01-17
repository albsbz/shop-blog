<?php

namespace App\Http\ViewComposers;
use App\Testimonial; 
use Illuminate\View\View;

class TestimonialComposer
{
  /**
   * Реализация пользовательского репозитория.
   *
   * @var UserRepository
   */

  protected $testimonials;

  /**
   * Создание построителя нового профиля.
   *
   * @param  UserRepository  $users
   * @return void
   */
  public function __construct()
  {
    $testimonials=Testimonial::all();
    $this->testimonials=$testimonials;
  }

  public function compose(View $view)
  {
    $view->with('testimonials', $this->testimonials);
  }

}