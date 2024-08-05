@extends('layouts.master')
@section('content')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">eCommerce Dashboard</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Dashboards</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                <a href="apps/ecommerce/sales/listing.html" class="btn btn-sm fw-bold btn-secondary">Manage Sales</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm fw-bold btn-primary">Add Product</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Row-->
            <div class="row gx-5 gx-xl-10 mb-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-10">
                    <!--begin::Card widget 4-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Currency-->
                                    <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
                                    <!--end::Currency-->
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                                    <!--end::Amount-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Expected Earnings</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex align-items-center">
                            <!--begin::Chart-->
                            <div class="d-flex flex-center me-5 pt-2">
                                <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"><span></span><canvas height="70" width="70"></canvas></div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Labels-->
                            <div class="d-flex flex-column content-justify-center w-100">
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Shoes</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Gaming</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 4-->
                    <!--begin::Card widget 5-->
                    <div class="card card-flush h-md-50 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">1,836</span>
                                    <!--end::Amount-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-light-danger fs-base">
															<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Orders This Month</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center flex-column mt-3 w-100">
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-bolder fs-6 text-gray-900">1,048 to Goal</span>
                                    <span class="fw-bold fs-6 text-gray-500">62%</span>
                                </div>
                                <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                    <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-10">
                    <!--begin::Card widget 6-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Currency-->
                                    <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
                                    <!--end::Currency-->
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">2,420</span>
                                    <!--end::Amount-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.6%</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Average Daily Sales</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end px-0 pb-0">
                            <!--begin::Chart-->
                            <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px; min-height: 80px;"><div id="apexchartslowjrn1p" class="apexcharts-canvas apexchartslowjrn1p apexcharts-theme-light" style="width: 289px; height: 80px;"><svg id="SvgjsSvg1244" width="289" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="289" height="80"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 40px;"></div></foreignObject><g id="SvgjsG1289" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1246" class="apexcharts-inner apexcharts-graphical" transform="translate(34.65833333333333, 4.5)"><defs id="SvgjsDefs1245"><clipPath id="gridRectMasklowjrn1p"><rect id="SvgjsRect1248" width="282" height="84" x="-31.158333333333335" y="-6.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklowjrn1p"></clipPath><clipPath id="nonForecastMasklowjrn1p"></clipPath><clipPath id="gridRectMarkerMasklowjrn1p"><rect id="SvgjsRect1249" width="223.68333333333334" height="75" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1269" class="apexcharts-grid"><g id="SvgjsG1270" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1273" x1="-24.658333333333335" y1="0" x2="244.34166666666667" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1274" x1="-24.658333333333335" y1="71" x2="244.34166666666667" y2="71" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1271" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1276" x1="0" y1="71" x2="219.68333333333334" y2="71" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1275" x1="0" y1="1" x2="0" y2="71" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1272" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG1250" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1251" class="apexcharts-series" rel="1" seriesName="Sales" data:realIndex="0"><path id="SvgjsPath1256" d="M-5.568819444444443 60.501000000000005L-5.568819444444443 54.876C-5.568819444444443 51.876 -2.5688194444444434 48.876 0.4311805555555557 48.876L0.4311805555555557 48.876C2.9999999999999996 48.876 5.568819444444443 51.876 5.568819444444443 54.876L5.568819444444443 60.501000000000005C5.568819444444443 63.501000000000005 2.568819444444444 66.501 -0.4311805555555557 66.501L-0.4311805555555557 66.501C-2.9999999999999996 66.501 -5.568819444444443 63.501000000000005 -5.568819444444443 60.501000000000005C-5.568819444444443 60.501000000000005 -5.568819444444443 60.501000000000005 -5.568819444444443 60.501000000000005 " fill="rgba(27,132,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklowjrn1p)" pathTo="M -5.568819444444443 60.501000000000005 L -5.568819444444443 54.876 C -5.568819444444443 51.876 -2.568819444444444 48.876 0.4311805555555557 48.876 L 0.4311805555555557 48.876 C 2.9999999999999996 48.876 5.568819444444443 51.876 5.568819444444443 54.876 L 5.568819444444443 60.501000000000005 C 5.568819444444443 63.501000000000005 2.568819444444444 66.501 -0.4311805555555557 66.501 L -0.4311805555555557 66.501 C -2.9999999999999996 66.501 -5.568819444444443 63.501000000000005 -5.568819444444443 60.501000000000005 Z " pathFrom="M -5.568819444444443 66.501 L -5.568819444444443 66.501 L 5.568819444444443 66.501 L 5.568819444444443 66.501 L 5.568819444444443 66.501 L 5.568819444444443 66.501 L 5.568819444444443 66.501 L -5.568819444444443 66.501 Z" cy="44.375" cx="5.568819444444443" j="0" val="30" barHeight="26.625" barWidth="20.137638888888887"></path><path id="SvgjsPath1258" d="M31.045069444444444 60.501000000000005L31.045069444444444 28.251000000000005C31.045069444444444 25.251000000000005 34.045069444444444 22.251000000000005 37.045069444444444 22.251000000000005L37.045069444444444 22.251000000000005C39.61388888888889 22.251000000000005 42.18270833333333 25.251000000000005 42.18270833333333 28.251000000000005L42.18270833333333 60.501000000000005C42.18270833333333 63.501000000000005 39.18270833333333 66.501 36.18270833333333 66.501L36.18270833333333 66.501C33.61388888888889 66.501 31.045069444444444 63.501000000000005 31.045069444444444 60.501000000000005C31.045069444444444 60.501000000000005 31.045069444444444 60.501000000000005 31.045069444444444 60.501000000000005 " fill="rgba(27,132,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklowjrn1p)" pathTo="M 31.045069444444444 60.501000000000005 L 31.045069444444444 28.251 C 31.045069444444444 25.251 34.045069444444444 22.251 37.045069444444444 22.251 L 37.045069444444444 22.251 C 39.61388888888889 22.251 42.18270833333333 25.251 42.18270833333333 28.251 L 42.18270833333333 60.501000000000005 C 42.18270833333333 63.501000000000005 39.18270833333333 66.501 36.18270833333333 66.501 L 36.18270833333333 66.501 C 33.61388888888889 66.501 31.045069444444444 63.501000000000005 31.045069444444444 60.501000000000005 Z " pathFrom="M 31.045069444444444 66.501 L 31.045069444444444 66.501 L 42.18270833333333 66.501 L 42.18270833333333 66.501 L 42.18270833333333 66.501 L 42.18270833333333 66.501 L 42.18270833333333 66.501 L 31.045069444444444 66.501 Z" cy="17.75" cx="42.18270833333333" j="1" val="60" barHeight="53.25" barWidth="20.137638888888887"></path><path id="SvgjsPath1260" d="M67.65895833333333 60.501000000000005L67.65895833333333 34.46350000000001C67.65895833333333 31.46350000000001 70.65895833333333 28.46350000000001 73.65895833333333 28.46350000000001L73.65895833333333 28.46350000000001C76.22777777777777 28.46350000000001 78.79659722222222 31.46350000000001 78.79659722222222 34.46350000000001L78.79659722222222 60.501000000000005C78.79659722222222 63.501000000000005 75.79659722222222 66.501 72.79659722222222 66.501L72.79659722222222 66.501C70.22777777777777 66.501 67.65895833333333 63.501000000000005 67.65895833333333 60.501000000000005C67.65895833333333 60.501000000000005 67.65895833333333 60.501000000000005 67.65895833333333 60.501000000000005 " fill="rgba(27,132,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklowjrn1p)" pathTo="M 67.65895833333333 60.501000000000005 L 67.65895833333333 34.46350000000001 C 67.65895833333333 31.46350000000001 70.65895833333333 28.463500000000007 73.65895833333333 28.463500000000007 L 73.65895833333333 28.463500000000007 C 76.22777777777777 28.463500000000007 78.79659722222222 31.46350000000001 78.79659722222222 34.46350000000001 L 78.79659722222222 60.501000000000005 C 78.79659722222222 63.501000000000005 75.79659722222222 66.501 72.79659722222222 66.501 L 72.79659722222222 66.501 C 70.22777777777777 66.501 67.65895833333333 63.501000000000005 67.65895833333333 60.501000000000005 Z " pathFrom="M 67.65895833333333 66.501 L 67.65895833333333 66.501 L 78.79659722222222 66.501 L 78.79659722222222 66.501 L 78.79659722222222 66.501 L 78.79659722222222 66.501 L 78.79659722222222 66.501 L 67.65895833333333 66.501 Z" cy="23.962500000000006" cx="78.79659722222222" j="2" val="53" barHeight="47.037499999999994" barWidth="20.137638888888887"></path><path id="SvgjsPath1262" d="M104.27284722222223 60.501000000000005L104.27284722222223 41.5635C104.27284722222223 38.5635 107.27284722222223 35.5635 110.27284722222223 35.5635L110.27284722222223 35.5635C112.84166666666667 35.5635 115.41048611111111 38.5635 115.41048611111111 41.5635L115.41048611111111 60.501000000000005C115.41048611111111 63.501000000000005 112.41048611111111 66.501 109.41048611111111 66.501L109.41048611111111 66.501C106.84166666666667 66.501 104.27284722222223 63.501000000000005 104.27284722222223 60.501000000000005C104.27284722222223 60.501000000000005 104.27284722222223 60.501000000000005 104.27284722222223 60.501000000000005 " fill="rgba(27,132,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklowjrn1p)" pathTo="M 104.27284722222223 60.501000000000005 L 104.27284722222223 41.5635 C 104.27284722222223 38.5635 107.27284722222223 35.5635 110.27284722222223 35.5635 L 110.27284722222223 35.5635 C 112.84166666666667 35.5635 115.41048611111111 38.5635 115.41048611111111 41.5635 L 115.41048611111111 60.501000000000005 C 115.41048611111111 63.501000000000005 112.41048611111111 66.501 109.41048611111111 66.501 L 109.41048611111111 66.501 C 106.84166666666667 66.501 104.27284722222223 63.501000000000005 104.27284722222223 60.501000000000005 Z " pathFrom="M 104.27284722222223 66.501 L 104.27284722222223 66.501 L 115.41048611111111 66.501 L 115.41048611111111 66.501 L 115.41048611111111 66.501 L 115.41048611111111 66.501 L 115.41048611111111 66.501 L 104.27284722222223 66.501 Z" cy="31.0625" cx="115.41048611111111" j="3" val="45" barHeight="39.9375" barWidth="20.137638888888887"></path><path id="SvgjsPath1264" d="M140.8867361111111 60.501000000000005L140.8867361111111 28.251000000000005C140.8867361111111 25.251000000000005 143.8867361111111 22.251000000000005 146.8867361111111 22.251000000000005L146.8867361111111 22.251000000000005C149.45555555555555 22.251000000000005 152.024375 25.251000000000005 152.024375 28.251000000000005L152.024375 60.501000000000005C152.024375 63.501000000000005 149.024375 66.501 146.024375 66.501L146.024375 66.501C143.45555555555555 66.501 140.8867361111111 63.501000000000005 140.8867361111111 60.501000000000005C140.8867361111111 60.501000000000005 140.8867361111111 60.501000000000005 140.8867361111111 60.501000000000005 " fill="rgba(27,132,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklowjrn1p)" pathTo="M 140.8867361111111 60.501000000000005 L 140.8867361111111 28.251 C 140.8867361111111 25.251 143.8867361111111 22.251 146.8867361111111 22.251 L 146.8867361111111 22.251 C 149.45555555555555 22.251 152.024375 25.251 152.024375 28.251 L 152.024375 60.501000000000005 C 152.024375 63.501000000000005 149.024375 66.501 146.024375 66.501 L 146.024375 66.501 C 143.45555555555555 66.501 140.8867361111111 63.501000000000005 140.8867361111111 60.501000000000005 Z " pathFrom="M 140.8867361111111 66.501 L 140.8867361111111 66.501 L 152.024375 66.501 L 152.024375 66.501 L 152.024375 66.501 L 152.024375 66.501 L 152.024375 66.501 L 140.8867361111111 66.501 Z" cy="17.75" cx="152.024375" j="4" val="60" barHeight="53.25" barWidth="20.137638888888887"></path><path id="SvgjsPath1266" d="M177.50062499999999 60.501000000000005L177.50062499999999 14.938500000000005C177.50062499999999 11.938500000000005 180.50062499999999 8.938500000000005 183.50062499999999 8.938500000000005L183.50062499999999 8.938500000000005C186.06944444444443 8.938500000000005 188.63826388888887 11.938500000000005 188.63826388888887 14.938500000000005L188.63826388888887 60.501000000000005C188.63826388888887 63.501000000000005 185.63826388888887 66.501 182.63826388888887 66.501L182.63826388888887 66.501C180.06944444444443 66.501 177.50062499999999 63.501000000000005 177.50062499999999 60.501000000000005C177.50062499999999 60.501000000000005 177.50062499999999 60.501000000000005 177.50062499999999 60.501000000000005 " fill="rgba(27,132,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklowjrn1p)" pathTo="M 177.50062499999999 60.501000000000005 L 177.50062499999999 14.938500000000001 C 177.50062499999999 11.938500000000001 180.50062499999999 8.938500000000001 183.50062499999999 8.938500000000001 L 183.50062499999999 8.938500000000001 C 186.06944444444443 8.938500000000001 188.63826388888887 11.938500000000001 188.63826388888887 14.938500000000001 L 188.63826388888887 60.501000000000005 C 188.63826388888887 63.501000000000005 185.63826388888887 66.501 182.63826388888887 66.501 L 182.63826388888887 66.501 C 180.06944444444443 66.501 177.50062499999999 63.501000000000005 177.50062499999999 60.501000000000005 Z " pathFrom="M 177.50062499999999 66.501 L 177.50062499999999 66.501 L 188.63826388888887 66.501 L 188.63826388888887 66.501 L 188.63826388888887 66.501 L 188.63826388888887 66.501 L 188.63826388888887 66.501 L 177.50062499999999 66.501 Z" cy="4.4375" cx="188.63826388888887" j="5" val="75" barHeight="66.5625" barWidth="20.137638888888887"></path><path id="SvgjsPath1268" d="M214.1145138888889 60.501000000000005L214.1145138888889 34.46350000000001C214.1145138888889 31.46350000000001 217.1145138888889 28.46350000000001 220.1145138888889 28.46350000000001L220.1145138888889 28.46350000000001C222.68333333333334 28.46350000000001 225.25215277777778 31.46350000000001 225.25215277777778 34.46350000000001L225.25215277777778 60.501000000000005C225.25215277777778 63.501000000000005 222.25215277777778 66.501 219.25215277777778 66.501L219.25215277777778 66.501C216.68333333333334 66.501 214.1145138888889 63.501000000000005 214.1145138888889 60.501000000000005C214.1145138888889 60.501000000000005 214.1145138888889 60.501000000000005 214.1145138888889 60.501000000000005 " fill="rgba(27,132,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklowjrn1p)" pathTo="M 214.1145138888889 60.501000000000005 L 214.1145138888889 34.46350000000001 C 214.1145138888889 31.46350000000001 217.1145138888889 28.463500000000007 220.1145138888889 28.463500000000007 L 220.1145138888889 28.463500000000007 C 222.68333333333334 28.463500000000007 225.25215277777778 31.46350000000001 225.25215277777778 34.46350000000001 L 225.25215277777778 60.501000000000005 C 225.25215277777778 63.501000000000005 222.25215277777778 66.501 219.25215277777778 66.501 L 219.25215277777778 66.501 C 216.68333333333334 66.501 214.1145138888889 63.501000000000005 214.1145138888889 60.501000000000005 Z " pathFrom="M 214.1145138888889 66.501 L 214.1145138888889 66.501 L 225.25215277777778 66.501 L 225.25215277777778 66.501 L 225.25215277777778 66.501 L 225.25215277777778 66.501 L 225.25215277777778 66.501 L 214.1145138888889 66.501 Z" cy="23.962500000000006" cx="225.25215277777778" j="6" val="53" barHeight="47.037499999999994" barWidth="20.137638888888887"></path><g id="SvgjsG1253" class="apexcharts-bar-goals-markers"><g id="SvgjsG1255" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasklowjrn1p)"></g><g id="SvgjsG1257" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasklowjrn1p)"></g><g id="SvgjsG1259" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasklowjrn1p)"></g><g id="SvgjsG1261" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasklowjrn1p)"></g><g id="SvgjsG1263" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasklowjrn1p)"></g><g id="SvgjsG1265" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasklowjrn1p)"></g><g id="SvgjsG1267" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasklowjrn1p)"></g></g><g id="SvgjsG1254" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g id="SvgjsG1252" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g></g><line id="SvgjsLine1277" x1="-24.658333333333335" y1="0" x2="244.34166666666667" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1278" x1="-24.658333333333335" y1="0" x2="244.34166666666667" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1279" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1280" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1290" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1291" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1292" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 71.0895px; top: -13px;"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">Feb: 2</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(27, 132, 255, 0.85);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Sales: </span><span class="apexcharts-tooltip-text-y-value">60%</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 6-->
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-50 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">6.3k</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">New Customers This Month</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-column justify-content-end pe-0">
                            <!--begin::Title-->
                            <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                            <!--end::Title-->
                            <!--begin::Users group-->
                            <div class="symbol-group symbol-hover flex-nowrap">
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                    <img alt="Pic" src="assets/media/avatars/300-11.jpg">
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                    <img alt="Pic" src="assets/media/avatars/300-2.jpg">
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                    <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg">
                                </div>
                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                    <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                                </a>
                            </div>
                            <!--end::Users group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 7-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                    <!--begin::Chart widget 3-->
                    <div class="card card-flush overflow-hidden h-md-100">
                        <!--begin::Header-->
                        <div class="card-header py-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Sales This Months</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Users from all channels</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                            <!--begin::Statistics-->
                            <div class="px-9 mb-5">
                                <!--begin::Statistics-->
                                <div class="d-flex mb-2">
                                    <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">14,094</span>
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">Another $48,346 to Goal</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px; min-height: 315px;"><div id="apexcharts6zijr134" class="apexcharts-canvas apexcharts6zijr134 apexcharts-theme-light" style="width: 579.5px; height: 300px;"><svg id="SvgjsSvg1006" width="579.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="579.5" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><rect id="SvgjsRect1035" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1098" class="apexcharts-yaxis" rel="0" transform="translate(37.765625, 0)"><g id="SvgjsG1099" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1101" font-family="inherit" x="20" y="34" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1102">$24K</tspan><title>$24K</title></text><text id="SvgjsText1104" font-family="inherit" x="20" y="89.455" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1105">$20.5K</tspan><title>$20.5K</title></text><text id="SvgjsText1107" font-family="inherit" x="20" y="144.91" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1108">$17K</tspan><title>$17K</title></text><text id="SvgjsText1110" font-family="inherit" x="20" y="200.365" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1111">$13.5K</tspan><title>$13.5K</title></text><text id="SvgjsText1113" font-family="inherit" x="20" y="255.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1114">$10K</tspan><title>$10K</title></text></g></g><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(67.765625, 30)"><defs id="SvgjsDefs1007"><clipPath id="gridRectMask6zijr134"><rect id="SvgjsRect1012" width="508.734375" height="228.82" x="-3.5" y="-3.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask6zijr134"></clipPath><clipPath id="nonForecastMask6zijr134"></clipPath><clipPath id="gridRectMarkerMask6zijr134"><rect id="SvgjsRect1013" width="505.734375" height="225.82" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1018" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1019" stop-opacity="0.4" stop-color="rgba(23,198,83,0.4)" offset="0"></stop><stop id="SvgjsStop1020" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.8"></stop><stop id="SvgjsStop1021" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1024" class="apexcharts-grid"><g id="SvgjsG1025" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1029" x1="0" y1="55.455" x2="501.734375" y2="55.455" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1030" x1="0" y1="110.91" x2="501.734375" y2="110.91" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1031" x1="0" y1="166.365" x2="501.734375" y2="166.365" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1026" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1034" x1="0" y1="221.82" x2="501.734375" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1033" x1="0" y1="1" x2="0" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1027" class="apexcharts-grid-borders"><line id="SvgjsLine1028" x1="0" y1="0" x2="501.734375" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1032" x1="0" y1="221.82" x2="501.734375" y2="221.82" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1014" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1015" class="apexcharts-series" zIndex="0" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1022" d="M0 95.06571428571425C9.755946180555554 95.06571428571425 18.11818576388889 95.06571428571425 27.874131944444443 95.06571428571425C37.630078125 95.06571428571425 45.99231770833333 63.377142857142815 55.748263888888886 63.377142857142815C65.50421006944444 63.377142857142815 73.86644965277777 63.377142857142815 83.62239583333333 63.377142857142815C93.37834201388888 63.377142857142815 101.74058159722222 95.06571428571425 111.49652777777777 95.06571428571425C121.25247395833333 95.06571428571425 129.61471354166667 95.06571428571425 139.37065972222223 95.06571428571425C149.12660590277778 95.06571428571425 157.4888454861111 31.68857142857138 167.24479166666666 31.68857142857138C177.0007378472222 31.68857142857138 185.36297743055556 31.68857142857138 195.11892361111111 31.68857142857138C204.87486979166667 31.68857142857138 213.237109375 63.377142857142815 222.99305555555554 63.377142857142815C232.7490017361111 63.377142857142815 241.11124131944445 63.377142857142815 250.8671875 63.377142857142815C260.62313368055555 63.377142857142815 268.9853732638889 95.06571428571425 278.74131944444446 95.06571428571425C288.497265625 95.06571428571425 296.8595052083333 95.06571428571425 306.61545138888886 95.06571428571425C316.3713975694444 95.06571428571425 324.73363715277776 63.377142857142815 334.4895833333333 63.377142857142815C344.24552951388887 63.377142857142815 352.6077690972222 63.377142857142815 362.36371527777777 63.377142857142815C372.1196614583333 63.377142857142815 380.4819010416667 95.06571428571425 390.23784722222223 95.06571428571425C399.9937934027778 95.06571428571425 408.3560329861111 95.06571428571425 418.11197916666663 95.06571428571425C427.8679253472222 95.06571428571425 436.23016493055553 63.377142857142815 445.9861111111111 63.377142857142815C455.74205729166664 63.377142857142815 464.104296875 63.377142857142815 473.86024305555554 63.377142857142815C483.6161892361111 63.377142857142815 491.97842881944445 31.68857142857138 501.734375 31.68857142857138C501.734375 31.68857142857138 501.734375 31.68857142857138 501.734375 221.82L0 221.82C0 221.82 0 95.06571428571425 0 95.06571428571425 " fill="url(#SvgjsLinearGradient1018)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask6zijr134)" pathTo="M 0 95.06571428571425C 9.755946180555554 95.06571428571425 18.11818576388889 95.06571428571425 27.874131944444443 95.06571428571425C 37.630078125 95.06571428571425 45.99231770833333 63.377142857142815 55.748263888888886 63.377142857142815C 65.50421006944444 63.377142857142815 73.86644965277777 63.377142857142815 83.62239583333333 63.377142857142815C 93.37834201388888 63.377142857142815 101.74058159722222 95.06571428571425 111.49652777777777 95.06571428571425C 121.25247395833333 95.06571428571425 129.61471354166667 95.06571428571425 139.37065972222223 95.06571428571425C 149.12660590277778 95.06571428571425 157.4888454861111 31.68857142857138 167.24479166666666 31.68857142857138C 177.0007378472222 31.68857142857138 185.36297743055556 31.68857142857138 195.11892361111111 31.68857142857138C 204.87486979166667 31.68857142857138 213.237109375 63.377142857142815 222.99305555555554 63.377142857142815C 232.7490017361111 63.377142857142815 241.11124131944445 63.377142857142815 250.8671875 63.377142857142815C 260.62313368055555 63.377142857142815 268.9853732638889 95.06571428571425 278.74131944444446 95.06571428571425C 288.497265625 95.06571428571425 296.8595052083333 95.06571428571425 306.61545138888886 95.06571428571425C 316.3713975694444 95.06571428571425 324.73363715277776 63.377142857142815 334.4895833333333 63.377142857142815C 344.24552951388887 63.377142857142815 352.6077690972222 63.377142857142815 362.36371527777777 63.377142857142815C 372.1196614583333 63.377142857142815 380.4819010416667 95.06571428571425 390.23784722222223 95.06571428571425C 399.9937934027778 95.06571428571425 408.3560329861111 95.06571428571425 418.11197916666663 95.06571428571425C 427.8679253472222 95.06571428571425 436.23016493055553 63.377142857142815 445.9861111111111 63.377142857142815C 455.74205729166664 63.377142857142815 464.104296875 63.377142857142815 473.86024305555554 63.377142857142815C 483.6161892361111 63.377142857142815 491.97842881944445 31.68857142857138 501.734375 31.68857142857138C 501.734375 31.68857142857138 501.734375 31.68857142857138 501.734375 221.82 L 0 221.82z" pathFrom="M 0 380.2628571428571 L 0 380.2628571428571 L 27.874131944444443 380.2628571428571 L 55.748263888888886 380.2628571428571 L 83.62239583333333 380.2628571428571 L 111.49652777777777 380.2628571428571 L 139.37065972222223 380.2628571428571 L 167.24479166666666 380.2628571428571 L 195.11892361111111 380.2628571428571 L 222.99305555555554 380.2628571428571 L 250.8671875 380.2628571428571 L 278.74131944444446 380.2628571428571 L 306.61545138888886 380.2628571428571 L 334.4895833333333 380.2628571428571 L 362.36371527777777 380.2628571428571 L 390.23784722222223 380.2628571428571 L 418.11197916666663 380.2628571428571 L 445.9861111111111 380.2628571428571 L 473.86024305555554 380.2628571428571 L 501.734375 380.2628571428571 L 0 380.2628571428571"></path><path id="SvgjsPath1023" d="M0 95.06571428571425C9.755946180555554 95.06571428571425 18.11818576388889 95.06571428571425 27.874131944444443 95.06571428571425C37.630078125 95.06571428571425 45.99231770833333 63.377142857142815 55.748263888888886 63.377142857142815C65.50421006944444 63.377142857142815 73.86644965277777 63.377142857142815 83.62239583333333 63.377142857142815C93.37834201388888 63.377142857142815 101.74058159722222 95.06571428571425 111.49652777777777 95.06571428571425C121.25247395833333 95.06571428571425 129.61471354166667 95.06571428571425 139.37065972222223 95.06571428571425C149.12660590277778 95.06571428571425 157.4888454861111 31.68857142857138 167.24479166666666 31.68857142857138C177.0007378472222 31.68857142857138 185.36297743055556 31.68857142857138 195.11892361111111 31.68857142857138C204.87486979166667 31.68857142857138 213.237109375 63.377142857142815 222.99305555555554 63.377142857142815C232.7490017361111 63.377142857142815 241.11124131944445 63.377142857142815 250.8671875 63.377142857142815C260.62313368055555 63.377142857142815 268.9853732638889 95.06571428571425 278.74131944444446 95.06571428571425C288.497265625 95.06571428571425 296.8595052083333 95.06571428571425 306.61545138888886 95.06571428571425C316.3713975694444 95.06571428571425 324.73363715277776 63.377142857142815 334.4895833333333 63.377142857142815C344.24552951388887 63.377142857142815 352.6077690972222 63.377142857142815 362.36371527777777 63.377142857142815C372.1196614583333 63.377142857142815 380.4819010416667 95.06571428571425 390.23784722222223 95.06571428571425C399.9937934027778 95.06571428571425 408.3560329861111 95.06571428571425 418.11197916666663 95.06571428571425C427.8679253472222 95.06571428571425 436.23016493055553 63.377142857142815 445.9861111111111 63.377142857142815C455.74205729166664 63.377142857142815 464.104296875 63.377142857142815 473.86024305555554 63.377142857142815C483.6161892361111 63.377142857142815 491.97842881944445 31.68857142857138 501.734375 31.68857142857138C501.734375 31.68857142857138 501.734375 31.68857142857138 501.734375 31.68857142857138 " fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask6zijr134)" pathTo="M 0 95.06571428571425C 9.755946180555554 95.06571428571425 18.11818576388889 95.06571428571425 27.874131944444443 95.06571428571425C 37.630078125 95.06571428571425 45.99231770833333 63.377142857142815 55.748263888888886 63.377142857142815C 65.50421006944444 63.377142857142815 73.86644965277777 63.377142857142815 83.62239583333333 63.377142857142815C 93.37834201388888 63.377142857142815 101.74058159722222 95.06571428571425 111.49652777777777 95.06571428571425C 121.25247395833333 95.06571428571425 129.61471354166667 95.06571428571425 139.37065972222223 95.06571428571425C 149.12660590277778 95.06571428571425 157.4888454861111 31.68857142857138 167.24479166666666 31.68857142857138C 177.0007378472222 31.68857142857138 185.36297743055556 31.68857142857138 195.11892361111111 31.68857142857138C 204.87486979166667 31.68857142857138 213.237109375 63.377142857142815 222.99305555555554 63.377142857142815C 232.7490017361111 63.377142857142815 241.11124131944445 63.377142857142815 250.8671875 63.377142857142815C 260.62313368055555 63.377142857142815 268.9853732638889 95.06571428571425 278.74131944444446 95.06571428571425C 288.497265625 95.06571428571425 296.8595052083333 95.06571428571425 306.61545138888886 95.06571428571425C 316.3713975694444 95.06571428571425 324.73363715277776 63.377142857142815 334.4895833333333 63.377142857142815C 344.24552951388887 63.377142857142815 352.6077690972222 63.377142857142815 362.36371527777777 63.377142857142815C 372.1196614583333 63.377142857142815 380.4819010416667 95.06571428571425 390.23784722222223 95.06571428571425C 399.9937934027778 95.06571428571425 408.3560329861111 95.06571428571425 418.11197916666663 95.06571428571425C 427.8679253472222 95.06571428571425 436.23016493055553 63.377142857142815 445.9861111111111 63.377142857142815C 455.74205729166664 63.377142857142815 464.104296875 63.377142857142815 473.86024305555554 63.377142857142815C 483.6161892361111 63.377142857142815 491.97842881944445 31.68857142857138 501.734375 31.68857142857138" pathFrom="M 0 380.2628571428571 L 0 380.2628571428571 L 27.874131944444443 380.2628571428571 L 55.748263888888886 380.2628571428571 L 83.62239583333333 380.2628571428571 L 111.49652777777777 380.2628571428571 L 139.37065972222223 380.2628571428571 L 167.24479166666666 380.2628571428571 L 195.11892361111111 380.2628571428571 L 222.99305555555554 380.2628571428571 L 250.8671875 380.2628571428571 L 278.74131944444446 380.2628571428571 L 306.61545138888886 380.2628571428571 L 334.4895833333333 380.2628571428571 L 362.36371527777777 380.2628571428571 L 390.23784722222223 380.2628571428571 L 418.11197916666663 380.2628571428571 L 445.9861111111111 380.2628571428571 L 473.86024305555554 380.2628571428571 L 501.734375 380.2628571428571" fill-rule="evenodd"></path><g id="SvgjsG1016" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1118" r="0" cx="0" cy="0" class="apexcharts-marker woh6td5c5 no-pointer-events" stroke="#17c653" fill="#17c653" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1017" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1036" x1="0" y1="0" x2="0" y2="221.82" stroke="#17c653" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="221.82" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1037" x1="0" y1="0" x2="501.734375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1038" x1="0" y1="0" x2="501.734375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1039" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1040" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1042" font-family="inherit" x="0" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1043"></tspan><title></title></text><text id="SvgjsText1045" font-family="inherit" x="27.874131944444443" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1046"></tspan><title></title></text><text id="SvgjsText1048" font-family="inherit" x="55.74826388888889" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1049"></tspan><title></title></text><text id="SvgjsText1051" font-family="inherit" x="83.62239583333334" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 84.74544525146484 238.32000732421875)"><tspan id="SvgjsTspan1052">Apr 04</tspan><title>Apr 04</title></text><text id="SvgjsText1054" font-family="inherit" x="111.49652777777777" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1055"></tspan><title></title></text><text id="SvgjsText1057" font-family="inherit" x="139.37065972222223" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1058"></tspan><title></title></text><text id="SvgjsText1060" font-family="inherit" x="167.24479166666669" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 168.3444061279297 238.32000732421875)"><tspan id="SvgjsTspan1061">Apr 07</tspan><title>Apr 07</title></text><text id="SvgjsText1063" font-family="inherit" x="195.11892361111114" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1064"></tspan><title></title></text><text id="SvgjsText1066" font-family="inherit" x="222.9930555555556" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1067"></tspan><title></title></text><text id="SvgjsText1069" font-family="inherit" x="250.86718750000006" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 252.0751953125 238.32000732421875)"><tspan id="SvgjsTspan1070">Apr 10</tspan><title>Apr 10</title></text><text id="SvgjsText1072" font-family="inherit" x="278.7413194444445" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1073"></tspan><title></title></text><text id="SvgjsText1075" font-family="inherit" x="306.61545138888897" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1076"></tspan><title></title></text><text id="SvgjsText1078" font-family="inherit" x="334.4895833333334" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 335.4895935058594 238.32000732421875)"><tspan id="SvgjsTspan1079">Apr 13</tspan><title>Apr 13</title></text><text id="SvgjsText1081" font-family="inherit" x="362.3637152777779" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1082"></tspan><title></title></text><text id="SvgjsText1084" font-family="inherit" x="390.23784722222234" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1085"></tspan><title></title></text><text id="SvgjsText1087" font-family="inherit" x="418.1119791666668" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 419.1119689941406 238.32000732421875)"><tspan id="SvgjsTspan1088">Apr 16</tspan><title>Apr 16</title></text><text id="SvgjsText1090" font-family="inherit" x="445.98611111111126" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1091"></tspan><title></title></text><text id="SvgjsText1093" font-family="inherit" x="473.8602430555557" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1094"></tspan><title></title></text><text id="SvgjsText1096" font-family="inherit" x="501.73437500000017" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1097"></tspan><title></title></text></g></g><g id="SvgjsG1115" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1116" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1117" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g><rect id="SvgjsRect1119" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1120" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(23, 198, 83);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart widget 3-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-6 mb-xl-10">
                    <!--begin::Table widget 2-->
                    <div class="card h-md-100">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0">
                            <!--begin::Title-->
                            <h3 class="fw-bold text-gray-900 m-0">Recent Orders</h3>
                            <!--end::Title-->
                            <!--begin::Menu-->
                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                <i class="ki-duotone ki-dots-square fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1" aria-selected="true" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img alt="" src="assets/media/svg/products-categories/t-shirt.svg" class="">
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">T-shirt</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2" aria-selected="false" tabindex="-1" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img alt="" src="assets/media/svg/products-categories/gaming.svg" class="">
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Gaming</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3" aria-selected="false" tabindex="-1" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img alt="" src="assets/media/svg/products-categories/watch.svg" class="">
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Watch</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4" aria-selected="false" tabindex="-1" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img alt="" src="assets/media/svg/products-categories/gloves.svg" class="nav-icon">
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Gloves</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5" aria-selected="false" tabindex="-1" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img alt="" src="assets/media/svg/products-categories/shoes.svg" class="nav-icon">
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Shoes</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1" role="tabpanel">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="ps-0 w-50px">ITEM</th>
                                                <th class="min-w-125px"></th>
                                                <th class="text-end min-w-100px">QTY</th>
                                                <th class="pe-0 text-end min-w-100px">PRICE</th>
                                                <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/210.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$72.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$126.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/215.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1321</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$45.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$76.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/209.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$84.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$168.00</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_2" role="tabpanel">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="ps-0 w-50px">ITEM</th>
                                                <th class="min-w-125px"></th>
                                                <th class="text-end min-w-100px">QTY</th>
                                                <th class="pe-0 text-end min-w-100px">PRICE</th>
                                                <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/197.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$32.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$312.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/178.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-3122</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$53.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$62.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/22.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1142</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$74.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$139.00</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_3" role="tabpanel">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="ps-0 w-50px">ITEM</th>
                                                <th class="min-w-125px"></th>
                                                <th class="text-end min-w-100px">QTY</th>
                                                <th class="pe-0 text-end min-w-100px">PRICE</th>
                                                <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/1.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1324</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$43.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$231.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/24.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-5314</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$71.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$53.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/71.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4222</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$23.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$213.00</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_4" role="tabpanel">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="ps-0 w-50px">ITEM</th>
                                                <th class="min-w-125px"></th>
                                                <th class="text-end min-w-100px">QTY</th>
                                                <th class="pe-0 text-end min-w-100px">PRICE</th>
                                                <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/41.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 2635</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$65.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$163.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/63.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2745</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$64.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$73.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/59.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-5173</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$54.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$173.00</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_5" role="tabpanel">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="ps-0 w-50px">ITEM</th>
                                                <th class="min-w-125px"></th>
                                                <th class="text-end min-w-100px">QTY</th>
                                                <th class="pe-0 text-end min-w-100px">PRICE</th>
                                                <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/10.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Nike</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2163</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$64.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$287.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/96.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Adidas</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2162</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$76.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$51.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/13.png" class="w-50px ms-n1" alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Puma</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1537</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$27.00</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">$167.00</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6 mb-5 mb-xl-10">
                    <!--begin::Chart widget 4-->
                    <div class="card card-flush overflow-hidden h-md-100">
                        <!--begin::Header-->
                        <div class="card-header py-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Discounted Product Sales</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Users from all channels</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                            <!--begin::Info-->
                            <div class="px-9 mb-5">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Currency-->
                                    <span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
                                    <!--end::Currency-->
                                    <!--begin::Value-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,706</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-down fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>4.5%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">Total Discounted Sales This Month</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6" style="height: 300px; min-height: 315px;"><div id="apexchartsqcfxqs68" class="apexcharts-canvas apexchartsqcfxqs68 apexcharts-theme-light" style="width: 579.5px; height: 300px;"><svg id="SvgjsSvg1121" width="579.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="579.5" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><rect id="SvgjsRect1152" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1215" class="apexcharts-yaxis" rel="0" transform="translate(26.96875, 0)"><g id="SvgjsG1216" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1218" font-family="inherit" x="20" y="34" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1219">$363</tspan><title>$363</title></text><text id="SvgjsText1221" font-family="inherit" x="20" y="70.97" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1222">$357</tspan><title>$357</title></text><text id="SvgjsText1224" font-family="inherit" x="20" y="107.94" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1225">$352</tspan><title>$352</title></text><text id="SvgjsText1227" font-family="inherit" x="20" y="144.91" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1228">$346</tspan><title>$346</title></text><text id="SvgjsText1230" font-family="inherit" x="20" y="181.88" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1231">$341</tspan><title>$341</title></text><text id="SvgjsText1233" font-family="inherit" x="20" y="218.85" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1234">$335</tspan><title>$335</title></text><text id="SvgjsText1236" font-family="inherit" x="20" y="255.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1237">$330</tspan><title>$330</title></text></g></g><g id="SvgjsG1123" class="apexcharts-inner apexcharts-graphical" transform="translate(56.96875, 30)"><defs id="SvgjsDefs1122"><clipPath id="gridRectMaskqcfxqs68"><rect id="SvgjsRect1127" width="519.53125" height="228.82" x="-3.5" y="-3.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskqcfxqs68"></clipPath><clipPath id="nonForecastMaskqcfxqs68"></clipPath><clipPath id="gridRectMarkerMaskqcfxqs68"><rect id="SvgjsRect1128" width="516.53125" height="225.82" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1133" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1134" stop-opacity="0.4" stop-color="rgba(27,132,255,0.4)" offset="0"></stop><stop id="SvgjsStop1135" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.8"></stop><stop id="SvgjsStop1136" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1139" class="apexcharts-grid"><g id="SvgjsG1140" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1144" x1="0" y1="36.97" x2="512.53125" y2="36.97" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1145" x1="0" y1="73.94" x2="512.53125" y2="73.94" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1146" x1="0" y1="110.91" x2="512.53125" y2="110.91" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1147" x1="0" y1="147.88" x2="512.53125" y2="147.88" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1148" x1="0" y1="184.85" x2="512.53125" y2="184.85" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1141" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1151" x1="0" y1="221.82" x2="512.53125" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1150" x1="0" y1="1" x2="0" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1142" class="apexcharts-grid-borders"><line id="SvgjsLine1143" x1="0" y1="0" x2="512.53125" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1149" x1="0" y1="221.82" x2="512.53125" y2="221.82" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1129" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1130" class="apexcharts-series" zIndex="0" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1137" d="M0 120.99272727272773C9.965885416666667 120.99272727272773 18.50807291666667 120.99272727272773 28.473958333333336 120.99272727272773C38.43984375 120.99272727272773 46.982031250000006 87.38363636363647 56.94791666666667 87.38363636363647C66.91380208333334 87.38363636363647 75.45598958333335 87.38363636363647 85.42187500000001 87.38363636363647C95.38776041666668 87.38363636363647 103.92994791666668 53.77454545454566 113.89583333333334 53.77454545454566C123.86171875000001 53.77454545454566 132.40390625 53.77454545454566 142.36979166666669 53.77454545454566C152.33567708333337 53.77454545454566 160.87786458333335 87.38363636363647 170.84375000000003 87.38363636363647C180.80963541666668 87.38363636363647 189.3518229166667 87.38363636363647 199.31770833333334 87.38363636363647C209.28359375000002 87.38363636363647 217.82578125 53.77454545454566 227.79166666666669 53.77454545454566C237.75755208333334 53.77454545454566 246.29973958333335 53.77454545454566 256.265625 53.77454545454566C266.23151041666665 53.77454545454566 274.7736979166667 87.38363636363647 284.73958333333337 87.38363636363647C294.70546875 87.38363636363647 303.24765625000003 87.38363636363647 313.2135416666667 87.38363636363647C323.1794270833334 87.38363636363647 331.72161458333335 120.99272727272773 341.68750000000006 120.99272727272773C351.6533854166667 120.99272727272773 360.1955729166667 120.99272727272773 370.16145833333337 120.99272727272773C380.12734375 120.99272727272773 388.66953125000003 87.38363636363647 398.6354166666667 87.38363636363647C408.6013020833334 87.38363636363647 417.14348958333335 87.38363636363647 427.10937500000006 87.38363636363647C437.0752604166667 87.38363636363647 445.6174479166667 53.77454545454566 455.58333333333337 53.77454545454566C465.54921875 53.77454545454566 474.09140625000003 53.77454545454566 484.0572916666667 53.77454545454566C494.02317708333334 53.77454545454566 502.56536458333335 87.38363636363647 512.53125 87.38363636363647C512.53125 87.38363636363647 512.53125 87.38363636363647 512.53125 221.82000000000016L0 221.82000000000016C0 221.82000000000016 0 120.99272727272773 0 120.99272727272773 " fill="url(#SvgjsLinearGradient1133)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqcfxqs68)" pathTo="M 0 120.99272727272773C 9.965885416666667 120.99272727272773 18.50807291666667 120.99272727272773 28.473958333333336 120.99272727272773C 38.43984375 120.99272727272773 46.982031250000006 87.38363636363647 56.94791666666667 87.38363636363647C 66.91380208333334 87.38363636363647 75.45598958333335 87.38363636363647 85.42187500000001 87.38363636363647C 95.38776041666668 87.38363636363647 103.92994791666668 53.77454545454566 113.89583333333334 53.77454545454566C 123.86171875000001 53.77454545454566 132.40390625 53.77454545454566 142.36979166666669 53.77454545454566C 152.33567708333337 53.77454545454566 160.87786458333335 87.38363636363647 170.84375000000003 87.38363636363647C 180.80963541666668 87.38363636363647 189.3518229166667 87.38363636363647 199.31770833333334 87.38363636363647C 209.28359375000002 87.38363636363647 217.82578125 53.77454545454566 227.79166666666669 53.77454545454566C 237.75755208333334 53.77454545454566 246.29973958333335 53.77454545454566 256.265625 53.77454545454566C 266.23151041666665 53.77454545454566 274.7736979166667 87.38363636363647 284.73958333333337 87.38363636363647C 294.70546875 87.38363636363647 303.24765625000003 87.38363636363647 313.2135416666667 87.38363636363647C 323.1794270833334 87.38363636363647 331.72161458333335 120.99272727272773 341.68750000000006 120.99272727272773C 351.6533854166667 120.99272727272773 360.1955729166667 120.99272727272773 370.16145833333337 120.99272727272773C 380.12734375 120.99272727272773 388.66953125000003 87.38363636363647 398.6354166666667 87.38363636363647C 408.6013020833334 87.38363636363647 417.14348958333335 87.38363636363647 427.10937500000006 87.38363636363647C 437.0752604166667 87.38363636363647 445.6174479166667 53.77454545454566 455.58333333333337 53.77454545454566C 465.54921875 53.77454545454566 474.09140625000003 53.77454545454566 484.0572916666667 53.77454545454566C 494.02317708333334 53.77454545454566 502.56536458333335 87.38363636363647 512.53125 87.38363636363647C 512.53125 87.38363636363647 512.53125 87.38363636363647 512.53125 221.82 L 0 221.82z" pathFrom="M 0 2440.0200000000023 L 0 2440.0200000000023 L 28.473958333333336 2440.0200000000023 L 56.94791666666667 2440.0200000000023 L 85.42187500000001 2440.0200000000023 L 113.89583333333334 2440.0200000000023 L 142.36979166666669 2440.0200000000023 L 170.84375000000003 2440.0200000000023 L 199.31770833333334 2440.0200000000023 L 227.79166666666669 2440.0200000000023 L 256.265625 2440.0200000000023 L 284.73958333333337 2440.0200000000023 L 313.2135416666667 2440.0200000000023 L 341.68750000000006 2440.0200000000023 L 370.16145833333337 2440.0200000000023 L 398.6354166666667 2440.0200000000023 L 427.10937500000006 2440.0200000000023 L 455.58333333333337 2440.0200000000023 L 484.0572916666667 2440.0200000000023 L 512.53125 2440.0200000000023 L 0 2440.0200000000023"></path><path id="SvgjsPath1138" d="M0 120.99272727272773C9.965885416666667 120.99272727272773 18.50807291666667 120.99272727272773 28.473958333333336 120.99272727272773C38.43984375 120.99272727272773 46.982031250000006 87.38363636363647 56.94791666666667 87.38363636363647C66.91380208333334 87.38363636363647 75.45598958333335 87.38363636363647 85.42187500000001 87.38363636363647C95.38776041666668 87.38363636363647 103.92994791666668 53.77454545454566 113.89583333333334 53.77454545454566C123.86171875000001 53.77454545454566 132.40390625 53.77454545454566 142.36979166666669 53.77454545454566C152.33567708333337 53.77454545454566 160.87786458333335 87.38363636363647 170.84375000000003 87.38363636363647C180.80963541666668 87.38363636363647 189.3518229166667 87.38363636363647 199.31770833333334 87.38363636363647C209.28359375000002 87.38363636363647 217.82578125 53.77454545454566 227.79166666666669 53.77454545454566C237.75755208333334 53.77454545454566 246.29973958333335 53.77454545454566 256.265625 53.77454545454566C266.23151041666665 53.77454545454566 274.7736979166667 87.38363636363647 284.73958333333337 87.38363636363647C294.70546875 87.38363636363647 303.24765625000003 87.38363636363647 313.2135416666667 87.38363636363647C323.1794270833334 87.38363636363647 331.72161458333335 120.99272727272773 341.68750000000006 120.99272727272773C351.6533854166667 120.99272727272773 360.1955729166667 120.99272727272773 370.16145833333337 120.99272727272773C380.12734375 120.99272727272773 388.66953125000003 87.38363636363647 398.6354166666667 87.38363636363647C408.6013020833334 87.38363636363647 417.14348958333335 87.38363636363647 427.10937500000006 87.38363636363647C437.0752604166667 87.38363636363647 445.6174479166667 53.77454545454566 455.58333333333337 53.77454545454566C465.54921875 53.77454545454566 474.09140625000003 53.77454545454566 484.0572916666667 53.77454545454566C494.02317708333334 53.77454545454566 502.56536458333335 87.38363636363647 512.53125 87.38363636363647C512.53125 87.38363636363647 512.53125 87.38363636363647 512.53125 87.38363636363647 " fill="none" fill-opacity="1" stroke="#1b84ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqcfxqs68)" pathTo="M 0 120.99272727272773C 9.965885416666667 120.99272727272773 18.50807291666667 120.99272727272773 28.473958333333336 120.99272727272773C 38.43984375 120.99272727272773 46.982031250000006 87.38363636363647 56.94791666666667 87.38363636363647C 66.91380208333334 87.38363636363647 75.45598958333335 87.38363636363647 85.42187500000001 87.38363636363647C 95.38776041666668 87.38363636363647 103.92994791666668 53.77454545454566 113.89583333333334 53.77454545454566C 123.86171875000001 53.77454545454566 132.40390625 53.77454545454566 142.36979166666669 53.77454545454566C 152.33567708333337 53.77454545454566 160.87786458333335 87.38363636363647 170.84375000000003 87.38363636363647C 180.80963541666668 87.38363636363647 189.3518229166667 87.38363636363647 199.31770833333334 87.38363636363647C 209.28359375000002 87.38363636363647 217.82578125 53.77454545454566 227.79166666666669 53.77454545454566C 237.75755208333334 53.77454545454566 246.29973958333335 53.77454545454566 256.265625 53.77454545454566C 266.23151041666665 53.77454545454566 274.7736979166667 87.38363636363647 284.73958333333337 87.38363636363647C 294.70546875 87.38363636363647 303.24765625000003 87.38363636363647 313.2135416666667 87.38363636363647C 323.1794270833334 87.38363636363647 331.72161458333335 120.99272727272773 341.68750000000006 120.99272727272773C 351.6533854166667 120.99272727272773 360.1955729166667 120.99272727272773 370.16145833333337 120.99272727272773C 380.12734375 120.99272727272773 388.66953125000003 87.38363636363647 398.6354166666667 87.38363636363647C 408.6013020833334 87.38363636363647 417.14348958333335 87.38363636363647 427.10937500000006 87.38363636363647C 437.0752604166667 87.38363636363647 445.6174479166667 53.77454545454566 455.58333333333337 53.77454545454566C 465.54921875 53.77454545454566 474.09140625000003 53.77454545454566 484.0572916666667 53.77454545454566C 494.02317708333334 53.77454545454566 502.56536458333335 87.38363636363647 512.53125 87.38363636363647" pathFrom="M 0 2440.0200000000023 L 0 2440.0200000000023 L 28.473958333333336 2440.0200000000023 L 56.94791666666667 2440.0200000000023 L 85.42187500000001 2440.0200000000023 L 113.89583333333334 2440.0200000000023 L 142.36979166666669 2440.0200000000023 L 170.84375000000003 2440.0200000000023 L 199.31770833333334 2440.0200000000023 L 227.79166666666669 2440.0200000000023 L 256.265625 2440.0200000000023 L 284.73958333333337 2440.0200000000023 L 313.2135416666667 2440.0200000000023 L 341.68750000000006 2440.0200000000023 L 370.16145833333337 2440.0200000000023 L 398.6354166666667 2440.0200000000023 L 427.10937500000006 2440.0200000000023 L 455.58333333333337 2440.0200000000023 L 484.0572916666667 2440.0200000000023 L 512.53125 2440.0200000000023" fill-rule="evenodd"></path><g id="SvgjsG1131" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1241" r="0" cx="0" cy="0" class="apexcharts-marker wu7o4pgls no-pointer-events" stroke="#1b84ff" fill="#1b84ff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1132" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1153" x1="0" y1="0" x2="0" y2="221.82" stroke="#1b84ff" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="221.82" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1154" x1="0" y1="0" x2="512.53125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1155" x1="0" y1="0" x2="512.53125" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1156" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1157" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1159" font-family="inherit" x="0" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1160"></tspan><title></title></text><text id="SvgjsText1162" font-family="inherit" x="28.473958333333336" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1163"></tspan><title></title></text><text id="SvgjsText1165" font-family="inherit" x="56.947916666666664" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1166"></tspan><title></title></text><text id="SvgjsText1168" font-family="inherit" x="85.42187499999999" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 86.544921875 238.32000732421875)"><tspan id="SvgjsTspan1169">Apr 04</tspan><title>Apr 04</title></text><text id="SvgjsText1171" font-family="inherit" x="113.89583333333333" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1172"></tspan><title></title></text><text id="SvgjsText1174" font-family="inherit" x="142.36979166666669" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1175"></tspan><title></title></text><text id="SvgjsText1177" font-family="inherit" x="170.84375000000003" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 171.943359375 238.32000732421875)"><tspan id="SvgjsTspan1178">Apr 07</tspan><title>Apr 07</title></text><text id="SvgjsText1180" font-family="inherit" x="199.31770833333337" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1181"></tspan><title></title></text><text id="SvgjsText1183" font-family="inherit" x="227.7916666666667" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1184"></tspan><title></title></text><text id="SvgjsText1186" font-family="inherit" x="256.265625" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 257.4736328125 238.32000732421875)"><tspan id="SvgjsTspan1187">Apr 10</tspan><title>Apr 10</title></text><text id="SvgjsText1189" font-family="inherit" x="284.7395833333333" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1190"></tspan><title></title></text><text id="SvgjsText1192" font-family="inherit" x="313.21354166666663" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1193"></tspan><title></title></text><text id="SvgjsText1195" font-family="inherit" x="341.68749999999994" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 342.6875 238.32000732421875)"><tspan id="SvgjsTspan1196">Apr 13</tspan><title>Apr 13</title></text><text id="SvgjsText1198" font-family="inherit" x="370.16145833333326" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1199"></tspan><title></title></text><text id="SvgjsText1201" font-family="inherit" x="398.6354166666666" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1202"></tspan><title></title></text><text id="SvgjsText1204" font-family="inherit" x="427.1093749999999" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 428.109375 238.32000732421875)"><tspan id="SvgjsTspan1205">Apr 18</tspan><title>Apr 18</title></text><text id="SvgjsText1207" font-family="inherit" x="455.5833333333332" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1208"></tspan><title></title></text><text id="SvgjsText1210" font-family="inherit" x="484.0572916666665" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1211"></tspan><title></title></text><text id="SvgjsText1213" font-family="inherit" x="512.5312499999999" y="243.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1214"></tspan><title></title></text></g></g><g id="SvgjsG1238" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1239" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1240" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g><rect id="SvgjsRect1242" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1243" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 132, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::Engage widget 1-->
                    <div class="card h-md-100" dir="ltr">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-center">
                            <!--begin::Heading-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried
                                    <br>new
                                    <span class="fw-bolder">eCommerce App ?</span></h1>
                                <!--end::Title-->
                                <!--begin::Illustration-->
                                <div class="py-10 text-center">
                                    <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="">
                                    <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="">
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Links-->
                            <div class="text-center mb-1">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary me-2" href="apps/ecommerce/sales/listing.html">View App</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-light" href="apps/ecommerce/catalog/add-product.html">New Product</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Table Widget 4-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Product Orders</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Avg. 57 orders per day</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->
                            <div class="card-toolbar">
                                <!--begin::Filters-->
                                <div class="d-flex flex-stack flex-wrap gap-4">
                                    <!--begin::Destination-->
                                    <div class="d-flex align-items-center fw-bold">
                                        <!--begin::Label-->
                                        <div class="text-gray-500 fs-7 me-2">Cateogry</div>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-select2-id="select2-data-7-yqj3" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option></option>
                                            <option value="Show All" selected="selected" data-select2-id="select2-data-9-khv4">Show All</option>
                                            <option value="a">Category A</option>
                                            <option value="b">Category A</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-3r4q" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pkn0-container" aria-controls="select2-pkn0-container"><span class="select2-selection__rendered" id="select2-pkn0-container" role="textbox" aria-readonly="true" title="Show All">Show All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Destination-->
                                    <!--begin::Status-->
                                    <div class="d-flex align-items-center fw-bold">
                                        <!--begin::Label-->
                                        <div class="text-gray-500 fs-7 me-2">Status</div>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status" data-select2-id="select2-data-10-723t" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option></option>
                                            <option value="Show All" selected="selected" data-select2-id="select2-data-12-mnoe">Show All</option>
                                            <option value="Shipped">Shipped</option>
                                            <option value="Confirmed">Confirmed</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="Pending">Pending</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-zdku" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-724x-container" aria-controls="select2-724x-container"><span class="select2-selection__rendered" id="select2-724x-container" role="textbox" aria-readonly="true" title="Show All">Show All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Status-->
                                    <!--begin::Search-->
                                    <div class="position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search">
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Filters-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2">
                            <!--begin::Table-->
                            <div id="kt_table_widget_4_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer"><div id="" class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-3 dataTable" id="kt_table_widget_4_table" style="width: 768.656px;"><colgroup><col data-dt-column="0" style="width: 114.938px;"><col data-dt-column="1" style="width: 114.938px;"><col data-dt-column="2" style="width: 143.672px;"><col data-dt-column="3" style="width: 114.938px;"><col data-dt-column="4" style="width: 114.938px;"><col data-dt-column="5" style="width: 125.219px;"><col data-dt-column="6" style="width: 40.0156px;"></colgroup>
                                        <!--begin::Table head-->
                                        <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row"><th class="min-w-100px dt-orderable-none" data-dt-column="0" rowspan="1" colspan="1"><span class="dt-column-title">Order ID</span><span class="dt-column-order"></span></th><th class="text-end min-w-100px dt-orderable-none" data-dt-column="1" rowspan="1" colspan="1"><span class="dt-column-title">Created</span><span class="dt-column-order"></span></th><th class="text-end min-w-125px dt-orderable-none" data-dt-column="2" rowspan="1" colspan="1"><span class="dt-column-title">Customer</span><span class="dt-column-order"></span></th><th class="text-end min-w-100px dt-orderable-none dt-type-numeric" data-dt-column="3" rowspan="1" colspan="1"><span class="dt-column-title">Total</span><span class="dt-column-order"></span></th><th class="text-end min-w-100px dt-orderable-none dt-type-numeric" data-dt-column="4" rowspan="1" colspan="1"><span class="dt-column-title">Profit</span><span class="dt-column-order"></span></th><th class="text-end min-w-50px dt-orderable-none" data-dt-column="5" rowspan="1" colspan="1"><span class="dt-column-title">Status</span><span class="dt-column-order"></span></th><th class="text-end dt-orderable-none" data-dt-column="6" rowspan="1" colspan="1"><span class="dt-column-title"></span><span class="dt-column-order"></span></th></tr>
                                        <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600"><tr>
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGY-346</a>
                                            </td>
                                            <td class="text-end">7 min ago</td>
                                            <td class="text-end">
                                                <a href="#" class="text-gray-600 text-hover-primary">Albert Flores</a>
                                            </td>
                                            <td class="text-end dt-type-numeric">$630.00</td>
                                            <td class="text-end dt-type-numeric">
                                                <span class="text-gray-800 fw-bolder">$86.70</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                    <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                                    <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                                </button>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#YHD-047</a>
                                            </td>
                                            <td class="text-end">52 min ago</td>
                                            <td class="text-end">
                                                <a href="#" class="text-gray-600 text-hover-primary">Jenny Wilson</a>
                                            </td>
                                            <td class="text-end dt-type-numeric">$25.00</td>
                                            <td class="text-end dt-type-numeric">
                                                <span class="text-gray-800 fw-bolder">$4.20</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                    <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                                    <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                                </button>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SRR-678</a>
                                            </td>
                                            <td class="text-end">1 hour ago</td>
                                            <td class="text-end">
                                                <a href="#" class="text-gray-600 text-hover-primary">Robert Fox</a>
                                            </td>
                                            <td class="text-end dt-type-numeric">$1,630.00</td>
                                            <td class="text-end dt-type-numeric">
                                                <span class="text-gray-800 fw-bolder">$203.90</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                    <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                                    <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                                </button>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#PXF-534</a>
                                            </td>
                                            <td class="text-end">3 hour ago</td>
                                            <td class="text-end">
                                                <a href="#" class="text-gray-600 text-hover-primary">Cody Fisher</a>
                                            </td>
                                            <td class="text-end dt-type-numeric">$119.00</td>
                                            <td class="text-end dt-type-numeric">
                                                <span class="text-gray-800 fw-bolder">$12.00</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                    <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                                    <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                                </button>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGD-249</a>
                                            </td>
                                            <td class="text-end">2 day ago</td>
                                            <td class="text-end">
                                                <a href="#" class="text-gray-600 text-hover-primary">Arlene McCoy</a>
                                            </td>
                                            <td class="text-end dt-type-numeric">$660.00</td>
                                            <td class="text-end dt-type-numeric">
                                                <span class="text-gray-800 fw-bolder">$52.26</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                    <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                                    <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                                </button>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-035</a>
                                            </td>
                                            <td class="text-end">2 day ago</td>
                                            <td class="text-end">
                                                <a href="#" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
                                            </td>
                                            <td class="text-end dt-type-numeric">$290.00</td>
                                            <td class="text-end dt-type-numeric">
                                                <span class="text-gray-800 fw-bolder">$29.00</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                    <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                                    <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                                </button>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-567</a>
                                            </td>
                                            <td class="text-end">7 min ago</td>
                                            <td class="text-end">
                                                <a href="#" class="text-gray-600 text-hover-primary">Dan Wilson</a>
                                            </td>
                                            <td class="text-end dt-type-numeric">$590.00</td>
                                            <td class="text-end dt-type-numeric">
                                                <span class="text-gray-800 fw-bolder">$50.00</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                            </td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                    <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                                    <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                                </button>
                                            </td>
                                        </tr></tbody>
                                        <!--end::Table body-->
                                        <tfoot></tfoot></table></div><div id="" class="row"><div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar"></div><div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div></div></div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Table Widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Product Delivery</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">1M Products Shipped so far</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="apps/ecommerce/sales/details.html" class="btn btn-sm btn-light">Order Details</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Scroll-->
                            <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                                <!--begin::Item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/210.png" class="w-50px ms-n1 me-1" alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Jason Bourne</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success">Delivered</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/209.png" class="w-50px ms-n1 me-1" alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Marie Durant</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-primary">Shipping</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/214.png" class="w-50px ms-n1 me-1" alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Dan Wilson</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger">Confirmed</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/211.png" class="w-50px ms-n1 me-1" alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Lebron Wayde</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success">Delivered</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/215.png" class="w-50px ms-n1 me-1" alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Ana Simmons</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-primary">Shipping</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="border border-dashed border-gray-300 rounded px-7 py-3">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/192.png" class="w-50px ms-n1 me-1" alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-500 fw-bold">To:
																<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Kevin Leonard</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger">Confirmed</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Table Widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Stock Report</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 2,356 Items in the Stock</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->
                            <div class="card-toolbar">
                                <!--begin::Filters-->
                                <div class="d-flex flex-stack flex-wrap gap-4">
                                    <!--begin::Destination-->
                                    <div class="d-flex align-items-center fw-bold">
                                        <!--begin::Label-->
                                        <div class="text-muted fs-7 me-2">Cateogry</div>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-select2-id="select2-data-13-yxmn" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option></option>
                                            <option value="Show All" selected="selected" data-select2-id="select2-data-15-bxvl">Show All</option>
                                            <option value="a">Category A</option>
                                            <option value="b">Category B</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-oz11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ao8p-container" aria-controls="select2-ao8p-container"><span class="select2-selection__rendered" id="select2-ao8p-container" role="textbox" aria-readonly="true" title="Show All">Show All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Destination-->
                                    <!--begin::Status-->
                                    <div class="d-flex align-items-center fw-bold">
                                        <!--begin::Label-->
                                        <div class="text-muted fs-7 me-2">Status</div>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status" data-select2-id="select2-data-16-20bf" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option></option>
                                            <option value="Show All" selected="selected" data-select2-id="select2-data-18-me18">Show All</option>
                                            <option value="In Stock">In Stock</option>
                                            <option value="Out of Stock">Out of Stock</option>
                                            <option value="Low Stock">Low Stock</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-17-5dku" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-47n9-container" aria-controls="select2-47n9-container"><span class="select2-selection__rendered" id="select2-47n9-container" role="textbox" aria-readonly="true" title="Show All">Show All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Status-->
                                    <!--begin::Search-->
                                    <a href="apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View Stock</a>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Filters-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Table-->
                            <div id="kt_table_widget_5_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer"><div id="" class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-3 dataTable" id="kt_table_widget_5_table" style="width: 768.656px;"><colgroup><col data-dt-column="0" style="width: 166.016px;"><col data-dt-column="1" style="width: 110.672px;"><col data-dt-column="2" style="width: 166.016px;"><col data-dt-column="3" style="width: 110.672px;"><col data-dt-column="4" style="width: 132.234px;"><col data-dt-column="5" style="width: 83.0469px;"></colgroup>
                                        <!--begin::Table head-->
                                        <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row"><th class="min-w-150px dt-orderable-asc dt-orderable-desc" data-dt-column="0" rowspan="1" colspan="1" aria-label="Item: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Item</span><span class="dt-column-order"></span></th><th class="text-end pe-3 min-w-100px dt-orderable-none" data-dt-column="1" rowspan="1" colspan="1" aria-label="Product ID"><span class="dt-column-title">Product ID</span><span class="dt-column-order"></span></th><th class="text-end pe-3 min-w-150px dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Date Added: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Date Added</span><span class="dt-column-order"></span></th><th class="text-end pe-3 min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Price: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Price</span><span class="dt-column-order"></span></th><th class="text-end pe-3 min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Status: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Status</span><span class="dt-column-order"></span></th><th class="text-end pe-0 min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="5" rowspan="1" colspan="1" aria-label="Qty: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Qty</span><span class="dt-column-order"></span></th></tr>
                                        <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600"><tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Macbook Air M1</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#XGY-356</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2024-04-20T00:00:00+07:00">02 Apr, 2024</td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end dt-type-numeric">$1,230</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end dt-type-numeric" data-order="58">
                                                <span class="text-gray-900 fw-bold">58 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr><tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Surface Laptop 4</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#YHD-047</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2024-04-20T00:00:00+07:00">01 Apr, 2024</td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end dt-type-numeric">$1,060</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end dt-type-numeric" data-order="0">
                                                <span class="text-gray-900 fw-bold">0 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr><tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Logitech MX 250</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#SRR-678</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2024-03-20T00:00:00+07:00">24 Mar, 2024</td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end dt-type-numeric">$64</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end dt-type-numeric" data-order="290">
                                                <span class="text-gray-900 fw-bold">290 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr><tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">AudioEngine HD3</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#PXF-578</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2024-03-20T00:00:00+07:00">24 Mar, 2024</td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end dt-type-numeric">$1,060</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end dt-type-numeric" data-order="46">
                                                <span class="text-gray-900 fw-bold">46 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr><tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">HP Hyper LTR</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#PXF-778</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2024-01-20T00:00:00+07:00">16 Jan, 2024</td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end dt-type-numeric">$4500</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end dt-type-numeric" data-order="78">
                                                <span class="text-gray-900 fw-bold">78 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr><tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Dell 32 UltraSharp</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#XGY-356</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2024-12-20T00:00:00+07:00">22 Dec, 2024</td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end dt-type-numeric">$1,060</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end dt-type-numeric" data-order="8">
                                                <span class="text-gray-900 fw-bold">8 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr><tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Google Pixel 6 Pro</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#XVR-425</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2024-12-20T00:00:00+07:00">27 Dec, 2024</td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end dt-type-numeric">$1,060</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end dt-type-numeric" data-order="124">
                                                <span class="text-gray-900 fw-bold">124 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr></tbody>
                                        <!--end::Table body-->
                                        <tfoot></tfoot></table></div><div id="" class="row"><div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar"></div><div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div></div></div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Table Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
@endsection
@push('style')
    <link rel="stylesheet" href="https://unpkg.com/intro.js/introjs.css">
    <style>

    </style>
@endpush
@push('script')

@endpush