<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if (!Auth::user()) {
        return redirect('login');
      }else {
        if (Auth::user()->role != "user") {
          $html = '<body style="margin:0; background-color:#1A1A1A;">
          <div style="width:100%;
          height:100vh;
          display:flex;
          justify-content:center;
          align-items:center;
          font-family:Lucida Console, Courier, monospace;">
          <img src="'.asset("assets/admin/img/yetki.png").'" width="75%">
          </div></body>';
          return response($html, 401);
        }else {
          return $next($request);
        }
      }
    }
}
