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
                'username' => Session::get('username')->user_name,
                'password' => Session::get('password')->user_pass,
            ];

            if (DB::table('users')->where($arr)->count()==1) {
                return $next($request);
            }
        }
        Session::flush();
        return redirect()->intended('view');
    }
}
