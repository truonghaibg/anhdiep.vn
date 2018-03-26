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
        return view('backend.login.register');
    }

    public function getLogin(Request $request)
    {
        return view('backend.login.login');
    }

    public function postLogin(Request $request)
    {
        $rule = [
            'username' => 'required',
            'password' => 'required',
        ];

        $validator = Validator::make($request->all(), $rule);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $arr = [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
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
            'email' => 'required',
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.login.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
