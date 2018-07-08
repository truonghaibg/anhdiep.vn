<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Session;

class LoginController extends Controller
{

    public function getRegister(Request $request)
    {
        return view('backend.login.register');
    }

    public function postRegister(Request $request)
    {
        $rule = [
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ];
        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            return redirect()->intended('backend/login');
        }
    }

    public function getLogin(Request $request)
    {
        return view('backend.login.login');
    }

    public function postLogin(Request $request)
    {
        $rule = [
            'username' => 'required|max:20',
            'password' => 'required|max:35',
        ];

        $validator = Validator::make($request->all(), $rule);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $arr = [
                'username' => $request->input('username'),
                'password' => md5($request->input('password')),
            ];
            $resultRequest = DB::table('users')->where($arr);
            if ($resultRequest->count()==1) {
                $data = $resultRequest->first();
                Session::put('login', $data);
                return redirect()->intended('backend/home');
            } else {
                $errors['error'] = 'Đăng nhập không thành công!';
                return redirect()->back()->withErrors($errors);
            }
        }
    }

    public function getLogout(Request $request)
    {
        Session::flush();
        return redirect()->intended('backend/login');
    }

    public function getForgetPassword(Request $request)
    {
        return view('backend.login.forget');
    }

    public function postForgetPassword(Request $request)
    {
        $rule = [
            'email' => 'required|max:35',
        ];

        $validator = Validator::make($request->all(), $rule);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $arr = [
                'email' => $request->input('email'),
            ];
            $resultRequest = DB::table('users')->where($arr);
            if ($resultRequest->count()==1) {
                $data = $resultRequest->first();
                return redirect()->intended('backend/login');
            } else {
                $errors['error'] = 'Email không tồn tại!';
                return redirect()->back()->withErrors($errors);
            }
        }
    }

    public function index()
    {
        return view('backend.login.login');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
