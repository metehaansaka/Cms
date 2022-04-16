<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LanguageController extends Controller
{
    public function index(Request $request)
    {
      $data['languages'] = DB::table('language')->get();
      return view('admin.Language.index',$data);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
          $keys = $request->input('key');
          $dil_adi = $request->input('dil_adi');
          $dil_on_ek = $request->input('on_ek');
          if ($request->hasFile('bayrak')) {
              $bayrak = $request->bayrak->store('');
          }else {
            $bayrak = null;
          }
          $exist = DB::table('language')->where('slug', $dil_on_ek)->exists(); // eğer kayıt varsa 1 değerini döndürecek
          if ($exist != 1) {
              DB::table('language')->insert([
                'name' => $dil_adi,
                'slug' => $dil_on_ek,
                'image' => $bayrak
              ]);
              // Settings tablosuna bir satır ekliyor
              DB::table('settings')->insert([
                'language_id' => $dil_on_ek
              ]);

              //keyler ve degerler
              foreach ($keys as $key => $value) {
                $deger = $request->input("deger")[$key];

                    if (!empty($value)) {

                      DB::table('language_value')->insert([
                        'language_slug' => $dil_on_ek,
                        'language_key' => $value,
                        'language_value' => $deger
                      ]);

                    }
              }

              return redirect()->back()->with('success','Kayıt Başarıyla Eklendi');
          }else {
            return redirect()->back()->with('error','Bu Kayıt Zaten Var!');
          }


        }
        return view('admin.Language.create');
    }

    public function edit(Request $request,$id)
    {

      if ($request->isMethod('post')) {
        $keys = $request->input('key');
        $dil_adi = $request->input('dil_adi');
        $dil_on_ek = $request->input('on_ek');
        $bayrak_old = DB::table('language')->where("id",$id)->first();
        if ($request->hasFile('bayrak')) {
            Storage::delete($bayrak_old->image);
            $bayrak = $request->bayrak->store('');
        }else {
          $bayrak = $bayrak_old->image;
        }

            DB::table('language')->where('id',$id)->update([
              'name' => $dil_adi,
              'slug' => $dil_on_ek,
              'image' => $bayrak
            ]);

            //keyler ve degerler
            foreach ($keys as $key => $value) {
              $deger = $request->input("deger")[$key];

                  if (!empty($value)) {

                    DB::table('language_value')->updateOrInsert([
                      'id' => $key
                    ],[
                      'language_slug' => $dil_on_ek,
                      'language_key' => $value,
                      'language_value' => $deger
                    ]);

                  }else {
                    DB::table('language_value')->where('id',$key)->delete();
                  }
            }

            return redirect()->back()->with('success','Kayıt Başarıyla Eklendi');



      }

      $data['language'] = DB::table('language')->where("id",$id)->first();
      $data['language_keys'] = DB::table('language_value')->where("language_slug",$data['language']->slug)->get();
      return view('admin.Language.edit',$data);
    }

    public function delete(Request $request,$id)
    {

      if ($request->get('img')) {
        $bayrak_old = DB::table('language')->where("id",$id);
        Storage::delete($bayrak_old->first()->image);
        $bayrak_old->update([
          'image' => null
        ]);
        return redirect()->back()->with('success','Resim Başarıyla Silindi');
      }else {
        $query = DB::table('language')->where("id",$id);
        Storage::delete($query->first()->image);
        DB::table('language_value')->where("language_slug",$query->first()->slug)->delete();
        $query->delete();
        return redirect()->back()->with('success','Kayıt Başarıyla Silindi');
      }

    }
}
