<?php

namespace App\Http\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class WebGenerator extends Controller
{
  static function getSingleCategory($id)
  {
    return DB::table("category")->where("id",$id)->first();
  }

  static function getCategoryByParent($parent_id)
  {
    return DB::table("category")->where("parent_id",$parent_id)->orderBy("sorted","asc")->get();
  }

  static function getCategoryByBlockid($parent_id,$block_id)
  {
    $cat = DB::table("category")->where("parent_id",$parent_id)->where("block_id",$block_id)->get();
    if ($cat) {
      return $cat;
    }else {
      return null;
    }
  }
}
