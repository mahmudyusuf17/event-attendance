@extends('layout.login')
@section('title', 'Login User')
@section('content')
<div class="login-page" style="background-image:url({{ url('template/dist/img/bicycle-banner.jpg') }}); background-repeat:no-repeat; background-position:center; background-size:cover;">
<div class="container">
<div class="row justify-content-center">
<div class="login-box offset-md-4">
    <!-- /.login-logo -->
    <div class="card">
    <div class="card-body login-card-body">
        <div class="justify-content-center text-center my-3 mb-2">
        <img src="{{asset('template')}}/dist/img/logo/logo-sepeda.png" alt="">
        </div>

        <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                Remember Me
                </label>
            </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
            </div>
            <button type="submit" class="btn btn-primary btn-block my-3">Sign In</button>
            <!-- /.col -->
        </div>
        <div class="justify-content-center text-center">
        <p class="mb-1">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
        </p>
        </div>
        </form>
    </div>
    <!-- /.login-card-body -->
</div>
</div>
</div>
</div>
</div>
@endsection
