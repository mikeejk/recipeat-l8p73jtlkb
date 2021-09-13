@extends('layouts.bootstrap.guest')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Profile</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Change Password</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Profile Change Password-->
                <div class="d-flex flex-row">

                    <!--begin::Content-->
                    <div class="flex-row-fluid">
                        <form class="form">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <!--begin::Header-->
                                <div class="card-header py-3">
                                    <div class="card-title align-items-start flex-column">
                                        <h3 class="card-label font-weight-bolder text-dark">Change Password</h3>
                                        <span class="text-muted font-weight-bold font-size-sm mt-1">Change your account
                                            password</span>
                                    </div>
                                    <div class="card-toolbar">
                                        <button type="reset" class="btn btn-primary font-weight-bolder mr-2">Save
                                            Changes</button>
                                        <button type="reset"
                                            class="btn btn-light-primary font-weight-bolder">Cancel</button>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Form-->

                                <div class="card-body">
                                    <!--begin::Alert-->
                                    <div class="alert alert-custom alert-light-danger fade show mb-10" role="alert">
                                        <div class="alert-icon">
                                            <span class="svg-icon svg-icon-3x svg-icon-danger">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                        <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                                        <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <div class="alert-text font-weight-bold">Configure user passwords to expire
                                            periodically.
                                            <br />Users will need warning that their passwords are going to expire,
                                            <br />or they might inadvertently get locked out of the system!
                                        </div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="las la-times-circle"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <!--end::Alert-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-alert">Current Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password"
                                                class="form-control form-control-lg form-control-solid mb-2" value=""
                                                placeholder="Current password" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-alert">New Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" class="form-control form-control-lg form-control-solid"
                                                value="" placeholder="New password" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-alert">Verify Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" class="form-control form-control-lg form-control-solid"
                                                value="" placeholder="Verify password" />
                                        </div>
                                    </div>
                                </div>
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Change Password-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection
