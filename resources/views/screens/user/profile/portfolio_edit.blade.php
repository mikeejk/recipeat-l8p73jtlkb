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
                        {{-- <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Recipeat</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Recipe</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">My Kitchen</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">New Recipe</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb--> --}}
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div>
            <form class="form" action="/update_portfolio" method="post">
                @method('PUT')
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Card-->
                    <div class="card card-custom card-sticky" id="kt_page_sticky_card">
                        <div class="card-header">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4"></div>
                            <!-- Form-Button::start -->
                            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                                <div class="">
                                    <a href=" /my_portfolio" class="btn btn-light-primary font-weight-bolder">
                                        <i class="las la-arrow-left"></i>Back</a>
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary font-weight-bolder">
                                            <i class="las la-cloud-upload-alt"></i>Update</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Form-Button::end -->
                        </div>

                        <div class="card-body">
                            <!-- Recipe Intro::start -->
                            <div>
                                <div class="form-group row">
                                    <!-- Side Text::start -->
                                    <div class="col-lg-4">
                                        <label></label>
                                        <h3>Personal Information</h3>
                                    </div>
                                    <!-- Side Text::end -->
                                    <!-- Form-Category::start -->
                                    <div class="col-lg-4">
                                        <label>Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-id-badge"></i></span></div>
                                            <input type="text" class="form-control" name="name" value="{{ $chef_questions->name }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your profile name</span>
                                    </div>
                                    <!-- Form-Category::end -->
                                    <!-- Form-Cuisine::start -->
                                    <div class="col-lg-4">
                                        <label>Date of Birth</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-venus-double"></i></span></div>
                                            <input type="date" class="form-control" name="dob" value="{{ $chef_questions->dob}}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your Date of Birth</span>
                                    </div>
                                    <!-- Form-Cuisine::end -->
                                </div>

                                <div class="form-group row">
                                    <!-- Side Text::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Text::end -->
                                    <!-- Form-Category::start -->
                                    <div class="col-lg-4">
                                        <label>Location</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-id-badge"></i></span></div>
                                            <input type="text" class="form-control" name="location" value="{{ $chef_questions->location }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your location</span>
                                    </div>
                                    <!-- Form-Category::end -->
                                    <!-- Form-Cuisine::start -->
                                    <div class="col-lg-4">
                                        <label>State</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-venus-double"></i></span></div>
                                            <input type="text" class="form-control" name="state" value="{{ $chef_questions->state }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your state</span>
                                    </div>
                                    <!-- Form-Cuisine::end -->
                                </div>

                                <div class="form-group row">
                                    <!-- Side Text::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Text::end -->
                                    <!-- Form-Category::start -->
                                    <div class="col-lg-4">
                                        <label>Designation</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-id-badge"></i></span></div>
                                            <input type="text" class="form-control" name="designation" value="{{ $chef_questions->designation }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your current designation</span>
                                    </div>
                                    <!-- Form-Category::end -->
                                    <!-- Form-Cuisine::start -->
                                    <div class="col-lg-4">
                                        <label>Company</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-venus-double"></i></span></div>
                                            <input type="text" class="form-control" name="company" value="{{ $chef_questions->company }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your current Company Name</span>
                                    </div>
                                    <!-- Form-Cuisine::end -->
                                </div>

                            </div>
                            <!-- Recipe Intro::end -->

                            <div class="separator separator-dashed my-10"></div>

                            <!-- Recipe Timeing::start -->
                            <div>
                                <div class="form-group row">
                                    <!-- Side Text::start -->
                                    <div class="col-lg-4">
                                        <label></label>
                                        <h3>Recipe Information</h3>
                                    </div>
                                    <!-- Side Text::end -->
                                    <!-- Form-Allergic Ingredient::start -->
                                    <div class="col-lg-8">
                                        <label>Cooking Style</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-carrot"></i></span></div>
                                            <input type="text" class="form-control" name="cooking_style" value="{{ $chef_questions->cooking_style }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your cooking style</span>
                                    </div>
                                    <!-- Form-Allergic Ingredient::end -->
                                    <div class="col-lg-4"></div>
                                    <!-- Form-Food Life-Style::start -->
                                    <div class="col-lg-8">
                                        <label>Food Life-Style</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-utensils"></i></span></div>
                                            <input type="text" class="form-control" name="accomplishments" value="{{ $chef_questions->accomplishments }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your accomplishments</span>
                                    </div>
                                    <!-- Form-Food Life-Style::end -->
                                </div>
                            </div>
                            <!-- Recipe Timeing::end -->

                        </div>
                    </div>
                </div>
                <!--end::Container-->
                @csrf
            </form>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content-->
@endsection
