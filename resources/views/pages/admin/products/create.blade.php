@extends('layouts.master')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <form id="form_add_product" class="form" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card card-flush py-4">
                    <!--begin::Form-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Thông tin sản phẩm</h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="row">
                            <div class="col-6 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Tên sản phẩm</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" id="name" name="name" class="form-control mb-2" placeholder="Tên sản phẩm" value="">
                                <!--end::Input-->
                                <p></p>
                            </div>
                            <div class="col-6 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="form-label">Mã vạch</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" id="barcode" name="barcode" class="form-control mb-2" placeholder="Mã vạch của sản phẩm" value="">
                                <!--end::Input-->
                                <p></p>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Giá vốn</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" id="price" name="price" class="form-control mb-2" placeholder="Giá vốn" value="">
                                <!--end::Input-->
                                <p></p>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-4 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Giá bán</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" id="sale_price" name="sale_price" class="form-control mb-2" placeholder="Giá bán" value="">
                                <!--end::Input-->
                                <p></p>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-4 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Tồn kho</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" id="inventory" name="inventory" class="form-control mb-2" placeholder="Tồn kho" value="">
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
                                        <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                    @endforeach
                                </select>
                                <p></p>
                            </div>

                            <div class="col-6 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Nhà cung cấp</label>
                                <select name="supplier_id" id="supplier_id" class="form-select col-3 select-2" data-control="select2" data-placeholder="Select an option">
                                    @foreach($supplier as $attribute)
                                        <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                    @endforeach
                                </select>
                                <p></p>
                            </div>
                        </div>

                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="form-label">Mô tả sản phẩm</label>
                            <textarea name="description" id="kt_docs_ckeditor_classic">
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
                {{-- Biến thể--}}
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
                                    <div data-repeater-item class="repeater-item form-group row">
                                        <div class="mb-10 fv-row fv-plugins-icon-container col-3">
                                            <!--begin::Label-->
                                            <label class=" form-label">Tên biến thể</label>
                                            <select name="data[0][type]" class="form-select col-3 select-2" data-placeholder="Select an option">
                                                @foreach($options as $attribute)
                                                    <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container col-4">
                                            <!--begin::Label-->
                                            <label class=" form-label">Giá trị của biến thể</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="data[0][value]" class="tagify-input form-control" placeholder="Nhập giá trị của biến thể">
                                            <!--end::Input-->
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container col-3 mt-8">
                                            <button type="button" data-repeater-delete class="btn btn-flex btn-sm btn-light-danger mt-1">
                                                <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>Xóa
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_option">Tạo biến thể
                                </button>
                                <button type="button" data-repeater-create class="btn btn-flex btn-light-primary">
                                    <i class="ki-duotone ki-plus fs-3"></i>Thêm
                                </button>
                                <button type="button" id="generate-forms" class="btn btn-light-primary">Tạo kết hợp
                                </button>


                            </div>
                        </div>

                    </div>
                </div>
                {{-- End biến thể--}}
                <div class="card card-flush py-4 mt-10">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Kết hợp biến thể</h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div id="generated-forms">
                            <div data-repeater-list="generated" id="gen-form">

                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-5"><i class="fs-2 ki-duotone ki-tablet-ok"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Lưu sản phẩm
                </button>
            </form>
            <!--end::Form-->
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="kt_modal_add_option">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Tạo biến thể</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <form action="" id="add_option_form">
                    <div class="modal-body">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required form-label">Tên biến thể</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" id="name_option" name="name" class="form-control mb-2" placeholder="Tên biến thể" value="">
                            <!--end::Input-->
                            <p></p>
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                            Đóng
                        </button>
                        <button type="submit" id="add_option" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/repeater.min.css">
