@extends('layouts.bootstrap.guest')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-4 py-lg-4 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-0 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Recipe</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">My Recipes</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Category</a>
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
                <form class="form" action="/categorys" method="post">
                    @csrf

                        <div class="form-group bg-white row p-4 m-1">
                            <div class="col-md-3 col-8">
                                <label class="col-lg-1 col-form-label text-lg-right">Category</label>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="las la-sitemap"></i></span></div>
                                    <input type="text" class="form-control" placeholder="New Category" name="category" />
                                </div>
                                <span class="form-text text-muted">Add some new category</span>
                            </div>
                            <div class="col-lg-1 col-md-2 col-5 mt-1">
                                <button type="submit" name="action" value="category_save"
                                    class="btn btn-primary w-lg-100 w-100">Save</button>
                            </div>
                        </div>

                    {{-- <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-9 col-4 d-lg-block d-none">
                                <a href="/admin_recipe"><button type="button"
                                        class="btn btn-secondary mr-2 w-lg-auto w-100">Get Back</button></a>
                            </div>
                            <div class="col-md-1 col-5">
                                <button type="submit" name="action" value="category_save"
                                    class="btn btn-primary w-lg-100 w-100">Save</button>
                            </div>
                            <div class="col-md-2 col-7">
                                <button type="submit" name="action" value="category_save_next"
                                    class="btn btn-primary w-lg-auto w-100">Save & Insert Next</button>
                            </div>
                        </div>
                    </div> --}}
                </form>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
        <!--begin::Data-Table-->
        <div class="-mt-lg-10 m-1 d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card-body bg-white">
                    <table class="table" id="category-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Data-Table-->

    </div>
    <!--end::Content-->

    @push('scripts')
        <script>
            $(function() {
                $('#category-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: 'category.data',
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'category',
                            name: 'category',
                            orderable: false
                        },
                        {
                            data: 'action',
                            name: 'action',
                            searchable: false,
                            orderable: false
                        },
                    ]
                });
            });
        </script>
    @endpush
<style>
    .mt {
  margin-top: -50px !important;
}
</style>
@endsection
