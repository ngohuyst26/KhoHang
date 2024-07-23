@extends('layouts.master')
@section('content')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Multipurpose</h1>
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
                <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 20-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center flex-column mt-3 w-100">
                                <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                    <span>43 Pending</span>
                                    <span>72%</span>
                                </div>
                                <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                    <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">357</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Professionals</span>
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
                                    <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
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
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 17-->
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
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                            <!--begin::Chart-->
                            <div class="d-flex flex-center me-5 pt-2">
                                <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11">
                                    <span></span>
                                    <canvas height="70" width="70"></canvas>
                                </div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Labels-->
                            <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center my-3">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
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
                    <!--end::Card widget 17-->
                    <!--begin::List widget 26-->
                    <div class="card card-flush h-lg-50">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title text-gray-800 fw-bold">External Links</h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
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
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client Rating</a>
                                <!--end::Section-->
                                <!--begin::Action-->
                                <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                    <i class="ki-duotone ki-exit-right-corner fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram Followers</a>
                                <!--end::Section-->
                                <!--begin::Action-->
                                <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                    <i class="ki-duotone ki-exit-right-corner fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads CPC</a>
                                <!--end::Section-->
                                <!--begin::Action-->
                                <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                    <i class="ki-duotone ki-exit-right-corner fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::LIst widget 26-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xxl-6">
                    <!--begin::Engage widget 10-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('assets/media/stock/900x600/42.png')">
                            <!--begin::Wrapper-->
                            <div class="mb-10">
                                <!--begin::Title-->
                                <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
														<span class="me-2">Try our all new Enviroment with
															<br>
															<span class="position-relative d-inline-block text-danger">
																<a href="pages/user-profile/overview.html" class="text-danger opacity-75-hover">Pro Plan</a>
                                                                <!--begin::Separator-->
																<span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                                <!--end::Separator-->
															</span></span>for Free
                                </div>
                                <!--end::Title-->
                                <!--begin::Action-->
                                <div class="text-center">
                                    <a href="#" class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
                                </div>
                                <!--begin::Action-->
                            </div>
                            <!--begin::Wrapper-->
                            <!--begin::Illustration-->
                            <img class="mx-auto h-150px h-lg-200px theme-light-show" src="assets/media/illustrations/misc/upgrade.svg" alt="">
                            <img class="mx-auto h-150px h-lg-200px theme-dark-show" src="assets/media/illustrations/misc/upgrade-dark.svg" alt="">
                            <!--end::Illustration-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 10-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gx-5 gx-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-6 mb-5 mb-xl-10">
                    <!--begin::Chart widget 8-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Performance Overview</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Users from all channels</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <ul class="nav" id="kt_chart_widget_8_tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle" href="#kt_chart_widget_8_week_tab" aria-selected="false" tabindex="-1" role="tab">Month</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle" href="#kt_chart_widget_8_month_tab" aria-selected="true" role="tab">Week</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-6">
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel" aria-labelledby="kt_chart_widget_8_week_toggle">
                                    <!--begin::Statistics-->
                                    <div class="mb-5">
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-1 fw-semibold text-gray-500 me-1 mt-n1">$</span>
                                            <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
                                            <span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>4,8%</span>
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-500">Avarage cost per interaction</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Chart-->
                                    <div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
                                    <!--end::Chart-->
                                    <!--begin::Items-->
                                    <div class="d-flex flex-wrap pt-5">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-<gray-600 fs-6">Google Ads</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                        </div>
                                        <!--ed::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                        </div>
                                        <!--ed::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-column pt-sm-3 pt-6">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                        </div>
                                        <!--ed::Item-->
                                    </div>
                                    <!--ed::Items-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel" aria-labelledby="kt_chart_widget_8_month_toggle">
                                    <!--begin::Statistics-->
                                    <div class="mb-5">
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-1 fw-semibold text-gray-500 me-1 mt-n1">$</span>
                                            <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                                            <span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>2.2%</span>
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-500">Avarage cost per interaction</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Chart-->
                                    <div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto" style="height: 275px; min-height: 290px;">
                                        <div id="apexcharts2vafhpa8" class="apexcharts-canvas apexcharts2vafhpa8 apexcharts-theme-light" style="width: 537px; height: 275px;">
                                            <svg id="SvgjsSvg2799" width="537" height="275" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <foreignObject x="0" y="0" width="537" height="275">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 137.5px;"></div>
                                                </foreignObject>
                                                <g id="SvgjsG2979" class="apexcharts-yaxis" rel="0" transform="translate(20.475000381469727, 0)">
                                                    <g id="SvgjsG2980" class="apexcharts-yaxis-texts-g">
                                                        <text id="SvgjsText2982" font-family="inherit" x="20" y="34.333333333333336" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan2983">700</tspan>
                                                            <title>700</title></text>
                                                        <text id="SvgjsText2985" font-family="inherit" x="20" y="64.44761904761906" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan2986">600</tspan>
                                                            <title>600</title></text>
                                                        <text id="SvgjsText2988" font-family="inherit" x="20" y="94.56190476190477" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan2989">500</tspan>
                                                            <title>500</title></text>
                                                        <text id="SvgjsText2991" font-family="inherit" x="20" y="124.67619047619048" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan2992">400</tspan>
                                                            <title>400</title></text>
                                                        <text id="SvgjsText2994" font-family="inherit" x="20" y="154.7904761904762" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan2995">300</tspan>
                                                            <title>300</title></text>
                                                        <text id="SvgjsText2997" font-family="inherit" x="20" y="184.90476190476193" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan2998">200</tspan>
                                                            <title>200</title></text>
                                                        <text id="SvgjsText3000" font-family="inherit" x="20" y="215.01904761904765" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan3001">100</tspan>
                                                            <title>100</title></text>
                                                        <text id="SvgjsText3003" font-family="inherit" x="20" y="245.13333333333338" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan3004">0</tspan>
                                                            <title>0</title></text>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2801" class="apexcharts-inner apexcharts-graphical" transform="translate(50.47500038146973, 30)">
                                                    <defs id="SvgjsDefs2800">
                                                        <clipPath id="gridRectMask2vafhpa8">
                                                            <rect id="SvgjsRect2806" width="470.5249996185303" height="214.8" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask2vafhpa8"></clipPath>
                                                        <clipPath id="nonForecastMask2vafhpa8"></clipPath>
                                                        <clipPath id="gridRectMarkerMask2vafhpa8">
                                                            <rect id="SvgjsRect2807" width="470.5249996185303" height="214.8" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect id="SvgjsRect2805" width="0" height="210.8" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="1" stroke="#b6b6b6" stroke-dasharray="3" fill="#b1b9c4" class="apexcharts-xcrosshairs" y2="210.8" filter="none" fill-opacity="0.9"></rect>
                                                    <line id="SvgjsLine2933" x1="0" y1="210.8" x2="0" y2="210.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine2934" x1="66.6464285169329" y1="210.8" x2="66.6464285169329" y2="210.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine2935" x1="133.2928570338658" y1="210.8" x2="133.2928570338658" y2="210.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine2936" x1="199.9392855507987" y1="210.8" x2="199.9392855507987" y2="210.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine2937" x1="266.5857140677316" y1="210.8" x2="266.5857140677316" y2="210.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine2938" x1="333.23214258466453" y1="210.8" x2="333.23214258466453" y2="210.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine2939" x1="399.87857110159746" y1="210.8" x2="399.87857110159746" y2="210.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine2940" x1="466.5249996185304" y1="210.8" x2="466.5249996185304" y2="210.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <g id="SvgjsG2929" class="apexcharts-grid">
                                                        <g id="SvgjsG2930" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine2942" x1="0" y1="30.114285714285717" x2="466.5249996185303" y2="30.114285714285717" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2943" x1="0" y1="60.228571428571435" x2="466.5249996185303" y2="60.228571428571435" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2944" x1="0" y1="90.34285714285716" x2="466.5249996185303" y2="90.34285714285716" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2945" x1="0" y1="120.45714285714287" x2="466.5249996185303" y2="120.45714285714287" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2946" x1="0" y1="150.57142857142858" x2="466.5249996185303" y2="150.57142857142858" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2947" x1="0" y1="180.6857142857143" x2="466.5249996185303" y2="180.6857142857143" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2948" x1="0" y1="210.80000000000004" x2="466.5249996185303" y2="210.80000000000004" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG2931" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine2950" x1="0" y1="210.8" x2="466.5249996185303" y2="210.8" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine2949" x1="0" y1="1" x2="0" y2="210.8" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG2932" class="apexcharts-grid-borders">
                                                        <line id="SvgjsLine2941" x1="0" y1="0" x2="466.5249996185303" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2808" class="apexcharts-bubble-series apexcharts-plot-series">
                                                        <g id="SvgjsG2809" class="apexcharts-series" zIndex="0" seriesName="SocialxCampaigns" data:longestSeries="false" rel="1" data:realIndex="0">
                                                            <g id="SvgjsG2810" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                <g id="SvgjsG2812" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2813" r="0" cx="83.30803564616612" cy="120.45714285714286" class="apexcharts-marker wu7s1cbyj" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="0"></circle>
                                                                    <circle id="SvgjsCircle2814" r="0" cx="83.30803564616612" cy="0" class="apexcharts-nullpoint" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2815" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2816" r="35.13333333333333" cx="83.30803564616612" cy="120.45714285714286" x="79.30803564616612" y="116.45714285714286" fill="rgba(27,132,255,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="35.13333333333333" class="apexcharts-marker"></circle>
                                                                </g>
                                                                <g id="SvgjsG2817" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2818" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2819" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2820" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2821" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2822" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2823" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2824" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2825" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2826" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2827" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2828" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle3008" r="0" cx="0" cy="0" class="apexcharts-marker woeca1b2z" fill="#1b84ff" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2829" class="apexcharts-series" zIndex="1" seriesName="EmailxNewsletter" data:longestSeries="false" rel="2" data:realIndex="1">
                                                            <g id="SvgjsG2830" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                                                <g id="SvgjsG2832" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2833" r="0" cx="166.61607129233224" cy="105.4" class="apexcharts-marker wdxbp763f" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="0"></circle>
                                                                    <circle id="SvgjsCircle2834" r="0" cx="83.30803564616612" cy="0" class="apexcharts-nullpoint" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2835" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2836" r="30.74166666666667" cx="166.61607129233224" cy="105.4" x="162.61607129233224" y="101.4" fill="rgba(23,198,83,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="30.74166666666667" class="apexcharts-marker"></circle>
                                                                </g>
                                                                <g id="SvgjsG2837" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2838" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2839" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2840" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2841" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2842" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2843" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2844" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2845" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2846" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2847" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2848" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle3009" r="0" cx="0" cy="0" class="apexcharts-marker wg3hqq5nol" fill="#17c653" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2849" class="apexcharts-series" zIndex="2" seriesName="TVxCampaign" data:longestSeries="false" rel="3" data:realIndex="2">
                                                            <g id="SvgjsG2850" class="apexcharts-series-markers-wrap" data:realIndex="2">
                                                                <g id="SvgjsG2852" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2853" r="0" cx="233.2624998092651" cy="75.28571428571428" class="apexcharts-marker w7cza8878" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="0"></circle>
                                                                    <circle id="SvgjsCircle2854" r="0" cx="83.30803564616612" cy="0" class="apexcharts-nullpoint" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="2" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2855" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2856" r="26.35" cx="233.2624998092651" cy="75.28571428571428" x="229.2624998092651" y="71.28571428571428" fill="rgba(246,192,0,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="26.35" class="apexcharts-marker"></circle>
                                                                </g>
                                                                <g id="SvgjsG2857" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2858" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="2" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2859" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2860" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2861" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="2" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2862" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2863" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2864" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="2" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2865" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2866" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2867" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="2" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2868" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle3010" r="0" cx="0" cy="0" class="apexcharts-marker wzzegvo9e" fill="#f6c000" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2869" class="apexcharts-series" zIndex="3" seriesName="GooglexAds" data:longestSeries="false" rel="4" data:realIndex="3">
                                                            <g id="SvgjsG2870" class="apexcharts-series-markers-wrap" data:realIndex="3">
                                                                <g id="SvgjsG2872" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2873" r="0" cx="299.908928326198" cy="135.51428571428573" class="apexcharts-marker wnnc8jgse" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="3" default-marker-size="0"></circle>
                                                                    <circle id="SvgjsCircle2874" r="0" cx="83.30803564616612" cy="0" class="apexcharts-nullpoint" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="3" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2875" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2876" r="21.958333333333336" cx="299.908928326198" cy="135.51428571428573" x="295.908928326198" y="131.51428571428573" fill="rgba(248,40,90,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="3" default-marker-size="21.958333333333336" class="apexcharts-marker"></circle>
                                                                </g>
                                                                <g id="SvgjsG2877" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2878" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="3" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2879" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2880" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2881" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="3" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2882" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2883" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2884" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="3" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2885" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2886" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2887" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="3" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2888" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle3011" r="0" cx="0" cy="0" class="apexcharts-marker w5e6jzy16" fill="#f8285a" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2889" class="apexcharts-series" zIndex="4" seriesName="Courses" data:longestSeries="false" rel="5" data:realIndex="4">
                                                            <g id="SvgjsG2890" class="apexcharts-series-markers-wrap" data:realIndex="4">
                                                                <g id="SvgjsG2892" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2893" r="0" cx="333.2321425846645" cy="60.22857142857143" class="apexcharts-marker wjsbdm2bc" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="4" default-marker-size="0"></circle>
                                                                    <circle id="SvgjsCircle2894" r="0" cx="83.30803564616612" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="4" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2895" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2896" r="26.35" cx="333.2321425846645" cy="60.22857142857143" x="329.2321425846645" y="56.22857142857143" fill="rgba(114,57,234,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="4" default-marker-size="26.35" class="apexcharts-marker"></circle>
                                                                </g>
                                                                <g id="SvgjsG2897" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2898" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="4" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2899" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2900" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2901" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="4" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2902" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2903" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2904" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="4" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2905" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2906" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2907" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="4" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2908" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle3012" r="0" cx="0" cy="0" class="apexcharts-marker wz29kxxl8" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2909" class="apexcharts-series" zIndex="5" seriesName="Radio" data:longestSeries="false" rel="6" data:realIndex="5">
                                                            <g id="SvgjsG2910" class="apexcharts-series-markers-wrap" data:realIndex="5">
                                                                <g id="SvgjsG2912" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2913" r="0" cx="399.87857110159734" cy="135.51428571428573" class="apexcharts-marker wlrytw44b" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="5" default-marker-size="0"></circle>
                                                                    <circle id="SvgjsCircle2914" r="0" cx="83.30803564616612" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="5" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2915" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2916" r="24.593333333333334" cx="399.87857110159734" cy="135.51428571428573" x="395.87857110159734" y="131.51428571428573" fill="rgba(67,206,215,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="5" default-marker-size="24.593333333333334" class="apexcharts-marker"></circle>
                                                                </g>
                                                                <g id="SvgjsG2917" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2918" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="2" j="2" index="5" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2919" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2920" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2921" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="3" j="3" index="5" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2922" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2923" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2924" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="4" j="4" index="5" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2925" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g id="SvgjsG2926" class="" clip-path="url(#gridRectMarkerMask2vafhpa8)">
                                                                    <circle id="SvgjsCircle2927" r="0" cx="0" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="5" j="5" index="5" default-marker-size="0"></circle>
                                                                </g>
                                                                <g id="SvgjsG2928" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMask2vafhpa8)"></g>
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle3013" r="0" cx="0" cy="0" class="apexcharts-marker w3faw876t" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2811" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        <g id="SvgjsG2831" class="apexcharts-datalabels" data:realIndex="1"></g>
                                                        <g id="SvgjsG2851" class="apexcharts-datalabels" data:realIndex="2"></g>
                                                        <g id="SvgjsG2871" class="apexcharts-datalabels" data:realIndex="3"></g>
                                                        <g id="SvgjsG2891" class="apexcharts-datalabels" data:realIndex="4"></g>
                                                        <g id="SvgjsG2911" class="apexcharts-datalabels" data:realIndex="5"></g>
                                                    </g>
                                                    <line id="SvgjsLine2951" x1="0" y1="0" x2="466.5249996185303" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2952" x1="0" y1="0" x2="466.5249996185303" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2953" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g id="SvgjsG2954" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                                            <text id="SvgjsText2956" font-family="inherit" x="0" y="238.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan2957">0</tspan>
                                                                <title>0</title></text>
                                                            <text id="SvgjsText2959" font-family="inherit" x="66.6464285169329" y="238.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan2960">100</tspan>
                                                                <title>100</title></text>
                                                            <text id="SvgjsText2962" font-family="inherit" x="133.2928570338658" y="238.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan2963">200</tspan>
                                                                <title>200</title></text>
                                                            <text id="SvgjsText2965" font-family="inherit" x="199.93928555079873" y="238.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan2966">300</tspan>
                                                                <title>300</title></text>
                                                            <text id="SvgjsText2968" font-family="inherit" x="266.5857140677316" y="238.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan2969">400</tspan>
                                                                <title>400</title></text>
                                                            <text id="SvgjsText2971" font-family="inherit" x="333.23214258466453" y="238.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan2972">500</tspan>
                                                                <title>500</title></text>
                                                            <text id="SvgjsText2974" font-family="inherit" x="399.87857110159746" y="238.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan2975">600</tspan>
                                                                <title>600</title></text>
                                                            <text id="SvgjsText2977" font-family="inherit" x="466.5249996185304" y="238.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan2978">700</tspan>
                                                                <title>700</title></text>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3005" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG3006" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG3007" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect3014" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect3015" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 132, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-goals-group">
                                                            <span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(23, 198, 83);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-goals-group">
                                                            <span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(246, 192, 0);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-goals-group">
                                                            <span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 4;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(248, 40, 90);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-goals-group">
                                                            <span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 5;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-goals-group">
                                                            <span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 6;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(67, 206, 215);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-goals-group">
                                                            <span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div>
                                            </div>
                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->
                                    <!--begin::Items-->
                                    <div class="d-flex flex-wrap pt-5">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-600 fs-6">Google Ads</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                        </div>
                                        <!--ed::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                        </div>
                                        <!--ed::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-column pt-sm-3 pt-6">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--ed::Item-->
                                        </div>
                                        <!--ed::Item-->
                                    </div>
                                    <!--ed::Items-->
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 8-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6 mb-5 mb-xl-10">
                    <!--begin::Tables widget 16-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Authors Achievements</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Avg. 69.34% Conv. Rate</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
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
                        <!--begin::Body-->
                        <div class="card-body pt-6">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-car fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">SaaS</span>
                                        <!--end::Title-->
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
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2" aria-selected="false" tabindex="-1" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-bitcoin fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Crypto</span>
                                        <!--end::Title-->
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
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3" aria-selected="false" tabindex="-1" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-like fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Social</span>
                                        <!--end::Title-->
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
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4" aria-selected="false" tabindex="-1" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-tablet fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Mobile</span>
                                        <!--end::Title-->
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
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5" aria-selected="false" tabindex="-1" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-send fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Others</span>
                                        <!--end::Title-->
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
                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-3.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Haiti</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">78.34%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_1_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;">
                                                        <div id="apexchartsh8w45mpm" class="apexcharts-canvas apexchartsh8w45mpm apexcharts-theme-light" style="width: 92.25px; height: 50px;">
                                                            <svg id="SvgjsSvg3231" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                                <foreignObject x="0" y="0" width="92.25" height="50">
                                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div>
                                                                </foreignObject>
                                                                <g id="SvgjsG3270" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                                <g id="SvgjsG3233" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                                                    <defs id="SvgjsDefs3232">
                                                                        <clipPath id="gridRectMaskh8w45mpm">
                                                                            <rect id="SvgjsRect3236" width="98.25" height="54" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                        </clipPath>
                                                                        <clipPath id="forecastMaskh8w45mpm"></clipPath>
                                                                        <clipPath id="nonForecastMaskh8w45mpm"></clipPath>
                                                                        <clipPath id="gridRectMarkerMaskh8w45mpm">
                                                                            <rect id="SvgjsRect3237" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                        </clipPath>
                                                                    </defs>
                                                                    <g id="SvgjsG3244" class="apexcharts-grid">
                                                                        <g id="SvgjsG3245" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                            <line id="SvgjsLine3248" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine3249" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                        </g>
                                                                        <g id="SvgjsG3246" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                                        <line id="SvgjsLine3251" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                        <line id="SvgjsLine3250" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                    </g>
                                                                    <g id="SvgjsG3247" class="apexcharts-grid-borders" style="display: none;"></g>
                                                                    <g id="SvgjsG3238" class="apexcharts-area-series apexcharts-plot-series">
                                                                        <g id="SvgjsG3239" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                            <path id="SvgjsPath3242" d="M 0 35.2C 2.483653846153846 35.2 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 36 14.192307692307693 36C 16.67596153846154 36 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6C 92.25 37.6 92.25 37.6 92.25 48 L 0 48z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskh8w45mpm)" pathTo="M 0 35.2C 2.483653846153846 35.2 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 36 14.192307692307693 36C 16.67596153846154 36 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6C 92.25 37.6 92.25 37.6 92.25 48 L 0 48z" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48 L 0 48"></path>
                                                                            <path id="SvgjsPath3243" d="M 0 35.2C 2.483653846153846 35.2 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 36 14.192307692307693 36C 16.67596153846154 36 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskh8w45mpm)" pathTo="M 0 35.2C 2.483653846153846 35.2 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 36 14.192307692307693 36C 16.67596153846154 36 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path>
                                                                            <g id="SvgjsG3240" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                                        </g>
                                                                        <g id="SvgjsG3241" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                                    </g>
                                                                    <line id="SvgjsLine3252" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                                    <line id="SvgjsLine3253" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                                    <g id="SvgjsG3254" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                        <g id="SvgjsG3255" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                                    </g>
                                                                    <g id="SvgjsG3271" class="apexcharts-yaxis-annotations"></g>
                                                                    <g id="SvgjsG3272" class="apexcharts-xaxis-annotations"></g>
                                                                    <g id="SvgjsG3273" class="apexcharts-point-annotations"></g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-2.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Monaco</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">63.83%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_1_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;">
                                                        <div id="apexchartspklsl9lo" class="apexcharts-canvas apexchartspklsl9lo apexcharts-theme-light" style="width: 92.25px; height: 50px;">
                                                            <svg id="SvgjsSvg3274" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                                <foreignObject x="0" y="0" width="92.25" height="50">
                                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div>
                                                                </foreignObject>
                                                                <g id="SvgjsG3313" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                                <g id="SvgjsG3276" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                                                    <defs id="SvgjsDefs3275">
                                                                        <clipPath id="gridRectMaskpklsl9lo">
                                                                            <rect id="SvgjsRect3279" width="98.25" height="54" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                        </clipPath>
                                                                        <clipPath id="forecastMaskpklsl9lo"></clipPath>
                                                                        <clipPath id="nonForecastMaskpklsl9lo"></clipPath>
                                                                        <clipPath id="gridRectMarkerMaskpklsl9lo">
                                                                            <rect id="SvgjsRect3280" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                        </clipPath>
                                                                    </defs>
                                                                    <g id="SvgjsG3287" class="apexcharts-grid">
                                                                        <g id="SvgjsG3288" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                            <line id="SvgjsLine3291" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine3292" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                        </g>
                                                                        <g id="SvgjsG3289" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                                        <line id="SvgjsLine3294" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                        <line id="SvgjsLine3293" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                    </g>
                                                                    <g id="SvgjsG3290" class="apexcharts-grid-borders" style="display: none;"></g>
                                                                    <g id="SvgjsG3281" class="apexcharts-area-series apexcharts-plot-series">
                                                                        <g id="SvgjsG3282" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                            <path id="SvgjsPath3285" d="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36 49.67307692307693 36C 52.156730769230776 36 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8C 92.25 40.8 92.25 40.8 92.25 48 L 0 48z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpklsl9lo)" pathTo="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36 49.67307692307693 36C 52.156730769230776 36 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8C 92.25 40.8 92.25 40.8 92.25 48 L 0 48z" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48 L 0 48"></path>
                                                                            <path id="SvgjsPath3286" d="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36 49.67307692307693 36C 52.156730769230776 36 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8" fill="none" fill-opacity="1" stroke="#f8285a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpklsl9lo)" pathTo="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36 49.67307692307693 36C 52.156730769230776 36 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path>
                                                                            <g id="SvgjsG3283" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                                        </g>
                                                                        <g id="SvgjsG3284" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                                    </g>
                                                                    <line id="SvgjsLine3295" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                                    <line id="SvgjsLine3296" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                                    <g id="SvgjsG3297" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                        <g id="SvgjsG3298" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                                    </g>
                                                                    <g id="SvgjsG3314" class="apexcharts-yaxis-annotations"></g>
                                                                    <g id="SvgjsG3315" class="apexcharts-xaxis-annotations"></g>
                                                                    <g id="SvgjsG3316" class="apexcharts-point-annotations"></g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-9.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Poland</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">92.56%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_1_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;">
                                                        <div id="apexchartsfdjfhdhh" class="apexcharts-canvas apexchartsfdjfhdhh apexcharts-theme-light" style="width: 92.25px; height: 50px;">
                                                            <svg id="SvgjsSvg3317" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                                <foreignObject x="0" y="0" width="92.25" height="50">
                                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div>
                                                                </foreignObject>
                                                                <g id="SvgjsG3356" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                                <g id="SvgjsG3319" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                                                    <defs id="SvgjsDefs3318">
                                                                        <clipPath id="gridRectMaskfdjfhdhh">
                                                                            <rect id="SvgjsRect3322" width="98.25" height="54" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                        </clipPath>
                                                                        <clipPath id="forecastMaskfdjfhdhh"></clipPath>
                                                                        <clipPath id="nonForecastMaskfdjfhdhh"></clipPath>
                                                                        <clipPath id="gridRectMarkerMaskfdjfhdhh">
                                                                            <rect id="SvgjsRect3323" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                        </clipPath>
                                                                    </defs>
                                                                    <g id="SvgjsG3330" class="apexcharts-grid">
                                                                        <g id="SvgjsG3331" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                            <line id="SvgjsLine3334" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine3335" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                        </g>
                                                                        <g id="SvgjsG3332" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                                        <line id="SvgjsLine3337" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                        <line id="SvgjsLine3336" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                    </g>
                                                                    <g id="SvgjsG3333" class="apexcharts-grid-borders" style="display: none;"></g>
                                                                    <g id="SvgjsG3324" class="apexcharts-area-series apexcharts-plot-series">
                                                                        <g id="SvgjsG3325" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                            <path id="SvgjsPath3328" d="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 43.2 7.096153846153847 43.2C 9.579807692307693 43.2 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36.8 49.67307692307693 36.8C 52.156730769230776 36.8 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8C 92.25 40.8 92.25 40.8 92.25 48 L 0 48z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskfdjfhdhh)" pathTo="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 43.2 7.096153846153847 43.2C 9.579807692307693 43.2 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36.8 49.67307692307693 36.8C 52.156730769230776 36.8 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8C 92.25 40.8 92.25 40.8 92.25 48 L 0 48z" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48 L 0 48"></path>
                                                                            <path id="SvgjsPath3329" d="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 43.2 7.096153846153847 43.2C 9.579807692307693 43.2 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36.8 49.67307692307693 36.8C 52.156730769230776 36.8 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskfdjfhdhh)" pathTo="M 0 41.6C 2.483653846153846 41.6 4.612500000000001 43.2 7.096153846153847 43.2C 9.579807692307693 43.2 11.708653846153847 35.2 14.192307692307693 35.2C 16.67596153846154 35.2 18.804807692307694 45.6 21.28846153846154 45.6C 23.772115384615386 45.6 25.90096153846154 29.6 28.384615384615387 29.6C 30.868269230769233 29.6 32.997115384615384 35.2 35.48076923076923 35.2C 37.96442307692308 35.2 40.09326923076924 39.2 42.57692307692308 39.2C 45.06057692307692 39.2 47.18942307692308 36.8 49.67307692307693 36.8C 52.156730769230776 36.8 54.28557692307693 45.6 56.769230769230774 45.6C 59.252884615384616 45.6 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 36 70.96153846153847 36C 73.44519230769231 36 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 34.4 85.15384615384616 34.4C 87.6375 34.4 89.76634615384616 40.8 92.25 40.8" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path>
                                                                            <g id="SvgjsG3326" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                                        </g>
                                                                        <g id="SvgjsG3327" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                                    </g>
                                                                    <line id="SvgjsLine3338" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                                    <line id="SvgjsLine3339" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                                    <g id="SvgjsG3340" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                        <g id="SvgjsG3341" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                                    </g>
                                                                    <g id="SvgjsG3357" class="apexcharts-yaxis-annotations"></g>
                                                                    <g id="SvgjsG3358" class="apexcharts-xaxis-annotations"></g>
                                                                    <g id="SvgjsG3359" class="apexcharts-point-annotations"></g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-7.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Cody Fishers</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Mexico</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">63.08%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_1_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;">
                                                        <div id="apexcharts710xae5v" class="apexcharts-canvas apexcharts710xae5v apexcharts-theme-light" style="width: 92.25px; height: 50px;">
                                                            <svg id="SvgjsSvg3360" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                                <foreignObject x="0" y="0" width="92.25" height="50">
                                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div>
                                                                </foreignObject>
                                                                <g id="SvgjsG3399" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                                <g id="SvgjsG3362" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                                                    <defs id="SvgjsDefs3361">
                                                                        <clipPath id="gridRectMask710xae5v">
                                                                            <rect id="SvgjsRect3365" width="98.25" height="54" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                        </clipPath>
                                                                        <clipPath id="forecastMask710xae5v"></clipPath>
                                                                        <clipPath id="nonForecastMask710xae5v"></clipPath>
                                                                        <clipPath id="gridRectMarkerMask710xae5v">
                                                                            <rect id="SvgjsRect3366" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                        </clipPath>
                                                                    </defs>
                                                                    <g id="SvgjsG3373" class="apexcharts-grid">
                                                                        <g id="SvgjsG3374" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                            <line id="SvgjsLine3377" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine3378" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                        </g>
                                                                        <g id="SvgjsG3375" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                                        <line id="SvgjsLine3380" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                        <line id="SvgjsLine3379" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                    </g>
                                                                    <g id="SvgjsG3376" class="apexcharts-grid-borders" style="display: none;"></g>
                                                                    <g id="SvgjsG3367" class="apexcharts-area-series apexcharts-plot-series">
                                                                        <g id="SvgjsG3368" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                            <path id="SvgjsPath3371" d="M 0 38.4C 2.483653846153846 38.4 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 29.6 14.192307692307693 29.6C 16.67596153846154 29.6 18.804807692307694 38.4 21.28846153846154 38.4C 23.772115384615386 38.4 25.90096153846154 31.2 28.384615384615387 31.2C 30.868269230769233 31.2 32.997115384615384 40.8 35.48076923076923 40.8C 37.96442307692308 40.8 40.09326923076924 34.4 42.57692307692308 34.4C 45.06057692307692 34.4 47.18942307692308 32 49.67307692307693 32C 52.156730769230776 32 54.28557692307693 44.8 56.769230769230774 44.8C 59.252884615384616 44.8 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 40.8 70.96153846153847 40.8C 73.44519230769231 40.8 75.57403846153846 37.6 78.0576923076923 37.6C 80.54134615384615 37.6 82.67019230769232 33.6 85.15384615384616 33.6C 87.6375 33.6 89.76634615384616 40.8 92.25 40.8C 92.25 40.8 92.25 40.8 92.25 48 L 0 48z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask710xae5v)" pathTo="M 0 38.4C 2.483653846153846 38.4 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 29.6 14.192307692307693 29.6C 16.67596153846154 29.6 18.804807692307694 38.4 21.28846153846154 38.4C 23.772115384615386 38.4 25.90096153846154 31.2 28.384615384615387 31.2C 30.868269230769233 31.2 32.997115384615384 40.8 35.48076923076923 40.8C 37.96442307692308 40.8 40.09326923076924 34.4 42.57692307692308 34.4C 45.06057692307692 34.4 47.18942307692308 32 49.67307692307693 32C 52.156730769230776 32 54.28557692307693 44.8 56.769230769230774 44.8C 59.252884615384616 44.8 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 40.8 70.96153846153847 40.8C 73.44519230769231 40.8 75.57403846153846 37.6 78.0576923076923 37.6C 80.54134615384615 37.6 82.67019230769232 33.6 85.15384615384616 33.6C 87.6375 33.6 89.76634615384616 40.8 92.25 40.8C 92.25 40.8 92.25 40.8 92.25 48 L 0 48z" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48 L 0 48"></path>
                                                                            <path id="SvgjsPath3372" d="M 0 38.4C 2.483653846153846 38.4 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 29.6 14.192307692307693 29.6C 16.67596153846154 29.6 18.804807692307694 38.4 21.28846153846154 38.4C 23.772115384615386 38.4 25.90096153846154 31.2 28.384615384615387 31.2C 30.868269230769233 31.2 32.997115384615384 40.8 35.48076923076923 40.8C 37.96442307692308 40.8 40.09326923076924 34.4 42.57692307692308 34.4C 45.06057692307692 34.4 47.18942307692308 32 49.67307692307693 32C 52.156730769230776 32 54.28557692307693 44.8 56.769230769230774 44.8C 59.252884615384616 44.8 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 40.8 70.96153846153847 40.8C 73.44519230769231 40.8 75.57403846153846 37.6 78.0576923076923 37.6C 80.54134615384615 37.6 82.67019230769232 33.6 85.15384615384616 33.6C 87.6375 33.6 89.76634615384616 40.8 92.25 40.8" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask710xae5v)" pathTo="M 0 38.4C 2.483653846153846 38.4 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 29.6 14.192307692307693 29.6C 16.67596153846154 29.6 18.804807692307694 38.4 21.28846153846154 38.4C 23.772115384615386 38.4 25.90096153846154 31.2 28.384615384615387 31.2C 30.868269230769233 31.2 32.997115384615384 40.8 35.48076923076923 40.8C 37.96442307692308 40.8 40.09326923076924 34.4 42.57692307692308 34.4C 45.06057692307692 34.4 47.18942307692308 32 49.67307692307693 32C 52.156730769230776 32 54.28557692307693 44.8 56.769230769230774 44.8C 59.252884615384616 44.8 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 40.8 70.96153846153847 40.8C 73.44519230769231 40.8 75.57403846153846 37.6 78.0576923076923 37.6C 80.54134615384615 37.6 82.67019230769232 33.6 85.15384615384616 33.6C 87.6375 33.6 89.76634615384616 40.8 92.25 40.8" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path>
                                                                            <g id="SvgjsG3369" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                                        </g>
                                                                        <g id="SvgjsG3370" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                                    </g>
                                                                    <line id="SvgjsLine3381" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                                    <line id="SvgjsLine3382" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                                    <g id="SvgjsG3383" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                        <g id="SvgjsG3384" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                                    </g>
                                                                    <g id="SvgjsG3400" class="apexcharts-yaxis-annotations"></g>
                                                                    <g id="SvgjsG3401" class="apexcharts-xaxis-annotations"></g>
                                                                    <g id="SvgjsG3402" class="apexcharts-point-annotations"></g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
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
                                <div class="tab-pane fade" id="kt_stats_widget_16_tab_2" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-25.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Poland</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">85.23%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_2_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-24.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Mexico</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">74.83%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_2_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-20.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Haiti</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">90.06%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_2_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-17.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Monaco</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">54.08%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_2_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
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
                                <div class="tab-pane fade" id="kt_stats_widget_16_tab_3" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-11.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">New York</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">52.34%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_3_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-23.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald Richards</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Madrid</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">77.65%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_3_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-4.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie Alexander</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Pune</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">82.47%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_3_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-1.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Courtney Henry</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Mexico</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">67.84%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_3_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
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
                                <div class="tab-pane fade" id="kt_stats_widget_16_tab_4" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_4">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-12.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene McCoy</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">London</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">53.44%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_4_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-21.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinneyr</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Monaco</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">74.64%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_4_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-30.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">PManila</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">88.56%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_4_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-14.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Iceland</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">63.16%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_4_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
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
                                <div class="tab-pane fade" id="kt_stats_widget_16_tab_5" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_5">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-6.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Haiti</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">68.54%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_5_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-10.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Kiribati</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">55.83%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_5_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-9.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Poland</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">93.46%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_5_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-3.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph Edwards</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Mexico</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-13">
                                                    <span class="text-gray-600 fw-bold fs-6">64.48%</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_16_chart_5_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
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
                                <!--end::Table container-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Tables widget 16-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-6">
                    <!--begin::Card widget 18-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Body-->
                        <div class="card-body py-9">
                            <!--begin::Row-->
                            <div class="row gx-9 h-100">
                                <!--begin::Col-->
                                <div class="col-sm-6 mb-10 mb-sm-0">
                                    <!--begin::Image-->
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('assets/media/stock/600x600/img-65.jpg')"></div>
                                    <!--end::Image-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-sm-6">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column h-100">
                                        <!--begin::Header-->
                                        <div class="mb-7">
                                            <!--begin::Headin-->
                                            <div class="d-flex flex-stack mb-6">
                                                <!--begin::Title-->
                                                <div class="flex-shrink-0 me-5">
                                                    <span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
                                                    <span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
                                                </div>
                                                <!--end::Title-->
                                                <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Items-->
                                            <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center me-5 me-xl-13">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px symbol-circle me-3">
                                                        <img src="assets/media/avatars/300-3.jpg" class="" alt="">
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <span class="fw-semibold text-gray-500 d-block fs-8">Manager</span>
                                                        <a href="pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px symbol-circle me-3">
																			<span class="symbol-label bg-success">
																				<i class="ki-duotone ki-abstract-41 fs-5 text-white">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <span class="fw-semibold text-gray-500 d-block fs-8">Budget</span>
                                                        <span class="fw-bold text-gray-800 fs-7">$64.800</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Text-->
                                            <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
                                            <!--end::Text-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                                    <!--begin::Date-->
                                                    <span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
                                                    <!--end::Date-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold text-gray-500">Due Date</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                                    <!--begin::Number-->
                                                    <span class="fs-6 text-gray-700 fw-bold">$
																			<span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold text-gray-500">Budget</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack mt-auto bd-highlight">
                                            <!--begin::Users group-->
                                            <div class="symbol-group symbol-hover flex-nowrap">
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                                    <img alt="Pic" src="assets/media/avatars/300-2.jpg">
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                                    <img alt="Pic" src="assets/media/avatars/300-3.jpg">
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                </div>
                                            </div>
                                            <!--end::Users group-->
                                            <!--begin::Actions-->
                                            <a href="apps/projects/project.html" class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">View Project
                                                <i class="ki-duotone ki-exit-right-corner fs-4 ms-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i></a>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 18-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Chart widget 36-->
                    <div class="card card-flush overflow-hidden h-lg-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Performance</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                                    <!--begin::Display range-->
                                    <div class="text-gray-600 fw-bold">23 Jul 2024</div>
                                    <!--end::Display range-->
                                    <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                </div>
                                <!--end::Daterangepicker-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end p-0">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px; min-height: 315px;">
                                <div id="apexchartse7fhzbjo" class="apexcharts-canvas apexchartse7fhzbjo apexcharts-theme-light" style="width: 546.5px; height: 300px;">
                                    <svg id="SvgjsSvg2660" width="546.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="546.5" height="300">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div>
                                        </foreignObject>
                                        <rect id="SvgjsRect2700" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG2763" class="apexcharts-yaxis" rel="0" transform="translate(17.337499618530273, 0)">
                                            <g id="SvgjsG2764" class="apexcharts-yaxis-texts-g">
                                                <text id="SvgjsText2766" font-family="inherit" x="20" y="34" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2767">120</tspan>
                                                    <title>120</title></text>
                                                <text id="SvgjsText2769" font-family="inherit" x="20" y="70.93404447873434" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2770">105</tspan>
                                                    <title>105</title></text>
                                                <text id="SvgjsText2772" font-family="inherit" x="20" y="107.86808895746867" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2773">90</tspan>
                                                    <title>90</title></text>
                                                <text id="SvgjsText2775" font-family="inherit" x="20" y="144.802133436203" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2776">75</tspan>
                                                    <title>75</title></text>
                                                <text id="SvgjsText2778" font-family="inherit" x="20" y="181.73617791493734" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2779">60</tspan>
                                                    <title>60</title></text>
                                                <text id="SvgjsText2781" font-family="inherit" x="20" y="218.67022239367168" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2782">45</tspan>
                                                    <title>45</title></text>
                                                <text id="SvgjsText2784" font-family="inherit" x="20" y="255.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2785">30</tspan>
                                                    <title>30</title></text>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2662" class="apexcharts-inner apexcharts-graphical" transform="translate(47.33749961853027, 30)">
                                            <defs id="SvgjsDefs2661">
                                                <clipPath id="gridRectMaske7fhzbjo">
                                                    <rect id="SvgjsRect2666" width="496.1625003814697" height="228.60426687240601" x="-3.5" y="-3.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaske7fhzbjo"></clipPath>
                                                <clipPath id="nonForecastMaske7fhzbjo"></clipPath>
                                                <clipPath id="gridRectMarkerMaske7fhzbjo">
                                                    <rect id="SvgjsRect2667" width="493.1625003814697" height="225.60426687240601" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient2672" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop2673" stop-opacity="0.4" stop-color="rgba(27,132,255,0.4)" offset="0.15"></stop>
                                                    <stop id="SvgjsStop2674" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                                    <stop id="SvgjsStop2675" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                                </linearGradient>
                                                <linearGradient id="SvgjsLinearGradient2681" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop2682" stop-opacity="0.4" stop-color="rgba(23,198,83,0.4)" offset="0.15"></stop>
                                                    <stop id="SvgjsStop2683" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                                    <stop id="SvgjsStop2684" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG2687" class="apexcharts-grid">
                                                <g id="SvgjsG2688" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine2692" x1="0" y1="36.934044478734336" x2="489.1625003814697" y2="36.934044478734336" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2693" x1="0" y1="73.86808895746867" x2="489.1625003814697" y2="73.86808895746867" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2694" x1="0" y1="110.80213343620301" x2="489.1625003814697" y2="110.80213343620301" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2695" x1="0" y1="147.73617791493734" x2="489.1625003814697" y2="147.73617791493734" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2696" x1="0" y1="184.67022239367168" x2="489.1625003814697" y2="184.67022239367168" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2689" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine2699" x1="0" y1="221.60426687240601" x2="489.1625003814697" y2="221.60426687240601" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2698" x1="0" y1="1" x2="0" y2="221.60426687240601" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2690" class="apexcharts-grid-borders">
                                                <line id="SvgjsLine2691" x1="0" y1="0" x2="489.1625003814697" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2697" x1="0" y1="221.60426687240601" x2="489.1625003814697" y2="221.60426687240601" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2668" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG2669" class="apexcharts-series" zIndex="0" seriesName="InboundxCalls" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2676" d="M 0 135.4248297553592C 9.511493062973022 135.4248297553592 17.664201402664183 98.49078527662488 27.175694465637207 98.49078527662488C 36.68718752861023 98.49078527662488 44.83989586830139 98.49078527662488 54.351388931274414 98.49078527662488C 63.86288199424744 98.49078527662488 72.0155903339386 147.73617791493734 81.52708339691162 147.73617791493734C 91.03857645988464 147.73617791493734 99.19128479957581 147.73617791493734 108.70277786254883 147.73617791493734C 118.21427092552184 147.73617791493734 126.36697926521302 184.67022239367168 135.87847232818604 184.67022239367168C 145.38996539115905 184.67022239367168 153.54267373085023 184.67022239367168 163.05416679382324 184.67022239367168C 172.56565985679626 184.67022239367168 180.71836819648743 98.49078527662488 190.22986125946045 98.49078527662488C 199.74135432243347 98.49078527662488 207.89406266212464 98.49078527662488 217.40555572509766 98.49078527662488C 226.91704878807067 98.49078527662488 235.06975712776182 123.11348159578111 244.58125019073483 123.11348159578111C 254.09274325370785 123.11348159578111 262.245451593399 123.11348159578111 271.75694465637207 123.11348159578111C 281.2684377193451 123.11348159578111 289.42114605903623 73.86808895746864 298.9326391220093 73.86808895746864C 308.4441321849823 73.86808895746864 316.59684052467344 73.86808895746864 326.1083335876465 73.86808895746864C 335.61982665061953 73.86808895746864 343.77253499031065 98.49078527662488 353.2840280532837 98.49078527662488C 362.79552111625674 98.49078527662488 370.94822945594785 98.49078527662488 380.4597225189209 98.49078527662488C 389.97121558189394 98.49078527662488 398.12392392158506 98.49078527662488 407.6354169845581 98.49078527662488C 417.14691004753115 98.49078527662488 425.29961838722227 147.73617791493734 434.8111114501953 147.73617791493734C 444.32260451316836 147.73617791493734 452.4753128528595 147.73617791493734 461.9868059158325 147.73617791493734C 471.4982989788055 147.73617791493734 479.6510073184967 172.35887423409355 489.16250038146967 172.35887423409355C 489.16250038146967 172.35887423409355 489.16250038146967 172.35887423409355 489.16250038146967 221.60426687240601 L 0 221.60426687240601z" fill="url(#SvgjsLinearGradient2672)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaske7fhzbjo)" pathTo="M 0 135.4248297553592C 9.511493062973022 135.4248297553592 17.664201402664183 98.49078527662488 27.175694465637207 98.49078527662488C 36.68718752861023 98.49078527662488 44.83989586830139 98.49078527662488 54.351388931274414 98.49078527662488C 63.86288199424744 98.49078527662488 72.0155903339386 147.73617791493734 81.52708339691162 147.73617791493734C 91.03857645988464 147.73617791493734 99.19128479957581 147.73617791493734 108.70277786254883 147.73617791493734C 118.21427092552184 147.73617791493734 126.36697926521302 184.67022239367168 135.87847232818604 184.67022239367168C 145.38996539115905 184.67022239367168 153.54267373085023 184.67022239367168 163.05416679382324 184.67022239367168C 172.56565985679626 184.67022239367168 180.71836819648743 98.49078527662488 190.22986125946045 98.49078527662488C 199.74135432243347 98.49078527662488 207.89406266212464 98.49078527662488 217.40555572509766 98.49078527662488C 226.91704878807067 98.49078527662488 235.06975712776182 123.11348159578111 244.58125019073483 123.11348159578111C 254.09274325370785 123.11348159578111 262.245451593399 123.11348159578111 271.75694465637207 123.11348159578111C 281.2684377193451 123.11348159578111 289.42114605903623 73.86808895746864 298.9326391220093 73.86808895746864C 308.4441321849823 73.86808895746864 316.59684052467344 73.86808895746864 326.1083335876465 73.86808895746864C 335.61982665061953 73.86808895746864 343.77253499031065 98.49078527662488 353.2840280532837 98.49078527662488C 362.79552111625674 98.49078527662488 370.94822945594785 98.49078527662488 380.4597225189209 98.49078527662488C 389.97121558189394 98.49078527662488 398.12392392158506 98.49078527662488 407.6354169845581 98.49078527662488C 417.14691004753115 98.49078527662488 425.29961838722227 147.73617791493734 434.8111114501953 147.73617791493734C 444.32260451316836 147.73617791493734 452.4753128528595 147.73617791493734 461.9868059158325 147.73617791493734C 471.4982989788055 147.73617791493734 479.6510073184967 172.35887423409355 489.16250038146967 172.35887423409355C 489.16250038146967 172.35887423409355 489.16250038146967 172.35887423409355 489.16250038146967 221.60426687240601 L 0 221.60426687240601z" pathFrom="M 0 295.4723558298747 L 0 295.4723558298747 L 27.175694465637207 295.4723558298747 L 54.351388931274414 295.4723558298747 L 81.52708339691162 295.4723558298747 L 108.70277786254883 295.4723558298747 L 135.87847232818604 295.4723558298747 L 163.05416679382324 295.4723558298747 L 190.22986125946045 295.4723558298747 L 217.40555572509766 295.4723558298747 L 244.58125019073483 295.4723558298747 L 271.75694465637207 295.4723558298747 L 298.9326391220093 295.4723558298747 L 326.1083335876465 295.4723558298747 L 353.2840280532837 295.4723558298747 L 380.4597225189209 295.4723558298747 L 407.6354169845581 295.4723558298747 L 434.8111114501953 295.4723558298747 L 461.9868059158325 295.4723558298747 L 489.16250038146967 295.4723558298747 L 0 295.4723558298747"></path>
                                                    <path id="SvgjsPath2677" d="M 0 135.4248297553592C 9.511493062973022 135.4248297553592 17.664201402664183 98.49078527662488 27.175694465637207 98.49078527662488C 36.68718752861023 98.49078527662488 44.83989586830139 98.49078527662488 54.351388931274414 98.49078527662488C 63.86288199424744 98.49078527662488 72.0155903339386 147.73617791493734 81.52708339691162 147.73617791493734C 91.03857645988464 147.73617791493734 99.19128479957581 147.73617791493734 108.70277786254883 147.73617791493734C 118.21427092552184 147.73617791493734 126.36697926521302 184.67022239367168 135.87847232818604 184.67022239367168C 145.38996539115905 184.67022239367168 153.54267373085023 184.67022239367168 163.05416679382324 184.67022239367168C 172.56565985679626 184.67022239367168 180.71836819648743 98.49078527662488 190.22986125946045 98.49078527662488C 199.74135432243347 98.49078527662488 207.89406266212464 98.49078527662488 217.40555572509766 98.49078527662488C 226.91704878807067 98.49078527662488 235.06975712776182 123.11348159578111 244.58125019073483 123.11348159578111C 254.09274325370785 123.11348159578111 262.245451593399 123.11348159578111 271.75694465637207 123.11348159578111C 281.2684377193451 123.11348159578111 289.42114605903623 73.86808895746864 298.9326391220093 73.86808895746864C 308.4441321849823 73.86808895746864 316.59684052467344 73.86808895746864 326.1083335876465 73.86808895746864C 335.61982665061953 73.86808895746864 343.77253499031065 98.49078527662488 353.2840280532837 98.49078527662488C 362.79552111625674 98.49078527662488 370.94822945594785 98.49078527662488 380.4597225189209 98.49078527662488C 389.97121558189394 98.49078527662488 398.12392392158506 98.49078527662488 407.6354169845581 98.49078527662488C 417.14691004753115 98.49078527662488 425.29961838722227 147.73617791493734 434.8111114501953 147.73617791493734C 444.32260451316836 147.73617791493734 452.4753128528595 147.73617791493734 461.9868059158325 147.73617791493734C 471.4982989788055 147.73617791493734 479.6510073184967 172.35887423409355 489.16250038146967 172.35887423409355" fill="none" fill-opacity="1" stroke="#1b84ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaske7fhzbjo)" pathTo="M 0 135.4248297553592C 9.511493062973022 135.4248297553592 17.664201402664183 98.49078527662488 27.175694465637207 98.49078527662488C 36.68718752861023 98.49078527662488 44.83989586830139 98.49078527662488 54.351388931274414 98.49078527662488C 63.86288199424744 98.49078527662488 72.0155903339386 147.73617791493734 81.52708339691162 147.73617791493734C 91.03857645988464 147.73617791493734 99.19128479957581 147.73617791493734 108.70277786254883 147.73617791493734C 118.21427092552184 147.73617791493734 126.36697926521302 184.67022239367168 135.87847232818604 184.67022239367168C 145.38996539115905 184.67022239367168 153.54267373085023 184.67022239367168 163.05416679382324 184.67022239367168C 172.56565985679626 184.67022239367168 180.71836819648743 98.49078527662488 190.22986125946045 98.49078527662488C 199.74135432243347 98.49078527662488 207.89406266212464 98.49078527662488 217.40555572509766 98.49078527662488C 226.91704878807067 98.49078527662488 235.06975712776182 123.11348159578111 244.58125019073483 123.11348159578111C 254.09274325370785 123.11348159578111 262.245451593399 123.11348159578111 271.75694465637207 123.11348159578111C 281.2684377193451 123.11348159578111 289.42114605903623 73.86808895746864 298.9326391220093 73.86808895746864C 308.4441321849823 73.86808895746864 316.59684052467344 73.86808895746864 326.1083335876465 73.86808895746864C 335.61982665061953 73.86808895746864 343.77253499031065 98.49078527662488 353.2840280532837 98.49078527662488C 362.79552111625674 98.49078527662488 370.94822945594785 98.49078527662488 380.4597225189209 98.49078527662488C 389.97121558189394 98.49078527662488 398.12392392158506 98.49078527662488 407.6354169845581 98.49078527662488C 417.14691004753115 98.49078527662488 425.29961838722227 147.73617791493734 434.8111114501953 147.73617791493734C 444.32260451316836 147.73617791493734 452.4753128528595 147.73617791493734 461.9868059158325 147.73617791493734C 471.4982989788055 147.73617791493734 479.6510073184967 172.35887423409355 489.16250038146967 172.35887423409355" pathFrom="M 0 295.4723558298747 L 0 295.4723558298747 L 27.175694465637207 295.4723558298747 L 54.351388931274414 295.4723558298747 L 81.52708339691162 295.4723558298747 L 108.70277786254883 295.4723558298747 L 135.87847232818604 295.4723558298747 L 163.05416679382324 295.4723558298747 L 190.22986125946045 295.4723558298747 L 217.40555572509766 295.4723558298747 L 244.58125019073483 295.4723558298747 L 271.75694465637207 295.4723558298747 L 298.9326391220093 295.4723558298747 L 326.1083335876465 295.4723558298747 L 353.2840280532837 295.4723558298747 L 380.4597225189209 295.4723558298747 L 407.6354169845581 295.4723558298747 L 434.8111114501953 295.4723558298747 L 461.9868059158325 295.4723558298747 L 489.16250038146967 295.4723558298747" fill-rule="evenodd"></path>
                                                    <g id="SvgjsG2670" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2789" r="0" cx="0" cy="0" class="apexcharts-marker wkxdtvupt no-pointer-events" stroke="#1b84ff" fill="#1b84ff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2678" class="apexcharts-series" zIndex="1" seriesName="OutboundxCalls" data:longestSeries="true" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath2685" d="M 0 73.86808895746864C 9.511493062973022 73.86808895746864 17.664201402664183 24.622696319156205 27.175694465637207 24.622696319156205C 36.68718752861023 24.622696319156205 44.83989586830139 24.622696319156205 54.351388931274414 24.622696319156205C 63.86288199424744 24.622696319156205 72.0155903339386 61.55674079789054 81.52708339691162 61.55674079789054C 91.03857645988464 61.55674079789054 99.19128479957581 61.55674079789054 108.70277786254883 61.55674079789054C 118.21427092552184 61.55674079789054 126.36697926521302 86.17943711704677 135.87847232818604 86.17943711704677C 145.38996539115905 86.17943711704677 153.54267373085023 86.17943711704677 163.05416679382324 86.17943711704677C 172.56565985679626 86.17943711704677 180.71836819648743 61.55674079789054 190.22986125946045 61.55674079789054C 199.74135432243347 61.55674079789054 207.89406266212464 61.55674079789054 217.40555572509766 61.55674079789054C 226.91704878807067 61.55674079789054 235.06975712776182 12.311348159578074 244.58125019073483 12.311348159578074C 254.09274325370785 12.311348159578074 262.245451593399 12.311348159578074 271.75694465637207 12.311348159578074C 281.2684377193451 12.311348159578074 289.42114605903623 49.24539263831244 298.9326391220093 49.24539263831244C 308.4441321849823 49.24539263831244 316.59684052467344 49.24539263831244 326.1083335876465 49.24539263831244C 335.61982665061953 49.24539263831244 343.77253499031065 12.311348159578074 353.2840280532837 12.311348159578074C 362.79552111625674 12.311348159578074 370.94822945594785 12.311348159578074 380.4597225189209 12.311348159578074C 389.97121558189394 12.311348159578074 398.12392392158506 61.55674079789054 407.6354169845581 61.55674079789054C 417.14691004753115 61.55674079789054 425.29961838722227 61.55674079789054 434.8111114501953 61.55674079789054C 444.32260451316836 61.55674079789054 452.4753128528595 86.17943711704677 461.9868059158325 86.17943711704677C 471.4982989788055 86.17943711704677 479.6510073184967 86.17943711704677 489.16250038146967 86.17943711704677C 489.16250038146967 86.17943711704677 489.16250038146967 86.17943711704677 489.16250038146967 221.60426687240601 L 0 221.60426687240601z" fill="url(#SvgjsLinearGradient2681)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaske7fhzbjo)" pathTo="M 0 73.86808895746864C 9.511493062973022 73.86808895746864 17.664201402664183 24.622696319156205 27.175694465637207 24.622696319156205C 36.68718752861023 24.622696319156205 44.83989586830139 24.622696319156205 54.351388931274414 24.622696319156205C 63.86288199424744 24.622696319156205 72.0155903339386 61.55674079789054 81.52708339691162 61.55674079789054C 91.03857645988464 61.55674079789054 99.19128479957581 61.55674079789054 108.70277786254883 61.55674079789054C 118.21427092552184 61.55674079789054 126.36697926521302 86.17943711704677 135.87847232818604 86.17943711704677C 145.38996539115905 86.17943711704677 153.54267373085023 86.17943711704677 163.05416679382324 86.17943711704677C 172.56565985679626 86.17943711704677 180.71836819648743 61.55674079789054 190.22986125946045 61.55674079789054C 199.74135432243347 61.55674079789054 207.89406266212464 61.55674079789054 217.40555572509766 61.55674079789054C 226.91704878807067 61.55674079789054 235.06975712776182 12.311348159578074 244.58125019073483 12.311348159578074C 254.09274325370785 12.311348159578074 262.245451593399 12.311348159578074 271.75694465637207 12.311348159578074C 281.2684377193451 12.311348159578074 289.42114605903623 49.24539263831244 298.9326391220093 49.24539263831244C 308.4441321849823 49.24539263831244 316.59684052467344 49.24539263831244 326.1083335876465 49.24539263831244C 335.61982665061953 49.24539263831244 343.77253499031065 12.311348159578074 353.2840280532837 12.311348159578074C 362.79552111625674 12.311348159578074 370.94822945594785 12.311348159578074 380.4597225189209 12.311348159578074C 389.97121558189394 12.311348159578074 398.12392392158506 61.55674079789054 407.6354169845581 61.55674079789054C 417.14691004753115 61.55674079789054 425.29961838722227 61.55674079789054 434.8111114501953 61.55674079789054C 444.32260451316836 61.55674079789054 452.4753128528595 86.17943711704677 461.9868059158325 86.17943711704677C 471.4982989788055 86.17943711704677 479.6510073184967 86.17943711704677 489.16250038146967 86.17943711704677C 489.16250038146967 86.17943711704677 489.16250038146967 86.17943711704677 489.16250038146967 221.60426687240601 L 0 221.60426687240601z" pathFrom="M 0 295.4723558298747 L 0 295.4723558298747 L 27.175694465637207 295.4723558298747 L 54.351388931274414 295.4723558298747 L 81.52708339691162 295.4723558298747 L 108.70277786254883 295.4723558298747 L 135.87847232818604 295.4723558298747 L 163.05416679382324 295.4723558298747 L 190.22986125946045 295.4723558298747 L 217.40555572509766 295.4723558298747 L 244.58125019073483 295.4723558298747 L 271.75694465637207 295.4723558298747 L 298.9326391220093 295.4723558298747 L 326.1083335876465 295.4723558298747 L 353.2840280532837 295.4723558298747 L 380.4597225189209 295.4723558298747 L 407.6354169845581 295.4723558298747 L 434.8111114501953 295.4723558298747 L 461.9868059158325 295.4723558298747 L 489.16250038146967 295.4723558298747 L 0 295.4723558298747"></path>
                                                    <path id="SvgjsPath2686" d="M 0 73.86808895746864C 9.511493062973022 73.86808895746864 17.664201402664183 24.622696319156205 27.175694465637207 24.622696319156205C 36.68718752861023 24.622696319156205 44.83989586830139 24.622696319156205 54.351388931274414 24.622696319156205C 63.86288199424744 24.622696319156205 72.0155903339386 61.55674079789054 81.52708339691162 61.55674079789054C 91.03857645988464 61.55674079789054 99.19128479957581 61.55674079789054 108.70277786254883 61.55674079789054C 118.21427092552184 61.55674079789054 126.36697926521302 86.17943711704677 135.87847232818604 86.17943711704677C 145.38996539115905 86.17943711704677 153.54267373085023 86.17943711704677 163.05416679382324 86.17943711704677C 172.56565985679626 86.17943711704677 180.71836819648743 61.55674079789054 190.22986125946045 61.55674079789054C 199.74135432243347 61.55674079789054 207.89406266212464 61.55674079789054 217.40555572509766 61.55674079789054C 226.91704878807067 61.55674079789054 235.06975712776182 12.311348159578074 244.58125019073483 12.311348159578074C 254.09274325370785 12.311348159578074 262.245451593399 12.311348159578074 271.75694465637207 12.311348159578074C 281.2684377193451 12.311348159578074 289.42114605903623 49.24539263831244 298.9326391220093 49.24539263831244C 308.4441321849823 49.24539263831244 316.59684052467344 49.24539263831244 326.1083335876465 49.24539263831244C 335.61982665061953 49.24539263831244 343.77253499031065 12.311348159578074 353.2840280532837 12.311348159578074C 362.79552111625674 12.311348159578074 370.94822945594785 12.311348159578074 380.4597225189209 12.311348159578074C 389.97121558189394 12.311348159578074 398.12392392158506 61.55674079789054 407.6354169845581 61.55674079789054C 417.14691004753115 61.55674079789054 425.29961838722227 61.55674079789054 434.8111114501953 61.55674079789054C 444.32260451316836 61.55674079789054 452.4753128528595 86.17943711704677 461.9868059158325 86.17943711704677C 471.4982989788055 86.17943711704677 479.6510073184967 86.17943711704677 489.16250038146967 86.17943711704677" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaske7fhzbjo)" pathTo="M 0 73.86808895746864C 9.511493062973022 73.86808895746864 17.664201402664183 24.622696319156205 27.175694465637207 24.622696319156205C 36.68718752861023 24.622696319156205 44.83989586830139 24.622696319156205 54.351388931274414 24.622696319156205C 63.86288199424744 24.622696319156205 72.0155903339386 61.55674079789054 81.52708339691162 61.55674079789054C 91.03857645988464 61.55674079789054 99.19128479957581 61.55674079789054 108.70277786254883 61.55674079789054C 118.21427092552184 61.55674079789054 126.36697926521302 86.17943711704677 135.87847232818604 86.17943711704677C 145.38996539115905 86.17943711704677 153.54267373085023 86.17943711704677 163.05416679382324 86.17943711704677C 172.56565985679626 86.17943711704677 180.71836819648743 61.55674079789054 190.22986125946045 61.55674079789054C 199.74135432243347 61.55674079789054 207.89406266212464 61.55674079789054 217.40555572509766 61.55674079789054C 226.91704878807067 61.55674079789054 235.06975712776182 12.311348159578074 244.58125019073483 12.311348159578074C 254.09274325370785 12.311348159578074 262.245451593399 12.311348159578074 271.75694465637207 12.311348159578074C 281.2684377193451 12.311348159578074 289.42114605903623 49.24539263831244 298.9326391220093 49.24539263831244C 308.4441321849823 49.24539263831244 316.59684052467344 49.24539263831244 326.1083335876465 49.24539263831244C 335.61982665061953 49.24539263831244 343.77253499031065 12.311348159578074 353.2840280532837 12.311348159578074C 362.79552111625674 12.311348159578074 370.94822945594785 12.311348159578074 380.4597225189209 12.311348159578074C 389.97121558189394 12.311348159578074 398.12392392158506 61.55674079789054 407.6354169845581 61.55674079789054C 417.14691004753115 61.55674079789054 425.29961838722227 61.55674079789054 434.8111114501953 61.55674079789054C 444.32260451316836 61.55674079789054 452.4753128528595 86.17943711704677 461.9868059158325 86.17943711704677C 471.4982989788055 86.17943711704677 479.6510073184967 86.17943711704677 489.16250038146967 86.17943711704677" pathFrom="M 0 295.4723558298747 L 0 295.4723558298747 L 27.175694465637207 295.4723558298747 L 54.351388931274414 295.4723558298747 L 81.52708339691162 295.4723558298747 L 108.70277786254883 295.4723558298747 L 135.87847232818604 295.4723558298747 L 163.05416679382324 295.4723558298747 L 190.22986125946045 295.4723558298747 L 217.40555572509766 295.4723558298747 L 244.58125019073483 295.4723558298747 L 271.75694465637207 295.4723558298747 L 298.9326391220093 295.4723558298747 L 326.1083335876465 295.4723558298747 L 353.2840280532837 295.4723558298747 L 380.4597225189209 295.4723558298747 L 407.6354169845581 295.4723558298747 L 434.8111114501953 295.4723558298747 L 461.9868059158325 295.4723558298747 L 489.16250038146967 295.4723558298747" fill-rule="evenodd"></path>
                                                    <g id="SvgjsG2679" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2790" r="0" cx="0" cy="0" class="apexcharts-marker wtfh42r1m no-pointer-events" stroke="#17c653" fill="#17c653" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2671" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                <g id="SvgjsG2680" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            </g>
                                            <line id="SvgjsLine2701" x1="0" y1="0" x2="0" y2="221.60426687240601" stroke="#1B84FF #17C653" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="221.60426687240601" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <line id="SvgjsLine2702" x1="0" y1="0" x2="489.1625003814697" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2703" x1="0" y1="0" x2="489.1625003814697" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2704" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2705" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)">
                                                    <text id="SvgjsText2707" font-family="inherit" x="0" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2708"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2710" font-family="inherit" x="27.175694465637207" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2711"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2713" font-family="inherit" x="54.351388931274414" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2714"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2716" font-family="inherit" x="81.52708339691162" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 82.52708721160889 238.2042784690857)">
                                                        <tspan id="SvgjsTspan2717">9 AM</tspan>
                                                        <title>9 AM</title></text>
                                                    <text id="SvgjsText2719" font-family="inherit" x="108.70277786254883" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2720"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2722" font-family="inherit" x="135.87847232818604" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2723"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2725" font-family="inherit" x="163.05416679382324" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 164.05418395996094 238.2042784690857)">
                                                        <tspan id="SvgjsTspan2726">12 PM</tspan>
                                                        <title>12 PM</title></text>
                                                    <text id="SvgjsText2728" font-family="inherit" x="190.22986125946045" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2729"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2731" font-family="inherit" x="217.40555572509766" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2732"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2734" font-family="inherit" x="244.58125019073486" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 245.58125114440918 238.2042784690857)">
                                                        <tspan id="SvgjsTspan2735">15 PM</tspan>
                                                        <title>15 PM</title></text>
                                                    <text id="SvgjsText2737" font-family="inherit" x="271.75694465637207" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2738"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2740" font-family="inherit" x="298.9326391220093" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2741"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2743" font-family="inherit" x="326.1083335876465" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 327.108362197876 238.2042784690857)">
                                                        <tspan id="SvgjsTspan2744">18 PM</tspan>
                                                        <title>18 PM</title></text>
                                                    <text id="SvgjsText2746" font-family="inherit" x="353.2840280532837" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2747"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2749" font-family="inherit" x="380.4597225189209" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2750"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2752" font-family="inherit" x="407.6354169845581" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 408.63541984558105 238.2042784690857)">
                                                        <tspan id="SvgjsTspan2753">19 PM</tspan>
                                                        <title>19 PM</title></text>
                                                    <text id="SvgjsText2755" font-family="inherit" x="434.8111114501953" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2756"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2758" font-family="inherit" x="461.9868059158325" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2759"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText2761" font-family="inherit" x="489.1625003814697" y="243.60426687240601" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2762"></tspan>
                                                        <title></title></text>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2786" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2787" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2788" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect2791" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect2792" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 132, 255);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group">
                                                    <span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-goals-group">
                                                    <span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-z-group">
                                                    <span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(23, 198, 83);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group">
                                                    <span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-goals-group">
                                                    <span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-z-group">
                                                    <span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart widget 36-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Chart Widget 35-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-6">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Currency-->
                                    <span class="fs-3 fw-semibold text-gray-500 align-self-start me-1">$</span>
                                    <!--end::Currency-->
                                    <!--begin::Value-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>9.2%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">Avg. Agent Earnings</span>
                                <!--end::Description-->
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
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
                        <!--begin::Body-->
                        <div class="card-body py-0 px-0">
                            <!--begin::Nav-->
                            <ul class="nav d-flex justify-content-between mb-3 mx-9" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item mb-3" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1" aria-selected="true" role="tab">1d</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2" aria-selected="false" tabindex="-1" role="tab">5d</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3" aria-selected="false" tabindex="-1" role="tab">1m</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4" aria-selected="false" tabindex="-1" role="tab">6m</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5" aria-selected="false" tabindex="-1" role="tab">1y</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content-->
                            <div class="tab-content mt-n6">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1" role="tabpanel" aria-labelledby="kt_charts_widget_35_tab_1">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6" style="min-height: 215px;">
                                        <div id="apexchartsgn9lnhkg" class="apexcharts-canvas apexchartsgn9lnhkg apexcharts-theme-light" style="width: 345.75px; height: 200px;">
                                            <svg id="SvgjsSvg2602" width="345.75" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <foreignObject x="0" y="0" width="345.75" height="200">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 100px;"></div>
                                                </foreignObject>
                                                <rect id="SvgjsRect2629" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG2650" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                                    <g id="SvgjsG2651" class="apexcharts-yaxis-texts-g"></g>
                                                </g>
                                                <g id="SvgjsG2604" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)">
                                                    <defs id="SvgjsDefs2603">
                                                        <clipPath id="gridRectMaskgn9lnhkg">
                                                            <rect id="SvgjsRect2606" width="320.75" height="162" x="-3.5" y="-3.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskgn9lnhkg"></clipPath>
                                                        <clipPath id="nonForecastMaskgn9lnhkg"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskgn9lnhkg">
                                                            <rect id="SvgjsRect2607" width="317.75" height="159" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient2612" x1="0" y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2613" stop-opacity="0.4" stop-color="rgba(27,132,255,0.4)" offset="0.15"></stop>
                                                            <stop id="SvgjsStop2614" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                                            <stop id="SvgjsStop2615" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG2618" class="apexcharts-grid">
                                                        <g id="SvgjsG2619" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine2623" x1="0" y1="38.75" x2="313.75" y2="38.75" stroke="#dbdfe9" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2624" x1="0" y1="77.5" x2="313.75" y2="77.5" stroke="#dbdfe9" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2625" x1="0" y1="116.25" x2="313.75" y2="116.25" stroke="#dbdfe9" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG2620" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine2628" x1="0" y1="155" x2="313.75" y2="155" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine2627" x1="0" y1="1" x2="0" y2="155" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG2621" class="apexcharts-grid-borders">
                                                        <line id="SvgjsLine2622" x1="0" y1="0" x2="313.75" y2="0" stroke="#dbdfe9" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2626" x1="0" y1="155" x2="313.75" y2="155" stroke="#dbdfe9" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2608" class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG2609" class="apexcharts-series" zIndex="0" seriesName="Earnings" data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2616" d="M 0 98.16666666666666C 7.843749999999999 98.16666666666666 14.566964285714285 46.5 22.410714285714285 46.5C 30.254464285714285 46.5 36.97767857142857 46.5 44.82142857142857 46.5C 52.66517857142857 46.5 59.38839285714285 82.66666666666666 67.23214285714285 82.66666666666666C 75.07589285714285 82.66666666666666 81.79910714285714 82.66666666666666 89.64285714285714 82.66666666666666C 97.48660714285714 82.66666666666666 104.20982142857142 113.66666666666666 112.05357142857142 113.66666666666666C 119.89732142857142 113.66666666666666 126.6205357142857 113.66666666666666 134.4642857142857 113.66666666666666C 142.3080357142857 113.66666666666666 149.03125 82.66666666666666 156.875 82.66666666666666C 164.71875 82.66666666666666 171.44196428571428 82.66666666666666 179.28571428571428 82.66666666666666C 187.12946428571428 82.66666666666666 193.85267857142856 41.33333333333334 201.69642857142856 41.33333333333334C 209.54017857142856 41.33333333333334 216.26339285714283 41.33333333333334 224.10714285714283 41.33333333333334C 231.95089285714283 41.33333333333334 238.6741071428571 62 246.5178571428571 62C 254.3616071428571 62 261.0848214285714 62 268.9285714285714 62C 276.7723214285714 62 283.49553571428567 38.75 291.33928571428567 38.75C 299.18303571428567 38.75 305.90625 38.75 313.75 38.75C 313.75 38.75 313.75 38.75 313.75 155 L 0 155z" fill="url(#SvgjsLinearGradient2612)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgn9lnhkg)" pathTo="M 0 98.16666666666666C 7.843749999999999 98.16666666666666 14.566964285714285 46.5 22.410714285714285 46.5C 30.254464285714285 46.5 36.97767857142857 46.5 44.82142857142857 46.5C 52.66517857142857 46.5 59.38839285714285 82.66666666666666 67.23214285714285 82.66666666666666C 75.07589285714285 82.66666666666666 81.79910714285714 82.66666666666666 89.64285714285714 82.66666666666666C 97.48660714285714 82.66666666666666 104.20982142857142 113.66666666666666 112.05357142857142 113.66666666666666C 119.89732142857142 113.66666666666666 126.6205357142857 113.66666666666666 134.4642857142857 113.66666666666666C 142.3080357142857 113.66666666666666 149.03125 82.66666666666666 156.875 82.66666666666666C 164.71875 82.66666666666666 171.44196428571428 82.66666666666666 179.28571428571428 82.66666666666666C 187.12946428571428 82.66666666666666 193.85267857142856 41.33333333333334 201.69642857142856 41.33333333333334C 209.54017857142856 41.33333333333334 216.26339285714283 41.33333333333334 224.10714285714283 41.33333333333334C 231.95089285714283 41.33333333333334 238.6741071428571 62 246.5178571428571 62C 254.3616071428571 62 261.0848214285714 62 268.9285714285714 62C 276.7723214285714 62 283.49553571428567 38.75 291.33928571428567 38.75C 299.18303571428567 38.75 305.90625 38.75 313.75 38.75C 313.75 38.75 313.75 38.75 313.75 155 L 0 155z" pathFrom="M 0 206.66666666666666 L 0 206.66666666666666 L 22.410714285714285 206.66666666666666 L 44.82142857142857 206.66666666666666 L 67.23214285714285 206.66666666666666 L 89.64285714285714 206.66666666666666 L 112.05357142857142 206.66666666666666 L 134.4642857142857 206.66666666666666 L 156.875 206.66666666666666 L 179.28571428571428 206.66666666666666 L 201.69642857142856 206.66666666666666 L 224.10714285714283 206.66666666666666 L 246.5178571428571 206.66666666666666 L 268.9285714285714 206.66666666666666 L 291.33928571428567 206.66666666666666 L 313.75 206.66666666666666 L 0 206.66666666666666"></path>
                                                            <path id="SvgjsPath2617" d="M 0 98.16666666666666C 7.843749999999999 98.16666666666666 14.566964285714285 46.5 22.410714285714285 46.5C 30.254464285714285 46.5 36.97767857142857 46.5 44.82142857142857 46.5C 52.66517857142857 46.5 59.38839285714285 82.66666666666666 67.23214285714285 82.66666666666666C 75.07589285714285 82.66666666666666 81.79910714285714 82.66666666666666 89.64285714285714 82.66666666666666C 97.48660714285714 82.66666666666666 104.20982142857142 113.66666666666666 112.05357142857142 113.66666666666666C 119.89732142857142 113.66666666666666 126.6205357142857 113.66666666666666 134.4642857142857 113.66666666666666C 142.3080357142857 113.66666666666666 149.03125 82.66666666666666 156.875 82.66666666666666C 164.71875 82.66666666666666 171.44196428571428 82.66666666666666 179.28571428571428 82.66666666666666C 187.12946428571428 82.66666666666666 193.85267857142856 41.33333333333334 201.69642857142856 41.33333333333334C 209.54017857142856 41.33333333333334 216.26339285714283 41.33333333333334 224.10714285714283 41.33333333333334C 231.95089285714283 41.33333333333334 238.6741071428571 62 246.5178571428571 62C 254.3616071428571 62 261.0848214285714 62 268.9285714285714 62C 276.7723214285714 62 283.49553571428567 38.75 291.33928571428567 38.75C 299.18303571428567 38.75 305.90625 38.75 313.75 38.75" fill="none" fill-opacity="1" stroke="#1b84ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgn9lnhkg)" pathTo="M 0 98.16666666666666C 7.843749999999999 98.16666666666666 14.566964285714285 46.5 22.410714285714285 46.5C 30.254464285714285 46.5 36.97767857142857 46.5 44.82142857142857 46.5C 52.66517857142857 46.5 59.38839285714285 82.66666666666666 67.23214285714285 82.66666666666666C 75.07589285714285 82.66666666666666 81.79910714285714 82.66666666666666 89.64285714285714 82.66666666666666C 97.48660714285714 82.66666666666666 104.20982142857142 113.66666666666666 112.05357142857142 113.66666666666666C 119.89732142857142 113.66666666666666 126.6205357142857 113.66666666666666 134.4642857142857 113.66666666666666C 142.3080357142857 113.66666666666666 149.03125 82.66666666666666 156.875 82.66666666666666C 164.71875 82.66666666666666 171.44196428571428 82.66666666666666 179.28571428571428 82.66666666666666C 187.12946428571428 82.66666666666666 193.85267857142856 41.33333333333334 201.69642857142856 41.33333333333334C 209.54017857142856 41.33333333333334 216.26339285714283 41.33333333333334 224.10714285714283 41.33333333333334C 231.95089285714283 41.33333333333334 238.6741071428571 62 246.5178571428571 62C 254.3616071428571 62 261.0848214285714 62 268.9285714285714 62C 276.7723214285714 62 283.49553571428567 38.75 291.33928571428567 38.75C 299.18303571428567 38.75 305.90625 38.75 313.75 38.75" pathFrom="M 0 206.66666666666666 L 0 206.66666666666666 L 22.410714285714285 206.66666666666666 L 44.82142857142857 206.66666666666666 L 67.23214285714285 206.66666666666666 L 89.64285714285714 206.66666666666666 L 112.05357142857142 206.66666666666666 L 134.4642857142857 206.66666666666666 L 156.875 206.66666666666666 L 179.28571428571428 206.66666666666666 L 201.69642857142856 206.66666666666666 L 224.10714285714283 206.66666666666666 L 246.5178571428571 206.66666666666666 L 268.9285714285714 206.66666666666666 L 291.33928571428567 206.66666666666666 L 313.75 206.66666666666666" fill-rule="evenodd"></path>
                                                            <g id="SvgjsG2610" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle2655" r="0" cx="0" cy="0" class="apexcharts-marker wm5uclh37 no-pointer-events" stroke="#1b84ff" fill="#1b84ff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2611" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine2630" x1="0" y1="0" x2="0" y2="155" stroke="#1b84ff" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="155" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                    <line id="SvgjsLine2631" x1="0" y1="0" x2="313.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2632" x1="0" y1="0" x2="313.75" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2633" class="apexcharts-xaxis" transform="translate(20, 0)">
                                                        <g id="SvgjsG2634" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG2652" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2653" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2654" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect2656" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect2657" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(27, 132, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-goals-group">
                                                            <span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div>
                                            </div>
                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr>
                                                <th class="min-w-100px"></th>
                                                <th class="min-w-100px text-end pe-0"></th>
                                                <th class="text-end min-w-50px"></th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-danger">-139.34</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-success">+576.24</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-success">+124.03</span>
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
                                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2" role="tabpanel" aria-labelledby="kt_charts_widget_35_tab_2">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr>
                                                <th class="min-w-100px"></th>
                                                <th class="min-w-100px text-end pe-0"></th>
                                                <th class="text-end min-w-50px"></th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-success">+134.02</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-danger">+144.04</span>
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
                                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3" role="tabpanel" aria-labelledby="kt_charts_widget_35_tab_3">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr>
                                                <th class="min-w-100px"></th>
                                                <th class="min-w-100px text-end pe-0"></th>
                                                <th class="text-end min-w-50px"></th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-primary">+185.03</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-danger">+124.03</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-success">-154.03</span>
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
                                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4" role="tabpanel" aria-labelledby="kt_charts_widget_35_tab_4">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr>
                                                <th class="min-w-100px"></th>
                                                <th class="min-w-100px text-end pe-0"></th>
                                                <th class="text-end min-w-50px"></th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-warning">+124.03</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-info">+144.65</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-primary">+154.06</span>
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
                                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5" role="tabpanel" aria-labelledby="kt_charts_widget_35_tab_5">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr>
                                                <th class="min-w-100px"></th>
                                                <th class="min-w-100px text-end pe-0"></th>
                                                <th class="text-end min-w-50px"></th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-warning">+114.03</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                                                </td>
                                                <td class="pe-0 text-end">
                                                    <span class="fw-bold fs-6 text-info">+165.86</span>
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
                        <!--end::Body-->
                    </div>
                    <!--end::Chart Widget 35-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Table widget 14-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Projects Stats</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-6">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                        <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
                                        <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
                                        <th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
                                        <th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
                                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-3">
                                                    <img src="assets/media/stock/600x600/img-49.jpg" class="" alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy App</a>
                                                    <span class="text-gray-500 fw-semibold d-block fs-7">Jane Cooper</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bold fs-6">$32,400</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>9.2%</span>
                                            <!--end::Label-->
                                        </td>
                                        <td class="text-end pe-12">
                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;">
                                                <div id="apexchartsep5stj22" class="apexcharts-canvas apexchartsep5stj22 apexcharts-theme-light" style="width: 92.25px; height: 50px;">
                                                    <svg id="SvgjsSvg3016" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="92.25" height="50">
                                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div>
                                                        </foreignObject>
                                                        <g id="SvgjsG3055" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3018" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3017">
                                                                <clipPath id="gridRectMaskep5stj22">
                                                                    <rect id="SvgjsRect3021" width="98.25" height="54" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskep5stj22"></clipPath>
                                                                <clipPath id="nonForecastMaskep5stj22"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskep5stj22">
                                                                    <rect id="SvgjsRect3022" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG3029" class="apexcharts-grid">
                                                                <g id="SvgjsG3030" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                    <line id="SvgjsLine3033" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3034" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3031" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                                <line id="SvgjsLine3036" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3035" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3032" class="apexcharts-grid-borders" style="display: none;"></g>
                                                            <g id="SvgjsG3023" class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3024" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath3027" d="M 0 42.4C 2.483653846153846 42.4 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6C 92.25 37.6 92.25 37.6 92.25 48 L 0 48z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskep5stj22)" pathTo="M 0 42.4C 2.483653846153846 42.4 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6C 92.25 37.6 92.25 37.6 92.25 48 L 0 48z" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48 L 0 48"></path>
                                                                    <path id="SvgjsPath3028" d="M 0 42.4C 2.483653846153846 42.4 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskep5stj22)" pathTo="M 0 42.4C 2.483653846153846 42.4 4.612500000000001 40 7.096153846153847 40C 9.579807692307693 40 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 31.2 21.28846153846154 31.2C 23.772115384615386 31.2 25.90096153846154 43.2 28.384615384615387 43.2C 30.868269230769233 43.2 32.997115384615384 39.2 35.48076923076923 39.2C 37.96442307692308 39.2 40.09326923076924 44 42.57692307692308 44C 45.06057692307692 44 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 39.2 63.86538461538462 39.2C 66.34903846153847 39.2 68.47788461538462 33.6 70.96153846153847 33.6C 73.44519230769231 33.6 75.57403846153846 42.4 78.0576923076923 42.4C 80.54134615384615 42.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 37.6 92.25 37.6" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3025" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                                </g>
                                                                <g id="SvgjsG3026" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3037" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3038" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3039" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                <g id="SvgjsG3040" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3056" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG3057" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG3058" class="apexcharts-point-annotations"></g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-3">
                                                    <img src="assets/media/stock/600x600/img-40.jpg" class="" alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
                                                    <span class="text-gray-500 fw-semibold d-block fs-7">Esther Howard</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bold fs-6">$256,910</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-danger fs-base">
																		<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>0.4%</span>
                                            <!--end::Label-->
                                        </td>
                                        <td class="text-end pe-12">
                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;">
                                                <div id="apexcharts8qlxmyvki" class="apexcharts-canvas apexcharts8qlxmyvki apexcharts-theme-light" style="width: 92.25px; height: 50px;">
                                                    <svg id="SvgjsSvg3059" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="92.25" height="50">
                                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div>
                                                        </foreignObject>
                                                        <g id="SvgjsG3098" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3061" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3060">
                                                                <clipPath id="gridRectMask8qlxmyvki">
                                                                    <rect id="SvgjsRect3064" width="98.25" height="54" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask8qlxmyvki"></clipPath>
                                                                <clipPath id="nonForecastMask8qlxmyvki"></clipPath>
                                                                <clipPath id="gridRectMarkerMask8qlxmyvki">
                                                                    <rect id="SvgjsRect3065" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG3072" class="apexcharts-grid">
                                                                <g id="SvgjsG3073" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                    <line id="SvgjsLine3076" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3077" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3074" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                                <line id="SvgjsLine3079" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3078" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3075" class="apexcharts-grid-borders" style="display: none;"></g>
                                                            <g id="SvgjsG3066" class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3067" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath3070" d="M 0 34.4C 2.483653846153846 34.4 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 29.6 14.192307692307693 29.6C 16.67596153846154 29.6 18.804807692307694 46.4 21.28846153846154 46.4C 23.772115384615386 46.4 25.90096153846154 31.2 28.384615384615387 31.2C 30.868269230769233 31.2 32.997115384615384 40.8 35.48076923076923 40.8C 37.96442307692308 40.8 40.09326923076924 34.4 42.57692307692308 34.4C 45.06057692307692 34.4 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44.8 56.769230769230774 44.8C 59.252884615384616 44.8 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 40.8 70.96153846153847 40.8C 73.44519230769231 40.8 75.57403846153846 34.4 78.0576923076923 34.4C 80.54134615384615 34.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 42.4 92.25 42.4C 92.25 42.4 92.25 42.4 92.25 48 L 0 48z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask8qlxmyvki)" pathTo="M 0 34.4C 2.483653846153846 34.4 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 29.6 14.192307692307693 29.6C 16.67596153846154 29.6 18.804807692307694 46.4 21.28846153846154 46.4C 23.772115384615386 46.4 25.90096153846154 31.2 28.384615384615387 31.2C 30.868269230769233 31.2 32.997115384615384 40.8 35.48076923076923 40.8C 37.96442307692308 40.8 40.09326923076924 34.4 42.57692307692308 34.4C 45.06057692307692 34.4 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44.8 56.769230769230774 44.8C 59.252884615384616 44.8 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 40.8 70.96153846153847 40.8C 73.44519230769231 40.8 75.57403846153846 34.4 78.0576923076923 34.4C 80.54134615384615 34.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 42.4 92.25 42.4C 92.25 42.4 92.25 42.4 92.25 48 L 0 48z" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48 L 0 48"></path>
                                                                    <path id="SvgjsPath3071" d="M 0 34.4C 2.483653846153846 34.4 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 29.6 14.192307692307693 29.6C 16.67596153846154 29.6 18.804807692307694 46.4 21.28846153846154 46.4C 23.772115384615386 46.4 25.90096153846154 31.2 28.384615384615387 31.2C 30.868269230769233 31.2 32.997115384615384 40.8 35.48076923076923 40.8C 37.96442307692308 40.8 40.09326923076924 34.4 42.57692307692308 34.4C 45.06057692307692 34.4 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44.8 56.769230769230774 44.8C 59.252884615384616 44.8 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 40.8 70.96153846153847 40.8C 73.44519230769231 40.8 75.57403846153846 34.4 78.0576923076923 34.4C 80.54134615384615 34.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 42.4 92.25 42.4" fill="none" fill-opacity="1" stroke="#f8285a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask8qlxmyvki)" pathTo="M 0 34.4C 2.483653846153846 34.4 4.612500000000001 44 7.096153846153847 44C 9.579807692307693 44 11.708653846153847 29.6 14.192307692307693 29.6C 16.67596153846154 29.6 18.804807692307694 46.4 21.28846153846154 46.4C 23.772115384615386 46.4 25.90096153846154 31.2 28.384615384615387 31.2C 30.868269230769233 31.2 32.997115384615384 40.8 35.48076923076923 40.8C 37.96442307692308 40.8 40.09326923076924 34.4 42.57692307692308 34.4C 45.06057692307692 34.4 47.18942307692308 29.6 49.67307692307693 29.6C 52.156730769230776 29.6 54.28557692307693 44.8 56.769230769230774 44.8C 59.252884615384616 44.8 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 40.8 70.96153846153847 40.8C 73.44519230769231 40.8 75.57403846153846 34.4 78.0576923076923 34.4C 80.54134615384615 34.4 82.67019230769232 31.2 85.15384615384616 31.2C 87.6375 31.2 89.76634615384616 42.4 92.25 42.4" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3068" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                                </g>
                                                                <g id="SvgjsG3069" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3080" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3081" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3082" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                <g id="SvgjsG3083" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3099" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG3100" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG3101" class="apexcharts-point-annotations"></g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-3">
                                                    <img src="assets/media/stock/600x600/img-39.jpg" class="" alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto CRM</a>
                                                    <span class="text-gray-500 fw-semibold d-block fs-7">Jenny Wilson</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bold fs-6">$8,220</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>9.2%</span>
                                            <!--end::Label-->
                                        </td>
                                        <td class="text-end pe-12">
                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;">
                                                <div id="apexchartsubbz5u29j" class="apexcharts-canvas apexchartsubbz5u29j apexcharts-theme-light" style="width: 92.25px; height: 50px;">
                                                    <svg id="SvgjsSvg3102" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="92.25" height="50">
                                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div>
                                                        </foreignObject>
                                                        <g id="SvgjsG3141" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3104" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3103">
                                                                <clipPath id="gridRectMaskubbz5u29j">
                                                                    <rect id="SvgjsRect3107" width="98.25" height="54" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskubbz5u29j"></clipPath>
                                                                <clipPath id="nonForecastMaskubbz5u29j"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskubbz5u29j">
                                                                    <rect id="SvgjsRect3108" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG3115" class="apexcharts-grid">
                                                                <g id="SvgjsG3116" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                    <line id="SvgjsLine3119" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3120" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3117" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                                <line id="SvgjsLine3122" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3121" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3118" class="apexcharts-grid-borders" style="display: none;"></g>
                                                            <g id="SvgjsG3109" class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3110" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath3113" d="M 0 46.4C 2.483653846153846 46.4 4.612500000000001 28.8 7.096153846153847 28.8C 9.579807692307693 28.8 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 34.4 21.28846153846154 34.4C 23.772115384615386 34.4 25.90096153846154 42.4 28.384615384615387 42.4C 30.868269230769233 42.4 32.997115384615384 46.4 35.48076923076923 46.4C 37.96442307692308 46.4 40.09326923076924 38.4 42.57692307692308 38.4C 45.06057692307692 38.4 47.18942307692308 28.8 49.67307692307693 28.8C 52.156730769230776 28.8 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 38.4 85.15384615384616 38.4C 87.6375 38.4 89.76634615384616 42.4 92.25 42.4C 92.25 42.4 92.25 42.4 92.25 48 L 0 48z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskubbz5u29j)" pathTo="M 0 46.4C 2.483653846153846 46.4 4.612500000000001 28.8 7.096153846153847 28.8C 9.579807692307693 28.8 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 34.4 21.28846153846154 34.4C 23.772115384615386 34.4 25.90096153846154 42.4 28.384615384615387 42.4C 30.868269230769233 42.4 32.997115384615384 46.4 35.48076923076923 46.4C 37.96442307692308 46.4 40.09326923076924 38.4 42.57692307692308 38.4C 45.06057692307692 38.4 47.18942307692308 28.8 49.67307692307693 28.8C 52.156730769230776 28.8 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 38.4 85.15384615384616 38.4C 87.6375 38.4 89.76634615384616 42.4 92.25 42.4C 92.25 42.4 92.25 42.4 92.25 48 L 0 48z" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48 L 0 48"></path>
                                                                    <path id="SvgjsPath3114" d="M 0 46.4C 2.483653846153846 46.4 4.612500000000001 28.8 7.096153846153847 28.8C 9.579807692307693 28.8 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 34.4 21.28846153846154 34.4C 23.772115384615386 34.4 25.90096153846154 42.4 28.384615384615387 42.4C 30.868269230769233 42.4 32.997115384615384 46.4 35.48076923076923 46.4C 37.96442307692308 46.4 40.09326923076924 38.4 42.57692307692308 38.4C 45.06057692307692 38.4 47.18942307692308 28.8 49.67307692307693 28.8C 52.156730769230776 28.8 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 38.4 85.15384615384616 38.4C 87.6375 38.4 89.76634615384616 42.4 92.25 42.4" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskubbz5u29j)" pathTo="M 0 46.4C 2.483653846153846 46.4 4.612500000000001 28.8 7.096153846153847 28.8C 9.579807692307693 28.8 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 34.4 21.28846153846154 34.4C 23.772115384615386 34.4 25.90096153846154 42.4 28.384615384615387 42.4C 30.868269230769233 42.4 32.997115384615384 46.4 35.48076923076923 46.4C 37.96442307692308 46.4 40.09326923076924 38.4 42.57692307692308 38.4C 45.06057692307692 38.4 47.18942307692308 28.8 49.67307692307693 28.8C 52.156730769230776 28.8 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 28.8 63.86538461538462 28.8C 66.34903846153847 28.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 38.4 85.15384615384616 38.4C 87.6375 38.4 89.76634615384616 42.4 92.25 42.4" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3111" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                                </g>
                                                                <g id="SvgjsG3112" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3123" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3124" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3125" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                <g id="SvgjsG3126" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3142" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG3143" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG3144" class="apexcharts-point-annotations"></g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-3">
                                                    <img src="assets/media/stock/600x600/img-47.jpg" class="" alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower Hill</a>
                                                    <span class="text-gray-500 fw-semibold d-block fs-7">Cody Fisher</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bold fs-6">$74,000</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>9.2%</span>
                                            <!--end::Label-->
                                        </td>
                                        <td class="text-end pe-12">
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;">
                                                <div id="apexchartsnli7k1xf" class="apexcharts-canvas apexchartsnli7k1xf apexcharts-theme-light" style="width: 92.25px; height: 50px;">
                                                    <svg id="SvgjsSvg3145" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="92.25" height="50">
                                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div>
                                                        </foreignObject>
                                                        <g id="SvgjsG3184" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3147" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3146">
                                                                <clipPath id="gridRectMasknli7k1xf">
                                                                    <rect id="SvgjsRect3150" width="98.25" height="54" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMasknli7k1xf"></clipPath>
                                                                <clipPath id="nonForecastMasknli7k1xf"></clipPath>
                                                                <clipPath id="gridRectMarkerMasknli7k1xf">
                                                                    <rect id="SvgjsRect3151" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG3158" class="apexcharts-grid">
                                                                <g id="SvgjsG3159" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                    <line id="SvgjsLine3162" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3163" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3160" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                                <line id="SvgjsLine3165" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3164" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3161" class="apexcharts-grid-borders" style="display: none;"></g>
                                                            <g id="SvgjsG3152" class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3153" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath3156" d="M 0 28.8C 2.483653846153846 28.8 4.612500000000001 45.6 7.096153846153847 45.6C 9.579807692307693 45.6 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 32.8 21.28846153846154 32.8C 23.772115384615386 32.8 25.90096153846154 45.6 28.384615384615387 45.6C 30.868269230769233 45.6 32.997115384615384 42.4 35.48076923076923 42.4C 37.96442307692308 42.4 40.09326923076924 28 42.57692307692308 28C 45.06057692307692 28 47.18942307692308 36.8 49.67307692307693 36.8C 52.156730769230776 36.8 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 36.8 63.86538461538462 36.8C 66.34903846153847 36.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 44 85.15384615384616 44C 87.6375 44 89.76634615384616 34.4 92.25 34.4C 92.25 34.4 92.25 34.4 92.25 48 L 0 48z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasknli7k1xf)" pathTo="M 0 28.8C 2.483653846153846 28.8 4.612500000000001 45.6 7.096153846153847 45.6C 9.579807692307693 45.6 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 32.8 21.28846153846154 32.8C 23.772115384615386 32.8 25.90096153846154 45.6 28.384615384615387 45.6C 30.868269230769233 45.6 32.997115384615384 42.4 35.48076923076923 42.4C 37.96442307692308 42.4 40.09326923076924 28 42.57692307692308 28C 45.06057692307692 28 47.18942307692308 36.8 49.67307692307693 36.8C 52.156730769230776 36.8 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 36.8 63.86538461538462 36.8C 66.34903846153847 36.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 44 85.15384615384616 44C 87.6375 44 89.76634615384616 34.4 92.25 34.4C 92.25 34.4 92.25 34.4 92.25 48 L 0 48z" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48 L 0 48"></path>
                                                                    <path id="SvgjsPath3157" d="M 0 28.8C 2.483653846153846 28.8 4.612500000000001 45.6 7.096153846153847 45.6C 9.579807692307693 45.6 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 32.8 21.28846153846154 32.8C 23.772115384615386 32.8 25.90096153846154 45.6 28.384615384615387 45.6C 30.868269230769233 45.6 32.997115384615384 42.4 35.48076923076923 42.4C 37.96442307692308 42.4 40.09326923076924 28 42.57692307692308 28C 45.06057692307692 28 47.18942307692308 36.8 49.67307692307693 36.8C 52.156730769230776 36.8 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 36.8 63.86538461538462 36.8C 66.34903846153847 36.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 44 85.15384615384616 44C 87.6375 44 89.76634615384616 34.4 92.25 34.4" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasknli7k1xf)" pathTo="M 0 28.8C 2.483653846153846 28.8 4.612500000000001 45.6 7.096153846153847 45.6C 9.579807692307693 45.6 11.708653846153847 44 14.192307692307693 44C 16.67596153846154 44 18.804807692307694 32.8 21.28846153846154 32.8C 23.772115384615386 32.8 25.90096153846154 45.6 28.384615384615387 45.6C 30.868269230769233 45.6 32.997115384615384 42.4 35.48076923076923 42.4C 37.96442307692308 42.4 40.09326923076924 28 42.57692307692308 28C 45.06057692307692 28 47.18942307692308 36.8 49.67307692307693 36.8C 52.156730769230776 36.8 54.28557692307693 44 56.769230769230774 44C 59.252884615384616 44 61.38173076923077 36.8 63.86538461538462 36.8C 66.34903846153847 36.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 41.6 78.0576923076923 41.6C 80.54134615384615 41.6 82.67019230769232 44 85.15384615384616 44C 87.6375 44 89.76634615384616 34.4 92.25 34.4" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3154" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                                </g>
                                                                <g id="SvgjsG3155" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3166" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3167" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3168" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                <g id="SvgjsG3169" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3185" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG3186" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG3187" class="apexcharts-point-annotations"></g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-3">
                                                    <img src="assets/media/stock/600x600/img-48.jpg" class="" alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9 Degree</a>
                                                    <span class="text-gray-500 fw-semibold d-block fs-7">Savannah Nguyen</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bold fs-6">$183,300</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-danger fs-base">
																		<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>0.4%</span>
                                            <!--end::Label-->
                                        </td>
                                        <td class="text-end pe-12">
                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;">
                                                <div id="apexcharts5zk8hisc" class="apexcharts-canvas apexcharts5zk8hisc apexcharts-theme-light" style="width: 92.25px; height: 50px;">
                                                    <svg id="SvgjsSvg3188" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="92.25" height="50">
                                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 25px;"></div>
                                                        </foreignObject>
                                                        <g id="SvgjsG3227" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3190" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3189">
                                                                <clipPath id="gridRectMask5zk8hisc">
                                                                    <rect id="SvgjsRect3193" width="98.25" height="54" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask5zk8hisc"></clipPath>
                                                                <clipPath id="nonForecastMask5zk8hisc"></clipPath>
                                                                <clipPath id="gridRectMarkerMask5zk8hisc">
                                                                    <rect id="SvgjsRect3194" width="96.25" height="52" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG3201" class="apexcharts-grid">
                                                                <g id="SvgjsG3202" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                    <line id="SvgjsLine3205" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3206" x1="0" y1="48" x2="92.25" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3203" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                                <line id="SvgjsLine3208" x1="0" y1="48" x2="92.25" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3207" x1="0" y1="1" x2="0" y2="48" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3204" class="apexcharts-grid-borders" style="display: none;"></g>
                                                            <g id="SvgjsG3195" class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3196" class="apexcharts-series" zIndex="0" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath3199" d="M 0 45.6C 2.483653846153846 45.6 4.612500000000001 29.6 7.096153846153847 29.6C 9.579807692307693 29.6 11.708653846153847 47.2 14.192307692307693 47.2C 16.67596153846154 47.2 18.804807692307694 32.8 21.28846153846154 32.8C 23.772115384615386 32.8 25.90096153846154 45.6 28.384615384615387 45.6C 30.868269230769233 45.6 32.997115384615384 34.4 35.48076923076923 34.4C 37.96442307692308 34.4 40.09326923076924 45.6 42.57692307692308 45.6C 45.06057692307692 45.6 47.18942307692308 40.8 49.67307692307693 40.8C 52.156730769230776 40.8 54.28557692307693 28 56.769230769230774 28C 59.252884615384616 28 61.38173076923077 44.8 63.86538461538462 44.8C 66.34903846153847 44.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 33.6 78.0576923076923 33.6C 80.54134615384615 33.6 82.67019230769232 28 85.15384615384616 28C 87.6375 28 89.76634615384616 45.6 92.25 45.6C 92.25 45.6 92.25 45.6 92.25 48 L 0 48z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask5zk8hisc)" pathTo="M 0 45.6C 2.483653846153846 45.6 4.612500000000001 29.6 7.096153846153847 29.6C 9.579807692307693 29.6 11.708653846153847 47.2 14.192307692307693 47.2C 16.67596153846154 47.2 18.804807692307694 32.8 21.28846153846154 32.8C 23.772115384615386 32.8 25.90096153846154 45.6 28.384615384615387 45.6C 30.868269230769233 45.6 32.997115384615384 34.4 35.48076923076923 34.4C 37.96442307692308 34.4 40.09326923076924 45.6 42.57692307692308 45.6C 45.06057692307692 45.6 47.18942307692308 40.8 49.67307692307693 40.8C 52.156730769230776 40.8 54.28557692307693 28 56.769230769230774 28C 59.252884615384616 28 61.38173076923077 44.8 63.86538461538462 44.8C 66.34903846153847 44.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 33.6 78.0576923076923 33.6C 80.54134615384615 33.6 82.67019230769232 28 85.15384615384616 28C 87.6375 28 89.76634615384616 45.6 92.25 45.6C 92.25 45.6 92.25 45.6 92.25 48 L 0 48z" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48 L 0 48"></path>
                                                                    <path id="SvgjsPath3200" d="M 0 45.6C 2.483653846153846 45.6 4.612500000000001 29.6 7.096153846153847 29.6C 9.579807692307693 29.6 11.708653846153847 47.2 14.192307692307693 47.2C 16.67596153846154 47.2 18.804807692307694 32.8 21.28846153846154 32.8C 23.772115384615386 32.8 25.90096153846154 45.6 28.384615384615387 45.6C 30.868269230769233 45.6 32.997115384615384 34.4 35.48076923076923 34.4C 37.96442307692308 34.4 40.09326923076924 45.6 42.57692307692308 45.6C 45.06057692307692 45.6 47.18942307692308 40.8 49.67307692307693 40.8C 52.156730769230776 40.8 54.28557692307693 28 56.769230769230774 28C 59.252884615384616 28 61.38173076923077 44.8 63.86538461538462 44.8C 66.34903846153847 44.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 33.6 78.0576923076923 33.6C 80.54134615384615 33.6 82.67019230769232 28 85.15384615384616 28C 87.6375 28 89.76634615384616 45.6 92.25 45.6" fill="none" fill-opacity="1" stroke="#f8285a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask5zk8hisc)" pathTo="M 0 45.6C 2.483653846153846 45.6 4.612500000000001 29.6 7.096153846153847 29.6C 9.579807692307693 29.6 11.708653846153847 47.2 14.192307692307693 47.2C 16.67596153846154 47.2 18.804807692307694 32.8 21.28846153846154 32.8C 23.772115384615386 32.8 25.90096153846154 45.6 28.384615384615387 45.6C 30.868269230769233 45.6 32.997115384615384 34.4 35.48076923076923 34.4C 37.96442307692308 34.4 40.09326923076924 45.6 42.57692307692308 45.6C 45.06057692307692 45.6 47.18942307692308 40.8 49.67307692307693 40.8C 52.156730769230776 40.8 54.28557692307693 28 56.769230769230774 28C 59.252884615384616 28 61.38173076923077 44.8 63.86538461538462 44.8C 66.34903846153847 44.8 68.47788461538462 46.4 70.96153846153847 46.4C 73.44519230769231 46.4 75.57403846153846 33.6 78.0576923076923 33.6C 80.54134615384615 33.6 82.67019230769232 28 85.15384615384616 28C 87.6375 28 89.76634615384616 45.6 92.25 45.6" pathFrom="M 0 48 L 0 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48" fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3197" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                                </g>
                                                                <g id="SvgjsG3198" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3209" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3210" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3211" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                <g id="SvgjsG3212" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3228" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG3229" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG3230" class="apexcharts-point-annotations"></g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 14-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gx-5 gx-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-5 mb-xl-0">
                    <!--begin::Chart widget 31-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Warephase stats</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-end pt-0">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_31_chart" class="w-100 h-300px">
                                <div style="position: relative; width: 100%; height: 100%;">
                                    <div aria-hidden="true" style="position: absolute; width: 316px; height: 300px;">
                                        <div>
                                            <canvas class="am5-layer-0" width="395" height="375" style="position: absolute; top: 0px; left: 0px; width: 316px; height: 300px;"></canvas>
                                            <canvas class="am5-layer-30" width="395" height="375" style="position: absolute; top: 0px; left: 0px; width: 316px; height: 300px;"></canvas>
                                        </div>
                                    </div>
                                    <div class="am5-html-container" style="position: absolute; pointer-events: none; overflow: hidden; width: 316px; height: 300px;"></div>
                                    <div class="am5-reader-container" role="alert" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px);"></div>
                                    <div class="am5-focus-container" role="graphics-document" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 316px; height: 300px;">
                                        <div role="button" aria-label="Zoom Out" aria-hidden="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div>
                                        <div tabindex="0" role="checkbox" aria-label="Revenue; Press ENTER to toggle" aria-checked="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div>
                                        <div tabindex="0" role="checkbox" aria-label="Expense; Press ENTER to toggle" aria-checked="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div>
                                    </div>
                                    <div class="am5-tooltip-container">
                                        <div role="tooltip" aria-hidden="true" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px); pointer-events: none;">Revenue:
                                            Expense:
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 31-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Chart widget 24-->
                    <div class="card card-flush overflow-hidden h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header py-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Human Resources</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
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
                        <div class="card-body pt-0">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px">
                                <div style="position: relative; width: 100%; height: 100%;">
                                    <div aria-hidden="true" style="position: absolute; width: 725px; height: 300px;">
                                        <div>
                                            <canvas class="am5-layer-0" width="906" height="375" style="position: absolute; top: 0px; left: 0px; width: 725px; height: 300px;"></canvas>
                                            <canvas class="am5-layer-30" width="906" height="375" style="position: absolute; top: 0px; left: 0px; width: 725px; height: 300px;"></canvas>
                                        </div>
                                    </div>
                                    <div class="am5-html-container" style="position: absolute; pointer-events: none; overflow: hidden; width: 725px; height: 300px;"></div>
                                    <div class="am5-reader-container" role="alert" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(1px, 1px, 1px, 1px);"></div>
                                    <div class="am5-focus-container" role="graphics-document" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 725px; height: 300px;">
                                        <div role="button" aria-label="Zoom Out" aria-hidden="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div>
                                    </div>
                                    <div class="am5-tooltip-container"></div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart widget 24-->
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