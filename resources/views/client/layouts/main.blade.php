<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Restabook - @yield('title')</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    @include('client.layouts.style')
</head>

<body>
    <!-- lodaer  -->
    <div class="loader-wrap">
        <div class="loader-item">
            <div class="cd-loader-layer" data-frame="25">
                <div class="loader-layer"></div>
            </div>
            <span class="loader"></span>
        </div>
    </div>
    <!-- loader end  -->
    <!-- main start  -->
    <div id="main">
        <!-- header  -->
        @include('client.layouts.header')
        <!--header end -->
        <!-- wrapper  -->
        

        <div id="wrapper">
            <!-- content  -->	
            @yield('content')
            <!-- content end  -->
            <!-- footer -->
            <div class="height-emulator fl-wrap"></div>
          @include('client.layouts.footer')
            <!-- footer end-->                             
        </div>

        <!-- reservation-modal-wrap-->
        @include('client.pages.booking')

        <!-- reservation-modal-wrap end-->
        <!-- cursor-->
        <div class="element">
            <div class="element-item"></div>
        </div>
        <!-- cursor end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    @include('client.layouts.script')
</body>

<!-- Mirrored from restabook.kwst.net/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Oct 2021 10:34:59 GMT -->

</html>