@extends('layouts.app')

@section('content')

<div class="login">


    <form class="login-screen" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="app-title">
            <h1>Login</h1>
        </div>

        <div class="login-form">
            <div class="control-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email login-pass" type="email" class="login-field" name="email" value="{{ old('email') }}" placeholder="Email"  required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="control-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password login-pass" type="password" class="login-field" name="password" placeholder="•••••" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="control-group">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Recordarme
                </label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-large btn-block">Login</button>
            </div>
            <div class="form-group">
                <a class="login-link" href="{{ url('/password/reset') }}">
                    ¿Olvidaste tu contraseña?
                </a>
            </div>
        </div>

    </form>

</div>

@endsection
