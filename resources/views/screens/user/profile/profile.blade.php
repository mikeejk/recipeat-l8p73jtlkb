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
                                    <span class="font-weight-bolder font-size-sm">Followers</span>
                                    <span class="font-weight-bolder font-size-h5">
                                        <span class="text-dark-50 font-weight-bold"></span>249,500</span>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center  mr-1 my-1 col-lg-2 col-4">
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-sm">Following</span>
                                    <span class="font-weight-bolder font-size-h5">
                                        <span class="text-dark-50 font-weight-bold"></span>164,700</span>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center  mr-1 my-1">
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-sm">My recipes</span>
                                    <span class="font-weight-bolder font-size-h5">
                                        <span class="text-dark-50 font-weight-bold"></span>782,300</span>
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
                    <div class="col-lg-6">
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
                                            <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#">
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
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <a href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Group
                                                lunch celebration</a>
                                            <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Lable-->
                                        <span class="font-weight-bolder text-danger py-1 font-size-lg">+32%</span>
                                        <!--end::Lable-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
                                        <!--begin::Icon-->
                                        <span class="svg-icon svg-icon-success mr-5">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                        <path
                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <a href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Home
                                                navigation optimization</a>
                                            <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Lable-->
                                        <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                                        <!--end::Lable-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
                                        <!--begin::Icon-->
                                        <span class="svg-icon svg-icon-info mr-5">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <a href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Rebrand
                                                strategy planning</a>
                                            <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Lable-->
                                        <span class="font-weight-bolder text-info py-1 font-size-lg">-37%</span>
                                        <!--end::Lable-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center bg-light-warning rounded p-5">
                                        <!--begin::Icon-->
                                        <span class="svg-icon svg-icon-warning mr-5">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                                            fill="#000000" opacity="0.3"
                                                            transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                                        <path
                                                            d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                                            fill="#000000"
                                                            transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                                        <path
                                                            d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                                            fill="#000000" opacity="0.3"
                                                            transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                                        <path
                                                            d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                                            fill="#000000" opacity="0.3"
                                                            transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <a href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Product
                                                goals strategy meet-up</a>
                                            <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Lable-->
                                        <span class="font-weight-bolder text-warning py-1 font-size-lg">+44%</span>
                                        <!--end::Lable-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Charts Widget 4-->
                    </div>
                    <div class="col-lg-6">
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
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection
