<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SettingsController extends Controller
{

    public function general(Request $request)
    {
      $slug = session('lang_slug');
      $lang_name = session('lang_name');
      $settings = DB::table('settings')->where('language_id',$slug)->first();

      if ($request->isMethod('post')) {

        // logo
        if ($request->hasFile('logo')) {
          Storage::delete($settings->logo);
          $logo = $request->logo->store('');
        }else {
          $logo = $settings->logo;
        }
        // footer logo
        if ($request->hasFile('footerlogo')) {
          Storage::delete($settings->footer_logo);
          $footerlogo = $request->footerlogo->store('');
        }else {
          $footerlogo = $settings->footer_logo;
        }

        // Varsayılan Dil
        $default_lang = $request->input('default_lang') ?: null;

        if ($default_lang) {
          //varsayilan baska dil varsa sıfırla
          $lang_exist = DB::table('settings')->where('default_lang',1)->exists(); // varsa 1 döndürecek
          if ($lang_exist) {
            DB::table('settings')->where('default_lang',1)->update([
              'default_lang' => 0
            ]);
          }
        }

        $special_field = json_encode($request->input('special'));

        // Settings Güncelle
        DB::table('settings')->where('language_id',$slug)->update([
          'logo' => $logo,
          'footer_logo' => $footerlogo,
          'default_lang' => $default_lang,
          'special_fields' => $special_field
        ]);

        return redirect()->back()->with('success','Başarıyla Güncellendi.');

      }

      return view('admin.Settings.index',[
        'settings' => $settings,
        'slug' => $slug,
        'lang_name' => $lang_name
      ]);
    }

    public function delete(Request $request)
    {
      $slug = session('lang_slug');
      $lang_name = session('lang_name');

      $case = $request->get('case');
      $settings = DB::table('settings')->where('language_id',$slug);

      switch ($case) {
        case 'logo':

            Storage::delete($settings->first()->logo);
            $settings->update([
              'logo' => null
            ]);
            return redirect()->back()->with('success','Logo Başarıyla Silindi.');

        break;

        case 'footer_logo':

            Storage::delete($settings->first()->footer_logo);
            $settings->update([
              'footer_logo' => null
            ]);
            return redirect()->back()->with('success','Footer Logo Başarıyla Silindi.');

        break;

        case 'userdel':

            $userid = $request->get('userid');
            $del = User::destroy($userid);
            if ($del) {
              return redirect()->back()->with('success','Kullanıcı Başarıyla Silindi.');
            }

        break;

        case 'newsletter':
            $id = $request->get('id');
            $del = DB::table('newsletter')->where('id',$id)->delete();
            if ($del) {
              return redirect()->back()->with('success','Başarıyla Silindi.');
            }

        break;

        default:
          return redirect()->back();
          break;
      }
    }

    public function users(Request $request)
    {
      $users = DB::table('users')->get();
      return view('admin.Settings.users.index',[
        'users' => $users
      ]);
    }



    public function users_create(Request $request)
    {
      if ($request->isMethod('post')) {

        $validatedData = $request->validate([
          'ad-soyad' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8'],
        ]);

        User::create([
            'name' => $request['ad-soyad'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);
        return redirect()->back()->with('success','Kullanıcı Başarıyla Eklendi');

      }
      return view('admin.Settings.users.create');
    }

    public function users_edit(Request $request,$id)
    {
      $user = User::find($id);
      if ($request->isMethod('post')) {

        $validatedData = $request->validate([
          'ad-soyad' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
        ]);

        if ($request->input('password')) {
          $validatedData = $request->validate([
            'password' => ['required','string', 'min:8'],
          ]);
          $password = Hash::make($request['password']);
        }else {
          $password = $user->password;
        }

        User::updateOrCreate([
          'id' => $id
        ],[
            'name' => $request['ad-soyad'],
            'email' => $request['email'],
            'password' => $password,
            'role' => $request['role'],
        ]);
        return redirect()->back()->with('success','Kullanıcı Başarıyla Güncellendi');

      }
      return view('admin.Settings.users.edit',[
        'user' => $user
      ]);
    }

    public function newsletter()
    {
      $newsletters = DB::table('newsletter')->get();
      return view('admin.Settings.newsletter',[
        'newsletters' => $newsletters
      ]);
    }

}
