@extends('layouts.master')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-customer-table-filter="search" id="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <!--begin::Filter-->
                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black"></path>
                                    </svg>
                                </span>
                               Filter
                            </button>
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-4 text-dark fw-bolder">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Separator-->
                                <!--begin::Content-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fs-5 fw-bold mb-3">Month:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid fw-bolder select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-customer-table-filter="month" data-dropdown-parent="#kt-toolbar-filter" data-select2-id="select2-data-10-k6c7" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-12-w6h4"></option>
                                            <option value="aug">August</option>
                                            <option value="sep">September</option>
                                            <option value="oct">October</option>
                                            <option value="nov">November</option>
                                            <option value="dec">December</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-7qi5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bolder" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-tyuj-container" aria-controls="select2-tyuj-container"><span class="select2-selection__rendered" id="select2-tyuj-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fs-5 fw-bold mb-3">Payment Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex flex-column flex-wrap fw-bold" data-kt-customer-table-filter="payment_type">
                                            <!--begin::Option-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                <input class="form-check-input" type="radio" name="payment_type" value="all" checked="checked">
                                                <span class="form-check-label text-gray-600">All</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                <input class="form-check-input" type="radio" name="payment_type" value="visa">
                                                <span class="form-check-label text-gray-600">Visa</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                                <input class="form-check-input" type="radio" name="payment_type" value="mastercard">
                                                <span class="form-check-label text-gray-600">Mastercard</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="payment_type" value="american_express">
                                                <span class="form-check-label text-gray-600">American Express</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-customer-table-filter="reset">Reset</button>
                                        <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-customer-table-filter="filter">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            @if(Request::get('status') == '0')
                                <a type="button" href=" {{route('customers.index')}}" class="btn btn-light-primary me-3">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black"></rect>
                                        <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black"></path>
                                        <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4"></path>
                                    </svg>
                                </span>
                                    Danh sách
                                </a>
                            @else
                                <a type="button" href=" {{route('customers.index')}}?status=0" class="btn btn-light-primary me-3">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black"></rect>
                                        <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black"></path>
                                        <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4"></path>
                                    </svg>
                                </span>
                                    Thùng rác
                                </a>
                            @endif

                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" id="modal_customer" data-bs-target="#kt_modal_add_customer">Thêm khách hàng</button>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0" id="customers-list">
                    <!--begin::Table-->
                    @include('pages.admin.customers.pagination')
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Modals-->
            <!--begin::Modal - Customers - Add-->
            <div class="modal fade" id="kt_modal_add_customer" tabindex="-1"  aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-1000px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" id="add_customer_form">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_customer_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Add a Customer</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div id="kt_modal_add_customer_close"  data-bs-dismiss="modal" class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                    <!--begin::Input group-->
                                <div class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
                                    <div class="d-flex flex-column gap-2 gap-lg-1 w-100 w-lg-450px me-lg-10">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Họ và tên</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="name" id="name" value="">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Ngày sinh</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="date_of_birth" value="">
                                                <p></p>
                                            </div>
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Số điện thoại</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="phone" value="">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="fs-6 fw-bold mb-2">
                                                    <span class="required">Email</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Email address must be active" aria-label="Email address must be active"></i>
                                                </label>
                                                <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>

                                        </div>
                                        <div class="row mb-3">
                                            <label class="fs-6 fw-bold mb-2">Ghi chú</label>
                                            <textarea class="form-control form-control-solid" rows="3" name="notes" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-row-fluid gap-2 gap-lg-1">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Địa chỉ</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="address" value="">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Mã số thuế</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="tax_code" value="">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Facebook</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="facebook" value="">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="fs-6 fw-bold mb-2">Loại khách hàng
                                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Select a discount type that will be applied to this product" data-bs-original-title="Select a discount type that will be applied to this product" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </label>
                                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-1 row-cols-xl-2 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']" data-kt-initialized="1">
                                                    <div class="col">
                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio" name="customer_type" value="1" checked="checked">
                                                            </span>
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 d-block">Cá nhân</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio" name="customer_type" value="2">
                                                            </span>
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 d-block">Công ty</span>
                                                            </span>
                                                        </label>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" id="kt_modal_add_customer_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Hủy bỏ</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                    <span class="indicator-label">Thêm</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                            <div></div>
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>

            <div class="modal fade" id="kt_modal_edit" tabindex="-1"  aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-1000px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" id="edit_customer_form">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_customer_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Add a Customer</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div id="kt_modal_add_customer_close"  data-bs-dismiss="modal" class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <!--begin::Input group-->
                                <div class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
                                    <div class="d-flex flex-column gap-2 gap-lg-1 w-100 w-lg-450px me-lg-10">
                                        <input type="text" class="form-control form-control-solid" hidden="true" placeholder="" name="id" id="id_edit" value="">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Họ và tên</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="name" id="name_edit" value="">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Ngày sinh</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="date_of_birth_edit" value="">
                                                <p></p>
                                            </div>
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Số điện thoại</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="phone_edit" value="">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="fs-6 fw-bold mb-2">
                                                    <span class="required">Email</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Email address must be active" aria-label="Email address must be active"></i>
                                                </label>
                                                <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>

                                        </div>
                                        <div class="row mb-3">
                                            <label class="fs-6 fw-bold mb-2">Ghi chú</label>
                                            <textarea class="form-control form-control-solid" rows="3" name="notes" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-row-fluid gap-2 gap-lg-1">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Địa chỉ</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="address_edit" value="">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Mã số thuế</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="tax_code_edit" value="">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="required fs-6 fw-bold mb-2">Facebook</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="facebook_edit" value="">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="fs-6 fw-bold mb-2">Loại khách hàng
                                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Select a discount type that will be applied to this product" data-bs-original-title="Select a discount type that will be applied to this product" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </label>
                                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-1 row-cols-xl-2 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']" data-kt-initialized="1">
                                                    <div class="col">
                                                        <label  class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio" name="customer_type" id="customer_type_edit_1" value="1">
                                                            </span>
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 d-block">Cá nhân</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio" name="customer_type" id="customer_type_edit_2"  value="2">
                                                            </span>
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 d-block">Công ty</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" id="kt_modal_add_customer_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Hủy bỏ</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                    <span class="indicator-label">Thêm</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                            <div></div>
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>

            <div class="modal fade" tabindex="-1" id="kt_modal_trash">
                <div class="modal-dialog">
                    <form id="update_status_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Thông báo</h3>
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                </div>
                            </div>
                            <div class="modal-body">
                                <p>Bạn có muốn thêm vào thùng rác!</p>
                                <input name="id" id="idUpdateStatus" value="" hidden />
                                <input name="status" value="0" hidden />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Đồng ý</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
