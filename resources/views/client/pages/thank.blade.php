@extends('client.layouts.main')
@section('title', '- Thanks')
@section('content')
<div class="content">
    <!--  section  -->
    <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem " data-bg="{{ asset('client/images/bg/12.jpg')}}"
            data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>

        <div class="brush-dec"></div>
    </section>
    <!--  section  end-->
    <!--  section  -->
    <section class="small-top-padding">
        <div class="brush-dec2 brush-dec_bottom"></div>
        <div class="container">
            <!--  hero-menu_header  end-->
            <div class="hero-menu single-menu  tabs-act fl-wrap">
                <div class="gallery_filter-button btn">Hiển thị<i class="fal fa-long-arrow-down"></i></div>
                <!--  hero-menu_header-->
                <div class="hero-menu_header fl-wrap gth">
                    <ul class="tabs-menu  no-list-style">

                        <li style="color: #C19D60">
                            <center>
                                <div style="font-size:5em; margin-bottom: 20px;">Thank You </div>
                                <div>Chúng tôi sẽ liên hệ lại với bạn sớm nhất có thể !</div>
                                <div style="padding: 10px 5px 10px 5px; width: 50%; border: 1px double #C19D60; margin-top: 40px; border-radius:10px;" >
                                    <a href="{{ route('home') }}" style="font-size: 1em;">Quay Lại Trang Chủ</a>
                                </div>
                            </center>
                        </li>

                    </ul>
                </div>
                <!--  hero-menu_header  end-->
                <!--  hero-menu_content   -->

                <!--  hero-menu_content end  -->
            </div>
            <!--  hero-menu  end-->

        </div>
        <div class="section-bg">
            <div class="bg" data-bg="images/bg/dec/section-bg.png"></div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script>

function loadFrame() {
    window.location.href = "{{ route('home') }}";
};
window.onload = setTimeout(loadFrame, 20000);
  </script>
@endsection