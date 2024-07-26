<div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    <div class="table-responsive">
        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_customers_table">
            <!--begin::Table head-->
            <thead>
            <!--begin::Table row-->
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="
													" style="width: 29.25px;">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1">
                    </div>
                </th>
                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 145.688px;">Customer Name</th>
                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 100px;">Phone</th>
                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 190.9px;">Email</th>
                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Payment Method: activate to sort column ascending" style="width: 145.688px;">Type</th>
                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 152.225px;">Created Date</th>
                <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 111.262px;">Actions</th>
            </tr>
            <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">
            @foreach( $customers as $item)
                <tr class="odd">
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1">
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Name=-->
                    <td>
                        <span class="text-gray-800 text-hover-primary mb-1">{{$item->name}}</span>
                    </td>
                    <!--end::Name=-->
                    <!--begin::Email=-->
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">{{$item->phone}}</a>
                    </td>
                    <!--end::Email=-->
                    <!--begin::Company=-->
                    <td>{{$item->email}}</td>
                    <!--end::Company=-->
                    <!--begin::Payment method=-->
                    <td data-filter="mastercard">
                        {{$item->customer_type == 1 ? 'Cá nhân': 'Công ty'}}
                    </td>
                    <!--end::Payment method=-->
                    <!--begin::Date=-->
                    <td data-order="2020-12-14T20:43:00+07:00">{{$item->created_at}}</td>
                    <!--end::Date=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        @if($status == '0')
                            <button onclick="openRestore({{$item->id}})" data-bs-toggle="modal" data-bs-target="#kt_modal_restore"
                                    class="btn btn-light btn-flex btn-center btn-sm ">
                                <span class="svg-icon svg-icon-2">
                                    @include('icons.restore')
                                </span>
                            </button>
                            <button onclick="openDelete({{$item->id}})" data-bs-toggle="modal" data-bs-target="#kt_modal_delete"
                                    class="btn btn-light btn-flex btn-center btn-sm ">
                                <span class="svg-icon svg-icon-2">
                                    @include('icons.delete')
                                </span>
                            </button>
                        @else
                            <button onclick="openEdit({{$item->id}})" data-bs-toggle="modal" data-bs-target="#kt_modal_edit"
                                    class="btn btn-light btn-flex btn-center btn-sm ">
                                <span class="svg-icon svg-icon-2">
                                    @include('icons.edit')
                                </span>
                            </button>
                            <button onclick="openTrash({{$item->id}})" data-bs-toggle="modal" data-bs-target="#kt_modal_trash"
                                    class="btn btn-light btn-flex btn-center btn-sm ">
                                <span class="svg-icon svg-icon-2">
                                    @include('icons.trash')
                                </span>
                            </button>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
            <!--end::Table body-->
        </table>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
            <div class="dataTables_length" id="kt_customers_table_length">
                <label><select name="kt_customers_table_length" aria-controls="kt_customers_table" class="form-select form-select-sm form-select-solid">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select></label></div>
        </div>
        <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
            {{$customers->links()}}
        </div>
    </div>
</div>
