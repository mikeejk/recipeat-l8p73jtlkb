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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Recipeat</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Recipe</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">My Recipes</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Cuisine</a>
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
                <!--begin::Card-->
                <form class="form" action="/cuisines" method="post">
                    @csrf
                    <div class="card-body bg-white">
                        <div class="form-group row mt-3">
                            <div class="col-lg-3">
                                <label class="col-lg-1 col-form-label text-lg-right">Cuisine</label>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="las la-sitemap"></i></span></div>
                                    <input type="text" class="form-control" placeholder="New Cuisine" name="cuisine" />
                                </div>
                                <span class="form-text text-muted">Add some new cuisine</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-7 col-4 d-lg-block d-none">
                                <a href="/admin_recipe"><button type="button"
                                        class="btn btn-secondary mr-2 w-lg-auto w-100">Get Back</button></a>
                            </div>
                            <!-- If Condition -->
                            <div class="col-lg-2 col-5">
                                <button type="submit" name="action" value="cuisine_save"
                                    class="btn btn-primary w-lg-100 w-100">Save</button>
                            </div>
                            <!-- Else Condition -->
                            <div class="col-lg-2 col-7">
                                <button type="submit" name="action" value="cuisine_save_next"
                                    class="btn btn-primary w-lg-auto w-100">Save & Insert
                                    Next</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

@endsection
