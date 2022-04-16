<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

function jsonDecoder($source,$key)
{
  if (isset(json_decode($source,true)[$key])) {
    return json_decode($source,true)[$key];
  }else {
    return null;
  }
}

function TextToJson($file){
    $file_name = explode('.',$file)[0];
    return asset('misc/json/'.$file_name.'.json');
}

function Settings($lang){
    return DB::table('settings')
    ->where('language_id',$lang)
    ->first();
}

function jsonDecoderById($id,$lang,$key = 0)
{
  $source = DB::table("category_language")
  ->where("category_id",$id)
  ->where("language_slug",$lang)
  ->first()
  ->special_fields;
  if (isset(json_decode($source,true)[$key])) {
    return json_decode($source,true)[$key];
  }else {
    return null;
  }
}

function SpecialBlocks($block_id)
{
  return DB::table('special_blocks')->where('id',$block_id)->first();
}

function Tarih($timestamp)
{
  setlocale(LC_TIME, 'tr_TR.UTF-8');
  date_default_timezone_set('Europe/Istanbul');
  $aylar = array(
      '0',
      'Ocak',
      'Şubat',
      'Mart',
      'Nisan',
      'Mayıs',
      'Haziran',
      'Temmuz',
      'Ağustos',
      'Eylül',
      'Ekim',
      'Kasım',
      'Aralık'
  );

  $dayofweek = date('w',$timestamp);
  $ay = date('n',$timestamp);
  $trAy = $aylar[$ay];
  return date('j',$timestamp)." ".$trAy." ".date('Y',$timestamp);
  //return date('d.m.Y',$timestamp);
}

function getDefaultLanguage()
{
  $settings = DB::table('settings')->where('default_lang',1)->first();
  return $settings->language_id;
}

function getCategoryByParent($parent_id,$lang){
  return DB::table("category")
    ->join('category_language','category.id','=','category_language.category_id')
    ->select(
      'category.*',
      'category_language.name',
      'category_language.description',
      'category_language.contents',
      'category_language.image as language_image',
      'category_language.image2 as language_image2',
      'category_language.image3 as language_image3',
      'category_language.image_info as language_image_info',
      'category_language.special_fields'
      )
    ->where("category.parent_id",$parent_id)
    ->where('category_language.language_slug',$lang)
    ->orderBy("category.sorted","asc")
    ->get();
}


function getCategoryByParentWithPagination($page_size,$parent_id,$lang){
    return DB::table("category")
        ->join('category_language','category.id','=','category_language.category_id')
        ->select(
            'category.*',
            'category_language.name',
            'category_language.description',
            'category_language.contents',
            'category_language.image as language_image',
            'category_language.image2 as language_image2',
            'category_language.image3 as language_image3',
            'category_language.image_info as language_image_info',
            'category_language.special_fields'
        )
        ->where("category.parent_id",$parent_id)
        ->where('category_language.language_slug',$lang)
        ->orderBy("category.sorted","asc")
        ->paginate($page_size);
}

function getCategoryByParentByLimit($limit,$parent_id,$lang){
    return DB::table("category")
        ->join('category_language','category.id','=','category_language.category_id')
        ->select(
            'category.*',
            'category_language.name',
            'category_language.description',
            'category_language.contents',
            'category_language.image as language_image',
            'category_language.image2 as language_image2',
            'category_language.image3 as language_image3',
            'category_language.image_info as language_image_info',
            'category_language.special_fields'
        )
        ->where("category.parent_id",$parent_id)
        ->where('category_language.language_slug',$lang)
        ->orderBy("category.sorted","asc")
        ->limit($limit)
        ->get();
}

function getCategoryLanguage($id,$slug)
{
  $settings = DB::table("settings")->where("default_lang",1)->first();
  if (empty($slug)) {
    $slug = $settings->language_id;
  }
  $result = DB::table("category_language")->where("category_id",$id)->where("language_slug",$slug)->first();
  if ($result) {
    return $result;
  }else {
    return null;
  }
}


function getCategory($id)
{
    return DB::table("category")->where("id",$id)->first();
}

function getCategoryLanguageByValue($id,$slug,$value)
{
  $settings = DB::table("settings")->where("default_lang",1)->first();
  if (empty($slug)) {
    $slug = $settings->language_id;
  }
  $result = DB::table("category_language")->where("category_id",$id)->where("language_slug",$slug)->first();
  if ($result) {
    return $result->$value;
  }else {
    return null;
  }
}

function menu($lang,$parent_id = 1)
{
  $menuler = DB::table("category")
  ->join('category_language','category.id','=','category_language.category_id')
  ->select(
      'category.*',
      'category_language.name'
      )
  ->where([
    ["category.parent_id","=",$parent_id],
    ["category.top_menu","=","1"],
    ['category_language.language_slug',$lang]
    ])
    ->orderBy("category.sorted","asc")
    ->get();
  return $menuler;
}

