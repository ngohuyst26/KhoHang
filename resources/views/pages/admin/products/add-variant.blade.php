@extends('layouts.master')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <form id="form_add_product" class="form" action="#" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card card-flush py-4">
                    <!--begin::Form-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Thêm sản phẩm cùng loại</h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required form-label">Tên sản phẩm</label>
                            <!--end::Label-->
                            <!--begin::Input-->

                            <input type="text" id="name" name="name" class="form-control mb-2" placeholder="Tên sản phẩm" value="{{$product->name}}">
                            <!--end::Input-->
                            <p></p>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Giá vốn</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" id="price" name="price" class="form-control mb-2" placeholder="Giá vốn" value="{{$product->productSku->first()->price}}">
                                <!--end::Input-->
                                <p></p>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-4 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Giá bán</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" id="sale_price" name="sale_price" class="form-control mb-2" placeholder="Giá bán" value="{{$product->productSku->first()->sale_price}}">
                                <!--end::Input-->
                                <p></p>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-4 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Tồn kho</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" id="inventory" name="inventory" class="form-control mb-2" placeholder="Tồn kho" value="{{$product->productSku->first()->inventory}}">
                                <!--end::Input-->
                                <p></p>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Danh mục sản phẩm</label>
                                <select name="category_id" id="category_id" class="form-select col-3 select-2" data-control="select2" data-placeholder="Select an option">
                                    @foreach($categories as $attribute)
                                        <option {{$product->category_id == $attribute->id ? 'selected' : ""}} value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                    @endforeach
                                </select>
                                <p></p>
                            </div>

                            <div class="col-6 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Nhà cung cấp</label>
                                <select name="supplier_id" id="supplier_id" class="form-select col-3 select-2" data-control="select2" data-placeholder="Select an option">
                                    @foreach($supplier as $attribute)
                                        <option {{$product->supplier_id == $attribute->id ? 'selected' : ""}} value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                    @endforeach
                                </select>
                                <p></p>
                            </div>
                        </div>

                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="form-label">Mô tả sản phẩm</label>
                            <textarea name="description" id="kt_docs_ckeditor_classic">
                                {{$product->description}}
                            </textarea>
                            <p></p>
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>

                <div class="card card-flush py-4 mt-10">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Hình ảnh sản phẩm</h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="fv-row">
                            <!--begin::Dropzone-->
                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                <!--begin::Message-->
                                <div class="dz-message needsclick">
                                    <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>
                                    <!--begin::Info-->
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to
                                            upload.</h3>
                                        <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Dropzone-->
                        </div>
                    </div>
                </div>
                @if($product->productSku->first()->optionValue->count() > 0)
                    {{--  Biến  thể--}}
                    <div class="card card-flush py-4 mt-10">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Biến thể</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="fv-row">
                                <div id="repeater">
                                    <div data-repeater-list="data">
                                        {{--                                    {{dd($product->productSku)}}--}}
                                        @foreach($product->productSku->first()->optionValue as $index => $optionValue)
                                            <div data-repeater-item class="repeater-item form-group row">
                                                <div class="mb-10 fv-row fv-plugins-icon-container col-3">
                                                    <!--begin::Label-->
                                                    <label class=" form-label">Tên biến thể</label>
                                                    <select name="data[{{$index}}][type]" class="form-select col-3 select-2" data-placeholder="Select an option">

                                                        <option {{$optionValue->option->id == $attribute->id ? 'selected' : ""}} value="{{$optionValue->option->id }}">{{ $optionValue->option->name }}</option>
                                                    </select>
                                                </div>
                                                <div class="mb-10 fv-row fv-plugins-icon-container col-4">
                                                    <!--begin::Label-->
                                                    <label class=" form-label">Giá trị của biến thể</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="data[{{$index}}][value]" value="{{$optionValue->name}}" class="tagify-input form-control" placeholder="Nhập giá trị của biến thể">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- End biến thể--}}
                @endif
                <button class="btn btn-primary mt-5"><i class="fs-2 ki-duotone ki-tablet-ok"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Lưu sản phẩm
                </button>
            </form>
            <!--end::Form-->
        </div>
    </div>

