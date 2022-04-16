<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(Request $request,$slug,$language_slug,$tax)
    {
        $category = Category::find($tax->category_id);
        $category_language = DB::table('category_language')
            ->where('category_id',$category->id)
            ->where('language_slug',$language_slug)
            ->first();
        return view('web.projeler.index',[
            'slug' => $slug,
            'language_slug' => $language_slug,
            'pages' => $category,
            'pages_language' => $category_language
        ]);
    }

    public function list(Request $request,$slug,$language_slug,$tax)
    {
        $category = Category::find($tax->category_id);
        $category_language = DB::table('category_language')
            ->where('category_id',$category->id)
            ->where('language_slug',$language_slug)
            ->first();
        return view('web.projeler.list',[
            'slug' => $slug,
            'language_slug' => $language_slug,
            'pages' => $category,
            'pages_language' => $category_language
        ]);
    }
}
