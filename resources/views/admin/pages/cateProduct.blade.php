@extends('admin.layouts.main')
@section('title', 'Booking')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <h3>Danh sách đặt lịch</h3>
            <p>Mỗi danh mục (Cơ bản, Chuyên nghiệp và Kinh doanh) bao gồm bốn vai trò được xác định trước được hiển thị
                bên
                dưới.</p>

            <!-- Permission Table -->
            <div class="card">
                <div class="card-datatable table-responsive">
                    <table class="datatables-permissions table">
                        <thead class="table-light">
                            <tr>
                                <th>Tên danh mục</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!--/ Permission Table -->
            <!-- Add Permission Modal -->
            <div class="modal fade" id="addPermissionModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-sm-5 pb-5">
                            <div class="text-center mb-2">
                                <h1 class="mb-1">Thêm mới Danh mục</h1>
                                <p>Danh mục của sản phẩm !</p>
                            </div>
                            <form id="addForm" method="POST" action="{{ route('cate.product.add.api') }}" class="row">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label" for="modalPermissionName">Tên Danh mục</label>
                                    <input type="text" id="modalPermissionName" name="name" class="form-control"
                                        placeholder="Permission Name" autofocus
                                        data-msg="Please enter permission name" />
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary mt-2 me-1">Tạo Mới </button>
                                    <button type="reset" class="btn btn-outline-secondary mt-2" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        Quay lại
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Add Permission Modal -->
            <!-- Edit User Modal -->
            <div class="modal fade show" id="editUserModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-2">
                                <h1 class="mb-1">Cập nhật mới đặt lịch</h1>
                                <p>Cập nhập chi tiết đặt lịch mới !</p>
                            </div>
                            <form id="editForm" action="{{ route('cate.product.update.api') }}" method="POST"
                                class="row gy-1 pt-75" >
                                @csrf
                                <input type="text" name="id" hidden>
                                <div class="col-12">
                                    <label class="form-label" for="modalPermissionName">Tên Danh mục</label>
                                    <input type="text" id="modalPermissionName" name="name" class="form-control"
                                        placeholder="Nhập tên danh mục"/>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary mt-2 me-1">Tạo Mới </button>
                                    <button type="reset" class="btn btn-outline-secondary mt-2" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        Quay lại
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Edit User Modal -->

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
@section('script')
<script>
    $(function () {
  'use strict';
  // Users List datatable
  var table =  $('.datatables-permissions').DataTable({
      ajax:  {
              "url" : "{{ route('cate.product.list.api') }}",
              "type" : "GET",
              "dataSrc": ""
              },  
      columns: [
      
      ],
      columnDefs: [

        {
            targets:0,
            class: "ml-20",
            render: function(e, t, a, s) {
                var n = a.name;
                    return (`<span class="badge rounded-pill badge-light-warning" text-capitalized>${n}</span>`)
                
            },
        },
        {
          // Actions
          targets: 1,
          orderable: !1,
          render: function (data, type, full, meta) {
            return (
              '<button class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#editUserModal" id="editBooking" data-id="'+full.id+'">' +
              feather.icons['edit'].toSvg({ class: 'font-medium-2 text-body' }) +
              '</i></button>' +
              '<button class="btn btn-sm btn-icon delete-record" id="deleteBooking" data-id="'+full.id+'">' +
              feather.icons['trash'].toSvg({ class: 'font-medium-2 text-body' }) +
              '</button>'
            );
          }
        }
      ],
      order: [[1, 'asc']],
      dom:
        '<"d-flex justify-content-between align-items-center header-actions text-nowrap mx-1 row mt-75"' +
        '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
        '<"col-sm-12 col-lg-8"<"dt-action-buttons d-flex align-items-center justify-content-lg-end justify-content-center flex-md-nowrap flex-wrap"<"me-1"f>B>>' +
        '><"text-nowrap" t>' +
        '<"d-flex justify-content-between mx-2 row mb-1"' +
        '<"col-sm-12 col-md-6"i>' +
        '<"col-sm-12 col-md-6"p>' +
        '>',
      language: {
        sLengthMenu: 'Show _MENU_',
        search: 'Search',
        searchPlaceholder: 'Search..'
      },
      // Buttons with Dropdown
      buttons: [
        {
          text: 'Thêm mới danh mục',
          className: 'add-new btn btn-primary mt-50',
          attr: {
            'data-bs-toggle': 'modal',
            'data-bs-target': '#addPermissionModal'
          },
          init: function (api, node, config) {
            $(node).removeClass('btn-secondary');
          }
        }
      ],
      language: {
        paginate: {
          previous: '&nbsp;',
          next: '&nbsp;'
        }
      },
      
    });
var  a = $("#addForm");
$.validator.addMethod(
        "uniqueName1", 
        function(value, element) {
            $.get('<?= route("cate.product.list.api") ?>', function(dataR) {
                console.log(value);
                responses =  dataR.some(e => e.name === value);
                    });
            return !responses;
        },
        "Tên này đã tồn tại!"
    );
a.length && (a.validate({
          errorClass: "error",
          rules: {
              "name": { required: !0 },
          },
      }),
      a.on("submit", function (e) {
          e.preventDefault();
          
          var s = a.valid();
          var form = this;
          if (s) {
          $.ajax({
              type:"POST",
              url:$(form).attr('action'),
              data: new FormData(form),
              processData: false,
              dataType:'json',
              contentType: false,
              headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
              success: function(data){
                  if (data.code==0) {
                    toastr.error(data.msg);
                  }else{
                      $(form)[0].reset();
                      $('#addPermissionModal').modal("hide");
                      table.ajax.reload();
                      toastr.success(data.msg);
                  }
              },
              error:function (error) {
                  console.log("Thêm không thành công",error);
              }
          });      
        }
      }))



// Delete permission
  $('body').on('click' ,'#deleteBooking' , function(){
    var booking_id = $(this).data("id");
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
                      url:"{{ route('cate.product.list.api') }}"+"/"+booking_id,
                      headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          },
                  success: function(){
                      table.ajax.reload();
                      toastr.success("Xóa Thành Công!");
                  },
                  error:function () {
                      toastr.error("Xóa không Thành Công!");
                  }
              })
              } 
          });

});
  // get detail edit và selected cate đã chọn
  $('body').on('click', '#editBooking', function() {
            var user_id = $(this).data("id");
            var cate = null;
            $.get('<?= route("cate.product.list.api") ?>' + "/show/" + user_id, function(data) {
                var form = $('#editForm');
                form.find('input[name="id"]').val(data.id);
                form.find('input[name="name"]').val(data.name);
            }, 'json')
         
        });
        // submit edit in db
        $('#editForm').on('submit', function(e) {
            e.preventDefault();
            var form = this;
            $.ajax({
                type: "POST",
                url: $(form).attr('action'),
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data.code == 0) {
                        toastr.error(data.msg);
                    } else {
                        $(form)[0].reset();
                        $('#editUserModal').modal("hide");
                        table.ajax.reload();
                        toastr.success(data.msg)
                    }
                },
                error: function(error) {
                    console.log("Sửa mới không thành công", error);
                }
            })
        });



  // Filter form control to default size
  // ? setTimeout used for multilingual table initialization
  setTimeout(() => {
    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .form-select').removeClass('form-select-sm');
  }, 300);
});

</script>

@endsection