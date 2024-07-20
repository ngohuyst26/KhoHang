<div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="/">
            <img alt="Logo" src="{{ asset('assets/media/logos/fpt.png') }}" class="h-45px logo"/>
        </a>
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
            <span class="svg-icon svg-icon-1 rotate-180">
                @include('icons.angle-double-right')
            </span>
        </div>
    </div>
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span data-intro="Tất cả mọi người sẽ thấy chức năng này,..." class="menu-section text-muted text-uppercase fs-8 ls-1">Tìm trọ</span>
                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <div class="menu-link">
                        <div class="menu-icon">
                            <div class="svg-icon svg-icon-2">
                                @include('icons.layout-4-blocks')
                            </div>
                        </div>
                        <span class="menu-title">Quản lý hàng hóa</span>
                        <span class="menu-arrow"></span>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="/">
                                <div class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </div>
                                <div class="menu-title">Thêm hàng hóa</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="">
                                <div class="menu-bullet">
                                    <div class="bullet bullet-dot"></div>
                                </div>
                                <div class="menu-title">Danh sách hàng hóa</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <div class="menu-link">
                        <div class="menu-icon">
                            <div class="svg-icon svg-icon-2">
                                @include('icons.location-arrow')
                            </div>
                        </div>
                        <span class="menu-title">Danh mục hàng hóa</span>
                        <span class="menu-arrow"></span>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="/">
                                <div class="menu-bullet">
                                    <div class="bullet bullet-dot"></div>
                                </div>
                                <span class="menu-title">Thêm danh mục</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="">
                                <div class="menu-bullet">
                                    <div class="bullet bullet-dot"></div>
                                </div>
                                <span class="menu-title">Danh sách danh mục</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <div class="menu-link">
                        <div class="menu-icon">
                            <div class="svg-icon svg-icon-2">
                                @include('icons.interselect')
                            </div>
                        </div>
                        <span class="menu-title">Thương hiệu</span>
                        <span class="menu-arrow"></span>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="/">
                                <div class="menu-bullet">
                                    <div class="bullet bullet-dot"></div>
                                </div>
                                <span class="menu-title">Thêm danh hiệu</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="">
                                <div class="menu-bullet">
                                    <div class="bullet bullet-dot"></div>
                                </div>
                                <span class="menu-title">Danh sách danh hiệu</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <div class="menu-link">
                        <div class="menu-icon">
                            <div class="svg-icon svg-icon-2">
                                @include('icons.dollar')
                            </div>
                        </div>
                        <span class="menu-title">Nhà cung cấp</span>
                        <span class="menu-arrow"></span>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="/">
                                <div class="menu-bullet">
                                    <div class="bullet bullet-dot"></div>
                                </div>
                                <span class="menu-title">Thêm nhà cung cấp</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="">
                                <div class="menu-bullet">
                                    <div class="bullet bullet-dot"></div>
                                </div>
                                <span class="menu-title">Danh sách nhà cung cấp</span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-content">
                        <div class="separator mx-1 my-4"></div>
                    </div>
                </div>

                <div class="menu-item">
                    <a class="menu-link" href="#" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <div class="menu-icon">
                            @include('icons.contact')
                        </div>
                        <span class="menu-title">Tài khoản</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="javascript:;">
                        <div class="menu-icon">
                            <div class="svg-icon svg-icon-2">
                                @include('icons.code')
                            </div>
                        </div>
                        <span class="menu-title">Phiên bản v1.0.0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::check())
        <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
            <div class="user-info mb-3">
                <span class="user-name">Xin chào, {{ Auth::user()->name }}!</span>
            </div>
            <a href="#" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" title=":( tại sao bạn rời đi?">
                <span class="btn-label">Đăng xuất</span>
            </a>
        </div>
    @else
        <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
            <a href="#" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" title=":( tại sao bạn rời đi?">
                <span class="btn-label">Đăng nhập</span>
            </a>
        </div>
    @endif

</div>
