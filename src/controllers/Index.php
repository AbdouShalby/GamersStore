<?php
namespace Controllers;

class Index
{
  public function home()
  {
    view('front/home');
  }

  public function about()
  {
    view('front/about');
  }

  public function products()
  {
    view('front/products');
  }

  public function contact()
  {
    view('front/contact');
  }

  public function terms()
  {
    view('front/terms');
  }

  public function login()
  {
    view('front/login');
  }

	public function signup()
  {
    view('front/signup');
  }

	public function forgot()
  {
    view('front/forgot');
  }
}