<?php

namespace App\Http\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminGenerator extends Controller
{
    public static function LanguageList()
    {
      $languageList = DB::table('language')->get();
      return $languageList;
    }
}
