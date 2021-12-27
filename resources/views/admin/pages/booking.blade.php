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
      <p>Mỗi danh mục (Cơ bản, Chuyên nghiệp và Kinh doanh) bao gồm bốn vai trò được xác định trước được hiển thị bên
        dưới.</p>

      <!-- Permission Table -->
      <div class="card">
        <div class="card-datatable table-responsive">
          <table class="datatables-permissions table">
            <thead class="table-light">
              <tr>
                <th>No.</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Thời gian</th>
                <th>Số lượng người</th>
                <th>Trạng thái</th>
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
                <h1 class="mb-1">Thêm mới quyền</h1>
                <p>Các quyền bạn có thể sử dụng và gán cho người dùng của mình.</p>
              </div>
              <form id="addBookingForm" method="POST" action="{{ route('booking.add.api') }}" class="row">
                <div class="col-12">
                  <label class="form-label" for="modalPermissionName">Permission Name</label>
                  <input type="text" id="modalPermissionName" name="name" class="form-control"
                    placeholder="Permission Name" autofocus data-msg="Please enter permission name" />
                </div>
                <div class="col-12 mt-75">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="corePermission" />
                    <label class="form-check-label" for="corePermission"> Set as core permission </label>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary mt-2 me-1">Create Permission</button>
                  <button type="reset" class="btn btn-outline-secondary mt-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    Discard
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
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
          <div class="modal-content">
            <div class="modal-header bg-transparent">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
              <div class="text-center mb-2">
                <h1 class="mb-1">Cập nhật mới đặt lịch</h1>
                <p>Cập nhập chi tiết đặt lịch mới !</p>
              </div>
              <form id="editBookingForm" action="{{ route('booking.update.api') }}" method="POST" class="row gy-1 pt-75"
                enctype="multipart/form-data">
                @csrf
                <input type="text" name="id" hidden>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalEditUserFirstName">Họ và tên</label>
                  <input type="text" id="modalEditUserFirstName" name="full_name" class="form-control"
                    placeholder="Sơn Móng Tay" />
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalEditUserFirstName">Email</label>
                  <input type="email" id="modalEditUserFirstName" name="email" class="form-control"
                    placeholder="Sơn Móng Tay" />
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalEditUserFirstName">Số điện thoại</label>
                  <input type="number" data-type="currency" id="modalEditUserFirstName full_name" name="phone"
                    class="form-control" placeholder="100,000₫" />
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalEditUserFirstName">Số lượng người</label>
                  <input type="number" data-type="currency" id="modalEditUserFirstName full_name" name="persons"
                    class="form-control" placeholder="100,000₫" />
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="fp-date">Ngày</label>
                  <input type="text" id="fp-date" name="date" class="form-control flatpickr-basic"
                    placeholder="YYYY-MM-DD" />
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="fp-time">Thời gian</label>
                  <input type="text" id="fp-time" class="form-control flatpickr-time text-start flatpickr-input"
                    name="time" placeholder="HH:MM" style="height:auto !important;" />
                </div>

                <div class="col-12 col-md-12">
                  <label class="form-label" for="modalEditUserFirstName">Trạng thái</label>
                  <select name="status" id="status" class="form-control">
                    <option value="1" id="1">Chờ Xác nhận</option>
                    <option value="2" id="2">Đã xác nhận</option>
                    <option value="3" id="3">Thành Công</option>
                  </select>
                </div>
                <div class="col-12 ">
                  <label class="form-label" for="modalEditUserCountry">Tin nhắn</label>
                  <textarea class="form-control" name="message"
                    placeholder="Những dịch vụ chuyên nghiệp hứa hẹn sẽ đem lại trải nghiệm tuyệt vời cho quý khách !"
                    id="message" cols="30" rows="4"></textarea>
                </div>
                <div class="col-12 text-center mt-2 pt-50">
                  <button type="submit" class="btn btn-primary me-1">Submit</button>
                  <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                    Discard
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
              "url" : "{{ route('booking.list.api') }}",
              "type" : "GET",
              "dataSrc": ""
              },  
      columns: [
        // columns according to JSON
        
        { data: null },
        { data: 'full_name' },
        { data: 'email' },
        { data: 'phone' },
        { data: 'date' },
        { data: 'persons' },
        { data: 'status' },
      ],
      columnDefs: [
        {
            "searchable": false,
            "orderable": false,
            "targets": 0
        },
        {
          targets: 1,
          visible: false
        },
        {
            targets: 6,
            render: function(e, t, a, s) {
                var n = a.status;
                if (n == 1 || !n) {
                    return ('<span class="badge rounded-pill badge-light-warning" text-capitalized>Chờ xác nhận</span>')
                }
                else  if (n == 2) {
                    return ('<span class="badge rounded-pill badge-light-primary" text-capitalized>Xác nhận thành công</span>')
                }
                else if (n == 3) {
                    return ('<span class="badge rounded-pill badge-light-success" text-capitalized>Thành công</span>')
                }
                
            },
        },
        {
          // Actions
          targets: 7,
          title: 'Hành động',
          orderable: false,
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
          extend: "collection",
          className: "btn btn-outline-secondary dropdown-toggle me-2",
          text: feather.icons["external-link"].toSvg({
              class: "font-small-4 me-50",
          }) + "Export",
          buttons: [{
                  extend: "print",
                  text: feather.icons.printer.toSvg({
                      class: "font-small-4 me-50",
                  }) + "Print",
                  className: "dropdown-item",
                  exportOptions: {
                      columns: [ 1, 2, 3, 4, 5, 6 ]
                  },
              },
              {
                  extend: "csv",
                  text: feather.icons["file-text"].toSvg({
                      class: "font-small-4 me-50",
                  }) + "Csv",
                  className: "dropdown-item",
                  exportOptions: {
                      columns: [1, 2, 3, 4, 5, 6 ]
                  },
              },
              {
                  extend: "excel",
                  text: feather.icons.file.toSvg({
                      class: "font-small-4 me-50",
                  }) + "Excel",
                  className: "dropdown-item",
                  exportOptions: {
                      columns: [ 1, 2, 3, 4, 5, 6 ]
                  },
              },
              {
                  extend: "pdf",
                  text: feather.icons.clipboard.toSvg({
                      class: "font-small-4 me-50",
                  }) + "Pdf",
                  className: "dropdown-item",
                  exportOptions: {
                      columns: [ 1, 2, 3, 4, 5, 6 ]
                  },
              },
              {
                  extend: "copy",
                  text: feather.icons.copy.toSvg({
                      class: "font-small-4 me-50",
                  }) + "Copy",
                  className: "dropdown-item",
                  exportOptions: {
                      columns: [ 1, 2, 3, 4, 5, 6]
                  },
              },
          ],
          init: function(e, t, a) {
              $(t).removeClass("btn-secondary"),
                  $(t).parent().removeClass("btn-group"),
                  setTimeout(function() {
                      $(t)
                          .closest(".dt-buttons")
                          .removeClass("btn-group")
                          .addClass("d-inline-flex mt-50");
                  }, 50);
          },
      }
      ],
      language: {
        paginate: {
          // remove previous & next text from pagination
          previous: '&nbsp;',
          next: '&nbsp;'
        }
      },
      
    });
