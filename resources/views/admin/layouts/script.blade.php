<!-- BEGIN: Vendor JS-->
<script src="{{ asset('admin/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('admin/vendors/js/extensions/toastr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('admin/js/core/app-menu.min.js') }}"></script>
<script src="{{ asset('admin/js/core/app.min.js') }}"></script>
<script src="{{ asset('admin/js/scripts/customizer.min.js') }}"></script>
<!-- END: Theme JS-->
<script src="{{ asset('admin/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
<script src="{{ asset('admin/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{ asset('admin/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('admin/js/scripts/forms/form-validation.js')}}"></script>

<script src="{{ asset('admin/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->
@yield('script')