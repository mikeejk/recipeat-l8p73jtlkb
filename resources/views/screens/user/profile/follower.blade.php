@extends('layouts.bootstrap.guest')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Details-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Followers</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-500"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        {{-- <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">{{ count($projects) }} of --}}
                        {{-- {{ count($projects_count) }} --}}
                        </span>
                        <form class="ml-5" action="/my_follower" method="GET" role="search">
                            {{ csrf_field() }}
                            <div class="input-group input-group-md bg-white border-0 rounded min-w-175px">
                                <input name="q" type="text" class="form-control bg-white border-0"
                                    id="kt_subheader_search_form" placeholder="Search..." value="{{ isset($_GET['q']) ? $_GET['q'] : '' }}" required />
                                <button class="border-0 bg-primary rounded w-25 text-white p-1 m-1">Search
                                </button>
                            </div>
                        </form>

                    </div>
                    <!--end::Search Form-->
                </div>
                <!--end::Details-->

            </div>
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                @if (isset($projects))

                    <!--begin::Row-->
                    <div class="row">
                        @if (count($projects) > 0)
                            @foreach ($projects as $users)
                                <!--begin::Col-->
                                {{-- <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-body pt-4">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end">
                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                        data-placement="left">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <a href="#" class="btn btn-primary  font-weight-bolder mr-2">Follow<i
                                                    class="fas fa-user-plus ml-2"></i>
                                            </a>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::User-->
                                <div class="d-flex align-items-end py-2">
                                    <!--begin::Pic-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Pic-->
                                        <div class="d-flex flex-shrink-0 mr-5">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="https://i.pinimg.com/474x/91/27/a5/9127a595d3a3421d984edc45230f6d9a.jpg"
                                                    alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                                class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"> {{ $users->name }}</a>
                                            <span class="text-muted font-weight-bold">Associate Software Engineer</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::User-->
                                <!--begin::Desc-->
                                <p class="py-2">I am an Associate Software Engineer @Mindzapp</p>
                                <!--end::Desc-->
                                <!--begin::Contacts-->
                                <div class="py-2">

                                    <div class="d-flex align-items-center mb-2">
                                        <span class="flex-shrink-0 mr-2">
                                            <span class="svg-icon svg-icon-md">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <a href="#"
                                            class="text-muted text-hover-primary font-weight-bold"> {{ $users->email }}</a>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="flex-shrink-0 mr-2">
                                            <span class="svg-icon svg-icon-md">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker1.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold"> {{ $users->created_at }}</a>
                                    </div>
                                </div>
                                <!--end::Contacts-->
                                <!--begin::Actions-->
                                <div class="pt-2">
                                    <a href="#" class="btn btn-light-primary font-weight-bolder">Profile</a>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div> --}}
                                <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-4  d-flex justify-content-center w-full">
                                    {{-- <div class="card p-5 w-full">
                                <div class="d-flex  align-items-center w-full">
                                    <div class="image"> <img
                                            src="https://i.pinimg.com/474x/91/27/a5/9127a595d3a3421d984edc45230f6d9a.jpg"
                                            class="rounded" width="155" height="150">
                                    </div>
                                    <div class="ml-3 w-100">
                                        <h6 class="mb-0 mt-0">{{ $users->name }}</h6> <span
                                            class="text-black-50"><small>{{ $users->email }}</small></span>
                                        <div
                                            class="p-3 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                                            <div class="d-flex flex-column"> <span class="articles">Recipes</span>
                                                <span class="number1">38</span>
                                            </div>
                                            <div class="d-flex flex-column"> <span class="followers">Followers</span>
                                                <span class="number2">980</span>
                                            </div>
                                            <div class="d-flex flex-column"> <span class="rating">Following</span>
                                                <span class="number3">8.9</span>
                                            </div>
                                        </div>
                                        <div class="button mt-2 d-flex flex-row align-items-center">
                                            <button
                                                class="btn btn-sm btn-outline-primary w-100">Profile</button>
                                            <button id="" class="btn btn-sm btn-primary w-25 ml-2 btnfollow">Follow</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                                    <div class="card card-custom gutter-b card-stretch">
                                        <!--begin::Body-->
                                        <div class="card-body text-center pt-1">
                                            <!--begin::Toolbar-->
                                            <div class="d-flex justify-content-end">
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip"
                                                    data-placement="left">
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
                                                                    <rect x="3" y="9" width="6" height="6" rx="3"
                                                                        fill="black" fill-opacity="0.7" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <!--end::Toolbar-->
                                            <!--begin::User-->
                                            <div class="">
                                                <div class="symbol  symbol-lg-75">
                                                    <img src="https://i.pinimg.com/474x/91/27/a5/9127a595d3a3421d984edc45230f6d9a.jpg"
                                                        alt="image" />
                                                </div>
                                                <div class="symbol symbol-lg-75 symbol-circle symbol-primary">
                                                    <span
                                                        class="font-size-h3 symbol-label font-weight-boldest d-none">{{ $users->created_at }}</span>
                                                </div>
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Name-->
                                            <div class="my-2">
                                                <h5 class="text-dark font-weight-bold text-hover-primary font-size-h4 text-truncate"
                                                    data-toggle="tooltip" data-html="true" data-placement="right"
                                                    title="{{ $users->name }}">{{ $users->name }}
                                                </h5>
                                            </div>
                                            <div class="my-2 w-100">
                                                <h6
                                                    class="h6 d-inline-flex justify-content-center p-1 text-center  bg-success
                                             text-white rounded">
                                                    <small class="">
                                                        @if ($users->hasrole('Home-Chef') || $users->hasrole('Chef') || $users->hasrole('Admin'))
                                                            {{ $users->getRoleNames()->first() }}
                                                        @else
                                                            User
                                                        @endif
                                                    </small>
                                                </h6>
                                            </div>
                                            <!--end::Name-->
                                            <!--begin::Label-->
                                            <form action="/follow" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="user" value="{{ $users->id }}">
                                                <div
                                                    class="button mt-2 d-flex flex-row justify-content-center align-items-center">
                                                    {{-- <button id="" class="btn btn-sm btn-primary w-50 ml-2 btnfollow">Follow</button> --}}
                                                    {{-- <a href="{{ route('user.follow', $users->id) }}" class="btn btn-sm btn-primary w-50 ml-2 btnfollow">Follow</a>
                                        <a href="{{ route('user.unfollow', $users->id) }}" class="btn btn-sm btn-primary w-50 ml-2 btnfollow">UnFollow</a> --}}
                                                    @if (Auth::user()->isFollowedBy($users))
                                                        <input class="btn btn-danger" value="UnFollow" type="submit"
                                                            name="UnFollow">
                                                        {{-- <a href="{{ route('user.unfollow', $users->id) }}"
                                                    class="btn btn-sm btn-danger white" value="{{$users->id}}">UnFollow</a> --}}
                                                    @else
                                                        <input class="btn btn-primary" value="Follow" type="submit"
                                                            name="Follow">
                                                        {{-- <a href="{{ route('user.follow', $users->id) }}"
                                                    class="btn btn-sm btn-primary white" value="{{$users->id}}">Follow</a> --}}
                                                    @endif
                                                </div>
                                            </form>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->


                                </div>

                            @endforeach
                            <!--end::Col-->
                        @else
                            <div class="d-flex justify-content-center w-100">
                                <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-4 card card-custom gutter-b card-stretch">
                                    <!--begin::Body-->
                                    <div class="card-body text-center pt-1">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end">
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip"
                                                data-placement="left">

                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black" />
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>

                                            </div>
                                        </div>
                                        <!--end::Toolbar-->
                                        <!--begin::User-->

                                        <!--end::User-->
                                        <!--begin::Name-->
                                        <div class="my-2">
                                            <img class="w-100"
                                                src="https://i.pinimg.com/originals/7a/1c/f2/7a1cf2206c2a112f413888d20794c323.png"
                                                alt="image" />
                                            <h5 class="text-dark font-weight-bold text-hover-primary font-size-h4 text-truncate"
                                                data-toggle="tooltip" data-html="true" data-placement="right">
                                                <h5 class=" bg-white p-4 h-100 text-info rounded">{{ 'No Users Found!' }}
                                                </h5>
                                            </h5>
                                        </div>

                                        <!--end::Name-->

                                    </div>
                                    <!--end::Body-->
                                </div>
                            </div>

                        @endif
                    </div>
                    <!--end::Row-->
                    <div class="col-12">
                        <!--begin::Pagination-->

                        {!! $projects->render() !!}
                        <!--end::Pagination-->


                @endif
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

    </div>
    <!--end::Content-->

    {{-- Style  For User Cards --}}
    <style>
        .card {
            width: 500px;
            border: none;
            border-radius: 10px;
            background-color: #fff
        }

        .stats {
            background: #f2f5f8 !important;
            color: #000 !important
        }

        .articles {
            font-size: 10px;
            color: #a1aab9
        }

        .followers {
            font-size: 10px;
            color: #a1aab9
        }

        .number2 {
            font-weight: 500
        }

        .rating {
            font-size: 10px;
            color: #a1aab9
        }

        .number3 {
            font-weight: 500
        }

    </style>

    {{-- JQuery Script For Follow Button Toggle --}}
    <script>
        $('.btnfollow').click(function() {
            $(this).text(function(_, text) {
                return text === "Follow" ? "Following" : "Follow";
            });

            if ($(this).text() == "Follow") {
                $(this).removeClass('Following'), $(this).css({
                    "background": "#1E90FF"
                }), $(this).css({
                    "color": "white"
                });

            } else if ($(this).text() == "Following") {
                $(this).addClass('Follow'), $(this).css({
                    "background": "#FF0000"
                }), $(this).css({
                    "color": "white"
                });
            }
        });
    </script>
@endsection
