<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index()
    {
      $slug = session('lang_slug');
      $lang_name = session('lang_name');

      $formAll = array();
      $forms = DB::table('form')->get();
      foreach ($forms as $key => $form) {

        $form_language = DB::table('form_language')->where('form_id',$form->id)->where('language_slug',$slug)->first();

        $forminfo = array_merge((array)$form, (array)$form_language);

        array_push($formAll,$forminfo);
      }

      return view('admin.Forms.index',[
        'form_all' => $formAll
      ]);
    }

    public function FormEdit(Request $request,$id)
    {
      $slug = session('lang_slug');
      $lang_name = session('lang_name');

      if ($request->get('del') == true) {
        DB::table('form')->where('id',$id)->delete();
        DB::table('form_language')->where('form_id',$id)->delete();
        DB::table('form_fields_value')->where('form_id',$id)->delete();
          return redirect()->back()->with('success','Başarıyla Silindi.');
      }

      $form_language = DB::table("form_language")->where("id",$id)->first();
      $form = DB::table('form')->where('id',$form_language->form_id)->first();

      if ($request->isMethod('post')) {
        //dd($request->input('description'));

        DB::table('form')->where('id',$form_language->form_id)->update([
          'email' => $request->input('email')
        ]);

        DB::table('form_language')->where('form_id',$form_language->form_id)->where('language_slug',$slug)->update([
          'name' => $request->input('name'),
          'description' => $request->input('description')
        ]);



        return redirect()->back()->with('success','Başarıyla Güncellendi');
      }


      $form_fields_language = DB::table('form_fields_language')->where('language_slug',$slug)->get();
      return view('admin.Forms.edit',[
        'form_language' => $form_language,
        'form' => $form,
        'form_fields_language' => $form_fields_language
      ]);
    }

    public function FormCreate(Request $request)
    {
      $slug = session('lang_slug');
      $lang_name = session('lang_name');

      if ($request->isMethod('post')) {


        $form_id = DB::table('form')->insertGetId([
          'email' => $request->input('email')
        ]);

        foreach (DB::table('language')->get() as $key => $lang) {
          DB::table('form_language')->insert([
            'form_id' => $form_id,
            'language_slug' => $lang->slug,
            'name' => $request->input('name'),
            'description' => $request->input('description')
          ]);
        }

        $form_fields_value = DB::table('form_fields_value');
        foreach ($request->input('form_fields') as $key => $option) {

            $form_fields_value->insert([
              'form_id' => $form_id,
              'field_id' => $option
            ]);

        }

        return redirect()->back()->with('success','Başarıyla Eklendi');
      }

      $form_fields_language = DB::table('form_fields_language')->where('language_slug',$slug)->get();
      return view('admin.Forms.create',[
        'form_fields_language' => $form_fields_language
      ]);
    }

    public function FormFields()
    {
      $slug = session('lang_slug');
      $lang_name = session('lang_name');

      /*
      $form_fields_All = array();
      $form_fields = DB::table('form_fields')->get();
      foreach ($form_fields as $key => $form_field) {

        $form_fields_language = DB::table('form_fields_language')->where('fields_id',$form_field->id)->where('language_slug',$slug)->get();

        $forminfo = array_merge((array)$form_field, (array)$form_fields_language);

        array_push($form_fields_All,$forminfo);
      }
      */

      $form_fields_All = DB::select("select * from form_fields_language inner join form_fields on form_fields_language.fields_id=form_fields.id and form_fields_language.language_slug='$slug' order by form_fields.sorted ASC");


      return view('admin.Forms.fields.index',[
        'form_fields' => $form_fields_All,
        'slug' => $slug,
        'lang_name' => $lang_name
      ]);
    }

    public function FormFields_create(Request $request){

      if ($request->isMethod('post')) {
        $fields_id = DB::table('form_fields')->insertGetId([
          'type' => $request->input('type'),
          'required' => $request->input('required'),
          'sorted' => $request->input('sorted')
        ]);

        foreach (DB::table('language')->get() as $key => $lang) {
          DB::table('form_fields_language')->insert([
            'fields_id' => $fields_id,
            'language_slug' => $lang->slug,
            'name' => $request->input('name'),
            'options' => $request->input('options')
          ]);
        }

        return redirect()->back()->with('success','Başarıyla Eklendi');

      }
      return view('admin.Forms.fields.create');
    }

    public function FormFields_edit(Request $request,$field_id)
    {
      $slug = session('lang_slug');
      $lang_name = session('lang_name');

      if ($request->get('del') == true) {
        DB::table('form_fields_language')->where('fields_id',$field_id)->delete();
        DB::table('form_fields')->where('id',$field_id)->delete();
        DB::table('form_fields_value')->where('field_id',$field_id)->delete();
          return redirect()->back()->with('success','Başarıyla Silindi.');
      }

      $form_fields_language = DB::table('form_fields_language')->where('fields_id',$field_id)->where('language_slug',$slug)->first();
      $form_fields = DB::table('form_fields')->where('id',$field_id)->first();

      if ($request->isMethod('post')) {

        $q1 = DB::table('form_fields')->where('id',$field_id)->update([
          'type' => $request->input('type'),
          'required' => $request->input('required'),
          'sorted' => $request->input('sorted')
        ]);

        $q2 = DB::table('form_fields_language')->where('fields_id',$field_id)->where('language_slug',$slug)->update([
            'name' => $request->input('name'),
            'options' => $request->input('options')
        ]);

        if ($q1 or $q2) {
          return redirect()->back()->with('success','Başarıyla Güncellendi');
        }else {
          return redirect()->back()->with('error','Bir Hata Oluştu');
        }



      }

      return view('admin.Forms.fields.edit',[
        'form_fields_language' => $form_fields_language,
        'form_fields' => $form_fields
      ]);
    }

}
