@extends('admin.layouts.main')
@section('title', 'Galleries')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Thư viện ảnh</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.cate.gallery.list') }}">Quay lại</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                            aria-haspopup="true" aria-expanded="false" data-bs-toggle="modal"
                            data-bs-target="#modals-slide-in"><i data-feather="plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Wishlist Starts -->
            <section id="wishlist" class="grid-view wishlist-items gallery-list">
                @foreach ($gallery as $image)
                <div class="card ecommerce-card gallery-list-children" id="gallery-{{ $image->id }}">
                    <div class="item-img text-center " style="padding:10px;" >
                        <a href="#">
                            <img src="{{ asset('/storage/'. $image->url)}}" class="img-fluid  mx-auto"
                                alt="img-placeholder" style="height:230px; width:100vw;" />
                        </a>
                    </div>
                    <div class="item-options text-center ">
                        <button type="button" class="btn btn-danger btn-wishlist remove-wishlist" data-id="{{$image->id}}" id="delete">
                            <i data-feather='trash-2'></i>
                            <span>Xóa ảnh</span>
                        </button>
                    </div>
                </div>
                @endforeach
            </section>
            <!-- Wishlist Ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
<div class="modal fade show" id="modals-slide-in" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Thêm ảnh mới</h1>
                    <p>Thêm mới ảnh vào danh sách của bạn!</p>
                </div>
                <form id="addForm" action="{{ route('gallery.add.api') }}" method="POST"
                    class="row gy-1 pt-75 add-new-user" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" hidden>
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="modalEditUserFirstName">Ảnh </label>
                        <input type="file" id="modalEditUserFirstName full_name" name="url" class="form-control"
                            accept="image/*" />
                    </div>
                    <input type="text"  hidden name="cate_gallery_id" id="" value="{{ $gl_id->id }}"/>

                    <div class="col-12 text-center mt-2 pt-50">
                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                            aria-label="Close">
                            Discard
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

<script>
var a = $('#addForm');
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
                toastr.error(data.msg)
            } else {
                $(form)[0].reset();
                $('#modals-slide-in').modal("hide");
                        $('.gallery-list').append(
                        `<div class="card ecommerce-card gallery-list-children" id="gallery-${data.id}">
                            <div class="item-img text-center " style="padding:10px;" >
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('/storage/${data.url}')}}" class="img-fluid  mx-auto"
                                        alt="img-placeholder" style="height:230px; width:100vw;" />
                                </a>
                            </div>
                            <div class="item-options text-center ">
                                <button type="button" class="btn btn-danger btn-wishlist remove-wishlist" data-id="${data.id}" id="delete">
                                    <i data-feather='trash-2'></i>
                                    <span>Xóa ảnh</span>
                                </button>
                            </div>
                        </div>`);
                toastr.success('Thêm mới ảnh thành Công !');
            }
        },
        error: function(error) {
            console.log("Thêm không thành công", error);
        }
    })                    
}
})

$('body').on('click', '#delete', function() {
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
                            url: "{{ route('gallery.list.api') }}" + "/" + id,
                            headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                        success: function(){
                            toastr.success("Xóa Thành Công 🗑️");
                             $('div#gallery-'+ id).remove();
                        },
                        error:function () {
                            toastr.error("Xóa không Thành Công");
                        }
                    })
                    } 
                });
        });

</script>

@endsection