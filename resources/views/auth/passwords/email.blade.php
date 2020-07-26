@extends('layouts.auth_app')


@section('content')
    
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
        <span class="kt-login__signup-label"></span>&nbsp;&nbsp;
    </div>

    <!--end::Head-->

    <!--begin::Body-->
    <div class="kt-login__body">

        <!--begin::Signin-->
        <div class="kt-login__form">
            <div class="kt-login__title">
                <h3>{{ __('Forgotten Password ?') }}</h3>
                <span class="kt-login__signup-label">{{ __('Enter your email to reset your password:') }}</span>&nbsp;&nbsp;
            </div>
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <!--begin::Form-->
            <form method="POST" class="kt-form" action="{{ route('password.email') }}">
                @csrf
           
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Email"value="{{ old('email') }}" autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                

                <!--begin::Action-->
                <div class="kt-login__actions">
                    {{-- class="btn btn-brand btn-pill kt-login__btn-primary" --}}
                    <button id="kt_login_signup_submit" type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary">  {{ __('Send Reset Link') }}</button>&nbsp;&nbsp;
                    <a id="kt_login_forgot_cancel"  class="btn btn-light btn-elevate kt-login__btn-secondary"  href="{{ route('login') }}">{{ __('Cancel') }}</a>
    
                </div>
                <!--end::Action-->
        </form>

            <!--end::Form-->
        </div>

        <!--end::Signin-->
    </div>

    <!--end::Body-->
</div>

@endsection