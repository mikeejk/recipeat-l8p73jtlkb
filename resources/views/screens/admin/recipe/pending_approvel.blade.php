@extends('layouts.bootstrap.guest')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Data-Table-->
        <div class="m-1 mt-5 d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card-body bg-white">
                    <table class="table" id="approvel_table">
                        <thead>
                            <tr>
                                <th>Recipe Name</th>
                                <th>Creator</th>
                                <th>Role</th>
                                <th>Action</th>
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
            $('#approvel_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '',
                columns: [{
                        data: '',
                        name: '',
                        orderable: false
                    },
                    {
                        data: '',
                        name: '',
                        searchable: false,
                        orderable: false
                    },
                ]
            });
        });
    </script>
@endpush
@endsection
