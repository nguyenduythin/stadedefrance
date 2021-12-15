@extends('admin.layouts.main')
@section('title', 'Video')
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
                        <h4 class="card-title"> Các đường dẫn video cửa hàng</h4>
                    </div>
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-list-table table" id="DataTables_Table_User">
                            <thead class="table-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Chế độ Hiển thị</th>
                                    <th>Tiêu đề</th>
                                    <th>Đường dẫn</th>
                                    <th>Nguồn </th>

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
                                    <form id="addForm" action="{{ route('video.add.api') }}" method="POST"
                                        class="row gy-1 pt-75 add-new-user" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="id" hidden>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="modalEditUserFirstName">Chế độ Hiển thị</label>
                                            <select name="display" class="form-control select2-icons" id="select2-icons">
                                                <option value="0" data-icon="eye-off"> Ẩn </option>
                                                <option value="1" data-icon="eye"> Hiển thị</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="phone">Tiêu đề</label>
                                            <input type="text" id="phone " name="title"
                                                class="form-control" placeholder="nhập tiêu đề! " />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="email">Đường dẫn</label>
                                            <input type="text" id="email " name="link"
                                                class="form-control" placeholder="Đường dẫn! " />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="modalEditUserFirstName">Nguồn video</label>
                                            <input type="text" id="modalEditUserFirstName full_name" name="source"
                                                class="form-control" placeholder="nguồn video! " />
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
                    <h1 class="mb-1">Chi tiết Video</h1>
                </div>

                    
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
                    <h1 class="mb-1">Sửa mới Video</h1>
                    <p>Sửa mới video của bạn !</p>
                </div>
                <form id="editForm"  method="POST"
                    class="row gy-1 pt-75 add-new-user" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" hidden>
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="modalEditUserFirstName">Chế độ Hiển thị</label>
                        <select name="display" class="form-control select2-icons" id="select2-icons">
                            <option value="0" data-icon="eye-off"> Ẩn </option>
                            <option value="1" id="option-1" data-icon="eye"> Hiển thị</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="phone">Tiêu đề</label>
                        <input type="text" id="phone " name="title"
                            class="form-control" placeholder="nhập tiêu đề! " />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="email">Đường dẫn</label>
                        <input type="text" id="email " name="link"
                            class="form-control" placeholder="Đường dẫn! " />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Nguồn video</label>
                        <input type="text" id="modalEditUserFirstName full_name" name="source"
                            class="form-control" placeholder="nguồn video! " />
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
                "url": "{{ route('video.list.api') }}",
                "type": "GET",
                "dataSrc": ""
            },
            columns: [
                {
                    data: null
                },
                {
                    data: "display",
                    "width": "15%",
                },
                {
                    data: "title"
                },
                {
                    data: "link"
                },
                {
                    data: "source"
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
                    targets: 5,
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
                    "title": {
                        required: !0
                    },
                     "link": {
                        required: !0
                    },
                    "source": {
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
            }))
  
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
                            url: "{{ route('video.list.api') }}" + "/" + id,
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
        table.on( 'order.dt search.dt', function () {
            table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    }).draw();
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
            $.get('<?= route("video.list.api") ?>' + "/show/" + id, function(data) {
                var form = $('#editForm');
                form.find('input[name="id"]').val(data.id);
                form.find('input[name="link"]').val(data.link);
                form.find('input[name="title"]').val(data.title);
                form.find('input[name="source"]').val(data.source);
                if (data.display == 1 ) {
                    $('#option-1').prop('selected', true);
                }

                 }, 'json')

        });
        // submit edit in db
        $('#editForm').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                type: "POST",
                url: "{{ route('video.update.api') }}",
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