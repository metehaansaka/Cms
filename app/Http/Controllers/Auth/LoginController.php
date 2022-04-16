<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated() {
    	if (Auth::check()) {
        if (Auth::user()->role == "admin") {
        return redirect(RouteServiceProvider::ADMIN)->with("success","Başarıyla Giriş Yaptınız.");
      }elseif (Auth::user()->role == "user") {
          return redirect(RouteServiceProvider::USER)->with("success","Başarıyla Giriş Yaptınız.");
        }else {
          return redirect(RouteServiceProvider::HOME);
        }
    	}
    }
}
