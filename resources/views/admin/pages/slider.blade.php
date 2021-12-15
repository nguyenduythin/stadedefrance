@extends('admin.layouts.main')
@section('title', 'Slider')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">

            <!-- users list start -->
            <section class="app-user-list">

                <!-- list and filter start -->
                <div class="card">
                    <div class="card-body border-bottom">
                        <h4 class="card-title"> Slider</h4>
                    </div>
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-list-table table" id="DataTables_Table_User">
                            <thead class="table-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Thứ tự hiển thị</th>
                                     <th>Ảnh </th>
                                    <th>Tiêu đề </th>
                                    <th>Trang thái</th>
                                    <th>Mô Tả</th>
                                    <!-- <th>Mô Tả Chi Tiết</th> -->
                                    <th>Hành Động</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="modal fade show" id="modals-slide-in" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <h1 class="mb-1">Thêm mới Slider</h1>
                                        <p>Thêm mới slider vào danh sách của bạn!</p>
                                    </div>
                                    <form id="addForm" action="{{ route('slider.add.api') }}" method="POST"
                                        class="row gy-1 pt-75 add-new-user" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="id" hidden>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="modalEditUserFirstName">Ảnh slider</label>
                                            <input type="file" id="modalEditUserFirstName " name="image"
                                                class="form-control" accept="image/*" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditUserFirstName">Tiêu đề</label>
                                            <input type="text" id="modalEditUserFirstName " name="title"
                                                class="form-control" placeholder="Combo " />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditUserFirstName">Số thứ tự </label>
                                            <select class="form-control dt-full-name" id="getAllCate" name="no">
                                                <option value="1" id="option-1">1</option>
                                                <option value="2" id="option-2">2</option>
                                                <option value="3" id="option-3">3</option>
                                                <option value="4" id="option-4">4</option>
                                                <option value="5" id="option-5">5</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label" for="modalEditUserFirstName">Trạng thái </label>
                                            <select class="form-control dt-full-name" id="getAllCate" name="status">
                                                <option value="0">Ẩn</option>
                                                <option value="1">Hiển thị</option>

                                            </select>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="modalEditUserCountry">Mô Tả ngắn</label>
                                            <textarea class="form-control" name="short_description"
                                                placeholder="Mô tả !" id="short_description" cols="30"
                                                rows="2"></textarea>
                                        </div>



                                        <div class="col-12 text-center mt-2 pt-50">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                Discard
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- list and filter end -->
            </section>
            <!-- users list ends -->

        </div>
    </div>
</div>



<!-- Edit User Modal -->
<div class="modal fade show" id="editFormModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Sửa mới Sản phẩm</h1>
                    <p>Sửa mới sản phẩm của bạn !</p>
                </div>
                <form id="editForm" method="POST"
                    class="row gy-1 pt-75 add-new-user" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" hidden>
                    <div class="d-flex center">
                        <a href="#" class="me-25">
                            <img src="" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image"
                                height="100" width="100"  />
                        </a>
                        <!-- upload and reset button -->
                        <div class="d-flex align-items-end mt-75 ms-1">
                            <div>
                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                <input type="file" id="account-upload" name="image" hidden accept="image/*" />
                                <button type="button" id="account-reset"
                                    class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                <p class="mb-0">Loại tệp được phép: png, jpg, jpeg.</p>
                            </div>
                        </div>
                        <!--/ upload and reset button -->
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Tiêu đề</label>
                        <input type="text" id="modalEditUserFirstName " name="title"
                            class="form-control" placeholder="Combo " />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Số thứ tự </label>
                            <select class="form-control dt-full-name" id="getAllNo" name="no">
                                <option value="1" id="optionNo-1">1</option>
                                <option value="2" id="optionNo-2">2</option>
                                <option value="3" id="optionNo-3">3</option>
                                <option value="4" id="optionNo-4">4</option>
                                <option value="5" id="optionNo-5">5</option>
                            </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="modalEditUserFirstName">Trạng thái </label>
                        <select class="form-control dt-full-name" id="getAllCate" name="status">
                            <option value="0">Ẩn</option>
                            <option value="1" id="option-1">Hiển thị</option>

                        </select>
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="modalEditUserCountry">Mô Tả ngắn</label>
                        <textarea class="form-control" name="short_description"
                            placeholder="Mô tả !" id="short_description" cols="30"
                            rows="2"></textarea>
                    </div>
                    <div class="col-12 text-center mt-2 pt-50">
                        <button type="submit" class="btn btn-primary me-1">Lưu</button>
                        <button type="reset" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal" aria-label="Close">
                            Quay lại
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->

