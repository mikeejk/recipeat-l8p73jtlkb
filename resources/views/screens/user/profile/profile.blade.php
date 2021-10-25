@extends('layouts.bootstrap.guest')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-6 py-lg-2 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center flex-wrap">
                    <a href="#"
                        class="btn btn-fixed-height btn-bg-primary btn-hover-bg-success btn-text-white btn-hover-text-white btn-icon-primary font-weight-bolder font-size-sm px-5 my-1 mr-3"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                            <i class="fas fa-user-edit text-white text-lg"></i>
                            <!--end::Svg Icon-->
                        </span>Edit Profile
                    </a>
                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Nav Panels Wizard 4-->
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <!--begin::Top-->
                        <div class="d-flex">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-7">
                                <div class="symbol symbol-50 symbol-lg-120">
                                    <img alt="Pic" src="assets/media//users/150-11.jpg" />
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin: Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex align-items-center justify-content-between flex-wrap mt-10">
                                    <!--begin::User-->
                                    <div class="mr-3">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{ Auth::user()->name }}</a>
                                        <!--end::Name-->
                                        <!--begin::Contacts-->
                                        <div class="d-flex flex-wrap my-2">
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                                fill="#000000" />
                                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5"
                                                                r="2.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>{{ Auth::user()->email }}</a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <mask fill="white">
                                                                <use xlink:href="#path-1" />
                                                            </mask>
                                                            <g />
                                                            <path
                                                                d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>{{ Auth::user()->name }}</a>
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>London</a>
                                        </div>
                                        <!--end::Contacts-->
                                    </div>
                                    <!--begin::User-->
                                    <!--begin::Actions-->
                                    <div class="my-lg-0 my-1">
                                        <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder mr-2">Contact</a>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Top-->
                        <!--begin::Separator-->
                        <div class="separator separator-solid my-7"></div>
                        <!--end::Separator-->
                        <!--begin::Bottom-->
                        <div class="d-flex align-items-center flex-wrap">
                            <!--begin: Item-->
                            <div class="d-flex align-items-center  mr-1 my-1 col-lg-2 col-4">
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-xs text-center">24</span>
                                    <span class="font-weight-bolder font-size-sm">
                                        <span class="text-dark-50 font-weight-bold"></span>Followers</span>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center  mr-1 my-1 col-lg-2 col-4">
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-xs text-center">16</span>
                                    <span class="font-weight-bolder font-size-sm">
                                        <span class="text-dark-50 font-weight-bold"></span>Following</span>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center  mr-1 my-1">
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-xs text-center">7</span>
                                    <span class="font-weight-bolder font-size-sm">
                                        <span class="text-dark-50 font-weight-bold"></span>My recipes</span>
                                </div>
                            </div>
                            <!--end: Item-->

                        </div>
                        <!--end::Bottom-->
                    </div>
                </div>
                <!--end::Nav Panels Wizard 4-->
                <!--begin::Row-->
                <div class="row">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4"></div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Charts Widget 4-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header h-auto border-0">
                                <div class="card-title py-5">
                                    <h3 class="card-label">
                                        <span class="d-block text-dark font-weight-bolder">My Recipes</span>

                                    </h3>
                                </div>
                                <div class="card-toolbar">
                                    <ul class="nav nav-pills nav-pills-sm nav-dark-75" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 active" data-toggle="tab" href="/recipes">
                                                <span class="nav-text font-size-sm">All Recipes</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body">
                                <div id="kt_charts_widget_4_chart">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-9 bg-light-danger rounded p-5">
                                        <!--begin::Icon-->
                                        <span class="svg-icon svg-icon-danger mr-5">
                                            <span class="svg-icon svg-icon-lg">
                                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Cooking/Cooking-pot.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M10,6 L10,5 C10,4.44771525 10.4477153,4 11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,6 L14.383822,6 C16.2072694,6 18.0148165,6.33909803 19.7142779,7 L19.8017005,7.03399769 C20.0590665,7.1340845 20.1865664,7.42385724 20.0864796,7.6812232 C20.0117407,7.87340889 19.8266841,8 19.6204773,8 L4.37951429,8 C4.10337192,8 3.87951429,7.77614237 3.87951429,7.5 C3.87951429,7.2937932 4.0061054,7.10873661 4.19829109,7.03399769 L4.28571369,7 C5.98517509,6.33909803 7.79272222,6 9.61616964,6 L10,6 Z M20,11 L22,11 C22.5522847,11 23,11.4477153 23,12 C23,12.5522847 22.5522847,13 22,13 L20,13 C19.4477153,13 19,12.5522847 19,12 C19,11.4477153 19.4477153,11 20,11 Z M2,11 L4,11 C4.55228475,11 5,11.4477153 5,12 C5,12.5522847 4.55228475,13 4,13 L2,13 C1.44771525,13 1,12.5522847 1,12 C1,11.4477153 1.44771525,11 2,11 Z" fill="#000000" opacity="0.3"/>
                                                        <path d="M5,9 L19,9 C19.5522847,9 20,9.44771525 20,10 L20,17 C20,19.209139 18.209139,21 16,21 L8,21 C5.790861,21 4,19.209139 4,17 L4,10 C4,9.44771525 4.44771525,9 5,9 Z" fill="#000000"/>
                                                    </g>
                                                </svg><!--end::Svg Icon--></span>
                                            </span>
                                        </span>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <a href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Idly   Chinas-Style</a>
                                            <span class="text-muted font-weight-bold">Total vies: 2786</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
                                        <!--begin::Icon-->
                                        <span class="svg-icon svg-icon-success mr-5">
                                            <span class="svg-icon svg-icon-lg">
                                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Cooking/Cooking-pot.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M10,6 L10,5 C10,4.44771525 10.4477153,4 11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,6 L14.383822,6 C16.2072694,6 18.0148165,6.33909803 19.7142779,7 L19.8017005,7.03399769 C20.0590665,7.1340845 20.1865664,7.42385724 20.0864796,7.6812232 C20.0117407,7.87340889 19.8266841,8 19.6204773,8 L4.37951429,8 C4.10337192,8 3.87951429,7.77614237 3.87951429,7.5 C3.87951429,7.2937932 4.0061054,7.10873661 4.19829109,7.03399769 L4.28571369,7 C5.98517509,6.33909803 7.79272222,6 9.61616964,6 L10,6 Z M20,11 L22,11 C22.5522847,11 23,11.4477153 23,12 C23,12.5522847 22.5522847,13 22,13 L20,13 C19.4477153,13 19,12.5522847 19,12 C19,11.4477153 19.4477153,11 20,11 Z M2,11 L4,11 C4.55228475,11 5,11.4477153 5,12 C5,12.5522847 4.55228475,13 4,13 L2,13 C1.44771525,13 1,12.5522847 1,12 C1,11.4477153 1.44771525,11 2,11 Z" fill="#000000" opacity="0.3"/>
                                                        <path d="M5,9 L19,9 C19.5522847,9 20,9.44771525 20,10 L20,17 C20,19.209139 18.209139,21 16,21 L8,21 C5.790861,21 4,19.209139 4,17 L4,10 C4,9.44771525 4.44771525,9 5,9 Z" fill="#000000"/>
                                                    </g>
                                                </svg><!--end::Svg Icon--></span>
                                            </span>
                                        </span>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <a href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pongal   Tamil Nadu-Style</a>
                                            <span class="text-muted font-weight-bold">Total views: 2561</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
                                        <!--begin::Icon-->
                                        <span class="svg-icon svg-icon-info mr-5">
                                            <span class="svg-icon svg-icon-lg">
                                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Cooking/Cooking-pot.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M10,6 L10,5 C10,4.44771525 10.4477153,4 11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,6 L14.383822,6 C16.2072694,6 18.0148165,6.33909803 19.7142779,7 L19.8017005,7.03399769 C20.0590665,7.1340845 20.1865664,7.42385724 20.0864796,7.6812232 C20.0117407,7.87340889 19.8266841,8 19.6204773,8 L4.37951429,8 C4.10337192,8 3.87951429,7.77614237 3.87951429,7.5 C3.87951429,7.2937932 4.0061054,7.10873661 4.19829109,7.03399769 L4.28571369,7 C5.98517509,6.33909803 7.79272222,6 9.61616964,6 L10,6 Z M20,11 L22,11 C22.5522847,11 23,11.4477153 23,12 C23,12.5522847 22.5522847,13 22,13 L20,13 C19.4477153,13 19,12.5522847 19,12 C19,11.4477153 19.4477153,11 20,11 Z M2,11 L4,11 C4.55228475,11 5,11.4477153 5,12 C5,12.5522847 4.55228475,13 4,13 L2,13 C1.44771525,13 1,12.5522847 1,12 C1,11.4477153 1.44771525,11 2,11 Z" fill="#000000" opacity="0.3"/>
                                                        <path d="M5,9 L19,9 C19.5522847,9 20,9.44771525 20,10 L20,17 C20,19.209139 18.209139,21 16,21 L8,21 C5.790861,21 4,19.209139 4,17 L4,10 C4,9.44771525 4.44771525,9 5,9 Z" fill="#000000"/>
                                                    </g>
                                                </svg><!--end::Svg Icon--></span>
                                            </span>
                                        </span>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <a href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Dosa   Tamil Nadu-Style</a>
                                            <span class="text-muted font-weight-bold">total Views: 1584</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center bg-light-warning rounded p-5">
                                        <!--begin::Icon-->
                                        <span class="svg-icon svg-icon-warning mr-5">
                                            <span class="svg-icon svg-icon-lg">
                                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Cooking/Cooking-pot.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M10,6 L10,5 C10,4.44771525 10.4477153,4 11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,6 L14.383822,6 C16.2072694,6 18.0148165,6.33909803 19.7142779,7 L19.8017005,7.03399769 C20.0590665,7.1340845 20.1865664,7.42385724 20.0864796,7.6812232 C20.0117407,7.87340889 19.8266841,8 19.6204773,8 L4.37951429,8 C4.10337192,8 3.87951429,7.77614237 3.87951429,7.5 C3.87951429,7.2937932 4.0061054,7.10873661 4.19829109,7.03399769 L4.28571369,7 C5.98517509,6.33909803 7.79272222,6 9.61616964,6 L10,6 Z M20,11 L22,11 C22.5522847,11 23,11.4477153 23,12 C23,12.5522847 22.5522847,13 22,13 L20,13 C19.4477153,13 19,12.5522847 19,12 C19,11.4477153 19.4477153,11 20,11 Z M2,11 L4,11 C4.55228475,11 5,11.4477153 5,12 C5,12.5522847 4.55228475,13 4,13 L2,13 C1.44771525,13 1,12.5522847 1,12 C1,11.4477153 1.44771525,11 2,11 Z" fill="#000000" opacity="0.3"/>
                                                        <path d="M5,9 L19,9 C19.5522847,9 20,9.44771525 20,10 L20,17 C20,19.209139 18.209139,21 16,21 L8,21 C5.790861,21 4,19.209139 4,17 L4,10 C4,9.44771525 4.44771525,9 5,9 Z" fill="#000000"/>
                                                    </g>
                                                </svg><!--end::Svg Icon--></span>
                                            </span>
                                        </span>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <a href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Idly  Tamil Nadu-Style</a>
                                            <span class="text-muted font-weight-bold">Total Views: 1200</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Charts Widget 4-->
                    </div>
                    {{-- <div class="col-lg-12">
                        <!--begin::List Widget 11-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">Followers</h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                <div id="mixed-widget-slider-1" class="carousel slide" data-ride="carousel"
                                    data-interval="8000">
                                    <!--begin::Top-->
                                    <div class="d-flex align-items-center justify-content-between">
                                        <!--begin::Label-->
                                        <span
                                            class="label label-lg label-light-primary label-inline font-size-sm font-weight-bolder py-5">22/10/21</span>
                                        <!--end::Label-->
                                        <!--begin::Action-->
                                        <div class="">
                                            <a href="#mixed-widget-slider-1" class="btn btn-icon btn-light btn-sm mr-1"
                                                role="button" data-slide="prev">
                                                <span class="svg-icon svg-icon-md">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-left.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path
                                                                d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <a href="#mixed-widget-slider-1" class="btn btn-icon btn-light btn-sm"
                                                role="button" data-slide="next">
                                                <span class="svg-icon svg-icon-md">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path
                                                                d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Carousel-->
                                    <div class="carousel-inner pt-9">
                                        <div class="carousel-item">
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Title-->
                                                <h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold">
                                                    AirGreat Presentation</h3>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <p class="text-dark-75 font-size-lg font-weight-normal pt-2">To start a
                                                    blog, think of a topic about and first brainstorm ways to write details
                                                </p>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Subtitle-->
                                                <span
                                                    class="font-size-h6 text-muted text-hover-primary font-weight-bold pt-3 pb-5 d-block text-uppercase">Teams</span>
                                                <!--end::Subtitle-->
                                                <!--begin::Labels-->
                                                <div class="d-inline">
                                                    <span
                                                        class="label label-lg label-light-warning label-inline font-size-sm font-weight-bolder py-5 mr-4">VueJS</span>
                                                    <span
                                                        class="label label-lg label-light-danger label-inline font-size-sm font-weight-bolder py-5">Django</span>
                                                </div>
                                                <!--end::Labels-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <div class="pt-7">
                                                <!--begin::Subtitle-->
                                                <span
                                                    class="font-size-h6 text-muted text-hover-primary font-weight-bold pb-4 text-uppercase d-block">Memebrers</span>
                                                <!--end::Subtitle-->
                                                <!--begin::Symbols-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
                                                        <span
                                                            class="symbol-label font-weight-bolder font-size-lg">LO</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 flex-shrink-0 mr-3">
                                                        <img alt="Pic" src="assets/media/users/150-1.jpg" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
                                                        <span
                                                            class="symbol-label font-weight-bolder font-size-lg">TR</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                                                        <span
                                                            class="symbol-label font-weight-bolder font-size-lg">ER</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 flex-shrink-0">
                                                        <img alt="Pic" src="assets/media/users/150-2.jpg" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                </div>
                                                <!--end::Symbols-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <div class="d-flex pt-9">
                                                <!--begin::Info-->
                                                <div
                                                    class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                                    <span class="font-size-sm font-weight-bold text-muted pb-1">Due
                                                        Date</span>
                                                    <span class="font-size-sm font-weight-bolder text-dark-75">Apr 11,
                                                        20</span>
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Info-->
                                                <div
                                                    class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                                    <span
                                                        class="font-size-sm font-weight-bold text-muted pb-1">Budget</span>
                                                    <span
                                                        class="font-size-sm font-weight-bolder text-dark-75">$65,000</span>
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Info-->
                                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column">
                                                    <span class="font-size-sm font-weight-bold text-muted pb-1">Cost</span>
                                                    <span
                                                        class="font-size-sm font-weight-bolder text-dark-75">$54,500</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <div class="carousel-item">
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Title-->
                                                <h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold">
                                                    AirGreat Presentation</h3>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <p class="text-dark-75 font-size-lg font-weight-normal pt-2">To start a
                                                    blog, think of a topic about and first brainstorm ways to write details
                                                </p>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Subtitle-->
                                                <span
                                                    class="font-size-h6 text-muted text-hover-primary font-weight-bold pt-3 pb-5 d-block text-uppercase">Teams</span>
                                                <!--end::Subtitle-->
                                                <!--begin::Labels-->
                                                <div class="d-inline">
                                                    <span
                                                        class="label label-lg label-light-warning label-inline font-size-sm font-weight-bolder py-5 mr-4">VueJS</span>
                                                    <span
                                                        class="label label-lg label-light-danger label-inline font-size-sm font-weight-bolder py-5">Django</span>
                                                </div>
                                                <!--end::Labels-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <div class="pt-7">
                                                <!--begin::Subtitle-->
                                                <span
                                                    class="font-size-h6 text-muted text-hover-primary font-weight-bold pb-4 text-uppercase d-block">Memebrers</span>
                                                <!--end::Subtitle-->
                                                <!--begin::Symbols-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 flex-shrink-0 mr-3">
                                                        <img alt="Pic" src="assets/media/users/150-3.jpg" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
                                                        <span
                                                            class="symbol-label font-weight-bolder font-size-lg">KP</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
                                                        <span
                                                            class="symbol-label font-weight-bolder font-size-lg">KU</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 flex-shrink-0 mr-3">
                                                        <img alt="Pic" src="assets/media/users/150-4.jpg" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 symbol-light-danger flex-shrink-0">
                                                        <span
                                                            class="symbol-label font-weight-bolder font-size-lg">GR</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                </div>
                                                <!--end::Symbols-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <div class="d-flex pt-9">
                                                <!--begin::Info-->
                                                <div
                                                    class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                                    <span class="font-size-sm font-weight-bold text-muted pb-1">Due
                                                        Date</span>
                                                    <span class="font-size-sm font-weight-bolder text-dark-75">Apr 22,
                                                        10</span>
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Info-->
                                                <div
                                                    class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                                    <span
                                                        class="font-size-sm font-weight-bold text-muted pb-1">Budget</span>
                                                    <span
                                                        class="font-size-sm font-weight-bolder text-dark-75">$43,000</span>
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Info-->
                                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column">
                                                    <span class="font-size-sm font-weight-bold text-muted pb-1">Cost</span>
                                                    <span
                                                        class="font-size-sm font-weight-bolder text-dark-75">$32,500</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <div class="carousel-item active">
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Title-->
                                                <h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold">
                                                    AirGreat Presentation</h3>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <p class="text-dark-75 font-size-lg font-weight-normal pt-2">To start a
                                                    blog, think of a topic about and first brainstorm ways to write details
                                                </p>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <div class="">
                                                <!--begin::Subtitle-->
                                                <span
                                                    class="font-size-h6 text-muted text-hover-primary font-weight-bold pt-3 pb-5 d-block text-uppercase">Teams</span>
                                                <!--end::Subtitle-->
                                                <!--begin::Labels-->
                                                <div class="d-inline">
                                                    <span
                                                        class="label label-lg label-light-warning label-inline font-size-sm font-weight-bolder py-5 mr-4">VueJS</span>
                                                    <span
                                                        class="label label-lg label-light-danger label-inline font-size-sm font-weight-bolder py-5">Django</span>
                                                </div>
                                                <!--end::Labels-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <div class="pt-7">
                                                <!--begin::Subtitle-->
                                                <span
                                                    class="font-size-h6 text-muted text-hover-primary font-weight-bold pb-4 text-uppercase d-block">Memebrers</span>
                                                <!--end::Subtitle-->
                                                <!--begin::Symbols-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                                                        <span
                                                            class="symbol-label font-weight-bolder font-size-lg">SC</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 flex-shrink-0 mr-3">
                                                        <img alt="Pic" src="assets/media/users/150-5.jpg" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
                                                        <span
                                                            class="symbol-label font-weight-bolder font-size-lg">FW</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
                                                        <span
                                                            class="symbol-label font-weight-bolder font-size-lg">AH</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35 flex-shrink-0">
                                                        <img alt="Pic" src="assets/media/users/150-7.jpg" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                </div>
                                                <!--end::Symbols-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <div class="d-flex pt-9">
                                                <!--begin::Info-->
                                                <div
                                                    class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                                    <span class="font-size-sm font-weight-bold text-muted pb-1">Due
                                                        Date</span>
                                                    <span class="font-size-sm font-weight-bolder text-dark-75">Apr 27,
                                                        20</span>
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Info-->
                                                <div
                                                    class="bg-light rounded w-90px h-60px d-flex flex-center flex-column mr-3">
                                                    <span
                                                        class="font-size-sm font-weight-bold text-muted pb-1">Budget</span>
                                                    <span
                                                        class="font-size-sm font-weight-bolder text-dark-75">$32,000</span>
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Info-->
                                                <div class="bg-light rounded w-90px h-60px d-flex flex-center flex-column">
                                                    <span class="font-size-sm font-weight-bold text-muted pb-1">Cost</span>
                                                    <span
                                                        class="font-size-sm font-weight-bolder text-dark-75">$27,500</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                    </div>
                                    <!--end::Carousel-->
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer d-flex align-items-center justify-content-between py-5">
                                <span class="text-muted font-weight-bold m-0">39 Members, 240 Tasks</span>
                                <a href="#" class="btn btn-sm btn-primary font-weight-bolder">Join</a>
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::List Widget 11-->
                    </div> --}}
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection
