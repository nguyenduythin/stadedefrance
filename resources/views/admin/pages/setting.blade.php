@extends('admin.layouts.main')
@section('title', 'Setting')
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
                        <h4 class="card-title"> Cài đặt Thông tin cửa hàng</h4>
                    </div>
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-list-table table" id="DataTables_Table_User">
                            <thead class="table-light">
                                <tr>
                                    <th>Chế độ Hiển thị</th>
                                    <th>Logo</th>
                                    <th>Số điện thoại</th>
                                    <th>Email </th>
                                    <th>Giờ mở</th>
                                    <th>Giờ đóng</th>
                                    <th>Tác giả</th>

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
                                        <h1 class="mb-1">Thêm mới Thông tin</h1>
                                        <p>Thêm mới vào danh sách của bạn!</p>
                                    </div>
                                    <form id="addForm" action="{{ route('setting.add.api') }}" method="POST"
                                        class="row gy-1 pt-75 add-new-user" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="id" hidden>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="logo">Ảnh đại diện Sự kiện</label>
                                            <input type="file" id="logo " name="logo"
                                                class="form-control" accept="image/*" />
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="modalEditUserFirstName">Chế độ Hiển thị</label>
                                            <select name="display" class="form-control select2-icons" id="select2-icons">
                                                <option value="0" data-icon="eye-off"> Ẩn </option>
                                                <option value="1"  data-icon="eye"> Hiển thị</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="phone">Số điện thoại</label>
                                            <input type="text" id="phone " name="phone"
                                                class="form-control" placeholder="0XXXXXXXXX! " />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="text" id="email " name="email"
                                                class="form-control" placeholder="example@gmail.com! " />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditUserFirstName">Slogan</label>
                                            <input type="text" id="modalEditUserFirstName full_name" name="slogan"
                                                class="form-control" placeholder="slogan cửa hàng! " />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditUserFirstName">Tên Quản lý</label>
                                            <input type="text" id="modalEditUserFirstName full_name" name="author"
                                                class="form-control" placeholder="nhập tên! " />
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="fp-time">Giờ mở</label>
                                            <input type="text" id="fp-time" class="form-control flatpickr-time text-start flatpickr-input"
                                              name="open_store" placeholder="HH:MM" style="height:auto !important;" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="fp-time">Giờ đóng</label>
                                            <input type="text" id="fp-time" class="form-control flatpickr-time text-start flatpickr-input"
                                              name="closed_store" placeholder="HH:MM" style="height:auto !important;" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditUserCountry">Địa chỉ</label>
                                            <textarea class="form-control" name="address"
                                                placeholder="Nội dung!" id="address" cols="30"
                                                rows="2"></textarea>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditUserCountry">Về chúng tôi</label>
                                            <textarea class="form-control" name="about"
                                                placeholder="Nội dung!" id="about" cols="30"
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


                </div>
                <!-- list and filter end -->
            </section>
            <!-- users list ends -->

        </div>
    </div>
</div>