var  a = $("#addBookingForm");
// var response;
//   $.validator.addMethod(
//       "uniquePName", 
//       function(value, element) {
//           $.get('<?=  route("booking.list.api") ?>', function(dataR) {
//               response =  dataR.some(e => e.name === value);
//                   });
//           return !response;
//       },"Vai trò đã tồn tại!");

table.on( 'order.dt search.dt', function () {
            table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    }).draw();
a.length && (a.validate({
          errorClass: "error",
          rules: {
              "name": { required: !0, uniquePName:true },
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
              async: false,
              contentType: false,
              headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
              success: function(data){
                  if (data.code==0) {
                      $.each(data.error,function (prefix,val) {
                          $(form).find('span'+prefix+'_error').text(val[0]);
                      });
                  }else{
                      $(form)[0].reset();
                      $('#addPermissionModal').modal("hide");
                      table.ajax.reload();
                      toastr.success(data.msg)
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
                      url:"{{ route('booking.list.api') }}"+"/"+booking_id,
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
            $.get('<?= route("booking.list.api") ?>' + "/show/" + user_id, function(data) {
                var form = $('#editBookingForm');
                form.find('input[name="id"]').val(data.id);
                form.find('input[name="full_name"]').val(data.full_name);
                form.find('input[name="date"]').val(data.date);
                form.find('input[name="time"]').val(moment(data.time,"HH:mm:ss").format('hh:mm'));
                console.log(moment(data.time,"HH:mm:ss").format('hh:mm A').slice(0,5));
                form.find('input[name="phone"]').val(data.phone);
                form.find('input[name="email"]').val(data.email);
                form.find('input[name="persons"]').val(data.persons);
                form.find('#message').val(data.message);
                $("#status").find("#" + data.status, "option").attr('selected', true);
              
            }, 'json')
         
        });
        // submit edit in db
        $('#editBookingForm').on('submit', function(e) {
            e.preventDefault();
            var form = this;
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
                        console.log('fomr', data);
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