function taxonomy($category_id,$language_slug = null)
{
  $lang_prefix = "/".$language_slug."/";
  $settings = DB::table("settings")->where("default_lang",1)->first();
  if ($language_slug == null or $language_slug == $settings->language_id) {
    $language_slug = $settings->language_id;
    $lang_prefix = "";
  }
  $taxonomy = DB::table("taxonomy")->where([
    ["category_id","=",$category_id],
    ["language_slug","=",$language_slug]
  ])->first();

  $count =  $taxonomy->count ? "-".$taxonomy->count : "";
  $category = DB::table("category")->where("id",$taxonomy->category_id)->first();
  if ($category->url) {
      // url numeric ise
      if(is_numeric($category->url)){
        $getUrl = DB::table("category")->where("id",$category->url)->first();
        $taxonomy = DB::table("taxonomy")->where([
            ["category_id","=",$getUrl->id],
            ["language_slug","=",$language_slug]
          ])->first();
        $count =  $taxonomy->count ? "-".$taxonomy->count : "";
        return $lang_prefix."".$taxonomy->slug."".$count;
      }else{
        return $category->url;
    }
  }else {
    return $lang_prefix."".$taxonomy->slug."".$count;
  }

}

function taxonomyIdUrl($category_id,$language_slug = null)
{
    $lang_prefix = "/".$language_slug;
    $settings = DB::table("settings")->where("default_lang",1)->first();
    if ($language_slug == null or $language_slug == $settings->language_id) {
        $language_slug = $settings->language_id;
        $lang_prefix = "";
    }
    $taxonomy = DB::table("taxonomy")->where([
        ["category_id","=",$category_id],
        ["language_slug","=",$language_slug]
    ])->first();

    $count =  $taxonomy->count ? "-".$taxonomy->count : "";
    $category = DB::table("category")->where("id",$taxonomy->category_id)->first();
    if ($category->url) {
        return $lang_prefix."#".$category->url;
    }else {
        if (\Illuminate\Support\Facades\Request::url() == \Illuminate\Support\Facades\URL::to("/")){
            return "#".$taxonomy->slug."".$count;
        }else{
            if($lang_prefix == ""){
                $lang_prefix = "/en";
            }
            return $lang_prefix."#".$taxonomy->slug."".$count;
        }
    }

}

function taxonomyId($category_id,$language_slug = null)
{
    $lang_prefix = "/".$language_slug."/";
    $settings = DB::table("settings")->where("default_lang",1)->first();
    if ($language_slug == null or $language_slug == $settings->language_id) {
        $language_slug = $settings->language_id;
        $lang_prefix = "";
    }
    $taxonomy = DB::table("taxonomy")->where([
        ["category_id","=",$category_id],
        ["language_slug","=",$language_slug]
    ])->first();

    $count =  $taxonomy->count ? "-".$taxonomy->count : "";
    $category = DB::table("category")->where("id",$taxonomy->category_id)->first();
    if ($category->url) {
        return $category->url;
    }else {
        return $taxonomy->slug;
    }

}


function getLanguage($key,$slug)
{
  $settings = DB::table('settings')->where('default_lang',1)->first();
  if (empty($slug)) {
    $slug = $settings->language_id;
  }
  $lang_value = DB::table("language_value")->where([
    ["language_slug","=",$slug],
    ["language_key","=",$key]
  ]);
  if ($lang_value->exists()) {
    return $lang_value->first()->language_value;
  }else {
    return $key;
  }
}

function getFormLanguage($id,$language_slug = null)
{
    $settings = DB::table("settings")->where("default_lang",1)->first();
    if ($language_slug == null or $language_slug == $settings->language_id) {
        $language_slug = $settings->language_id;
        $lang_prefix = "";
    }
    $form = DB::table("form_language")->where([
        ["form_id","=",$id],
        ["language_slug","=",$language_slug]
    ])->first();
    return $form;
}

function getFormValues($id,$language_slug = null)
{
    $settings = DB::table("settings")->where("default_lang",1)->first();
    if ($language_slug == null or $language_slug == $settings->language_id) {
        $language_slug = $settings->language_id;
        $lang_prefix = "";
    }
    $form = DB::table("form_fields_language")->where([
        ["fields_id","=",$id],
        ["language_slug","=",$language_slug]
    ])->first();
    return $form;
}

function getMailsTo($id)
{
    $mails = DB::table("form")->where([
        ["id","=",$id]
    ])->first();
    $mails = explode(",",$mails->email);
    return $mails;
}

function getExtensionOf($filename)
{
  $arr = explode(".",$filename);
  return end($arr);
}
