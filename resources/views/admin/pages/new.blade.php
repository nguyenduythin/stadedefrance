@extends('admin.layouts.main')
@section('title', 'New')
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
                        <h4 class="card-title"> Tin tức</h4>
                    </div>
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-list-table table" id="DataTables_Table_User">
                            <thead class="table-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Tiêu đề</th>
                                    <th>Ảnh đại diện </th>
                                    <th>Lượt xem</th>
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
                                        <h1 class="mb-1">Thêm mới Tin tức</h1>
                                        <p>Thêm mới Sự kiện vào danh sách của bạn!</p>
                                    </div>
                                    <form id="addForm" action="{{ route('new.add.api') }}" method="POST"
                                        class="row gy-1 pt-75 add-new-user" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="id" hidden>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="modalEditUserFirstName">Ảnh đại diện Sự kiện</label>
                                            <input type="file" id="modalEditUserFirstName full_name" name="image"
                                                class="form-control" accept="image/*" />
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="modalEditUserFirstName">Tiêu đề</label>
                                            <input type="text" id="modalEditUserFirstName full_name" name="title"
                                                class="form-control" placeholder="Tiêu đề sự kiện! " />
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="modalEditUserCountry">Nội dung</label>
                                            <input hidden class="form-control" name="content"/>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div id="full-container">
                                                <div id="full-container ">
                                                    <div class="editor">
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="modalEditUserCountry">Nội dung</label>
                                            <textarea name="content" class="form-control" id="content-editor" cols="30" rows="10"></textarea>
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

<!-- list only gallery event -->
<div class="modal fade show" id="listGalleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Thư viện ảnh </h1>
                    <p>Chi tiết thư viện !</p>
                </div>
           
                    <!-- Wishlist Starts -->
                    <section id="wishlist" class="grid-view wishlist-items gallery-list">
        
                        
                    </section>
                    <!-- Wishlist Ends -->
        
            
            </div>
        </div>
    </div>
</div>
<!--/ list only gallery event -->
<!-- Detail service -->
<div class="modal fade show" id="detailUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Chi tiết combo</h1>
                    <p>Chi tiết combo !</p>
                </div>
                <form id="detailUserForm" action="{{ route('new.add.api') }}" method="POST"
                    class="row gy-1 pt-75 add-new-user" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" hidden>
                    <div class="d-flex center">
                        <a href="#" class="me-25">
                            <img src=""  class="uploadedAvatar rounded me-50" alt="combo image"
                                height="100" width="100" name="image" />
                        </a>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Tên Combo</label>
                        <input type="text" disabled id="modalEditUserFirstName full_name" name="name"
                            class="form-control" placeholder="Combo Hè" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Giá Combo (₫)</label>
                        <input type="text" disabled data-type="currency" id="modalEditUserFirstName full_name"
                            name="price" class="form-control" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">Thời Gian (phút)</label>
                        <input type="text" disabled data-type="currency" id="modalEditUserFirstName full_name"
                            name="total_time_work" class="form-control" />
                    </div>
                    <div class="col-12">
                        <h4 class="mt-2 pt-50">Dịch Vụ Có Trong Combo</h4>
                        <!-- Permission table -->
                        <div class="table-responsive">
                            <table class="table table-flush-spacing">
                                <tbody id="service-list1">

                                </tbody>
                            </table>
                        </div>
                        <!-- Permission table -->
                    </div>
                    <div class="col-12 col-md-6 ">
                        <label class="form-label" for="modalEditUserCountry">Mô Tả</label>
                        <textarea class="form-control" disabled name="short_description" id="address1" cols="30"
                            rows="4"></textarea>
                    </div>
                    <div class="col-12 col-md-6 ">
                        <label class="form-label" for="modalEditUserCountry">Mô Tả Chi Tiết</label>
                        <textarea class="form-control" disabled name="description" id="address2" cols="30"
                            rows="4"></textarea>
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
                    <h1 class="mb-1">Sửa mới Tin tức</h1>
                    <p>Sửa mới sản phẩm của bạn !</p>
                </div>
                <form id="editForm"  method="POST"
                    class="row gy-1 pt-75 add-new-user" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" hidden>
                    <div class="d-flex center">
                        <a href="#" class="me-25">
                            <img src="" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image"
                                height="100" width="100" name="image" />
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
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="modalEditUserFirstName">Tiêu đề</label>
                        <input type="text" id="modalEditUserFirstName full_name" name="title"
                            class="form-control" placeholder="Tiêu đề sự kiện! " />
                    </div>
                    
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="modalEditUserCountry">Nội dung</label>
                        <textarea class="form-control" name="content"
                            placeholder="Nội dung!" id="content" cols="30"
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
    ClassicEditor.create( document.querySelector('#content-editor' ) )
            .catch( error => {
                console.error( error );
            } );

