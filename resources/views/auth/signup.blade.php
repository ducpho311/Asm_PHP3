@extends('client.layouts.master')

@section('client-content')
<section class="login-area pt-50 pb-100" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login" id="loginForm">>
                    <h3 class="text-center mb-60">Đăng ký</h3>
                    <form action="{{route('auth.postSignup')}}" method="POST">
                        @csrf
                        <label for="name">Họ tên <span>**</span></label>
                        <input id="name" name="name" type="text" >
                        @if ($errors->has('name'))
                            <span class="text-danger text-sm"> {{ $errors->first('name') }}</span>
                        @endif
                        <label for="email-id">Email  <span>**</span></label>
                        <input id="email-id" name="email" type="text" >
                        @if ($errors->has('email'))
                            <span class="text-danger text-sm"> {{ $errors->first('email') }}</span>
                        @endif
                        <label for="pass">Password <span>**</span></label>
                        <input id="pass" name="password" type="password">
                        @if ($errors->has('password'))
                            <span class="text-danger text-sm"> {{ $errors->first('password') }}</span>
                        @endif
                        <div class="mt-10"></div>
                        <button type="submit" class="os-btn w-100">Đăng ký</button>
                        <div class="or-divide"><span>hoặc</span></div>
                        <a href="{{ route('auth.login') }}"  class="os-btn os-btn-black w-100">Đăng nhập</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection