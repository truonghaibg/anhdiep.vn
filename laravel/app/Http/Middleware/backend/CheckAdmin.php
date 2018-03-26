<?php

namespace App\Http\Middleware\backend;

use App\Model\User;
use Closure;
use DB;
use Session;

class CheckAdmin
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
                return $next($request);
            }
        }
        return redirect()->intended('backend\login');
    }
}
