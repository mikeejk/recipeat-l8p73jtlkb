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
            <form class="form" action="/update" enctype="multipart/form-data" method="post">
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
                                    <a href=" /my_profile" class="btn btn-light-primary font-weight-bolder">
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
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $questions->name }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your profile name</span>
                                    </div>
                                    <!-- Form-Category::end -->
                                    <!-- Form-Cuisine::start -->
                                    <div class="col-lg-4">
                                        <label>Gender</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-venus-double"></i></span></div>
                                            <select type="text" class="form-control" name="gender" >
                                                    <option value="Male"  {{( $questions->gender === 'Male') ? 'Selected' : ''}}>
                                                        Male
                                                    </option>
                                                    <option value="Fe-Male"  {{( $questions->gender === 'Fe-Male') ? 'Selected' : ''}}>
                                                        Fe-Male
                                                    </option>
                                                    <option value="Other"  {{( $questions->gender === 'Other') ? 'Selected' : ''}}>
                                                        Other
                                                    </option>
                                            </select>
                                        </div>
                                        <span class="form-text text-muted">Would you like change your gender</span>
                                    </div>
                                    <!-- Form-Cuisine::end -->
                                </div>

                                <div class="form-group row">
                                    <!-- Side Space::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Space::end -->
                                    <!-- Form-Name::start -->
                                    <div class="col-lg-4">
                                        <label>Mail Id</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-at"></i></span></div>
                                            <input type="text" class="form-control" name="mail"
                                                value="{{ $questions->mail }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your mail id</span>
                                    </div>
                                    <!-- Form-Name::end -->
                                    <div class="col-lg-4">
                                        <label>Upload Your Profile Image</label>
                                        <div class="input-group">
                                            {{-- <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-clock"></i></span>
                                                </div> --}}
                                            <input type="file" class="form-control" name ="image"
                                                value="{{ $questions->image }}" />
                                        </div>
                                        <span class="form-text text-muted">upload your image</span>
                                    </div>
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-4">
                                        <label>Level for Cooking</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-concierge-bell"></i></span></div>
                                            <input type="text" class="form-control" name="cookinglevel"
                                                value="{{ $questions->cookinglevel }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your level of
                                            cooking</span>
                                    </div>
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
                                    <div class="col-lg-4">
                                        <label>Allergic Ingredient</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-carrot"></i></span></div>
                                            <input type="text" class="form-control" name="allergies"
                                                value="{{ $questions->allergies }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your Allergic
                                            Ingredient</span>
                                    </div>
                                    <!-- Form-Allergic Ingredient::end -->
                                    <!-- Form-Food Life-Style::start -->
                                    <div class="col-lg-4">
                                        <label>Food Life-Style</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-utensils"></i></span></div>
                                            <input type="text" class="form-control" name="lifestyle"
                                                value="{{ $questions->lifestyle }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your food life-style</span>
                                    </div>
                                    <!-- Form-Food Life-Style::end -->
                                </div>
                                <div class="form-group row">
                                    <!-- Side Space::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Space::end -->
                                    <!-- Form-Avoided Ingredient::start -->
                                    <div class="col-lg-4">
                                        <label>Avoided Ingredient</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-times-circle"></i></span></div>
                                            <input type="text" class="form-control" name="ingredient"
                                                value="{{ $questions->ingredient }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your avoided
                                            ingredient</span>
                                    </div>
                                    <!-- Form-Avoided Ingredient::end -->
                                    <!-- Form-Favorite Cuisine::start -->
                                    <div class="col-lg-4">
                                        <label>Favorite Cuisine</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fab fa-font-awesome-flag"></i></span></div>
                                            <input type="text" class="form-control" name="pref_cuisine"
                                                value="{{ $questions->pref_cuisine }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your favorite
                                            cuisine</span>
                                    </div>
                                    <!-- Form-Favorite Cuisine::end -->
                                </div>
                                <div class="form-group row">
                                    <!-- Side Space::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Space::end -->
                                    <!-- Form-Level for Cooking::start -->
                                    <div class="col-lg-4">
                                        <label>Goal for Cooking</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-concierge-bell"></i></span></div>
                                            <input type="text" class="form-control" name="goals"
                                                value="{{ $questions->goals }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your goals</span>
                                    </div>
                                    <!-- Form-Level for Cooking::end -->
                                    <!-- Form-Serving Size::start -->
                                    <div class="col-lg-4">
                                        <label>Serving Size</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-user-friends"></i></span></div>
                                            <input type="text" class="form-control" name="serving_time"
                                                value="{{ $questions->serving_time }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your Serving Size</span>
                                    </div>
                                    <!-- Form-Serving Size::end -->
                                </div>
                                <div class="form-group row">
                                    <!-- Side Space::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Space::end -->
                                    <!-- Form-Rather Cook::start -->
                                    <div class="col-lg-4">
                                        <label>Rather Cook</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-stream"></i></span></div>
                                            <input type="text" class="form-control" name="cho_cook"
                                                value="{{ $questions->cho_cook }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your rather cook</span>
                                    </div>
                                    <!-- Form-Rather Cook::end -->
                                    <!-- Form-Favorite Ingredient::start -->
                                    <div class="col-lg-4">
                                        <label>Favorite Ingredient</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-cloud-meatball"></i></span></div>
                                            <input type="text" class="form-control" name="fav_ingr"
                                                value="{{ $questions->fav_ingr }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your favorite
                                            ingredient</span>
                                    </div>
                                    <!-- Form-Favorite Ingredient::end -->
                                </div>
                                <div class="form-group row">
                                    <!-- Side Space::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Space::end -->
                                    <!-- Form-Level of Spiciness::start -->
                                    <div class="col-lg-4">
                                        <label>Level of Spiciness</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-pepper-hot"></i></span></div>
                                            <input type="text" class="form-control" name="level_spici"
                                                value="{{ $questions->level_spici }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your level of
                                            spiciness</span>
                                    </div>
                                    <!-- Form-Level of Spiciness::end -->
                                    <!-- Form-Spare time for cook::start -->
                                    <div class="col-lg-4">
                                        <label>Spare time for cook</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="fas fa-clock"></i></span></div>
                                            <input type="text" class="form-control" name="time_spend"
                                                value="{{ $questions->time_spend }}" />
                                        </div>
                                        <span class="form-text text-muted">Would you like change your spare time of
                                            cook</span>
                                    </div>
                                    <!-- Form-Spare time for cook::end -->
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
