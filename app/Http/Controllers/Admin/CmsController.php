<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CmsController extends Controller
{
    public function index(Request $request,$id)
    {
      $slug = session('lang_slug');
      $lang_name = session('lang_name');

      $cms = DB::select("select * from category as c inner join category_language as cl on c.id = cl.category_id and c.parent_id='$id' and cl.language_slug='$slug' order by c.sorted ASC");
      $category = DB::table('category')->where('id',$id)->first();
      return view('admin.Cms.index',[
        'cms' => $cms,
        'lang_name' => $lang_name,
        'category' => $category
      ]);
    }

    public function create(Request $request,$parent_id)
    {
      $slug = session('lang_slug');
      $lang_name = session('lang_name');
      $current_time = \Carbon\Carbon::now()->timestamp;


      if ($request->isMethod('post')) {
        if ($request->input('top_menu')) {
          $top_menu = $request->input('top_menu');
        }else {
          $top_menu = 0;
        }

        if ($request->input('home_page')) {
          $home_page = $request->input('home_page');
        }else {
          $home_page = 0;
        }

        $imginfo = array(
            "image" => array("name" => null, "desc" => null, "alt" => null),
            "image2" => array("name" => null, "desc" => null, "alt" => null),
            "image3" => array("name" => null, "desc" => null, "alt" => null)
        );
        if ($request->hasFile('category_image')) {
          $size = $request->category_image->getSize();
          if ($size <= 5242880) {
            if ($request->ci_info["name"]) {
              $category_image = $request->category_image->storeAs('',$request->ci_info["name"].".".$request->category_image->extension());
            }else {
              $category_image = $request->category_image->store('');
            }
            $imginfo["image"] = $request->ci_info;
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya: '. ($size / 1048576).'MB' );
          }
        }else {
          $category_image = null;
        }

        if ($request->hasFile('category_image2')) {
          $size = $request->category_image2->getSize();
          if ($size <= 5242880) {
            if ($request->ci2_info["name"]) {
              $category_image2 = $request->category_image2->storeAs('',$request->ci2_info["name"].".".$request->category_image2->extension());
            }else {
              $category_image2 = $request->category_image2->store('');
            }

            $imginfo["image2"] = $request->ci2_info;
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya:'. ($size / 1048576).'MB' );
          }
        }else {
          $category_image2 = null;
        }

        if ($request->hasFile('category_image3')) {
          $size = $request->category_image3->getSize();
          if ($size <= 5242880) {
            if ($request->ci2_info["name"]) {
              $category_image3 = $request->category_image3->storeAs('',$request->ci3_info["name"].".".$request->category_image3->extension());
            }else {
              $category_image3 = $request->category_image3->store('');
            }
            $imginfo["image3"] = $request->ci3_info;
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya:'. ($size / 1048576).'MB' );
          }
        }else {
          $category_image3 = null;
        }

        // category_language images
        $cl_image_info = array(
            "image" => array("name" => null, "desc" => null, "alt" => null),
            "image2" => array("name" => null, "desc" => null, "alt" => null),
            "image3" => array("name" => null, "desc" => null, "alt" => null)
        );
        if ($request->hasFile('language_image')) {
          $size = $request->language_image->getSize();
          if ($size <= 5242880) {
            if ($request->cl_info["name"]) {
              $language_image = $request->language_image->storeAs('',$request->cl_info["name"].".".$request->language_image->extension());
            }else {
              $language_image = $request->language_image->store('');
            }
            $cl_image_info["image"] = $request->cl_info;
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya:'. ($size / 1048576).'MB' );
          }
        }else {
          $language_image = null;
        }

        if ($request->hasFile('language_image2')) {
          $size = $request->language_image2->getSize();
          if ($size <= 5242880) {
            if ($request->cl_info2["name"]) {
              $language_image2 = $request->language_image2->storeAs('',$request->cl_info2["name"].".".$request->language_image2->extension());
            }else {
              $language_image2 = $request->language_image2->store('');
            }
            $cl_image_info["image2"] = $request->cl_info2;
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya:'. ($size / 1048576).'MB' );
          }
        }else {
          $language_image2 = null;
        }

        if ($request->hasFile('language_image3')) {
          $size = $request->language_image3->getSize();
          if ($size <= 5242880) {
            if ($request->cl_info3["name"]) {
              $language_image3 = $request->language_image3->storeAs('',$request->cl_info3["name"].".".$request->language_image3->extension());
            }else {
              $language_image3 = $request->language_image3->store('');
            }
            $language_image3 = $request->language_image3->store('');
            $cl_image_info["image3"] = $request->cl_info3;
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya:'. ($size / 1048576).'MB' );
          }
        }else {
          $language_image3 = null;
        }

        $category_id = DB::table('category')->insertGetId([
          'image' => $category_image,
          'image2' => $category_image2,
          'image3' => $category_image3,
          'image_info' => json_encode($imginfo),
          'sorted' => $request->input('sorted'),
          'create_time' => $current_time,
          'block_id' => $request->input('category'),
          'form_id' => $request->input('form_id'),
          'status' => $request->input('status'),
          'parent_id' => $parent_id,
          'top_menu' => $top_menu,
          'url' => $request->input('url'),
          'home_page' => $home_page
        ]);

        $controller = DB::table('special_blocks')->where('id',$request->input('category'))->first()->block_key;
        $name_slug = str_slug($request->input('name'),'-');
        foreach (DB::table('language')->get() as $key => $language) {
          DB::table('category_language')->insert([
            'category_id' => $category_id,
            'language_slug' => $language->slug,
            'name' => $request->input('name'),
            'image' => $language_image,
            'image2' => $language_image2,
            'image3' => $language_image3,
            'image_info' => json_encode($cl_image_info),
            'seo_title' => $request->input('seo_title'),
            'seo_description' => $request->input('seo_description'),
            'seo_keywords' => $request->input('seo_keywords'),
            'description' => $request->input('description'),
            'contents' => $request->input('contents'),
            'special_fields' => json_encode($request->input('ozelalan'))
          ]);

          if (DB::table('taxonomy')->where('slug',$name_slug)->where('language_slug',$language->slug)->exists()) {
            $count = $category_id;
          }else {
            $count = null;
          }
          DB::table('taxonomy')->insert([
            'category_id' => $category_id,
            'slug' => $name_slug,
            'language_slug' => $language->slug,
            'count' => $count,
            'controller' => $controller
          ]);
        }

        return redirect()->route('CMS Yönetimi', ['id' => $parent_id])->with('success','Başarıyla Kaydedildi.');

      }

      $kategoriler = DB::table('special_blocks')->get();
      $forms = DB::select("select * from form inner join form_language on form.id=form_language.form_id and form_language.language_slug='$slug'");
      return view('admin.Cms.create',[
        'kategoriler' => $kategoriler,
        'forms' => $forms,
        'parent_id' => $parent_id
      ]);
    }

    public function edit(Request $request,$id)
    {
      $slug = session('lang_slug');
      $lang_name = session('lang_name');
      $current_time = \Carbon\Carbon::now()->timestamp;

      if ($request->isMethod('post')) {
        if ($request->input('top_menu')) {
          $top_menu = $request->input('top_menu');
        }else {
          $top_menu = 0;
        }

        if ($request->input('home_page')) {
          $home_page = $request->input('home_page');
        }else {
          $home_page = 0;
        }

        $imginfo = array();
        $eski1 = DB::table('category')->where('id',$id)->first()->image;
        if ($request->hasFile('category_image')) {
          $size = $request->category_image->getSize();
          if ($size <= 5242880) {
            Storage::delete($eski1);
            if ($request->ci_info["name"]){
              $category_image = $request->category_image->storeAs('',$request->ci_info["name"].".".$request->category_image->extension());
            }else {
              $category_image = $request->category_image->store('');
            }
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya: '. ($size / 1048576).'MB' );
          }
        }else {
          if ($request->ci_info["name"] and $request->ci_info["name"] != explode(".",$eski1)[0] ) {
            $category_image = $request->ci_info["name"].".".explode(".",$eski1)[1];
            Storage::move($eski1,$category_image);
          }else {
            $category_image = $eski1;
          }
        }
        $imginfo["image"] = $request->ci_info;

        $eski2 = DB::table('category')->where('id',$id)->first()->image2;
        if ($request->hasFile('category_image2')) {
          $size = $request->category_image2->getSize();
          if ($size <= 5242880) {
            Storage::delete($eski2);
            if ($request->ci2_info["name"]){
              $category_image2 = $request->category_image2->storeAs('',$request->ci2_info["name"].".".$request->category_image2->extension());
            }else {
              $category_image2 = $request->category_image2->store('');
            }
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya:'. ($size / 1048576).'MB' );
          }
        }else {
          if ($request->ci2_info["name"] and $request->ci2_info["name"] != explode(".",$eski2)[0]) {
            $category_image2 = $request->ci2_info["name"].".".explode(".",$eski2)[1];
            Storage::move($eski2,$category_image2);
          }else {
            $category_image2 = $eski2;
          }
        }
        $imginfo["image2"] = $request->ci2_info;

        $eski3 = DB::table('category')->where('id',$id)->first()->image3;
        if ($request->hasFile('category_image3')) {
          $size = $request->category_image3->getSize();
          if ($size <= 5242880) {
            Storage::delete($eski3);
            if ($request->ci3_info["name"]) {
              $category_image3 = $request->category_image3->storeAs('',$request->ci3_info["name"].".".$request->category_image3->extension());
            }else {
              $category_image3 = $request->category_image3->store('');
            }
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya:'. ($size / 1048576).'MB' );
          }
        }else {
          if ($request->ci3_info["name"] and $request->ci3_info["name"] != explode(".",$eski3)[0]) {
            $category_image3 = $request->ci3_info["name"].".".explode(".",$eski3)[1];
            Storage::move($eski3,$category_image3);
          }else {
            $category_image3 = $eski3;
          }
        }
        $imginfo["image3"] = $request->ci3_info;

        // category_language images
        $cl_image_info = array();
        $langimage_eski1 = DB::table('category_language')->where('category_id',$id)->where('language_slug',$slug)->first()->image;
        if ($request->hasFile('language_image')) {
          $size = $request->language_image->getSize();
          if ($size <= 5242880) {
            Storage::delete($langimage_eski1);
            if ($request->cl_info["name"]) {
              $language_image = $request->language_image->storeAs('',$request->cl_info["name"].".".$request->language_image->extension());
            }else {
              $language_image = $request->language_image->store('');
            }
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya:'. ($size / 1048576).'MB' );
          }
        }else {
          if ($request->cl_info["name"] and $request->cl_info["name"] != explode(".",$langimage_eski1)[0]) {
            $language_image = $request->cl_info["name"].".".explode(".",$langimage_eski1)[1];
            Storage::move($langimage_eski1,$language_image);
          }else {
            $language_image = $langimage_eski1;
          }
        }
        $cl_image_info["image"] = $request->cl_info;

        $langimage_eski2 = DB::table('category_language')->where('category_id',$id)->where('language_slug',$slug)->first()->image2;
        if ($request->hasFile('language_image2')) {
          $size = $request->language_image2->getSize();
          if ($size <= 5242880) {
            Storage::delete($langimage_eski2);
            if ($request->cl_info2["name"]) {
              $language_image2 = $request->language_image2->storeAs('',$request->cl_info2["name"].".".$request->language_image2->extension());
            }else {
              $language_image2 = $request->language_image2->store('');
            }
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya:'. ($size / 1048576).'MB' );
          }
        }else {
          if ($request->cl_info2["name"] and $request->cl_info2["name"] != explode(".",$langimage_eski2)[0]) {
            $language_image2 = $request->cl_info2["name"].".".explode(".",$langimage_eski2)[1];
            Storage::move($langimage_eski2,$language_image2);
          }else {
            $language_image2 = $langimage_eski2;
          }
        }
        $cl_image_info["image2"] = $request->cl_info2;

        $langimage_eski3 = DB::table('category_language')->where('category_id',$id)->where('language_slug',$slug)->first()->image3;
        if ($request->hasFile('language_image3')) {
          $size = $request->language_image3->getSize();
          if ($size <= 5242880) {
            Storage::delete($langimage_eski3);
            if ($request->cl_info3["name"]) {
              $language_image3 = $request->language_image3->storeAs('',$request->cl_info3["name"].".".$request->language_image3->extension());
            }else {
              $language_image3 = $request->language_image3->store('');
            }
          }else {
            return redirect()->back()->with('error','Dosya Boyutu 5MB Olmalıdır. Sizin Yüklemeye Çalıştığınız Dosya:'. ($size / 1048576).'MB' );
          }
        }else {
          if ($request->cl_info3["name"] and $request->cl_info3["name"] != explode(".",$langimage_eski3)[0]) {
            $language_image3 = $request->cl_info3["name"].".".explode(".",$langimage_eski3)[1];
            Storage::move($langimage_eski3,$language_image3);
          }else {
            $language_image3 = $langimage_eski3;
          }
        }
        $cl_image_info["image3"] = $request->cl_info3;

        DB::table('category')->where('id',$id)->update([
          'image' => $category_image,
          'image2' => $category_image2,
          'image3' => $category_image3,
          'image_info' => json_encode($imginfo),
          'sorted' => $request->input('sorted'),
          'update_time' => $current_time,
          'block_id' => $request->input('category'),
          'form_id' => $request->input('form_id'),
          'status' => $request->input('status'),
          'top_menu' => $top_menu,
          'url' => $request->input('url'),
          'home_page' => $home_page
        ]);

        $controller = DB::table('special_blocks')->where('id',$request->input('category'))->first()->block_key;
        $name_slug = str_slug($request->input('name'),'-');

          DB::table('category_language')->where('category_id',$id)->where("language_slug",$slug)->update([
            'name' => $request->input('name'),
            'image' => $language_image,
            'image2' => $language_image2,
            'image3' => $language_image3,
            'image_info' => json_encode($cl_image_info),
            'seo_title' => $request->input('seo_title'),
            'seo_description' => $request->input('seo_description'),
            'seo_keywords' => $request->input('seo_keywords'),
            'description' => $request->input('description'),
            'contents' => $request->input('contents'),
            'special_fields' => json_encode($request->input('ozelalan'))
          ]);
          $tax = DB::table('taxonomy')->where('slug',$name_slug)->where('language_slug',$slug);
          if ($tax->exists()) {
            if ($tax->first()->category_id == $id) {
              $count = null;
            }else {
              $count = $id;
            }
          }else {
            $count = null;
          }
          DB::table('taxonomy')->where('category_id',$id)->where('language_slug',$slug)->update([
            'slug' => $name_slug,
            'count' => $count,
            'controller' => $controller
          ]);

        $parent_id = DB::table('category')->where('id',$id)->first()->parent_id;
        return redirect()->route('CMS Yönetimi', ['id' => $parent_id])->with('success','Başarıyla Kaydedildi.');

      }

      //$category = DB::select("select * from category as c inner join category_language as cl on c.id=cl.category_id where c.id='$id' and cl.language_slug='$slug'");
      $category = DB::table('category')->where("id",$id)->first();
      $category_language = DB::table('category_language')->where('category_id',$category->id)->where('language_slug',$slug)->first();
      $kategoriler = DB::table('special_blocks')->get();
      $forms = DB::select("select * from form inner join form_language on form.id=form_language.form_id and form_language.language_slug='$slug'");
      $taxonomy = DB::table("taxonomy")->where('category_id',$category->id)->where("language_slug",$slug)->first();
      return view('admin.Cms.edit',[
        'category' => $category,
        'category_language' => $category_language,
        'kategoriler' => $kategoriler,
        'forms' => $forms,
        'taxonomy' => $taxonomy
      ]);
    }

    public function delete(Request $request, $id)
    {
      $category_id = $id;

      $ca = DB::table('category')->where('id',$category_id);
      $ca_lang = DB::table('category_language')->where('category_id',$category_id);
      $ca_tax = DB::table('taxonomy')->where('category_id',$category_id);

      if ($ca->first()->image) { Storage::delete($ca->first()->image); }
      if ($ca->first()->image2) { Storage::delete($ca->first()->image2); }
      if ($ca->first()->image3) { Storage::delete($ca->first()->image3); }
      $ca->delete();
      foreach ($ca_lang->get() as $key => $value) {
        if ($value->image) { Storage::delete($value->image); }
        if ($value->image2) { Storage::delete($value->image2); }
        if ($value->image3) { Storage::delete($value->image3); }
      }
      $ca_lang->delete();
      $ca_tax->delete();

      $loop = true;
      $myArr = array();
      $myArr[0] = $category_id;
      while ($loop) {

        $isExist = DB::table('category')->whereIn('parent_id',$myArr);
        $myArr = array();
        if ($isExist->exists()) {

          foreach ($isExist->get() as $key => $value) {
            array_push($myArr,$value->id);

            $ca_lang = DB::table('category_language')->where('category_id',$value->id);
            $ca_tax = DB::table('taxonomy')->where('category_id',$value->id);

            if ($value->image) { Storage::delete($value->image); }
            if ($value->image2) { Storage::delete($value->image2); }
            if ($value->image3) { Storage::delete($value->image3); }

            foreach ($ca_lang->get() as $key => $value) {
              if ($value->image) { Storage::delete($value->image); }
              if ($value->image2) { Storage::delete($value->image2); }
              if ($value->image3) { Storage::delete($value->image3); }
            }
            $ca_lang->delete();
            $ca_tax->delete();
          }

          $isExist->delete();

        }else {
          $loop = false;
        }

      }

      return redirect()->back()->with('success','İçerik Tüm Alt İçerikleriyle Birlikte Başarıyla Silindi.');
    }

    public function fileDelete(Request $request, $id)
    {
      $db = $request->query('db');
      $section = $request->query('section');

      if ($db == 'c') {
      $img = DB::table('category')->where('id',$id);
      $img_info = json_decode($img->first()->image_info,true);
      //unset($img_info[$section]);
      $img_info[$section] = array_map(function($val){
        $val = null;
      },$img_info[$section]);
      Storage::delete($img->first()->$section);
      $img->update([
        $section => null,
        'image_info' => json_encode($img_info)
      ]);
      return redirect()->back()->with('success','Dosya Başarıyla Silindi.');
      }elseif ($db == 'cl') {
        $img = DB::table('category_language')->where('id',$id);
        $img_info = json_decode($img->first()->image_info,true);
        //unset($img_info[$section]);
        $img_info[$section] = array_map(function($val){
          $val = null;
        },$img_info[$section]);
        Storage::delete($img->first()->$section);
        DB::table('category_language')->where('id',$id)->update([
          $section => null,
          'image_info' => json_encode($img_info)
        ]);
        return redirect()->back()->with('success','Dosya Başarıyla Silindi.');
      }

    }
}
