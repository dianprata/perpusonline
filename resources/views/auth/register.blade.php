@extends('layouts.app')

@section('content')
<div class="hero-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Register</h1>
                <h2>Silahkan daftar agar anda menjadi anggota E-Book Online APD Balikpapan </h2>
            </div>
            <div class="col-sm-6">
                <img src="/image/pict-login2.png" alt="">    
            </div>    
        </div>
    </div>
</div>

<div class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-input{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" >Name</label>
                        <input id="name" type="text" class=" " name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-input{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" >E-Mail Address</label>
                        <input id="email" type="email" class=" " name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-input{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" >Password</label>
                        <input id="password" type="password" class=" " name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-input">
                        <label for="password-confirm" >Confirm Password</label>
                        <input id="password-confirm" type="password" class=" " name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