@endsection
@push('script')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/repeater.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="{{asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#kt_docs_ckeditor_classic'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });


        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: '{{ route('upload') }}',
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            paramName: "file",
            maxFiles: 5,
            maxFilesize: 5, // MB
            addRemoveLinks: true,
            parallelUploads: 5,
            autoProcessQueue: false,
            init: function () {
                var self = this; // Để sử dụng trong các hàm con
                console.log(self);
                this.on("processing", function () {
                    this.options.autoProcessQueue = true;
                });
                self.on("removedfile", function (file) {
                    console.log('File removed:', file);
                    if (file.name) {
                        // Gửi yêu cầu xóa đến máy chủ
                        $.ajax({
                            type: 'POST',
                            url: '{{route('delete.photo')}}',
                            data: {
                                id: file.id,
                                name: file.name,
                                _token: "{{ csrf_token() }}"
                            },
                            success: function (data) {
                                console.log('File has been successfully removed!!');
                                console.log(data);
                            },
                            error: function (e) {
                                console.log(e);
                            }
                        });
                    }
                    else {
                        console.log('File ID is missing.');
                    }
                });
                // Hiển thị các tệp tin đã tồn tại


            }
        })


        {{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}

        $(document).ready(function () {

            //Hanlde submit adding form
            $("#form_add_product").submit(function (e) {
                e.preventDefault();
                console.log($(this).serialize());
                $.ajax({
                    url: '{{route('sku.add',['product' => $product->id, 'skuId' => $product->productSku->first()->id])}}',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function (data) {
                        if (myDropzone.getQueuedFiles().length > 0 && isNumber({{$product->productSku->first()->id}})) {
                            myDropzone.options.params = {
                                sku_id: {{$product->productSku->first()->id}} // Truyền product ID cùng với file upload
                            };
                            myDropzone.processQueue(); // Bắt đầu tải lên các file
                        }
                        Swal.fire({
                            text: "Thêm sản phẩm thành công",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                        window.location = "{{route('products.index')}}";
                    },
                    error: function (err) {
                        console.log(err)
                        if (err.responseJSON.errors) {
                            let error = err.responseJSON.errors;
                            handleFieldError("#name", error.other.name);
                            handleFieldError("#price", error.other.price);
                            handleFieldError("#sale_price", error.other.sale_price);
                            handleFieldError("#inventory", error.other.inventory);
                            handleFieldError("#category_id", error.other.category);
                            handleFieldError("#supplier_id", error.other.supplier);

                            //reset mess error
                            const mess = $('.is_valid');
                            const input = $('.is_valid_input');
                            input.removeClass('is-invalid border-danger');
                            mess.removeClass('invalid-feedback').html('');

                            if (error.stock) {
                                Object.entries(error.stock).forEach(([key, messages]) => {
                                    console.log(messages);
                                    handleFieldErrorArray(`#${key}`, messages);
                                });
                            }
                            if (error.price) {
                                Object.entries(error.price).forEach(([key, messages]) => {
                                    handleFieldErrorArray(`#${key}`, messages);
                                });
                            }

                            if (error.sale_price) {
                                Object.entries(error.sale_price).forEach(([key, messages]) => {
                                    handleFieldErrorArray(`#${key}`, messages);
                                });
                            }

                            Swal.fire({
                                text: "Vui lòng kiểm tra lại các trường đã nhập",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Cancel",
                                customClass: {
                                    confirmButton: "btn btn-danger"
                                }
                            });
                        }
                        if (err.status == 404) {
                            console.log('No query results for model');
                        }
                    }
                })
            })
        });

        function isNumber(value) {
            return typeof value === 'number' && !isNaN(value);
        }

        function handleFieldError(selector, error) {
            const element = $(selector);
            // console.log(selector);
            const feedbackElement = element.siblings('p');
            if (error) {
                element.addClass('is-invalid border-danger');
                feedbackElement.addClass('invalid-feedback').html(error);
            }
            else {
                element.removeClass('is-invalid border-danger');
                feedbackElement.removeClass('invalid-feedback').html('');
            }
        }

        function handleFieldErrorArray(selector, error) {
            const element = $(selector);
            // console.log(selector);
            const feedbackElement = element.siblings('p');
            if (error && selector) {
                console.log('haha');
                element.addClass('is-invalid border-danger');
                feedbackElement.addClass('invalid-feedback').html(error);
            }
        }

        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetchCustomers(page);
        });

        function clearErrors() {
            $('#form_add_product')[0].reset();
            $("#name").removeClass('is-invalid border-danger')
                .siblings('p')
                .removeClass('invalid-feedback')
                .html('')
        }
    </script>
@endpush
