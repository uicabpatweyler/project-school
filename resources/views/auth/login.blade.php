@extends('layouts.authLayoutMaster')

{{-- page Title --}}
@section('title','Login')

@section('content')
    <div class="card">
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Sign-In</h4>
                    <div class="nk-block-des">
                        <p>Access the application using your email and password.</p>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('login') }}" name="formLogin" id="formLogin">
                @csrf
                
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="email">E-Mail Address</label>
                    </div>
                    <input type="email" name="email" id="email"
                           class="form-control form-control-lg @error('email') is-invalid @enderror"
                           placeholder="Enter your email address"
                           required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="password">Password</label>
                        @if(Route::has('password.request'))
                            <a class="link link-primary link-sm" href="{{route('password.request')}}">Forgot
                                Password?</a>
                        @endif
                    </div>
                    <div class="form-control-wrap">
                        <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                        </a>
                        <input type="password" id="password" name="password"
                               class="form-control form-control-lg @error('password') is-invalid @enderror"
                               placeholder="Enter your password"
                               required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-control-xs custom-checkbox">
                        <input type="checkbox" name="remember" id="remember"
                               class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                </div>
            </form>
        </div>
    </div>
@endsection