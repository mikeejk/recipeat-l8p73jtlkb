@extends('layouts.bootstrap.app')
@section('content')

			<!--begin::Login-->
			<div class="login login-2 login-signin-on d-flex flex-column flex-column-fluid position-relative overflow-hidden" id="kt_login" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://www.macsween.co.uk/media/1146/mac-recipe-11.jpg?anchor=center&mode=crop&width=1200&height=500&rnd=131543976090000000');
            background-position:center;
            background-repeat: no-repeat;
            background-size: cover;">
				<!--begin::Header-->
				<div class="login-header py-10 flex-column-auto">
					<div class="container d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between">
						<!--begin::Logo-->
						<a href="#" class="flex-column-auto py-5 py-md-0">
							<img src="https://recipeat-dev.mindzapp.in/assets/media/logos/logo-5.png" alt="logo" class="h-50px w-100" />
						</a>
						<!--end::Logo-->

					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="login-body d-flex flex-column-fluid align-items-stretch justify-content-center">
					<div class="container row">
						<div class="col-lg-6 d-flex align-items-center ">
							<!--begin::Signin-->
							<div class="login-form login-signin bg-white rounded opacity-75 ml-10">
								<!--begin::Form-->
								<form class="form w-xxl-550px rounded-lg p-20" novalidate="novalidate" id="kt_login_signin_form">
									<!--begin::Title-->
									<div class="pb-13 pt-lg-0 pt-5">
										<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome to Recip<span class="text-danger">eat</span></h3>
									</div>
									<!--begin::Title-->
									<!--begin::Form group-->
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
										<input class="form-control form-control-solid h-auto p-6 border-bottom border-warning" type="text" name="username" autocomplete="off" />
									</div>
									<!--end::Form group-->
									<!--begin::Form group-->
									<div class="form-group">
										<div class="d-flex justify-content-between mt-n5">
											<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
											<a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Forgot Password ?</a>
										</div>
										<input class="form-control form-control-solid h-auto p-6  border-bottom border-warning" type="password" name="password" autocomplete="off" />
									</div>
									<!--end::Form group-->
									<!--begin::Action-->
									<div class="pb-lg-0 pb-5">
										<button type="button" id="kt_login_signin_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                                        <span class="text-dark font-weight-bold font-size-h6">New Here?
                                            <a href="javascript:;" id="kt_login_signup" class="text-primary font-weight-bolder">Create an Account</a></span>
                                    </div>
									<!--end::Action-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Signin-->


						</div>
						<div class="col-lg-6 bgi-size-contain bgi-no-repeat bgi-position-y-center bgi-position-x-center min-h-150px mt-10 m-md-0" style="background-image: url(https://pngimg.com/uploads/chef/chef_PNG16.png)"></div>
					</div>
				</div>
				<!--end::Body-->
			</div>
			<!--end::Login-->



@endsection
