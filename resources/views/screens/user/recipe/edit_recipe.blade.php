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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Update Recipeat</h5>
                        <!--end::Page Title-->

                        {{-- <!--begin::Breadcrumb-->
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
                        <!--end::Breadcrumb--> --}}

                    </div>
                    <!--end::Page Heading-->

                </div>
                <!--end::Info-->

            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="">
            <form class="form" action="/recipes/{{ $recipe->id }}" enctype="multipart/form-data" method="post">
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
                                    <a href=" /recipes" class="btn btn-light-primary font-weight-bolder">
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
                                            value="{{ $recipe->category->category }}" disabled />
                                        <span class="form-text text-muted">This field doesn't be editable</span>
                                    </div>
                                    <!-- Form-Category::end -->

                                    <!-- Form-Cuisine::start -->
                                    <div class="col-lg-4">
                                        <label>Cuisine</label>
                                        <input type="text" class="form-control no-drop" name="cuisine"
                                            value="{{ $recipe->cuisine->cuisine }}" disabled />
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
                                        <input type="text" class="form-control" name="description"
                                            value="{{ $recipe->description }}"></textarea>
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
                                        <table id="recipeSteps" class="col-lg-12 table list">
                                            <tbody class="border border-light">
                                                <tr>

                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td class="" style="text-align: left;">
                                                        <input type="button" class="btn btn-bg-primary w-20 text-white btn-sm  "
                                                            id="addSteps" value="Add Steps" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                </tr>
                                            </tfoot>
                                        </table>
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

                                    <!-- Form-Next Row::start -->
                                    <table id="myTable" class="col-lg-8 table order-list">
                                        <thead>
                                            <tr>
                                                <td><label>Ingredient</label></td>
                                                <td><label>Quantity</label></td>
                                                <td><label>Measurement</label></td>
                                            </tr>
                                        </thead>
                                        <tbody class="border border-light">
                                            <tr>
                                                {{-- <td>{{ $recipe_ingredients->ingredient_id }}</td> --}}
                                                {{-- <td>{{ $recipe_ingredients->quantity }}</td> --}}
                                                {{-- <td>{{ $recipe_ingredients->measurement_id }}</td> --}}
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="" style="text-align: left;">
                                                    <input type="button" class="btn btn-bg-primary w-20 text-white btn-sm  "
                                                        id="addrow" value="Add Ingredient" />
                                                </td>
                                            </tr>
                                            <tr>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!-- Form-Next Row::end -->

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
                                        <input type="text" class="form-control" name="meta_description" value="{{ $recipe->meta_description }}"/>
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
                                        <input type="file" name="cover" class="form-control" value="{{ $recipe->cover }}">
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
                                        <h3>Recipe Taste-Bud</h3>
                                    </div>
                                    <!-- Side Text::end -->

                                    <!-- Form-Sweet::start -->
                                    <div class="col-lg-4">
                                        <label>Sweet - <span class="text-success">{{ $recipe->bud_sweet }}</span></label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_sweet" value="Low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_sweet" value="Medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_sweet" value="High" />
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
                                        <label>Sour - <span class="text-success">{{ $recipe->bud_sour }}</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_sour" value="Low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_sour" value="Medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_sour" value="High" />
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
                                        <label>Salty - <span class="text-success">{{ $recipe->bud_salt }}</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_salt" value="Low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_salt" value="Medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_salt" value="High" />
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
                                        <label>Pungent - <span class="text-success">{{ $recipe->bud_spicy }}</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_spicy" value="Low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_spicy" value="Medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_spicy" value="High" />
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
                                        <label>Bitter - <span class="text-success">{{ $recipe->bud_bitter }}</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_bitter" value="Low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_bitter" value="Medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_bitter" value="High" />
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
                                        <label>Astringent - <span class="text-success">{{ $recipe->bud_astringent }}</span></label>
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input type="radio" name="bud_astringent" value="Low" />
                                                <span></span>
                                                Low
                                            </label>
                                            <label class="radio radio-outline radio-warning">
                                                <input type="radio" name="bud_astringent" value="medium" />
                                                <span></span>
                                                Medium
                                            </label>
                                            <label class="radio radio-outline radio-danger">
                                                <input type="radio" name="bud_astringent" value="High" />
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

    <!-- Begin::Scripts -->
    <script>
        $(document).ready(function() {
            var counter = 0;

            /*Add Steps Row*/
            $("#addSteps").on("click", function() {
                var newSteps = $("<tr>");
                var cols = "";

                cols +=
                    '<td class="col-lg-11"><input type="text" class="form-control @error('steps') is-invalid @enderror" name="steps[]' +
                    counter +
                    '" /> <span class="form-text text-muted">Add how to cook this recipe in steps</span></td>';

                cols +=
                    '<td class="col-lg-1"><input type="button" class="btnDel btn btn-sm btn-danger" value="Delete"></td>';
                newSteps.append(cols);
                $("table.list").append(newSteps);
                counter++;
            });

            $("table.list").on("click", ".btnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });

            /*Add Ingredients Row*/
            $("#addrow").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols +=
                    '<td class="col-lg-4"><select class = "custom-select form-control @error('ingredient') is-invalid @enderror" name = "ingredient[]' +
                    counter +
                    '" > @foreach ($ingredients as $ingredient) <option value="{{ $ingredient->id }} "> {{ $ingredient->ingredient }}</option>@endforeach </select> <span class = "form-text text-muted" > Add the Ingredient for this recipe </span></td > '

                cols +=
                    '<td class="col-lg-3"><input type="text" class="form-control @error('quantity') is-invalid @enderror" placeholder="Quantity" name="quantity[]' +
                    counter + '" /><span class="form-text text-muted">Add the Quantity value</span></td>';

                cols +=
                    '<td class="col-lg-4"><select class="custom-select form-control @error('measurement') is-invalid @enderror" name="measurement[]' +
                    counter +
                    '"> @foreach ($measurements as $measurement)<option value="{{ $measurement->id }} ">{{ $measurement->measurement }}</option>@endforeach</select><span class="form-text text-muted">Select the measurement of the ingredient</td>'

                cols +=
                    '<td class="col-lg-1"><input type="button" class="ibtnDel btn btn-sm btn-danger" value="Delete"></td>';
                newRow.append(cols);
                $("table.order-list").append(newRow);
                counter++;
            });

            $("table.order-list").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
    </script>
    <!-- end::Scripts -->

@endsection
