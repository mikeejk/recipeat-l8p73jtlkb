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
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">2 Followers</span>
                        <form class="ml-5">
                            <div class="input-group input-group-sm bg-white border-0 rounded min-w-175px">
                                <input type="text" class="form-control bg-white border-0" id="kt_subheader_search_form"
                                    placeholder="Search..." />
                                <div class="input-group-append">
                                    <span class="input-group-text bg-white border-0">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                </div>
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
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6">
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
                                                class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Alaguraja
                                                Ramesh R</a>
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
                                    {{-- <div class="d-flex align-items-center mb-2">
                                        <span class="flex-shrink-0 mr-2">
                                            <span class="svg-icon svg-icon-md">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Active-call.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="text-muted font-weight-bold">+4567800090</span>
                                    </div> --}}
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
                                            class="text-muted text-hover-primary font-weight-bold">mail@example.com</a>
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
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold">Madurai,
                                            Tamil Nadu</a>
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
                    </div>

                    <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6">
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
                                        <div class="d-flex  mr-5">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5NdJuJ8UclInN_UNQVWh8b5CtKVNHqiOsiWMw6g41_pKX3vt4hRXqnWtYJuhyjV8dAIY&usqp=CAU"
                                                    alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                                class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Raja Murugan Thirumaran
                                                </a>
                                            <span class="text-muted font-weight-bold">Associate Software Engineer</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::User-->
                                <!--begin::Desc-->
                                <p class="py-2">I am an Associate Software Engineer @AdsDunia</p>
                                <!--end::Desc-->
                                <!--begin::Contacts-->
                                <div class="py-2">
                                    {{-- <div class="d-flex align-items-center mb-2">
                                        <span class="flex-shrink-0 mr-2">
                                            <span class="svg-icon svg-icon-md">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Active-call.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="text-muted font-weight-bold">+4567800090</span>
                                    </div> --}}
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
                                            class="text-muted text-hover-primary font-weight-bold">rrmail@example.com</a>
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
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold">Trichy,
                                            Tamil Nadu</a>
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
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Pagination-->
                {{-- <div class="card card-custom">
                    <div class="card-body">
                        <!--begin::Pagination-->
                        <div class="d-flex w-full  justify-content-center align-items-center flex-wrap">
                            <div class="d-flex w-full flex-wrap justify-content-center  mr-3">
                                <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">1</a>
                                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">2</a>
                                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary  mr-2 my-1">3</a>
                                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">4</a>
                                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">5</a>
                                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">6</a>
                                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">7</a>
                                <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>

                            For Filter Option
                            <div class="d-flex align-items-center">
                                <select
                                    class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                                    style="width: 75px;">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <span class="text-muted">Showing 10 of 150 records</span>
                            </div>
                        </div>
                        <!--end:: Pagination-->
                    </div>
                </div> --}}
                <!--end::Pagination-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

@endsection
