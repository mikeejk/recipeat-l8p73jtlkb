@extends('layouts.bootstrap.app')
@section('content')
    <!-- begin::Login -->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid h-100 bg-dark" id="kt_login">
        <!--begin::Content-->
        <div
            class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-center">
                <!--begin::Signin-->
                <div class="login-form login-signin">
                    <!--begin::Form-->
                    <form method="POST" action="{{ route('login') }}">
                        {{-- <form method="POST" action="/login"> --}}
                        @csrf
                        <!--begin::Title-->
                        <h1 class="text-xl text-center md:text-2xl font-bold leading-tight mt-12 mb-10 text-gray-600">
                            <img alt="Logo" src="assets/media/logos/recipeat.svg" class="h-30px" />
                            <br /><br />
                            <span class="text-white">Sign In</span> &nbsp;
                            <span class="text-primary">&</span> &nbsp;
                            <a href="{{ route('register') }}">
                                <span class="text-danger hover:text-danger">Sign Up</span>
                            </a>
                        </h1>
                        <!--end::Title-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <input id="email" type="email"
                                class="form-control form-control-solid h-auto p-6 rounded-md bg-white @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email ID">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <input id="password" type="password"
                                class="form-control form-control-solid h-auto p-6 rounded-md bg-white @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" Placeholder="Password">
                            <div class="d-flex float-right mt-1">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"
                                        class="text-white font-size-h6 font-weight-bolder text-hover-primary pt-5"
                                        id="kt_login_forgot">{{ __('Forgot Password ?') }}</a>
                                @endif
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <!--end::Form group-->

                        <!--begin::Action-->
                        <div class="pb-lg-0">
                            <button type="submit" id="kt_login_signin_submit"
                                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">{{ __('Sign In') }}</button>
                        </div>
                        <!--end::Action-->
                        <!--end::Form group-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Content body-->
            <!--begin::Content footer-->
            <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                <a href="http://web.adsdunia.com/"
                    class="text-white text-hover-primary font-weight-bolder font-size-h5">Terms</a>
                <a href="http://web.adsdunia.com/"
                    class="text-white text-hover-primary ml-10 font-weight-bolder font-size-h5">Contact Us</a>
            </div>
            <!--end::Content footer-->
        </div>
        <!--end::Content-->
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #9F9D9D; width: auto;">
            <!--begin::Aside Top-->
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <!--begin::Aside header-->
                <a href="#" class="text-center mb-15">
                    <img src="assets/media/logos/logo-5.png" alt="logo" class="h-70px" />
                </a>
                <!--end::Aside header-->
                <!--begin::Aside title-->
                <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg text-white">&nbsp;&nbsp;&nbsp;Plan
                    your activities and
                    control&nbsp;&nbsp;&nbsp;<br />Your
                    progress online
                </h3>
                <!--end::Aside title-->
            </div>
            <!--end::Aside Top-->
            <!--begin::Aside Bottom-->
            <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center"
                style="background-image: url(assets/media/svg/illustrations/payment.png)"></div>
            <!--end::Aside Bottom-->
        </div>
        <!--begin::Aside-->
    </div>
    <!-- end::Login -->

@endsection
