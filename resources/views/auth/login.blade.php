@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div>
    @include('layouts.nav')
</div>

    <main class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="p-2">
                        <h1 class="text-center mb-2 p-2 card-title">
                            Login
                        </h1>

                        <form method="POST" action="{{ route('login') }}" class="border border-2 p-2" style="border: 1px solid rgb(58,138,185);">
                            @csrf

                            <div class="mb-3 p-1" style="border: 1px solid rgb(202,240,248);">
                                <label for="email" class="form-label">
                                    {{ __('Email Address') }}
                                </label>
                                <input id="email" type="email" class="form-control form-control-sm rounded-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="mail@example.com" required="">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                 
                            </div>

                            <div class="mb-3 p-1" style="border: 1px solid rgb(202,240,248);">
                                <label for="password" class="form-label">
                                    {{ __('Password') }}
                                </label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="********" required="">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 p-1" style="border: 1px solid rgb(202,240,248);">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>


                            <div class="mb-3">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none text-primary" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-sm btn btn-primary rounded-pill" type="submit">
                                    <i class="fas fa-lock"></i>
                                    &nbsp;
                                    {{ __('Login') }}
                                </button>
                            </div>

                        </form>

                        <div class="text-center border border-1 p-2">
                            <p class="mt-3 text-muted">
                                If you don't have an account
                                <a class="text-decoration-none text-primary" href="{{ route('register') }}">
                                    &nbsp;register us
                                </a>&nbsp;&nbsp;
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
              
@endsection
