<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class AjaxController extends Controller
{
    public function textToJson(Request $request, $name)
    {
        if(Storage::exists($name.'.txt')){
            $file = Storage::get($name.'.txt');
            //return $lrTxt;
            return response($file,200)->header('Content-Type','application/json');
        }else{
            return abort(404);
        }
    }
}
