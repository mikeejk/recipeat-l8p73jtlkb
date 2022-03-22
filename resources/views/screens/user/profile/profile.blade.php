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
                            <div class="flex-shrink-0 mr-7">
                                <div class="symbol symbol-50 symbol-lg-120">
                                     @if ($questions->image == "NULL")
                                        <img class="rounded-circle" alt="Pic" src="assets/media//users/blank.png" />
                                     @else
                                         <img class="rounded-circle" alt="Pic"
                                            src="{{ asset('/storage/app/public/'.$questions->image) }}" />
                                     @endif
                                    {{-- <img class="rounded-circle"  src="storage/app/public/image/{{ $questions->image }}" /> --}}
                                    {{-- <img class="rounded-circle"  src="storage/app/public/image/{{ $questions->profile_image }}"" /> --}}
                                    {{-- <a href="/userimage_upload"><button class="btn btn-primary text-white mt-2"> Edit Image <i class="fas fa-edit ml-2"></i></button></a> --}}
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
                                            class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{ $questions->name }}</a>
                                        <!--end::Name-->
                                        <br />
                                        <!--begin::Contacts-->
                                        <div class="d-flex flex-wrap my-2">
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <i class="fas fa-at"></i>
                                                </span>{{ $questions->mail }}</a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <i class="fas fa-venus-double"></i>
                                                </span>{{ $questions->gender }}</a>
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <i class="fas fa-bread-slice"></i>
                                                </span>{{ $questions->cookinglevel }}</a>
                                        </div>
                                        <!--end::Contacts-->
                                    </div>
                                    <!--begin::User-->
                                    <!--begin::Actions-->
                                    <div class="my-lg-0 my-1">
                                        <a href="/edit" class="btn btn-sm btn-primary font-weight-bolder mr-2"> <i
                                                class="fas fa-user-edit text-white text-lg"></i> Edit Profile</a>
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
                            <div class="d-flex align-items-center  mr-1 my-1 col-lg-2 col-5">
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-xs text-center">{{ $followers }}</span>
                                    <a href="/follower"><span class="font-weight-bolder font-size-sm">
                                            <span class="text-dark-50 font-weight-bold"></span>Followers</span></a>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center  mr-1 my-1 col-lg-2 col-5">
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-xs text-center">{{ $following }}</span>
                                    <a href="/following"><span class="font-weight-bolder font-size-sm">
                                            <span class="text-dark-50 font-weight-bold"></span>Following</span></a>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center  mr-1 my-1 col-lg-2 col-5">
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-xs text-center">{{ $recipes }}</span>
                                    <a href="/recipes"><span class="font-weight-bolder font-size-sm">
                                            <span class="text-dark-50 font-weight-bold"></span>My recipes</span></a>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center  mr-1 my-1 col-lg-2 col-5">
                                <div class=" d-flex flex-column text-dark-75">

                                    <span class="font-weight-bolder font-size-xs text-center"><span
                                            class="badge bg-success text-black">{{ count(auth()->user()->unreadnotifications) }}</span></span>
                                    <a href="/notifications"><span class="font-weight-bolder font-size-sm">
                                            <span class="text-dark-50 font-weight-bold"></span>Notification</span></a>

                                    {{-- $user = App\Models\User::find(1);
                                            @forelse (auth()->user()->unreadnotifications as $notification)
                                                @include('Notification.notification_display',$notification) --}}
                                    {{-- <a href="">{{'notification_'.class_basename($notification->type)}}</a> --}}
                                    {{-- @empty
                                                <a href="#">No Notification to show</a>
                                            @endforelse --}}

                                    {{-- @foreach (auth()->user()->unreadnotifications as $notification)
                                            <div class="border-bottom p-2 bg-success text-white">
                                            <p class="p-2 ">{{ $notification->data['name'] }} Started Following You.</p>
                                            <p class="p-2">{{$notification->created_at->diffForHumans()}}</p>
                                            </div><br>
                                            @endforeach --}}




                                </div>
                            </div>
                            <!--end: Item-->
                            {{-- <div class="d-flex align-items-center  mr-1 my-1">
                                <div class=" d-flex flex-column text-dark-75"> --}}

                            {{-- <span class="font-weight-bolder font-size-xs text-center"><span
                                            class="badge bg-success text-black">{{$feednote }}</span></span>
                                    <a href="/feednotifications"><span class="font-weight-bolder font-size-sm">
                                            <span class="text-dark-50 font-weight-bold"></span>RecipeFeeds</span></a>
                                </div>
                            </div>

                        </div> --}}
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
                                            <span class="d-block text-dark font-weight-bolder">Recipe Information</span>

                                        </h3>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div id="kt_charts_widget_4_chart">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-9 bg-light-danger rounded p-5">
                                            <span class="svg-icon svg-icon-danger svg-icon-2x mr-5">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Food/Carrot.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M14.3724866,0.190822526 C11.3151949,5.41320416 11.3151949,9.23673357 14.3724866,11.6614108 C17.3047782,9.23673357 17.3047782,5.41320416 14.3724866,0.190822526 Z"
                                                            fill="#000000" opacity="0.3"
                                                            transform="translate(14.325612, 5.926117) scale(-1, 1) rotate(-195.000000) translate(-14.325612, -5.926117) " />
                                                        <path
                                                            d="M17.5544671,3.37280304 C14.4971754,8.59518468 14.4971754,12.4187141 17.5544671,14.8433913 C20.4867588,12.4187141 20.4867588,8.59518468 17.5544671,3.37280304 Z"
                                                            fill="#000000" opacity="0.3"
                                                            transform="translate(17.507592, 9.108097) rotate(-645.000000) translate(-17.507592, -9.108097) " />
                                                        <path
                                                            d="M15.9634768,1.78181278 C12.9061852,7.00419442 12.9061852,10.8277238 15.9634768,13.252401 C18.8957685,10.8277238 18.8957685,7.00419442 15.9634768,1.78181278 Z"
                                                            fill="#000000" opacity="0.3"
                                                            transform="translate(15.916602, 7.517107) rotate(-315.000000) translate(-15.916602, -7.517107) " />
                                                        <path
                                                            d="M2.57844233,17.5134712 L2.86827202,17.8033009 C3.25879631,18.1938252 3.89196129,18.1938252 4.28248558,17.8033009 C4.67300987,17.4127766 4.67300987,16.7796116 4.28248558,16.3890873 L3.59132296,15.6979247 L4.60420359,13.8823782 L5.69669914,14.9748737 C6.08722343,15.365398 6.72038841,15.365398 7.1109127,14.9748737 C7.501437,14.5843494 7.501437,13.9511845 7.1109127,13.5606602 L5.69669914,12.1464466 C5.6702016,12.1199491 5.64258699,12.0952494 5.6140069,12.0723477 L6.62996485,10.2512852 L8.52512627,12.1464466 C8.91565056,12.5369709 9.54881554,12.5369709 9.93933983,12.1464466 C10.3298641,11.7559223 10.3298641,11.1227573 9.93933983,10.732233 L7.81801948,8.6109127 C7.75963657,8.55252979 7.69583066,8.50287505 7.62822323,8.46194849 L7.87276434,8.02361869 C8.41091279,7.05900994 9.62913819,6.71329556 10.5937469,7.251444 C10.7549891,7.34139987 10.9029979,7.45325048 11.0335565,7.58380908 L15.9162516,12.4665041 C16.6973001,13.2475527 16.6973001,14.5138826 15.9162516,15.2949312 C15.785693,15.4254898 15.6376841,15.5373404 15.476442,15.6272963 L3.46875087,22.3263028 C2.81004861,22.6937881 1.98744333,22.5793264 1.45408877,22.0459719 C0.920734216,21.5126173 0.806272498,20.690012 1.17375786,20.0313098 L2.57844233,17.5134712 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <p href="#"
                                                    class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                    Allergic Ingredient</p>
                                                <span
                                                    class="text-muted font-weight-bold">{{ $questions->allergies }}</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-success mr-5">
                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Cooking/Dinner.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M12.5,19 C8.91014913,19 6,16.0898509 6,12.5 C6,8.91014913 8.91014913,6 12.5,6 C16.0898509,6 19,8.91014913 19,12.5 C19,16.0898509 16.0898509,19 12.5,19 Z M12.5,16.4 C14.6539105,16.4 16.4,14.6539105 16.4,12.5 C16.4,10.3460895 14.6539105,8.6 12.5,8.6 C10.3460895,8.6 8.6,10.3460895 8.6,12.5 C8.6,14.6539105 10.3460895,16.4 12.5,16.4 Z M12.5,15.1 C11.0640597,15.1 9.9,13.9359403 9.9,12.5 C9.9,11.0640597 11.0640597,9.9 12.5,9.9 C13.9359403,9.9 15.1,11.0640597 15.1,12.5 C15.1,13.9359403 13.9359403,15.1 12.5,15.1 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M22,13.5 L22,13.5 C22.2864451,13.5 22.5288541,13.7115967 22.5675566,13.9954151 L23.0979976,17.8853161 C23.1712756,18.4226878 22.7950533,18.9177172 22.2576815,18.9909952 C22.2137086,18.9969915 22.1693798,19 22.125,19 L22.125,19 C21.5576012,19 21.0976335,18.5400324 21.0976335,17.9726335 C21.0976335,17.9415812 21.0990414,17.9105449 21.1018527,17.8796201 L21.4547321,13.9979466 C21.4803698,13.7159323 21.7168228,13.5 22,13.5 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M24,5 L24,12 L21,12 L21,8 C21,6.34314575 22.3431458,5 24,5 Z"
                                                                fill="#000000"
                                                                transform="translate(22.500000, 8.500000) scale(-1, 1) translate(-22.500000, -8.500000) " />
                                                            <path
                                                                d="M0.714285714,5 L1.03696911,8.32873399 C1.05651593,8.5303749 1.22598532,8.68421053 1.42857143,8.68421053 C1.63115754,8.68421053 1.80062692,8.5303749 1.82017375,8.32873399 L2.14285714,5 L2.85714286,5 L3.17982625,8.32873399 C3.19937308,8.5303749 3.36884246,8.68421053 3.57142857,8.68421053 C3.77401468,8.68421053 3.94348407,8.5303749 3.96303089,8.32873399 L4.28571429,5 L5,5 L5,8.39473684 C5,9.77544872 3.88071187,10.8947368 2.5,10.8947368 C1.11928813,10.8947368 -7.19089982e-16,9.77544872 -8.8817842e-16,8.39473684 L0,5 L0.714285714,5 Z"
                                                                fill="#000000" />
                                                            <path
                                                                d="M2.5,12.3684211 L2.5,12.3684211 C2.90055463,12.3684211 3.23115721,12.6816982 3.25269782,13.0816732 L3.51381042,17.9301218 C3.54396441,18.4900338 3.11451066,18.9683769 2.55459863,18.9985309 C2.53641556,18.9995101 2.51820943,19 2.5,19 L2.5,19 C1.93927659,19 1.48472045,18.5454439 1.48472045,17.9847204 C1.48472045,17.966511 1.48521034,17.9483049 1.48618958,17.9301218 L1.74730218,13.0816732 C1.76884279,12.6816982 2.09944537,12.3684211 2.5,12.3684211 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>

                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <p href="#"
                                                    class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                    Food Life-Style</p>
                                                <span
                                                    class="text-muted font-weight-bold">{{ $questions->lifestyle }}</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-secondary rounded p-5 mb-9">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-secondary mr-5">
                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Code/Error-circle.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                            <path
                                                                d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <p href="#"
                                                    class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                    Avoided Ingredient</p>
                                                <span
                                                    class="text-muted font-weight-bold">{{ $questions->ingredient }}</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-info mr-5">
                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Communication/Flag.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M3.5,3 L5,3 L5,19.5 C5,20.3284271 4.32842712,21 3.5,21 L3.5,21 C2.67157288,21 2,20.3284271 2,19.5 L2,4.5 C2,3.67157288 2.67157288,3 3.5,3 Z"
                                                                fill="#000000" />
                                                            <path
                                                                d="M6.99987583,2.99995344 L19.754647,2.99999303 C20.3069317,2.99999474 20.7546456,3.44771138 20.7546439,3.99999613 C20.7546431,4.24703684 20.6631995,4.48533385 20.497938,4.66895776 L17.5,8 L20.4979317,11.3310353 C20.8673908,11.7415453 20.8341123,12.3738351 20.4236023,12.7432941 C20.2399776,12.9085564 20.0016794,13 19.7546376,13 L6.99987583,13 L6.99987583,2.99995344 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <p href="#"
                                                    class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                    Favorite Cuisine</p>
                                                <span
                                                    class="text-muted font-weight-bold">{{ $questions->pref_cuisine }}</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-warning rounded p-5">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-warning mr-5">
                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Food/Miso-soup.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M2,14 L22,14 L22,14 C22,18.9705627 17.9705627,23 13,23 L11,23 C6.02943725,23 2,18.9705627 2,14 Z"
                                                                fill="#000000" />
                                                            <path
                                                                d="M16.7233675,1.41763641 C17.1846056,1.68393238 17.3426375,2.27371529 17.0763415,2.73495343 C17.070507,2.74505905 17.0644896,2.75505793 17.0582922,2.76494514 L10.5379559,13.1673758 C10.3897629,13.4038004 10.08104,13.4805452 9.83939289,13.3410302 C9.59774579,13.2015152 9.50984729,12.8957809 9.64050046,12.6492297 L15.3891015,1.80123745 C15.6384827,1.33063867 16.2221417,1.15130634 16.6927405,1.40068748 C16.7030512,1.40615136 16.7132619,1.41180193 16.7233675,1.41763641 Z M21.8768598,4.21665558 C22.2332333,4.61244851 22.2012776,5.22219993 21.8054847,5.57857348 C21.796813,5.58638154 21.7880002,5.59403156 21.7790508,5.60151976 L12.3633147,13.4799245 C12.1493155,13.6589835 11.8319871,13.6365715 11.6452796,13.4292118 C11.458572,13.221852 11.4694527,12.9039193 11.6698998,12.7098092 L20.4893582,4.16917098 C20.8719568,3.79866796 21.4824663,3.80847334 21.8529693,4.19107192 C21.8610869,4.19945456 21.8690517,4.20798385 21.8768598,4.21665558 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <p href="#"
                                                    class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                    Level for Cooking</p>
                                                <span class="text-muted font-weight-bold">{{ $questions->goals }}</span>
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
                        <div class="col-lg-6">
                            <!--begin::Charts Widget 4-->
                            <div class="card card-custom card-stretch gutter-b">
                                <!--begin::Header-->
                                <div class="card-header h-auto border-0">
                                    <div class="card-title py-5">
                                        <h3 class="card-label">
                                            <span class="d-block text-dark font-weight-bolder">Recipe Information</span>
                                        </h3>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div id="kt_charts_widget_4_chart">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-9 bg-light-warning rounded p-5">
                                            <span class="svg-icon svg-icon-warning svg-icon-2x mr-5">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Communication/Group.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
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
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <p href="#"
                                                    class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                    Serving Size</p>
                                                <span
                                                    class="text-muted font-weight-bold">{{ $questions->serving_time }}</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-info mr-5">
                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Cooking/Dishes.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M3,16 L21,16 C21,18.209139 19.209139,20 17,20 L7,20 C4.790861,20 3,18.209139 3,16 Z M3,11 L21,11 L21,12 C21,13.1045695 20.1045695,14 19,14 L5,14 C3.8954305,14 3,13.1045695 3,12 L3,11 Z"
                                                                fill="#000000" />
                                                            <path
                                                                d="M3,5 L21,5 L21,7 C21,8.1045695 20.1045695,9 19,9 L5,9 C3.8954305,9 3,8.1045695 3,7 L3,5 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <p href="#"
                                                    class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                    Rather Cook</p>
                                                <span
                                                    class="text-muted font-weight-bold">{{ $questions->cho_cook }}</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-secondary rounded p-5 mb-9">
                                            <span class="svg-icon svg-icon-secondary svg-icon-2x mr-5">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Food/Two-bottles.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M11,12 L2,12 L2,11 C2,9.34314575 3.34314575,8 5,8 L8,8 C9.65685425,8 11,9.34314575 11,11 L11,12 Z M11,14 L11,20 C11,20.5522847 10.5522847,21 10,21 L3,21 C2.44771525,21 2,20.5522847 2,20 L2,14 L11,14 Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M22,12 L13,12 L13,11 C13,9.34314575 14.3431458,8 16,8 L19,8 C20.6568542,8 22,9.34314575 22,11 L22,12 Z M22,14 L22,20 C22,20.5522847 21.5522847,21 21,21 L14,21 C13.4477153,21 13,20.5522847 13,20 L13,14 L22,14 Z M5,3 L8,3 C8.55228475,3 9,3.44771525 9,4 L9,5 C9,5.55228475 8.55228475,6 8,6 L5,6 C4.44771525,6 4,5.55228475 4,5 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M16,3 L19,3 C19.5522847,3 20,3.44771525 20,4 L20,5 C20,5.55228475 19.5522847,6 19,6 L16,6 C15.4477153,6 15,5.55228475 15,5 L15,4 C15,3.44771525 15.4477153,3 16,3 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <p href="#"
                                                    class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                    Favorite Ingredient</p>
                                                <span
                                                    class="text-muted font-weight-bold">{{ $questions->fav_ingr }}</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-success mr-5">
                                                <span class="svg-icon svg-icon-success svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Design/Bucket.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) " />
                                                            <path
                                                                d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <p href="#"
                                                    class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                    Level of Spiciness</p>
                                                <span
                                                    class="text-muted font-weight-bold">{{ $questions->level_spici }}</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-danger rounded p-5">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-warning mr-5">
                                                <span class="svg-icon svg-icon-danger svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Home/Clock.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <p href="#"
                                                    class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                    Spare time for cook</p>
                                                <span
                                                    class="text-muted font-weight-bold">{{ $questions->time_spend }}</span>
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
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
        <!--end::Content-->
        <script>
            function makeNotificationAsRead() {
                $.get('/markAsRead');
            }
        </script>
    @endsection
