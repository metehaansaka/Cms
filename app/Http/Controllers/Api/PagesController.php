<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index(Request $request,$slug,$language_slug,$tax)
    {
        $page = DB::table("category")
        ->join('category_language','category.id','=','category_language.category_id')
        ->join('special_blocks','category.block_id','=','special_blocks.id')
        ->select(
        'category.*',
        'category_language.name',
        'category_language.description',
        'category_language.contents',
        'category_language.image as language_image',
        'category_language.image2 as language_image2',
        'category_language.image3 as language_image3',
        'category_language.image_info as language_image_info',
        'category_language.special_fields',
        'special_blocks.block_key'
        )
        ->where("category.status",1)
        ->where("category.id",$tax->category_id)
        ->where('category_language.language_slug',$language_slug)
        ->first();

        $page->image_info = json_decode($page->image_info,true);
        $page->language_image_info = json_decode($page->language_image_info,true);
        $page->special_fields = json_decode($page->special_fields,true);

        $block_key = explode('@',$page->block_key);
        $page->block_key = Str::lower(str_replace('Controller','',$block_key[0]));
        $page->page = $block_key[1];

        return response()->json($page);
    }
}
