@extends('layouts.bootstrap.app')

@section('content')
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-dark" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #9F9D9D;  width: auto;">
            <!--begin::Aside Top-->
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <!--begin::Aside header-->
                <a href="#" class="text-center mb-15">
                    <img src="assets/media/logos/logo-5.png" alt="logo" class="h-70px" />
                </a>
                <!--end::Aside header-->
                <!--begin::Aside title-->
                <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg text-white">&nbsp;&nbsp;&nbsp;Plan your activities and
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
        <!--begin::Content-->
        <div
            class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-center">
                <!--begin::Signup-->
                <div class="login-form login-signup">
                    <!--begin::Form-->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--begin::Title-->
                        <h1 class="text-xl text-center md:text-2xl font-bold leading-tight mt-12 mb-10 text-gray-600">
                            <span class="">
                                <img alt="Logo" src="assets/media/logos/recipeat.svg" class="h-30px" />
                            </span>
                            <br /><br />
                            <a href="{{ route('login') }}">
                                <span class="text-danger hover:text-danger">Sign In</span> &nbsp;
                            </a>
                            <span class="text-primary">&</span> &nbsp;
                            <span class="text-white">Sign Up</span>
                        </h1>
                        <!--end::Title-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <input id="name" type="text"
                                class="form-control form-control-solid h-auto p-6 rounded-md font-size-h6 bg-white @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Fullname"
                                autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <input id="email" type="email"
                                class="form-control form-control-solid h-auto p-6 rounded-md font-size-h6 bg-white @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

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
                                class="form-control form-control-solid h-auto p-6 rounded-md font-size-h6 bg-white @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <input id="password-confirm" type="password"
                                class="bg-white form-control form-control-solid h-auto p-6 rounded-md font-size-h6"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirm password">
                        </div>
                        <!--end::Form group-->
                        {{-- <!--begin::Form group-->
                        <div class="form-group d-flex align-items-center">
                            <label class="checkbox mb-0">
                                <input type="checkbox" name="agree" />
                                <span></span>
                            </label>
                            <div class="pl-2 text-white">I Agree the
                                <a href="#" class="ml-1">terms and conditions</a>
                            </div>
                        </div>
                        <!--end::Form group--> --}}
                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                            <button type="submit" id="kt_login_signup_submit"
                                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">{{ __('Sign Up') }}</button>
                            <a href="/">
                                <button type="button" id="kt_login_signup_cancel"
                                    class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                            </a>
                        </div>
                        <!--end::Form group-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signup-->
            </div>
            <!--end::Content body-->
            <!--begin::Content footer-->
            <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                <a href="http://web.adsdunia.com/" class="text-white font-weight-bolder font-size-h5">Terms</a>
                <a href="http://web.adsdunia.com/" class="text-white ml-10 font-weight-bolder font-size-h5">Contact Us</a>
            </div>
            <!--end::Content footer-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->

@endsection
