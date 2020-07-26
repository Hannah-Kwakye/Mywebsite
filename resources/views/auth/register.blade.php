@extends('layouts.auth_app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

    <!--begin::Head-->
    <div class="kt-login__head">
        <span class="kt-login__signup-label">Already have an account yet?</span>&nbsp;&nbsp;
        <a href="{{ route('login') }}" class="kt-link kt-login__signup-link">Login!</a>
    </div>

    <!--end::Head-->

    <!--begin::Body-->
    <div class="kt-login__body">

        <!--begin::Signin-->
        <div class="kt-login__form">
            <div class="kt-login__title">
                <h3>Register</h3>
            </div>

            <!--begin::Form-->
            <form method="POST"  class="kt-form" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="Username" value="{{ old('name') }}" autocomplete="name" autofocus>
    
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Email"value="{{ old('email') }}" autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password"name="password_confirmation" required autocomplete="new-password">
                               
                </div>
                

                <!--begin::Action-->
            {{-- <div class="kt-login__actions">
             <button id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary">{{ __('Login') }}</button>
            </div> --}}
            <div class="row kt-login__extra">
                <div class="col kt-align-left">
                    <label class="kt-checkbox">
                        <input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                        <span></span>
                    </label>
                    <span class="form-text text-muted"></span>
                </div>
            </div>
            <div class="kt-login__actions">
                {{-- class="btn btn-brand btn-pill kt-login__btn-primary" --}}
                <button id="kt_login_signup_submit" type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary">  {{ __('Register') }}</button>&nbsp;&nbsp;
                {{-- <button id="kt_login_signup_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">  {{ __('Cancel') }}</button> --}}
                <a id="kt_login_forgot_cancel"  class="btn btn-light btn-elevate kt-login__btn-secondary"  href="{{ route('login') }}">{{ __('Cancel') }}</a>

            </div>
            
                <!--end::Action-->
        </form>

            <!--end::Form-->

            <!--begin::Divider-->
            <div class="kt-login__divider">
                <div class="kt-divider">
                    <span></span>
                    <span>OR Sign up with
                    </span>
                    <span></span>
                </div>
            </div>

            <!--end::Divider-->

            <!--begin::Options-->
            <div class="kt-login__options">
                <a href="#" class="btn btn-primary kt-btn">
                    <i class="fab fa-facebook-f"></i>
                    Facebook
                </a>
                <a href="#" class="btn btn-info kt-btn">
                    <i class="fab fa-twitter"></i>
                    Twitter
                </a>
                <a href="#" class="btn btn-danger kt-btn">
                    <i class="fab fa-google"></i>
                    Google
                </a>
            </div>

            <!--end::Options-->
        </div>

        <!--end::Signin-->
    </div>

    <!--end::Body-->
</div>
@endsection
