<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');

      if (empty(session('lang_slug'))) {
        $settings = DB::table('settings')->where('default_lang',1)->first();
        $language = DB::table('language')->where('slug',$settings->language_id)->first();
        session(['lang_slug' => $language->slug, 'lang_name' => $language->name]);
      }

  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      return view('admin.home');
  }
}
