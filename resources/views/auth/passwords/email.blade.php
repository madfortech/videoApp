@extends('layouts.app')

@section('title', 'Reset Password')

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
                            Reset Password
                        </h1>

              
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}" class="border border-2 p-2" style="border: 1px solid rgb(58,138,185);">
                            @csrf

                            <div class="mb-3 p-1" style="border: 1px solid rgb(202,240,248);">
                                
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="form-control form-control-sm rounded-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="mail@example.com" required="">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="mb-3 p-1 d-grid gap-2" style="border: 1px solid rgb(202,240,248);">
                                <button class="btn btn-sm btn btn-primary rounded-pill" type="submit">
                                    <i class="fas fa-lock"></i>
                                    &nbsp;
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>

                             
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
                
@endsection
