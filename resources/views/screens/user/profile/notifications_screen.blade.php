@extends('layouts.bootstrap.guest')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex w-100 flex-column-fluid ">
        <!--begin::Container-->
        <div class="container w-100 ">
            <!--begin::Row-->
            <div class="row w-100 ">
                <div class="d-flex  justify-content-center w-100 mt-10">
                    <!--begin::List Widget 4-->
                    <div class="card card-custom card-stretch gutter-b w-75">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-7" id="markasRead" onclick="makeNotificationAsRead()">
                            <h3 class="card-title align-items-start flex-column pb-2">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Notifications</span>
                                @if ($note_count == 0)
                                    <div class="d-flex justify-content-center w-100 ">
                                        <img class="w-50"
                                            src="https://www.pngkey.com/png/full/33-335977_no-notifications-illustration.png"
                                            alt="logo">
                                    </div>
                                    <div class="d-flex justify-content-center  w-100">
                                        <h5 class="text-danger mt-5 font-weight-bold ">{{ $note_count }}
                                            New Notifications</h5>
                                    </div>
                                    <div class="d-flex justify-content-center  w-100  card-toolbar">
                                        <ul class="nav nav-pills nav-pills-sm nav-dark">
                                            <li class="nav-item bg-success rounded ml-0">
                                                <a href="{{ url()->previous() }}"
                                                    class="nav-link py-2 px-4 font-weight-bolder text-white font-size-sm">Back</a>
                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <span
                                        class="d-flex justify-content-center text-success mt-3 font-weight-bold font-size-lg">{{ $note_count }}
                                         Notifications</span>
                                    </span>
                                @endif
                            </h3>
                            @if ($note_count == 0)
                            @else
                                <div class="card-toolbar">
                                    <ul class="nav nav-pills nav-pills-sm nav-dark">
                                        <li class="nav-item ml-0">
                                            <a href="{{ url()->previous() }}"
                                                class="nav-link py-2 px-4 font-weight-bolder text-primary font-size-sm">Back</a>
                                        </li>

                                    </ul>
                                </div>
                            @endif
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        @foreach ($notifications as $notification)
                            <div class="card-body pt-2 flex border-2 mt-2 h-56  overflow-y-auto">
                                <div class="tab-content mt-5" id="myTabList4">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_tab_list_4_2" role="tabpanel"
                                        aria-labelledby="kt_tab_list_4_2">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-center pb-6">
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet bullet-bar bg-light-primary align-self-stretch mr-4 my-1"></span>
                                            <!--end::Bullet-->

                                            <div class="d-flex flex-column flex-grow-1">
                                                <a href="#"
                                                    class="text-dark-75 text-hover-primary font-weight-bolder font-size-lg mb-1">{{ $notification->data }}
                                                    Just Started Following You.</a>
                                                {{-- <span
                                                    class="text-muted font-weight-bold">{{ $notification->created_at->diffForHumans() }}</span> --}}
                                            </div>
                                            <!--begin::Text-->
                                            {{-- <div class="d-flex flex-column flex-grow-1">
                                                <a href="#"
                                                    class="text-dark-75 text-hover-primary font-weight-bolder font-size-lg mb-1">{{ $notification->data['name'] }}
                                                    Suggested Recipe {{ $notification->data['recipe'] }} For You.</a>
                                                <span
                                                    class="text-muted font-weight-bold">{{ $notification->created_at->diffForHumans() }}</span>
                                            </div> --}}
                                            <!--end::Text-->
                                            <!--begin::Dropdown-->
                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                title="Quick actions" data-placement="left">
                                                <p class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="svg-icon svg-icon-lg">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1">
                                                                <rect x="14" y="9" width="6" height="6" rx="3"
                                                                    fill="black" />
                                                                <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                    fill-opacity="0.7" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </p>
                                            </div>
                                            <!--end::Dropdown-->
                                        </div>
                                        <!--end:Item-->
                                    </div>
                                    <!--end::Tap pane-->
                                </div>
                            </div>
                        @endforeach
                        <!--end::Body-->
                        <div class="card-header border-0 pt-7" id="markasRead" onclick="makeNotificationAsRead()">
                            <h3 class="card-title align-items-start flex-column pb-2">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">RecipeFeeds</span>
                                @if ($feednote == 0)
                                    <div class="d-flex justify-content-center w-100 ">
                                        <img class="w-50"
                                            src="https://www.pngkey.com/png/full/33-335977_no-notifications-illustration.png"
                                            alt="logo">
                                    </div>
                                    <div class="d-flex justify-content-center  w-100">
                                        <h5 class="text-danger mt-5 font-weight-bold ">{{ $feednote }}
                                            New RecipeFeeds</h5>
                                    </div>
                                    <div class="d-flex justify-content-center  w-100  card-toolbar">
                                        <ul class="nav nav-pills nav-pills-sm nav-dark">
                                            <li class="nav-item bg-success rounded ml-0">
                                                <a href="{{ url()->previous() }}"
                                                    class="nav-link py-2 px-4 font-weight-bolder text-white font-size-sm">Back</a>
                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <span
                                        class="d-flex justify-content-center text-success mt-3 font-weight-bold font-size-lg">{{ $feednote }}
                                         RecipeFeeds</span>
                                    </span>
                                @endif
                            </h3>
                            @if ($feednote == 0)
                            @else
                                <div class="card-toolbar">
                                    {{--  <ul class="nav nav-pills nav-pills-sm nav-dark">
                                        <li class="nav-item ml-0">
                                            <a href="{{ url()->previous() }}"
                                                class="nav-link py-2 px-4 font-weight-bolder text-primary font-size-sm">Back</a>
                                        </li>

                                    </ul>  --}}
                                </div>
                            @endif
                        </div>
                        @foreach ($feednotifications as $notification)
                            <div class="card-body pt-2 overflow-y-auto">
                                <div class="tab-content mt-5" id="myTabList4">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active " id="kt_tab_list_4_2" role="tabpanel"
                                        aria-labelledby="kt_tab_list_4_2" >
                                        <!--begin::Item-->
                                        <div class="d-flex flex-center pb-6">
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet bullet-bar bg-light-primary align-self-stretch mr-4 my-1"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Text-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <a href="#"
                                                    class="text-dark-75 text-hover-primary font-weight-bolder font-size-lg mb-1">Admin
                                                    Suggested Recipe {{ $notification->data }} For You.</a>
                                                {{--  <span
                                                    class="text-muted font-weight-bold">{{ $notification->created_at->diffForHumans() }}</span>  --}}
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::Dropdown-->
                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                title="Quick actions" data-placement="left">
                                                <p class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="svg-icon svg-icon-lg">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1">
                                                                <rect x="14" y="9" width="6" height="6" rx="3"
                                                                    fill="black" />
                                                                <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                    fill-opacity="0.7" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </p>
                                            </div>
                                            <!--end::Dropdown-->
                                        </div>
                                        <!--end:Item-->
                                    </div>
                                    <!--end::Tap pane-->
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!--end::List Widget 4-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    <script>
        function makeNotificationAsRead() {
            $.get('/markAsRead');
        }
    </script>
@endsection
