@extends('layouts.app')

@section('content')
<div class="hero-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Login</h1>
                <h2>Hello!, Selamat Datang di E-Book Online APD Balikpapan</h2>
            </div>
            <div class="col-sm-6">
                <img src="/image/pict-login.png" alt="">    
            </div>    
        </div>
    </div>
</div>

<div class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    
                    <div class="form-input{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="">E-Mail Address</label>
                        <input id="email" type="email" class=" " name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-input{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="">Password</label>
                        <input id="password" type="password" class=" " name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left: 20px;">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Login
                            </button>
                    </div>
                </form>                    
            </div>
        </div>
    </div>
</div>
@endsection
