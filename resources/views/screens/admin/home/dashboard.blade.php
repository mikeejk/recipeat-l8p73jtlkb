@extends('layouts.bootstrap.guest')

@section('content')
    <div>
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">

                <!--begin::Subheader-->
                <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
                    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap mr-1">
                            {{-- <!--begin::Page Heading-->
                            <div class="d-flex align-items-baseline flex-wrap mr-5">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold my-1 mr-5">Dashboard</h5>
                                <!--end::Page Title-->
                            </div>
                            <!--end::Page Heading--> --}}
                        </div>
                        <!--end::Info-->

                    </div>
                </div>
                <!--end::Subheader-->
                <!--begin::Row-->
                <div class="row">
                    {{-- <div class="col-lg-4">
                        <!--begin::Stats Widget 1-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-6">
                                <h3 class="card-title">
                                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Total
                                        User</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex align-items-center justify-content-between pt-7 flex-wrap">
                                <!--begin::label-->
                                <span class="font-weight-bolder display5 text-dark-75 py-4 pl-5 pr-5">
                                    <span class="font-weight-normal font-size-h6 text-muted pr-1"></span>145</span>
                                <!--end::label-->
                                <!--begin::Chart-->
                                <div class="progress-vertical w-200px h-125px">
                                    <div class="progress bg-light-primary" data-toggle="tooltip" title="30%">
                                        <div class="progress-bar bg-primary" role="progressbar" style="height: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress bg-light-primary" data-toggle="tooltip" title="80%">
                                        <div class="progress-bar bg-primary" role="progressbar" style="height: 80%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress bg-light-primary" data-toggle="tooltip" title="50%">
                                        <div class="progress-bar bg-primary" role="progressbar" style="height: 50%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress bg-light-primary" data-toggle="tooltip" title="15%">
                                        <div class="progress-bar bg-primary" role="progressbar" style="height: 15%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress bg-light-primary" data-toggle="tooltip" title="30%">
                                        <div class="progress-bar bg-primary" role="progressbar" style="height: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress bg-light-primary" data-toggle="tooltip" title="70%">
                                        <div class="progress-bar bg-primary" role="progressbar" style="height: 70%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 1-->
                    </div>
                    <div class="col-lg-4">
                        <!--begin::Stats Widget 2-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-6">
                                <h3 class="card-title">
                                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Invite</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex align-items-center justify-content-between pt-7 flex-wrap">
                                <!--begin::Label-->
                                <span class="font-weight-bolder display5 text-dark-75 pl-5 pr-10">150</span>
                                <!--end::Label-->
                                <!--begin::Visuals-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <!--begin::legends-->
                                    <div class="d-flex flex-column mr-4">
                                        <!--begin::legend-->
                                        <div class="legend d-flex align-items-center py-1">
                                            <span class="label label-dark-50 label-dot mr-2"></span>
                                            <span class="font-weight-bolder font-size-lg text-muted">Chef</span>
                                        </div>
                                        <!--end::legend-->
                                        <!--begin::legend-->
                                        <div class="legend d-flex align-items-center py-1">
                                            <span class="label label-dark-75 label-dot mr-2"></span>
                                            <span class="font-weight-bolder font-size-lg text-muted">Home Chef</span>
                                        </div>
                                        <!--end::legend-->
                                        <!--begin::legend-->
                                        <div class="legend d-flex align-items-center py-1">
                                            <span class="label label-dot label-primary mr-2"></span>
                                            <span class="font-weight-bolder font-size-lg text-muted">User</span>
                                        </div>
                                        <!--end::legend-->
                                    </div>
                                    <!--end::legends-->
                                    <!--begin::Chart-->
                                    <div class="d-flex flex-center position-relative">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <div class="font-weight-bolder font-size-h5 text-muted position-absolute">8,345
                                        </div>
                                        <canvas id="kt_stats_widget_2_chart"
                                            style="height: 110px; width: 110px; display: block;" width="98" height="98"
                                            class="chartjs-render-monitor"></canvas>
                                    </div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Visuals-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 2-->
                    </div>
                    <div class="col-lg-4">
                        <!--begin::Stats Widget 3-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-6">
                                <h3 class="card-title">
                                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Total
                                        Recipe</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex align-items-center justify-content-between pt-7 flex-wrap">
                                <!--begin::label-->
                                <span class="font-weight-bolder display5 text-dark-75 pl-5 pr-10">580</span>
                                <!--end::label-->
                                <!--begin::Chart-->
                                <div id="kt_stats_widget_3_chart" class="w-200px" style="min-height: 100px;">
                                    <div id="apexchartsgdiyow05"
                                        class="apexcharts-canvas apexchartsgdiyow05 apexcharts-theme-light"
                                        style="width: 200px; height: 100px;"><svg id="SvgjsSvg1278" width="200" height="100"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1280" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1279">
                                                    <clipPath id="gridRectMaskgdiyow05">
                                                        <rect id="SvgjsRect1283" width="207" height="103" x="-3.5" y="-1.5"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskgdiyow05">
                                                        <rect id="SvgjsRect1284" width="204" height="104" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1291" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1292" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1297" class="apexcharts-grid">
                                                    <g id="SvgjsG1298" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1300" x1="0" y1="0" x2="200" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1301" x1="0" y1="20" x2="200" y2="20"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1302" x1="0" y1="40" x2="200" y2="40"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1303" x1="0" y1="60" x2="200" y2="60"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1304" x1="0" y1="80" x2="200" y2="80"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1305" x1="0" y1="100" x2="200" y2="100"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1299" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1307" x1="0" y1="100" x2="200" y2="100"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine1306" x1="0" y1="1" x2="0" y2="100"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG1285" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1286" class="apexcharts-series" seriesName="NetxProfit"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1289"
                                                            d="M 0 100L 0 80C 35 80 65 20 100 20C 135 20 165 55 200 55C 200 55 200 55 200 100M 200 55z"
                                                            fill="rgba(222,237,255,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskgdiyow05)"
                                                            pathTo="M 0 100L 0 80C 35 80 65 20 100 20C 135 20 165 55 200 55C 200 55 200 55 200 100M 200 55z"
                                                            pathFrom="M -1 380L -1 380L 100 380L 200 380"></path>
                                                        <path id="SvgjsPath1290"
                                                            d="M 0 80C 35 80 65 20 100 20C 135 20 165 55 200 55" fill="none"
                                                            fill-opacity="1" stroke="#3e97ff" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskgdiyow05)"
                                                            pathTo="M 0 80C 35 80 65 20 100 20C 135 20 165 55 200 55"
                                                            pathFrom="M -1 380L -1 380L 100 380L 200 380"></path>
                                                        <g id="SvgjsG1287" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1313" r="0" cx="100" cy="20"
                                                                    class="apexcharts-marker w5qrng5zd no-pointer-events"
                                                                    stroke="#3e97ff" fill="#deedff" fill-opacity="1"
                                                                    stroke-width="3" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1288" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1308" x1="0" y1="0" x2="200" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs">
                                                </line>
                                                <line id="SvgjsLine1309" x1="0" y1="0" x2="200" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1310" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1311" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1312" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1296" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1281" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 50px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light"
                                            style="left: -20px; top: 23px;">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Poppins; font-size: 12px;">Mar</div>
                                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(222, 237, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Poppins; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label">Net Profit: </span><span
                                                            class="apexcharts-tooltip-text-value">$36 thousands</span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                            style="left: 78.0503px; top: 102px;">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: Poppins; font-size: 12px; min-width: 25.5469px;">Mar
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Stats Widget 3-->
                    </div> --}}
                    
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
    </div>
@endsection