@endsection
@section('script')
<script>
    // liệt kê cate cho thẻ select category service
    
    $(function() {
        var e = $("#DataTables_Table_User");
        var t = $(".modal fade show"),
            a = $(".add-new-user"),
            s = $(".select2"),
            n = $(".dt-contact"),
            r = "app-user-view-account.html";
        var table = e.DataTable({
            "ajax": {
                "url": "{{ route('slider.list.api') }}",
                "type": "GET",
                "dataSrc": ""
            },
            columns: [
                {
                    data: null
                },
                {
                    data: "no"
                },
                {
                    data: "image"
                },
                {
                    data: "title"
                },
                {
                    data: "status"
                },
                {
                    data: "short_description"
                },
            ],
            columnDefs: [
                {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                },  
                {
                    targets: 1,
                    responsivePriority: 2,
                    render: function(e, t, a, s) {
                        var n = a.no;
                        if (n) {
                            return ('<span class="fw-bolder">' + n + '</span>')
                        }
                    },
                },
                {
                    targets: 2,
                    render: function(e, t, a, s) {
                        var n = a.image;
                        if (n) {
                            return ('<img src="/storage/' + n + '" class="me-75" height="60" width="60" alt="combo_avt"/>')
                        }
                    },
                },
                {
                    targets: 4,
                    render: function(e, t, a, s) {
                        var n = a.status;
                        if (n === 1) {
                            return ('<span class="badge  bg-warning badge-glow">Hiển thị </span>')
                        }else{
                            return ('<span class="badge  bg-dark badge-glow">Ẩn </span>')
                        }
                    },
                },
                {
                    targets: 6,
                    title: "Hành động",
                    orderable: !1,
                    render: function(e, t, a, s) {
                        return (
                            '<div class="btn-group"><a class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">' +
                            feather.icons["more-vertical"].toSvg({
                                class: "font-small-4",
                            }) +
                            '</a><div class="dropdown-menu dropdown-menu-end"><a href="#" id="detailUser" data-id="' + a.id + '"  data-bs-toggle="modal" data-bs-target="#detailUserModal" class="dropdown-item">' +
                            feather.icons["file-text"].toSvg({
                                class: "font-small-4 me-50",
                            }) +
                            'Details</a><a href="#" id="editFormBtn" data-id="' + a.id + '"  data-bs-toggle="modal" data-bs-target="#editFormModal" class="dropdown-item">' +
                            feather.icons["edit"].toSvg({
                                class: "font-small-4 me-50",
                            }) +
                            'Edit</a><a href="#" id="deleteUser" data-id="' + a.id + '" class="dropdown-item delete-record">' +
                            feather.icons["trash-2"].toSvg({
                                class: "font-small-4 me-50",
                            }) +
                            "Delete</a></div></div></div>"
                        );

                    },
                },
            ],
            order: [
                [1, "asc"]
            ],
            dom: '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l><"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>>t<"d-flex justify-content-between mx-2 row mb-1"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            language: {
                sLengthMenu: "Show _MENU_",
                search: "Search",
                searchPlaceholder: "Search..",
            },
            buttons: [
                {
                    text: "Thêm Mới",
                    className: "add-new btn btn-primary",
                    attr: {
                        "data-bs-toggle": "modal",
                        "data-bs-target": "#modals-slide-in",
                    },
                    init: function(e, t, a) {
                        $(t).removeClass("btn-secondary");
                    },
                },
            ],
            language: {
                paginate: {
                    previous: "&nbsp;",
                    next: "&nbsp;"
                }
            },
        });
        s.each(function() {
            var e = $(this);
            e.wrap('<div class="position-relative"></div>'),
                e.select2({
                    dropdownAutoWidth: !0,
                    width: "100%",
                    dropdownParent: e.parent(),
                });
        });

        a.length && (a.validate({
                errorClass: "error",
                rules: {
                    "no": {
                        required: !0
                    },
                    "image": {
                        required: !0
                    },
                    "title": {
                        required: !0,
                    },
                    "short_description": {
                        required: !0
                    },
                },
            }),
            a.on("submit", function(e) {
                e.preventDefault();
                var s = a.valid();
                var form = this;
                if (s) {
                $.ajax({
                    type: "POST",
                    url: $(form).attr('action'),
                    data: new FormData(form),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    async: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        if (data.code == 0) {
                            $.each(data.error, function(prefix, val) {
                                $(form).find('span' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $(form)[0].reset();
                            $('#modals-slide-in').modal("hide");
                            table.ajax.reload();
                            toastr.success(data.msg)
                        }
                    },
                    error: function(error) {
                        console.log("Thêm không thành công", error);
                    }
                })                    
                }
            }));
    table.on( 'order.dt search.dt', function () {
            table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    }).draw();

        $('body').on('click', '#deleteUser', function() {
            var id = $(this).data("id");
            Swal.fire({
                title: "Bạn có chắc chắn?",
                text: "Bạn sẽ không thể hoàn tác!",
                icon: "warning",
                showCancelButton: !0,
                cancelButtonText: 'Quay lại',
                confirmButtonText: "Đúng, Xóa!",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-outline-danger ms-1",
                },
                buttonsStyling: !1,
                }).then(function (t) {
                    if (t.value) {
                        $.ajax({
                            type:"DELETE",
                            url: "{{ route('slider.list.api') }}" + "/" + id,
                            headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                        success: function(){
                            table.ajax.reload();
                            toastr.success("Xóa Thành Công");
                        },
                        error:function () {
                            toastr.error("Xóa không Thành Công");
                        }
                    })
                    } 
                });
        });
      
        // get detail edit và checked các service đã có
        $('body').on('click', '#editFormBtn', async function() {
            $('#editForm')[0].reset();
            var id = $(this).data("id");
            $.get('<?= route("slider.list.api") ?>' + "/show/" + id, function(data) {
            var accountUploadImg = $("#account-upload-img"),
                accountUpload = $("#account-upload"),
                uploadedAvatar = $(".uploadedAvatar"),
                accountReset = $("#account-reset");
                if (uploadedAvatar) {
                accountUpload.on("change", function (ch) {
                    var n = new FileReader(),
                    uploadedAvatar = ch.target.files;
                    (n.onload = function () {
                    accountUploadImg && accountUploadImg.attr("src", n.result);
                    }),
                    n.readAsDataURL(uploadedAvatar[0]);
                }),
                accountReset.on("click", function () {
                    uploadedAvatar.attr("src",  ( data.image ? "/storage/"+data.image 
                    : "{{ asset('admin/images/img-default.png') }}") );
                    });
                };

                var form = $('#editForm');
                accountUploadImg.attr("src", ( data.image ? "/storage/"+ data.image : "{{ asset('admin/images/img-default.png') }}") );
                form.find('input[name="id"]').val(data.id);
                form.find('input[name="name"]').val(data.name);
                form.find('input[name="no"]').val(data.no);
                form.find('input[name="status"]').val(data.status);
                form.find('input[name="title"]').val(data.title);
                form.find('#short_description').val(data.short_description);
                if (data.status == 1 ) {
                    $('#option-1').prop('selected', true);
                }
                if (data.no == 1) {
                    $('#optionNo-1').prop('selected', true);
                    
                }
                if (data.no == 2) {
                    $('#optionNo-2').prop('selected', true);
                    
                }
                if (data.no == 3) {
                    $('#optionNo-3').prop('selected', true);
                    
                }
                if (data.no == 4) {
                    $('#optionNo-4').prop('selected', true);
                    
                }
                if (data.no == 5) {
                    $('#optionNo-5').prop('selected', true);
                    
                }

               
                 }, 'json')

        });
        // submit edit in db
        $('#editForm').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                type: "POST",
                url:  "{{ route('slider.update.api') }}",
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                async: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data.code == 0) {
                        toastr.warning(data.msg);
                    } else if (data.code == 1){
                        $(form)[0].reset();
                        $('#editFormModal').modal("hide");
                        table.ajax.reload();
                    }
                },
                error: function(error) {
                    console.log("Sửa mới không thành công", error);
                }
            })
        });

    });
</script>
@endsection