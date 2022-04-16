<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SettingsController extends Controller
{
  public function users_edit(Request $request)
  {
    $id = Auth::user()->id;
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

      User::where("id",$id)->update([
          'name' => $request['ad-soyad'],
          'email' => $request['email'],
          'password' => $password
      ]);
      return redirect()->back()->with('success','Kullanıcı Başarıyla Güncellendi');

    }
    return view('user.Settings.users.edit',[
      'user' => $user
    ]);
  }
}
