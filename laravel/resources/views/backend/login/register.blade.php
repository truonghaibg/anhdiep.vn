@extends('backend.layouts.master')

@section('content')
<div id="content-register">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <form>
                        @if($errors->has('error'))
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{$errors->first('error')}}
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            @if($errors->has('email'))
                                <p style="color:red">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                            @if($errors->has('username'))
                                <p style="color:red">{{$errors->first('username')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            @if($errors->has('password'))
                                <p style="color:red">{{$errors->first('password')}}</p>
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkbox"> Agree the terms and policy
                            </label>
                            @if($errors->has('checkbox'))
                                <p style="color:red">{{$errors->first('checkbox')}}</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="{{url('backend\login')}}"> Sign in</a></p>
                        </div>
                        {!! csrf_field() !!}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop