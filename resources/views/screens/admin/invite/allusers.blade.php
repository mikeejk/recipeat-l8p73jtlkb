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
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <!-- <ul
                                class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item text-muted">
                                    <a href="" class="text-muted">User</a>
                                </li>
                                <li class="breadcrumb-item text-muted">
                                    <a href="" class="text-muted">Invite</a>
                                </li>
                            </ul> -->
                        <div>
                            <!--begin::Button-->
                            <a href="/customers" style="margin-bottom: 2px;" class="btn btn-outline-primary font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <i class="las la-user-plus"></i>
                                </span>
                                </span>Invited User</a>
                            <!--end::Button-->
                        </div>
                        &nbsp;
                        <div>
                            <!--begin::Button-->
                            <a href="/all_user" style="margin-bottom: 2px;" class="btn btn-primary font-weight-bolder">
                                <i class="las la-user-alt"></i>
                                </span>All User</a>
                            <!--end::Button-->
                        </div>
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
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label">All Users
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <div class="">
                            <table class="table" id="customers-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mail Id</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!--end: Datatable-->

                    </div>
                </div>
                <!--end::Card-->

            </div>
            <!--end::Container-->

        </div>
        <!--end::Entry-->

    </div>
    <!--end::Content-->

</div>

@push('scripts')
<script>
    $(function() {
        $('#customers-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'users.data',
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email',
                    searchable: false,
                    orderable: false

                },
                {
                    data: 'status',
                    name: 'stauus',
                    searchable: false,
                    orderable: false
                }
            ]
        });
    });
</script>
@endpush

@endsection