<!-- Detail service -->
<div class="modal fade show" id="detailUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Chi tiết Thông tin cửa hàng</h1>
                </div>
                <form id="detailUserForm"  method="POST"
                    class="row gy-1 pt-75 add-new-user" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="d-flex center justify-content-center ">
                        <a href="#" class="me-25">
                            <img src="" id="account-upload-img1" class="uploadedAvatar rounded me-50" alt="profile image"
                                height="150" width="150" name="logo" />
                        </a>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Số điện thoại</label>
                        <input type="text" id="modalEditUserFirstName full_name" name="phone"
                            class="form-control" placeholder="0XXXXXXXXX! "   disabled/>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Email</label>
                        <input type="email" id="modalEditUserFirstName full_name" name="email"
                            class="form-control" placeholder="example@gmail.com! "  disabled />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Slogan</label>
                        <input type="text" id="modalEditUserFirstName full_name" name="slogan"
                            class="form-control" placeholder="slogan cửa hàng! "  disabled />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Tên Quản lý</label>
                        <input type="text" id="modalEditUserFirstName full_name" name="author"
                            class="form-control" placeholder="nhập tên! " disabled />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="fp-time">Giờ mở</label>
                        <input type="text" id="fp-time" class="form-control flatpickr-time text-start flatpickr-input"
                          name="open_store" placeholder="HH:MM" style="height:auto !important;" disabled/>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="fp-time">Giờ đóng</label>
                        <input type="text" id="fp-time" class="form-control flatpickr-time text-start flatpickr-input"
                          name="closed_store" placeholder="HH:MM" style="height:auto !important;" disabled/>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserCountry">Địa chỉ</label>
                        <textarea class="form-control" name="address"
                            placeholder="Nội dung!" id="address" cols="30"
                            rows="2" disabled></textarea>
                    </div>
                    <div class="col-12 col-md-6 ">
                        <label class="form-label" for="modalEditUserCountry">Về chúng tôi</label>
                        <textarea class="form-control" name="about"
                            placeholder="Nội dung!" id="about" cols="30"
                            rows="2" disabled></textarea>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Detail service -->

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
                    <h1 class="mb-1">Sửa mới thông tin cửa hàng</h1>
                    <p>Sửa mới thông tin cửa hàng của bạn !</p>
                </div>
                <form id="editForm"  method="POST"
                    class="row gy-1 pt-75 add-new-user" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" hidden>
                    <div class="d-flex center col-12 col-md-6">
                        <a href="#" class="me-25">
                            <img src="" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image"
                                height="100" width="100" name="logo" />
                        </a>
                        <!-- upload and reset button -->
                        <div class="d-flex align-items-end mt-75 ms-1">
                            <div>
                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                <input type="file" id="account-upload" name="logo" hidden accept="image/*" />
                                <button type="button" id="account-reset"
                                    class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                <p class="mb-0">Loại tệp được phép: png, jpg, jpeg.</p>
                            </div>
                        </div>
                        <!--/ upload and reset button -->
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Chế độ Hiển thị</label>
                        <select name="display" class="form-control select2-icons" id="select2-icons">
                            <option value="0" data-icon="eye-off"> Ẩn </option>
                            <option value="1" id="option-1" data-icon="eye"> Hiển thị</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Số điện thoại</label>
                        <input type="text" id="modalEditUserFirstName full_name" name="phone"
                            class="form-control" placeholder="0XXXXXXXXX! " />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Email</label>
                        <input type="email" id="modalEditUserFirstName full_name" name="email"
                            class="form-control" placeholder="example@gmail.com! " />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Slogan</label>
                        <input type="text" id="modalEditUserFirstName full_name" name="slogan"
                            class="form-control" placeholder="slogan cửa hàng! " />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Tên Quản lý</label>
                        <input type="text" id="modalEditUserFirstName full_name" name="author"
                            class="form-control" placeholder="nhập tên! " />
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="fp-time">Giờ mở</label>
                        <input type="text" id="fp-time" class="form-control flatpickr-time text-start flatpickr-input"
                          name="open_store" placeholder="HH:MM" style="height:auto !important;" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="fp-time">Giờ đóng</label>
                        <input type="text" id="fp-time" class="form-control flatpickr-time text-start flatpickr-input"
                          name="closed_store" placeholder="HH:MM" style="height:auto !important;" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserCountry">Địa chỉ</label>
                        <textarea class="form-control" name="address"
                            placeholder="Nội dung!" id="address" cols="30"
                            rows="2"></textarea>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserCountry">Về chúng tôi</label>
                        <textarea class="form-control" name="about"
                            placeholder="Nội dung!" id="about" cols="30"
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
                "url": "{{ route('setting.list.api') }}",
                "type": "GET",
                "dataSrc": ""
            },
            columns: [
                {
                    data: "display"
                },
                {
                    data: "logo"
                },
                {
                    data: "phone"
                },
                {
                    data: "email"
                },
                {
                    data: "open_store"
                },
                {
                    data: "closed_store"
                },
                {
                    data: "author"
                },
            ],
            columnDefs: [
                // {
                //     "width": "25%",
                //     "targets": 4
                // },
                {
                    targets: 0,
                    render: function(e, t, a, s) {
                        var n = a.display;
                        if (n === 1) {
                            return ('<span class="badge  bg-warning badge-glow">Hiển thị </span>')
                        }else{
                            return ('<span class="badge  bg-dark badge-glow">Ẩn </span>')
                        }
                    },
                },
                {
                    targets: 1,
                    render: function(e, t, a, s) {
                        var n = a.logo;
                        if (n) {
                            return ('<img src="/storage/' + n + '" class="me-75" height="60" width="60" alt="combo_avt"/>')
                        }
                    },
                },
                {
                    targets: 7,
                    title: "Hành động",
                    orderable: !1,
                    render: function(e, t, a, s) {

                        return (
                            '<button class="btn btn-sm btn-icon"  id="detailUser" data-id="' + a.id + '"  data-bs-toggle="modal" data-bs-target="#detailUserModal"  >' +
                            feather.icons['file-text'].toSvg({ class: 'font-medium-2 text-body' }) +
                            '</i></button>' +
                            '<button class="btn btn-sm btn-icon"  id="editFormBtn" data-id="' + a.id + '"  data-bs-toggle="modal" data-bs-target="#editFormModal" >' +
                            feather.icons['edit'].toSvg({ class: 'font-medium-2 text-body' }) +
                            '</i></button>' +
                            '<button class="btn btn-sm btn-icon delete-record"  id="deleteUser" data-id="' + a.id + '" >' +
                            feather.icons['trash'].toSvg({ class: 'font-medium-2 text-body' }) +
                             '</button>'
                        );

                    },
                },
            ],
            order: [
                [1, "desc"]
            ],
            dom: '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l><"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>>t<"d-flex justify-content-between mx-2 row mb-1"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            language: {
                sLengthMenu: "Show _MENU_",
                search: "Search",
                searchPlaceholder: "Search..",
            },
            buttons: [
                {
                    text: "Thêm Mới ",
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
                    "logo": {
                        required: !0
                    },
                     "email": {
                        required: !0
                    },
                    "phone": {
                        required: !0
                    },
                    "open_store": {
                        required: !0,
                    },
                    "closed_store": {
                        required: !0,
                    },
                    "about": {
                        required: !0
                    },
                    "address": {
                        required: !0
                    },
                    "slogan": {
                        required: !0
                    },
                    "author": {
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
                    async: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        if (data.code == 0) {
                            toastr.error(data.msg)
                        }else if (data.code == 3){
                            toastr.warning(data.msg)
                        }else {
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
            })
            )
  
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
                            url: "{{ route('setting.list.api') }}" + "/" + id,
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
 
        //detail
        $('body').on('click', '#detailUser', function() {
            var id = $(this).data("id");
            $.get('<?= route("setting.list.api") ?>' + "/show/" + id, function(data) {
                var form = $('#detailUserForm');
                $('#account-upload-img1').attr("src", (  data.logo ? "/storage/"+ data.logo : "{{ asset('admin/images/img-default.png') }}") );
                form.find('input[name="id"]').val(data.id);
                form.find('input[name="slogan"]').val(data.slogan);
                form.find('input[name="author"]').val(data.author);
                form.find('input[name="email"]').val(data.email);
                form.find('input[name="phone"]').val(data.phone);
                form.find('input[name="closed_store"]').val(data.closed_store);
                form.find('input[name="open_store"]').val(data.open_store);
                form.find('#about').val(data.about);
                form.find('#address').val(data.address);
                 }, 'json')
        });
        //list service for edit
      
        // get detail edit và checked các service đã có
        $('body').on('click', '#editFormBtn', async function() {
            $('#editForm')[0].reset();
            var id = $(this).data("id");
            $.get('<?= route("setting.list.api") ?>' + "/show/" + id, function(data) {
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
                    uploadedAvatar.attr("src",  ( data.logo ? "/storage/"+data.logo 
                    : "{{ asset('admin/images/img-default.png') }}") );
                    });
                };

                var form = $('#editForm');
                accountUploadImg.attr("src", (  data.logo ? "/storage/"+ data.logo : "{{ asset('admin/images/img-default.png') }}") );
                form.find('input[name="id"]').val(data.id);
                form.find('input[name="slogan"]').val(data.slogan);
                form.find('input[name="author"]').val(data.author);
                form.find('input[name="email"]').val(data.email);
                form.find('input[name="phone"]').val(data.phone);
                form.find('input[name="closed_store"]').val(data.closed_store);
                form.find('input[name="open_store"]').val(data.open_store);
                if (data.display == 1 ) {
                    $('#option-1').prop('selected', true);
                }
                form.find('#about').val(data.about);
                form.find('#address').val(data.address);
                 }, 'json')

        });
        // submit edit in db
        $('#editForm').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                type: "POST",
                url: "{{ route('setting.update.api') }}",
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
                        toastr.warning(data.msg);
                    } else if (data.code == 1){
                        $(form)[0].reset();
                        $('#editFormModal').modal("hide");
                        toastr.success(data.msg);
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