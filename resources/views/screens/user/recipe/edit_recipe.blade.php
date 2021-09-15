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
                                <a href="" class="text-muted">My Kitchen</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Edit Recipe</a>
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
        <div class="">
            <form class="form" action="/recipes/{{ $recipe->id }}" method="post">
                @method('PATCH')
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Card-->
                    <div class="card card-custom card-sticky" id="kt_page_sticky_card">
                        <!--begin::header-->
                        <div class="card-header">
                            <div class="col-lg-4 d-flex justify-content-start align-items-center">
                                <p><b class="text-danger">{{ $recipe->recipe_name }}</b> Recipe Update</p>
                            </div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                                <div class="">
                                        <a href=" /recipes"
                                    class="btn btn-light-primary font-weight-bolder">
                                    <i class="las la-arrow-left"></i>Back</a>
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary font-weight-bolder">
                                            <i class="las la-cloud-upload-alt"></i>Update to Live</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::header-->
                        <!-- begin::form -->
                        <div class="card-body">
                            <!-- Recipe Intro::start -->
                            <div>
                                <div class="form-group row">

                                    <!-- Side Text::start -->
                                    <div class="col-lg-4">
                                        <label></label>
                                        <h3>Recipe Intro</h3>
                                    </div>
                                    <!-- Side Text::end -->

                                    <!-- Form-Category::start -->
                                    <div class="col-lg-4">
                                        <label>Category</label>
                                        <input type="text" class="form-control no-drop" name="recipe_name"
                                            value="{{ $recipe->category_id }}" disabled />
                                        <span class="form-text text-muted">This field doesn't be editable</span>
                                    </div>
                                    <!-- Form-Category::end -->

                                    <!-- Form-Cuisine::start -->
                                    <div class="col-lg-4">
                                        <label>Cuisine</label>
                                        <input type="text" class="form-control no-drop" name="cuisine"
                                            value="{{ $recipe->cuisine_id }}" disabled />
                                        <span class="form-text text-muted">This field doesn't be editable</span>
                                    </div>
                                    <!-- Form-Cuisine::end -->

                                </div>
                                <div class="form-group row">

                                    <!-- Side Space::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Space::end -->

                                    <!-- Form-Name::start -->
                                    <div class="col-lg-8">
                                        <label>Recipe Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="las la-utensils"></i></span></div>
                                            <input type="text" class="form-control" placeholder="Egg Pepper Fry"
                                                name="recipe_name" value="{{ $recipe->recipe_name }}" />
                                        </div>
                                        <span class="form-text text-muted">Enter your updated recipe name</span>
                                    </div>
                                    <!-- Form-Name::end -->

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
                                        <h3>Recipe Timeing</h3>
                                    </div>
                                    <!-- Side Text::end -->

                                    <!-- Form-Prepare Time::start -->
                                    <div class="col-lg-4">
                                        <label>Prepare Time</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="las la-hourglass-start"></i></span></div>
                                            <input type="number" class="form-control" placeholder="30 Minutes"
                                                name="preparing_time" value="{{ $recipe->preparing_time }}" />
                                        </div>
                                        <span class="form-text text-muted">If the prepare time is increased enter the
                                            new one(In
                                            Minutes)</span>
                                    </div>
                                    <!-- Form-Prepare Time::end -->

                                    <!-- Form-Cooking Time::start -->
                                    <div class="col-lg-4">
                                        <label>Cooking Time</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="las la-stopwatch"></i></span></div>
                                            <input type="number" class="form-control" placeholder="20 Minutes"
                                                name="cooking_time" value="{{ $recipe->cooking_time }}" />
                                        </div>
                                        <span class="form-text text-muted">If the cokking time is increased enter the
                                            new one(In
                                            Minutes)</span>
                                    </div>
                                    <!-- Form-Cooking Time::end -->

                                </div>
                                <div class="form-group row">

                                    <!-- Side Space::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Space::end -->

                                    <!-- Form-Serves::start -->
                                    <div class="col-lg-4">
                                        <label>Serves</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="las la-users"></i></span></div>
                                            <input type="number" class="form-control" placeholder="4 People"
                                                name="serves_people" value="{{ $recipe->serves_people }}" />
                                        </div>
                                        <span class="form-text text-muted">If the number of serves people is changed
                                            enter the new one</span>
                                    </div>
                                    <!-- Form-Serves::end -->

                                    <!-- Form-Calories::start -->
                                    <div class="col-lg-4">
                                        <label>Calories</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="las la-cookie-bite"></i></span></div>
                                            <input type="number" class="form-control" placeholder="150 Calories"
                                                name="calories_in" value="{{ $recipe->calories_in }}" />
                                        </div>
                                        <span class="form-text text-muted">If the food is contain more calories update
                                            it</span>
                                    </div>
                                    <!-- Form-Calories::end -->

                                </div>
                            </div>
                            <!-- Recipe Timeing::end -->

                            <div class="separator separator-dashed my-10"></div>

                            <!-- Recipe Description::start -->
                            <div>
                                <div class="form-group row">

                                    <!-- Side Text::start -->
                                    <div class="col-lg-4">
                                        <label></label>
                                        <h3>Recipe Description</h3>
                                    </div>
                                    <!-- Side Text::end -->

                                    <!-- Form-Description::start -->
                                    <div class="col-lg-8">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="3" name="description"
                                            value="{{ $recipe->steps }}"></textarea>
                                        <span class="form-text text-muted">Add the more specialized for this
                                            recipe</span>
                                    </div>
                                    <!-- Form-Description::end -->

                                </div>
                                <div class="form-group row">

                                    <!-- Side Space::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Space::end -->

                                    <!-- Form-Setps::start -->
                                    <div class="col-lg-8">
                                        <label>Setps</label>
                                        <textarea id="editor" rows="3" name="steps" value="{{ $recipe->steps }}">

                                                            </textarea>
                                        <span class="form-text text-muted">Add some more steps of creating this recipe
                                            (In using BULLET poins)</span>
                                    </div>
                                    <!-- Form-Setps::end -->

                                </div>
                            </div>
                            <!-- Recipe Description::end -->

                            <div class="separator separator-dashed my-10"></div>

                            <!-- Recipe Ingredients::start -->
                            <div>
                                <div class="form-group row">

                                    <!-- Side Text::start -->
                                    <div class="col-lg-4">
                                        <label></label>
                                        <h3>Recipe Ingredient</h3>
                                    </div>
                                    <!-- Side Text::end -->

                                    <!-- Form-Ingredient::start -->
                                    <div class="col-lg-3">
                                        <label>Ingredient</label>
                                        <select class="custom-select form-control" name="ingredient">
                                            {{-- @foreach ($ingredients as $ingredient)
                                                    <option value="{{ $ingredient->id }} ">
                                                        {{ $ingredient->ingredient }}
                                                    </option>
                                                @endforeach --}}
                                        </select>
                                        <span class="form-text text-muted">Add the Ingredient for this recipe</span>
                                    </div>
                                    <!-- Form-Ingredient::end -->

                                    <!-- Form-Description::start -->
                                    <div class="col-lg-1">
                                        <label>Quantity</label>
                                        <input type="text" class="form-control" placeholder="Egg Pepper Fry" />
                                        <span class="form-text text-muted">Add the Quantity</span>
                                    </div>
                                    <!-- Form-Description::end -->

                                    <!-- Form-Description::start -->
                                    <div class="col-lg-2">
                                        <label>Measurement</label>
                                        <select class="custom-select form-control" name="measurement">
                                            {{-- @foreach ($measurements as $measurement)
                                                    <option value="{{ $measurement->id }} ">
                                                        {{ $measurement->measurement }}
                                                    </option>
                                                @endforeach --}}
                                        </select>
                                        <span class="form-text text-muted">Select the measurement for the selected
                                            recipe</span>
                                    </div>
                                    <!-- Form-Description::end -->

                                    <!-- Form-Description::start -->
                                    <div class="col-lg-2">
                                        <label>Action</label>
                                        <input type="text" class="form-control" placeholder="Egg Pepper Fry" />
                                    </div>
                                    <!-- Form-Description::end -->

                                </div>
                            </div>
                            <!-- Recipe Ingredients::end -->

                            <div class="separator separator-dashed my-10"></div>

                            <!-- Recipe Meta-Description & Image::start -->
                            <div>
                                <div class="form-group row">

                                    <!-- Side Text::start -->
                                    <div class="col-lg-4">
                                        <label></label>
                                        <h3>Recipe Meta-Data & Image</h3>
                                    </div>
                                    <!-- Side Text::end -->

                                    <!-- Form-Description::start -->
                                    <div class="col-lg-8">
                                        <label>Meta-Description</label>
                                        <textarea class="form-control" rows="3" name="meta_description"></textarea>
                                        <span class="form-text text-muted">If you want to add some special description
                                            for thsi recipe (ADD HEAR)</span>
                                    </div>
                                    <!-- Form-Description::end -->

                                </div>
                                <div class="form-group row">

                                    <!-- Side Space::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Space::end -->

                                    <!-- Form-Image::start -->
                                    <div class="col-lg-8">
                                        <label>Image</label>
                                        <textarea class="form-control" readonly rows="2"></textarea>
                                        <span class="form-text text-muted">Add some Image of your recipe</span>
                                    </div>
                                    <!-- Form-Image::end -->

                                </div>
                            </div>
                            <!-- Recipe Meta-Description & Image::end -->

                            <div class="separator separator-dashed my-10"></div>

                            <!-- Recipe Tast-Bud::start -->
                            <div>
                                <div class="form-group row">
                                    <!-- Side Text::start -->
                                    <div class="col-lg-4">
                                        <label></label>
                                        <h3>Recipe Tast-Bud</h3>
                                    </div>
                                    <!-- Side Text::end -->

                                    <!-- Form-Sweet::start -->
                                    <div class="col-lg-4">
                                        <label>Sweet</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_sweet" value="low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_sweet" value="medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_sweet" value="high" />
                                                <span></span>
                                                High
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">Select level of <b>sweet</b> in this
                                            recipe</span>
                                    </div>
                                    <!-- Form-Sweet::end -->

                                    <!-- Form-Sour::start -->
                                    <div class="col-lg-4">
                                        <label>Sour</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_sour" value="low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_sour" value="medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_sour" value="high" />
                                                <span></span>
                                                High
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">Select level of <b>sour</b> in this
                                            recipe</span>
                                    </div>
                                    <!-- Form-Sour::end -->

                                </div>
                                <div class="form-group row">

                                    <!-- Side Space::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Space::end -->

                                    <!-- Form-Salty::start -->
                                    <div class="col-lg-4">
                                        <label>Salty</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_salt" value="low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_salt" value="medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_salt" value="high" />
                                                <span></span>
                                                High
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">Select level of <b>salty</b> in this
                                            recipe</span>
                                    </div>
                                    <!-- Form-Salty::end -->

                                    <!-- Form-Pungent (Spicy)::start -->
                                    <div class="col-lg-4">
                                        <label>Pungent (Spicy)</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_spicy" value="low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_spicy" value="medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_spicy" value="high" />
                                                <span></span>
                                                High
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">Select level of <b>spicy</b> in this
                                            recipe</span>
                                    </div>
                                    <!-- Form-Pungent (Spicy)::end -->

                                </div>
                                <div class="form-group row">

                                    <!-- Side Space::start -->
                                    <div class="col-lg-4"></div>
                                    <!-- Side Space::end -->

                                    <!-- Form-Bitter::start -->
                                    <div class="col-lg-4">
                                        <label>Bitter</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_bitter" value="low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_bitter" value="medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_bitter" value="high" />
                                                <span></span>
                                                High
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">Select level of <b>bitter</b> in this
                                            recipe</span>
                                    </div>
                                    <!-- Form-Bitter::end -->

                                    <!-- Form-Astringent::start -->
                                    <div class="col-lg-4">
                                        <label>Astringent</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_astringent" value="low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_astringent" value="medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_astringent" value="high" />
                                                <span></span>
                                                High
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">Select level of <b>astringent</b> in this
                                            recipe</span>
                                    </div>
                                    <!-- Form-Calories::end -->
                                </div>
                            </div>
                            <!-- Recipe Timeing::end -->
                        </div>
                        <!-- end::form -->
                    </div>
                </div>
                @csrf
            </form>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
