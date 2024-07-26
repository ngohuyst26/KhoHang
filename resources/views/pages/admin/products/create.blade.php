@extends('layouts.master')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <form class="form" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
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
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required form-label">Tên sản phẩm</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="name" class="form-control mb-2" placeholder="Tên sản phẩm" value="">
                            <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required form-label">Giá vốn</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="price" class="form-control mb-2" placeholder="Giá vốn" value="">
                            <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required form-label">Giá bán</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="sale_price" class="form-control mb-2" placeholder="Giá bán" value="">
                            <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>

                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required form-label">Danh mục sản phẩm</label>
                            <select name="category_id" class="form-select col-3 select-2" data-control="select2" data-placeholder="Select an option">
                                @foreach($categories as $attribute)
                                    <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="form-label">Mô tả sản phẩm</label>
                            <textarea name="description" id="kt_docs_ckeditor_classic">
                            </textarea>
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
                            {{--                            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data"--}}
                            {{--                                  class="dropzone" id="#kt_dropzonejs_example_1">--}}
                            {{--                                @csrf--}}
                            {{--                            </form>--}}
                            <!--begin::Dropzone-->
                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                <!--begin::Message-->
                                <div class="dz-message needsclick">
                                    <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>
                                    <!--begin::Info-->
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                        <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Dropzone-->
                        </div>
                    </div>
                </div>
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
                                <button type="button" data-repeater-create class="btn btn-flex btn-light-primary">
                                    <i class="ki-duotone ki-plus fs-3"></i>Thêm
                                </button>
                                <button type="button" id="generate-forms" class="btn btn-light-primary">Tạo kết hợp</button>
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

@endsection
@push('script')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/repeater.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="{{asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
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
                allCombinations.forEach((combination, index) => {
                    const form = $('<div data-repeater-item class="repeater-item generated-form"></div>');

                    let formContent = '';

                    Object.keys(combination).forEach(key => {
                        console.log(key)
                        formContent += `<input type="hidden" name="generated[${index}][${key}]" value="${combination[key]}">`;
                    });

                    formContent += `
                                <div class="col-3">
                                    <label class=" form-label">Giá bán</label>
                                    <input type="text" class="tagify-input form-control" name="generated[${index}][price]" placeholder="Nhập giá" required>
                                </div>
                                <div class="col-3">
                                    <label class=" form-label">Tồn kho</label>
                                    <input type="text" class="tagify-input form-control" name="generated[${index}][stock]" placeholder="Nhập tồn kho" required>
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


        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: '{{route('products.store')}}',
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            paramName: "file",
            maxFiles: 5,
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            accept: function (file, done) {
                done();
            },
            success: function (file, response) {
                return console.log(response);
            },
        });
        // var maxFilesizeVal = 12;
        // var maxFilesVal = 2;
        //
        // // Note that the name "myDragAndDropUploader" is the camelized id of the form.
        // Dropzone.options.myDragAndDropUploader = {
        //
        //     paramName:"file",
        //     maxFilesize: maxFilesizeVal, // MB
        //     maxFiles: maxFilesVal,
        //     resizeQuality: 1.0,
        //     acceptedFiles: ".jpeg,.jpg,.png,.webp",
        //     addRemoveLinks: false,
        //     timeout: 60000,
        //     dictDefaultMessage: "Drop your files here or click to upload",
        //     dictFallbackMessage: "Your browser doesn't support drag and drop file uploads.",
        //     dictFileTooBig: "File is too big. Max filesize: "+maxFilesizeVal+"MB.",
        //     dictInvalidFileType: "Invalid file type. Only JPG, JPEG, PNG and GIF files are allowed.",
        //     dictMaxFilesExceeded: "You can only upload up to "+maxFilesVal+" files.",
        //     maxfilesexceeded: function(file) {
        //         this.removeFile(file);
        //         // this.removeAllFiles();
        //     },
        //     sending: function (file, xhr, formData) {
        //         $('#message').text('Image Uploading...');
        //     },
        //     success: function (file, response) {
        //         $('#message').text(response.success);
        //         console.log(response.success);
        //         console.log(response);
        //     },
        //     error: function (file, response) {
        //         $('#message').text('Something Went Wrong! '+response);
        //         console.log(response);
        //         return false;
        //     }
        // };
    </script>

    <script type="text/javascript">


    </script>
@endpush