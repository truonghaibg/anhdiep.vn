<?php

namespace App\Http\Middleware\backend;

use Closure;
use DB;
use Session;

class CheckLogin
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
        if (Session::has('login')) {
            $arr = [
                'username' => Session::get('login')->username,
                'password' => Session::get('login')->password,
            ];

            if (DB::table('users')->where($arr)->count()==1) {
                return redirect()->intended('backend\home');
            }
        }
        return $next($request);
    }
}
