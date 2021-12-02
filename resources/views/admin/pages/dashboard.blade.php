@extends('admin.layouts.main')
@section('title', 'Statistical')
@section('content')
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <!-- Dashboard Ecommerce Starts -->
      <section id="dashboard-ecommerce">
        <!-- Stats Vertical Card -->
        <div class="row">
          <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
              <div class="card-body">
                <div class="avatar bg-light-info p-50 mb-1">
                  <div class="avatar-content">
                    <i data-feather="eye" class="font-medium-5"></i>
                  </div>
                </div>
                <h2 class="fw-bolder">36.9k</h2>
                <p class="card-text">Views</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
              <div class="card-body">
                <div class="avatar bg-light-warning p-50 mb-1">
                  <div class="avatar-content">
                    <i data-feather="message-square" class="font-medium-5"></i>
                  </div>
                </div>
                <h2 class="fw-bolder">12k</h2>
                <p class="card-text">Comments</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
              <div class="card-body">
                <div class="avatar bg-light-danger p-50 mb-1">
                  <div class="avatar-content">
                    <i data-feather="shopping-bag" class="font-medium-5"></i>
                  </div>
                </div>
                <h2 class="fw-bolder">97.8k</h2>
                <p class="card-text">Orders</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
              <div class="card-body">
                <div class="avatar bg-light-primary p-50 mb-1">
                  <div class="avatar-content">
                    <i data-feather="heart" class="font-medium-5"></i>
                  </div>
                </div>
                <h2 class="fw-bolder">26.8</h2>
                <p class="card-text">Bookmarks</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
              <div class="card-body">
                <div class="avatar bg-light-success p-50 mb-1">
                  <div class="avatar-content">
                    <i data-feather="award" class="font-medium-5"></i>
                  </div>
                </div>
                <h2 class="fw-bolder">689</h2>
                <p class="card-text">Reviews</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
              <div class="card-body">
                <div class="avatar bg-light-danger p-50 mb-1">
                  <div class="avatar-content">
                    <i data-feather="truck" class="font-medium-5"></i>
                  </div>
                </div>
                <h2 class="fw-bolder">2.1k</h2>
                <p class="card-text">Returns</p>
              </div>
            </div>
          </div>
        </div>
        <!--/ Stats Vertical Card -->

        <!-- Stats Horizontal Card -->
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-header">
                <div>
                  <h2 class="fw-bolder mb-0">86%</h2>
                  <p class="card-text">CPU Usage</p>
                </div>
                <div class="avatar bg-light-primary p-50 m-0">
                  <div class="avatar-content">
                    <i data-feather="cpu" class="font-medium-5"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-header">
                <div>
                  <h2 class="fw-bolder mb-0">1.2gb</h2>
                  <p class="card-text">Memory Usage</p>
                </div>
                <div class="avatar bg-light-success p-50 m-0">
                  <div class="avatar-content">
                    <i data-feather="server" class="font-medium-5"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-header">
                <div>
                  <h2 class="fw-bolder mb-0">0.1%</h2>
                  <p class="card-text">Downtime Ratio</p>
                </div>
                <div class="avatar bg-light-danger p-50 m-0">
                  <div class="avatar-content">
                    <i data-feather="activity" class="font-medium-5"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-header">
                <div>
                  <h2 class="fw-bolder mb-0">13</h2>
                  <p class="card-text">Issues Found</p>
                </div>
                <div class="avatar bg-light-warning p-50 m-0">
                  <div class="avatar-content">
                    <i data-feather="alert-octagon" class="font-medium-5"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Stats Horizontal Card -->
     
     
      </section>
      <!-- Dashboard Ecommerce ends -->

    </div>
  </div>
</div>
@endsection
@section('script')
<script src="{{ asset('admin/vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/js/scripts/pages/dashboard-ecommerce.min.js') }}"></script>

@endsection