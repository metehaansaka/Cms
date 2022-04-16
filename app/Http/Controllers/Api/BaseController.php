<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BaseController extends Controller
{
    public function index(Request $request)
    {
      $language_slug = $request->language_id;
      $slug = $request->slug;
      if (empty($language_slug)) {
        $language_slug = getDefaultLanguage();
      }

      $getTaxonomy = DB::select("select * from taxonomy where CONCAT_WS('-',slug,count) = '$slug' and language_slug = '$language_slug'");
      if ($getTaxonomy) {

        return \App::call('App\Http\Controllers\Api\\'.$getTaxonomy[0]->controller, [
          'slug' => $slug,
          'language_slug' => $language_slug,
          'tax' => $getTaxonomy[0]
        ]);

      }else {
        if (empty($slug)) {
          return view('web.index.index',[
            'language_slug' => $language_slug
          ]);
        }else {
          if (DB::table('language')->where('slug',$slug)->doesntExist()) {
            abort(404);
          }else {
            return view('web.index.index',[
              'language_slug' => $slug
            ]);
          }
        }
      }

    }
}