</script>
<script>
      var t = Quill.import("formats/font");
      (t.whitelist = ["sofia", "slabo", "roboto", "inconsolata", "ubuntu"]),
        Quill.register(t, !0);
     var quillElement = new Quill("#full-container .editor", {
          bounds: "#full-container .editor",
          modules: {
            formula: !0,
            syntax: !0,
            toolbar: [
              [{ font: [] }, { size: [] }],
              ["bold", "italic", "underline", "strike"],
              [{ color: [] }, { background: [] }],
              [{ script: "super" }, { script: "sub" }],
              [{ header: "1" }, { header: "2" }, "blockquote", "code-block"],
              [
                { list: "ordered" },
                { list: "bullet" },
                { indent: "-1" },
                { indent: "+1" },
              ],
              ["direction", { align: [] }],
              ["link", "image", "video", "formula"],
              ["clean"],
            ],
          },
          theme: "snow",
        });

    
</script>
<script>
    $(function() {
        var e = $("#DataTables_Table_User");
        var t = $(".modal fade show"),
            a = $(".add-new-user"),
            s = $(".select2"),
            n = $(".dt-contact"),
            r = "app-user-view-account.html";
        var table = e.DataTable({
            "ajax": {
                "url": "{{ route('new.list.api') }}",
                "type": "GET",
                "dataSrc": ""
            },
            columns: [
                {
                    data: null
                },
                {
                    data: "title"
                },
                {
                    data: "image"
                },
                {
                    data: "viewer"
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
                        var n = a.title;
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
                    title: "Hành động",
                    orderable: !1,
                    render: function(e, t, a, s) {
                        var url = '{{ route("admin.gallery.new.list", [":id" ]) }}';
                            url = url.replace(':id',  a.id);
                        return (
                            '<a href="'+url+'" class="btn btn-sm btn-icon" >' +
                            feather.icons['image'].toSvg({ class: 'font-medium-2 text-body' }) +
                            '</i></a>' +
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
                    text: "Thêm Mới Sự kiện",
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
                    "image": {
                        required: !0
                    },
                    "description": {
                        required: !0
                    },
                },
            }),
            a.on("submit", function(e) {  
               
                e.preventDefault();
                var s = a.valid();
                var formGetContent = $('#addForm');
                // formGetContent.find('input[name="content"]').val(JSON.stringify(quillElement.getContents()));
                // quill.root.innerHTML
                formGetContent.find('input[name="content"]').val(quillElement.root.innerHTML);
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
        });
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
                            url: "{{ route('new.list.api') }}" + "/" + id,
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
            var user_id = $(this).data("id");
            $.get('<?= route("new.list.api") ?>' + "/show/" + user_id, function(data) {
                var form = $('#detailUserForm');
                $("#account-upload-img").attr("src", data.image ? "/storage/" + data.image :
                    "{{ asset('admin/images/portrait/small/avatar-none.png') }}");
                form.find('input[name="id"]').val(data.model.id);
                form.find('input[name="name"]').val(data.model.name);
                form.find('input[name="price"]').val(data.model.price.toLocaleString() + '₫');
                form.find('input[name="total_time_work"]').val(data.model.total_time_work);
                form.find('#address1').val(data.model.short_description);
                form.find('#address2').val(data.model.description);
            }, 'json')
        });
        //list service for edit
      
        // get detail edit và checked các service đã có
        $('body').on('click', '#editFormBtn', async function() {
            $('#editForm')[0].reset();
            var id = $(this).data("id");
            $.get('<?= route("new.list.api") ?>' + "/show/" + id, function(data) {
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
                accountUploadImg.attr("src", (  data.image ? "/storage/"+ data.image : "{{ asset('admin/images/img-default.png') }}") );
                form.find('input[name="id"]').val(data.id);
                form.find('input[name="title"]').val(data.title);
                form.find('#content').val(data.content);
               
                 }, 'json')

        });
        // submit edit in db
        $('#editForm').on('submit', function(e) {
            
            e.preventDefault();
            var form = this;
            $.ajax({
                type: "POST",
                url: "{{ route('new.update.api') }}",
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