@push('style')
    <link rel="stylesheet" href="https://unpkg.com/intro.js/introjs.css">
    <style>

    </style>
@endpush

@push('script')
    <script src=" {{asset('assets/js/custom/apps/customers/list/export.js') }}"></script>
    <script src=" {{asset('assets/js/custom/apps/customers/list/list.js') }}"></script>
    <script src=" {{asset('assets/js/custom/apps/customers/add.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //Clear errors
            $("#modal_customer").on('click',function (){
                clearErrors();
            })

            //Hanlde submit adding form
            $("#add_customer_form").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: '{{ route('customers.store') }}',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(data) {
                        if (data.errors) {
                            let error = data.errors
                            handleFieldError("#name", error.name);
                        }else{
                            $('#customers-list').html(data);
                            $('#kt_modal_add_customer').modal('hide');
                            clearErrors();
                            Swal.fire({
                                text: "Thêm mới thành công!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    },
                })
            })

            //Hanlde submit updating form
            $("#edit_customer_form").submit(function(e) {
                e.preventDefault();

                let id = $('#id_edit').val();

                $.ajax({
                    url: '{{route('customers.update',':id')}}'.replace(':id', id),
                    type: 'PUT',
                    data: $(this).serialize(),
                    success: function(data) {
                        if (data.errors) {
                            let error = data.errors
                            handleFieldError("#name_edit", error.name);
                        }else{
                            $('#customers-list').html(data);
                            $('#kt_modal_edit').modal('hide');
                            clearErrors();
                            Swal.fire({
                                text: "Cập nhật thông tin thành công!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "OK, Got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    }
                });
            });

            //Handling update status 0
            $('#update_status_form').submit(function(e) {
                e.preventDefault();
                let id = $('#idUpdateStatus').val();

                $.ajax({
                    url: '{{route('customers.update',':id')}}'.replace(':id', id),
                    type: 'PUT',
                    data: $(this).serialize(),
                    success: function(data) {
                        $('#customers-list').html(data);
                        $('#kt_modal_trash').modal('hide');
                        Swal.fire({
                            text: "Đã thêm vào thùng rác!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "OK, Got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    },
                    error: function(err){
                        console.log(err);
                    }
                });
            })

            //Handling update status 1
            $('#restore_form').submit(function(e) {
                e.preventDefault();

                let id = $('#idRestore').val();

                $.ajax({
                    url: '/dien-tich/' + id,
                    type: 'PUT',
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.status == true) {
                            $('#modal_confirm_restore').modal('hide');
                            window.location.reload();
                            // alert('Khôi phục thành công!')
                        } else {

                        }
                    }
                });
            })

            //Handling remove data
            $('#remove_form_price_range').submit(function(e) {
                e.preventDefault();

                let id = $('#idDelete').val();

                $.ajax({
                    url: '/dien-tich/' + id,
                    type: 'DELETE',
                    dataType: 'json',
                    data: {},
                    success: function(response) {
                        if (response.status == true) {
                            $('#modal_confirm_remove').modal('hide');
                            window.location.reload();
                            // alert('Xóa bảng ghi thành công!')
                        }
                    },
                    error: function(err) {
                        alert('Lỗi không thể xóa!');
                        $('#modal_confirm_remove').modal('hide');
                    }
                });
            })
        });

        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetchCustomers(page);
        });

        function openEdit(idEdit){
            $.ajax({
                url: "{{route('customers.edit',':id')}}".replace(':id', idEdit),
                method: 'GET',
                success: function(data) {
                    $('#id_edit').val(data.id);
                    $('#name_edit').val(data.name);
                    $('#date_of_birth_edit').val(data.date_of_birth);
                    $('#phone_edit').val(data.phone);
                    $('#email_edit').val(data.email);
                    $('#address_edit').val(data.address);
                    $('#tax_code_edit').val(data.tax_code);
                    $('#facebook_edit').val(data.facebook);
                    $('#notes_edit').val(data.notes);
                    if(data.customer_type == 1){
                        $('#customer_type_edit_1').attr('checked','checked');

                    }else{
                        $('#customer_type_edit_2').attr('checked','checked');
                        // $('#label_customer_type_edit_2').attr('class','btn btn-outline btn-outline-dashed active btn-active-light-primary d-flex text-start p-6');
                    }

                },
                error: function(err) {
                    if (err.status == 404) {
                        console.log('No query results for model');
                    }
                }
            });
        }

        function  openTrash(idUpdateStatus){
            $.ajax({
                url: "{{route('customers.edit',':id')}}".replace(':id', idUpdateStatus),
                method: 'GET',
                success: function(data) {
                    $('#idUpdateStatus').val(data.id);
                },
                error: function(err) {
                    if (err.status == 404) {
                        console.log('No query results for model');
                    }
                }
            });
        }

        function handleFieldError(selector, error) {
            const element = $(selector);
            const feedbackElement = element.siblings('p');
            if (error) {
                element.addClass('is-invalid border-danger');
                feedbackElement.addClass('invalid-feedback').html(error);
            } else {
                element.removeClass('is-invalid border-danger');
                feedbackElement.removeClass('invalid-feedback').html('');
            }
        }

        function clearErrors() {
            $('#add_customer_form')[0].reset();
            $("#name").removeClass('is-invalid border-danger')
                .siblings('p')
                .removeClass('invalid-feedback')
                .html('')
        }

        function fetchCustomers(page) {
            $.ajax({
                url: "{{route('customers.index')}}" + "?page=" + page,
                success: function (data) {
                    $('#customers-list').html(data);
                }
            });
        }

    </script>
@endpush
