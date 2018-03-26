@extends('backend.layouts.master-login')

@section('title', 'Forget password')

@section('content')
<div id="content-forget">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <form action="{{url('backend\forget-password')}}" method="post">
                        @if($errors->has('error'))
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{$errors->first('error')}}
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            @if($errors->has('email'))
                                <p style="color:red">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>
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
@endsection