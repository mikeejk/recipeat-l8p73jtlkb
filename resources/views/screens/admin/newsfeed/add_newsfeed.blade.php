@extends('layouts.bootstrap.guest')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    {{-- <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Breadcrumb-->
                        <div>
                            <!--begin::Button-->
                            <a href="/all_recipes" style="margin-bottom: 2px;" class="btn btn-primary font-weight-bolder">
                                <i class="las la-user-alt"></i>
                                </span>All Recipes</a>
                            <!--end::Button-->
                        </div>
                        &nbsp;
                        <div>
                            <!--begin::Button-->
                            <a href="/approve" style="margin-bottom: 2px;" class="btn btn-outline-primary font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <i class="las la-user-plus"></i>
                                </span>
                                </span>Pending Approvel</a>
                            <!--end::Button-->
                        </div>
                        <!--end::Breadcrumb-->
                    </div> --}}
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Data-Table-->
        <div class="m-1 mt-5 d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card-body bg-white">
                    <table class="table" id="all_recipe-table">
                        <thead>
                            <tr>
                                <th>Recipe Name</th>
                                <th>Category</th>
                                <th>Cuisine</th>
                                <th>Creator</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
    </div>
    <!--end::Data-Table-->
    @push('scripts')
    <script>
        $(function() {
            $('#all_recipe-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'allrecipe.data',
                columns: [{
                        data: 'recipe_name',
                        name: 'recipe_name',
                    },
                    {
                        data: 'category',
                        name: 'category',
                        orderable: false,
                        searchable: false,
                    },
                    {
                        data: 'cuisine',
                        name: 'cuisine',
                        orderable: false,
                        searchable: false,
                    },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: false,
                        searchable: false,
                    },
                    {
                        data: 'creator',
                        name: 'creator',

                    },


                ]
            });
        });
    </script>
@endpush
@endsection
