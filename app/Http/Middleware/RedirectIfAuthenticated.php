<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::ADMIN);
        }
        $settings = DB::table('settings')->where('default_lang',1)->first();
        $language = DB::table('language')->where('slug',$settings->language_id)->first();
        session(['lang_slug' => $language->slug, 'lang_name' => $language->name]);
        return $next($request);
    }
}