@endpush
@push('script')
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

        $(document).ready(function () {


            $("#kt_modal_add_option").on('click', function () {
                console.log('hahaha');
            })

            //Hanlde submit adding form
            $("#add_option_form").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '{{route('options.store')}}',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function (data) {
                        // $('#customers-list').html(data);
                        $('#kt_modal_add_option').modal('hide');
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
                        window.location = "{{route('products.create')}}";
                    },
                    error: function (err) {
                        if (err.responseJSON.errors) {
                            let errors = err.responseJSON.errors;
                            console.log(errors.name);
                            handleFieldError("#name_option", errors.name);

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


            const tagifyInstances = [];

            // Initialize Repeater
            $('#repeater').repeater({
                show: function () {
                    $(this).slideDown();
                    initializeTagify($(this).find('.tagify-input'));
                    $(this).find('.select-2').removeClass('select2-hidden-accessible');
                    $(this).find('.select-2-container').remove();
                    $(this).find('.select-2').select2();
                },
                hide: function (deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });

            // Initialize Tagify
            function initializeTagify(input) {
                const instance = new Tagify(input[0]);
                tagifyInstances.push(instance);
            }

            // Initialize Tagify for existing inputs
            $('.tagify-input').each(function () {
                initializeTagify($(this));
            });

            $('#generate-forms').on('click', function () {
                const repeaterItems = document.querySelectorAll('.repeater-item');
                const generatedForms = $('#gen-form');
                generatedForms.empty(); // Clear existing forms
                const allCombinations = generateCombinations(repeaterItems);
                console.log(allCombinations);
                allCombinations.forEach((combination, index) => {
                    const form = $('<div data-repeater-item class="repeater-item generated-form"></div>');

                    let formContent = '';

                    Object.keys(combination).forEach(key => {
                        formContent += `<input type="hidden" name="generated[${index}][${key}]" value="${combination[key]}">`;
                    });

                    formContent += `

                                    <div class="col-3">
                                          <label class=" form-label">Giá vốn</label>
                                          <input type="text" id="generated_${index}_price" class="is_valid_input tagify-input form-control" name="generated[${index}][price]" placeholder="Nhập giá" >
                                          <p class="is_valid"></p>
                                    </div>
                                    <div class="col-3">
                                          <label class=" form-label">Giá bán</label>
                                          <input type="text" id="generated_${index}_sale_price" class="is_valid_input tagify-input form-control" name="generated[${index}][sale_price]" placeholder="Nhập giá" >
                                          <p class="is_valid"></p>
                                    </div>
                                    <div class="col-3">
                                        <label class=" form-label">Tồn kho</label>
                                        <input type="text" id="generated_${index}_stock" class="is_valid_input tagify-input form-control" name="generated[${index}][stock]" placeholder="Nhập tồn kho" >
                                        <p class="is_valid"></p>
                                        </div>
                                    <div class="col-2">
                                        <button type="button" data-repeater-delete class="btn btn-flex btn-sm btn-light-danger mt-8"><i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>Xóa</button>
                                    </div>
                                    `;

                    // Add to HTML to show result
                    form.html(`
                            <div  class=" result-item d-flex gap-3 align-items-center mb-8">
                                <div class="col-2"><p class="fs-5 m-0 mt-2">${Object.entries(combination).map(([key, value]) => `${value}`).join(' - ')}</p></div>
                                ${formContent}
                            </div>
                        `);

                    generatedForms.append(form);
                });

                // Add Repeater to generated forms
                $('#generated-forms').repeater({
                    show: function () {
                        $(this).slideDown();
                        initializeTagify($(this).find('.tagify-input'));
                    },
                    hide: function (deleteElement) {
                        $(this).slideUp(deleteElement);
                    }
                });
            });

            function generateCombinations(items) {
                let result = [{}];
                items.forEach((item, index) => {
                    console.log(item)
                    const type = item.querySelector('select').value;
                    const tagifyInstance = tagifyInstances[index];
                    const tagifyValues = tagifyInstance.value.map(tag => tag.value); // Get array of tag values

                    result = result.flatMap(existingCombination =>
                        tagifyValues.map(value => ({
                            ...existingCombination,
                            [type]: value
                        }))
                    );
                });
                return result;
            }
        });

        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: '{{route('upload')}}',
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            paramName: "file",
            maxFiles: 5,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            autoProcessQueue: false, // Ngăn Dropzone tự động tải lên
            init: function () {
                this.on("processing", function () {
                    this.options.autoProcessQueue = true;
                });
            }
        });


        $(document).ready(function () {

            //Hanlde submit adding form
            $("#form_add_product").submit(function (e) {
                e.preventDefault();
                console.log($(this).serialize());
                $.ajax({
                    url: '{{route('products.store')}}',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function (data) {
                        console.log(isNumber(data.skuId));
                        if (myDropzone.getQueuedFiles().length > 0 && isNumber(data.skuId)) {
                            myDropzone.options.params = {
                                sku_id: data.skuId // Truyền product ID cùng với file upload
                            };
                            myDropzone.processQueue(); // Bắt đầu tải lên các file
                        }
                        Swal.fire({
                            text: "Tạo sản phẩm thành công",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                        window.location = "{{route('products.create')}}";
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
            } else {
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