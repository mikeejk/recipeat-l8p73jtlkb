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
                            {{-- <div class="flex-shrink-0 mr-7">
                                <div class="symbol symbol-50 symbol-lg-120">
                                    <img alt="Pic" src="assets/media//users/blank.png" />
                                </div>
                            </div> --}}
                            <!--end::Pic-->
                            <!--begin: Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex align-items-center justify-content-between flex-wrap mt-10">
                                    <!--begin::User-->
                                    <div class="mr-3">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">PINBOARDS</a>
                                        <!--end::Name-->
                                        <br />
                                        <!--begin::Contacts-->
                                        {{-- <div class="d-flex flex-wrap my-2">
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <i class="fas fa-at"></i>
                                                </span>grajpriya2@gmail.com</a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <i class="fas fa-baby-carriage"></i>
                                                </span>01-01-1988</a>
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <i class="fas fa-bread-slice"></i>
                                                </span>Chef</a>
                                        </div>
                                        <!--end::Contacts--> --}}
                                    </div>
                                    <!--begin::User-->
                                    <!--begin::Actions-->
                                    {{-- <div class="my-lg-0 my-1">
                                        <a href="" class="btn btn-sm btn-primary font-weight-bolder mr-2"> <i
                                                class="fas fa-user-edit text-white text-lg"></i>Edit </a>
                                    </div> --}}
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
                                    <span class="font-weight-bolder font-size-xs text-center">{{ $myfavourite }}</span>
                                    <a href="/myfavourite"><span class="font-weight-bolder font-size-sm">
                                            <span class="text-dark-50 font-weight-bold"></span>MyFavourite</span></a>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center  mr-1 my-1 col-lg-2 col-4">
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-xs text-center">{{ $familyfav }}</span>
                                    <a href="/familyfav"><span class="font-weight-bolder font-size-sm">
                                            <span class="text-dark-50 font-weight-bold"></span>FamilyFavourite</span></a>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center  mr-1 my-1 col-lg-2 col-4">
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-xs text-center">{{ $favdesert }}</span>
                                    <a href="/favdesert"><span class="font-weight-bolder font-size-sm">
                                            <span class="text-dark-50 font-weight-bold"></span>FavouriteDesert</span></a>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center  mr-1 my-1 col-lg-2 col-4">
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-xs text-center">{{ $favdinner }}</span>
                                    <a href="/favdesert"><span class="font-weight-bolder font-size-sm">
                                            <span class="text-dark-50 font-weight-bold"></span>FavouriteDinner</span></a>
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
                                        <span class="d-block text-dark font-weight-bolder">DefultPinBorads</span></span>

                                    </h3>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body">
                                <div id="kt_charts_widget_4_chart">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-9 bg-light-danger rounded p-5">
                                        {{-- <span class="svg-icon svg-icon-danger svg-icon-2x mr-5">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Map/Marker2.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span> --}}
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <p href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                MyFavourite</p>
                                            <span class="text-muted font-weight-bold">
                                            </span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
                                        <!--begin::Icon-->
                                        {{-- <span class="svg-icon svg-icon-success mr-5">
                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Clothes/Tie.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M14.1124454,7.00625159 C14.0755336,7.00212117 14.0380145,7 14,7 L10,7 C9.96198549,7 9.92446641,7.00212117 9.88755465,7.00625159 L7.34761705,4.55799196 C6.95060373,4.17530866 6.9382927,3.54346816 7.32009765,3.14561006 L8.41948359,2 L15.5805164,2 L16.6799023,3.14561006 C17.0617073,3.54346816 17.0493963,4.17530866 16.6523829,4.55799196 L14.1124454,7.00625159 Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M13.7640285,9 L15.4853424,18.1494183 C15.5450675,18.4668794 15.4477627,18.7936387 15.2240963,19.0267093 L12.7215131,21.6345146 C12.7120098,21.6444174 12.7023037,21.6541236 12.6924008,21.6636269 C12.2939201,22.0460293 11.6608893,22.0329953 11.2784869,21.6345146 L8.77590372,19.0267093 C8.55223728,18.7936387 8.45493249,18.4668794 8.5146576,18.1494183 L10.2359715,9 L13.7640285,9 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span> --}}
                                        {{-- </span> --}}
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <p href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                MyFamilyFavourite</p>
                                            <span class="text-muted font-weight-bold">
                                            </span>
                                        </div>

                                        <!--end::Title-->

                                    </div>
                                    <!--end::Item-->
                                    <div class="d-flex align-items-center mb-9 bg-light-warning rounded p-5">
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <p href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                FavouriteStarter</p>
                                            <span class="text-muted font-weight-bold">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-9  bg-light-info rounded p-5">
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <p href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                FavouriteDeserts</p>
                                            <span class="text-muted font-weight-bold">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Charts Widget 4-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Charts Widget 4-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header h-auto border-0">
                                <div class="card-title py-5">
                                    <h3 class="card-label">
                                        <span class="d-block text-dark font-weight-bolder">Add New Pinboards</span>
                                    </h3>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body">
                                <div id="kt_charts_widget_4_chart">
                                    <!--begin::Item-->
                                    {{-- <div class="d-flex align-items-center mb-9 bg-light-warning rounded p-5"> --}}
                                        {{-- <span class="svg-icon svg-icon-warning svg-icon-2x mr-5">
                                            <span class="svg-icon svg-icon-primary svg-icon-2x"> --}}
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Cooking/KnifeAndFork2.svg-->
                                                {{-- <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M3.98842709,3.05999994 L11.0594949,10.1310678 L8.23106778,12.9594949 L3.98842709,8.71685419 C2.42632992,7.15475703 2.42632992,4.62209711 3.98842709,3.05999994 Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M17.7539614,3.90710683 L14.8885998,7.40921548 C14.7088587,7.62889898 14.7248259,7.94903916 14.9255342,8.14974752 C15.1262426,8.35045587 15.4463828,8.36642306 15.6660663,8.18668201 L19.1681749,5.32132039 L19.8752817,6.02842717 L17.0099201,9.53053582 C16.830179,9.75021933 16.8461462,10.0703595 17.0468546,10.2710679 C17.2475629,10.4717762 17.5677031,10.4877434 17.7873866,10.3080024 L21.2894953,7.44264073 L21.9966021,8.14974752 L18.8146215,11.331728 C17.4477865,12.6985631 15.2317091,12.6985631 13.8648741,11.331728 C12.4980391,9.96489301 12.4980391,7.74881558 13.8648741,6.38198056 L17.0468546,3.20000005 L17.7539614,3.90710683 Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M11.0753788,13.9246212 C11.4715437,14.3207861 11.4876245,14.9579589 11.1119478,15.3736034 L6.14184561,20.8724683 C5.61370242,21.4567999 4.71186338,21.5023497 4.12753173,20.9742065 C4.10973311,20.9581194 4.09234327,20.9415857 4.0753788,20.9246212 C3.51843234,20.3676747 3.51843234,19.4646861 4.0753788,18.9077397 C4.09234327,18.8907752 4.10973311,18.8742415 4.12753173,18.8581544 L9.62639662,13.8880522 C10.0420411,13.5123755 10.6792139,13.5284563 11.0753788,13.9246212 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M13.0754022,13.9246212 C13.4715671,13.5284563 14.1087399,13.5123755 14.5243844,13.8880522 L20.0232493,18.8581544 C20.0410479,18.8742415 20.0584377,18.8907752 20.0754022,18.9077397 C20.6323487,19.4646861 20.6323487,20.3676747 20.0754022,20.9246212 C20.0584377,20.9415857 20.0410479,20.9581194 20.0232493,20.9742065 C19.4389176,21.5023497 18.5370786,21.4567999 18.0089354,20.8724683 L13.0388332,15.3736034 C12.6631565,14.9579589 12.6792373,14.3207861 13.0754022,13.9246212 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg> --}}
                                                <!--end::Svg Icon-->
                                            {{-- </span> --}}
                                        {{-- </span> --}}
                                        <!--begin::Title-->
                                        {{-- <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <p href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                Favourite Starter</p>
                                            <span
                                                class="text-muted font-weight-bold"></span>
                                        </div> --}}
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    {{-- <div class="d-flex align-items-center bg-light-info rounded p-5 mb-9"> --}}
                                        <!--begin::Icon-->
                                        {{-- <span class="svg-icon svg-icon-info mr-5">
                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Shopping/Gift.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span> --}}
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        {{-- <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <p href="#"
                                                class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                Favourite Deserts</p>
                                            <span
                                                class="text-muted font-weight-bold"></span>
                                        </div> --}}
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Charts Widget 4-->
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
