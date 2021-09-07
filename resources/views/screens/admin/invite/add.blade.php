@extends('layouts.bootstrap.guest')
@section('content')
<div>
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Recipeat</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul
                            class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Implore</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="/add_user" class="text-muted">Patronage</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Add Member</a>
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
                <div class="container">
                    <form class="form" action="/invite" method="post">
                        @csrf
                        <div class="card-body bg-white">
                            <div class="form-group row mt-3">

                                <div class="col-lg-2"></div>

                                <label class="col-lg-1 col-form-label text-lg-right">Full Name:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Full name" name="name" />
                                        <div class="input-group-append"><span class="input-group-text"><i
                                                    class="las la-user-check"></i></span></div>
                                    </div>
                                    <span class="form-text text-muted">Enter member name</span>
                                </div>

                                <label class="col-lg-1 col-form-label text-lg-right">Email:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Mail address"
                                            name="email" />
                                        <div class="input-group-append"><span class="input-group-text"><i
                                                    class="las la-at"></i></span></div>
                                    </div>
                                    <span class="form-text text-muted">Enter member mail address</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-2"></div>
                                <label class="col-lg-1 col-form-label text-lg-right">Contact:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="Contact number"
                                            name="contact" />
                                        <div class="input-group-append"><span class="input-group-text"><i
                                                    class="las la-phone"></i></span></div>
                                    </div>
                                    <span class="form-text text-muted">Enter member contact number</span>
                                </div>

                                <label class="col-lg-1 col-form-label text-lg-right">Membership:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <select class="custom-select form-control" name="roles">
                                            @foreach ($roles as $role)
                                                    <option value="{{ $role->id }} ">
                                                        {{ $role->name }}
                                                    </option>
                                                @endforeach
                                        </select>
                                        <div class="input-group-append"><span class="input-group-text"><i
                                                    class="las la-spinner"></i></span></div>
                                    </div>
                                    <span class="form-text text-muted">Select membership role</span>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-primary mr-2">Invite</button>
                                    <a href="/user">
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!--end::Container-->

        </div>
        <!--end::Entry-->

    </div>
    <!--end::Content-->

</div>
@endsection
