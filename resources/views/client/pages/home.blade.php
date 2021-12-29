@extends('client.layouts.main')
@section('title', '')
@section('content')

<!-- hero-wrap-->
<div class="hero-wrap fl-wrap full-height">
    <!--fs-slider-wrap -->
    <div class="fs-slider-wrap fs-slider-det full-height fl-wrap hero_fsw dark-bg">
        <div class="fs-slider full-height fl-wrap">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- swiper-slide-->
                    <div class="swiper-slide">
                        <div class="fs-slider-item fl-wrap">
                            <div class="bg " data-bg=" {{ asset('client/images/bg/thinduy/DSC01183.jpg')}}"
                                data-swiper-parallax="40%"></div>
                            <div class="overlay" style="opacity:0.3;"></div>

                            {{-- <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div> --}}
                        </div>
                    </div>
                    <!-- swiper-slide-->
                    <!-- swiper-slide-->
                    <div class="swiper-slide">
                        <div class="fs-slider-item fl-wrap">
                            <div class="bg " data-bg=" {{ asset('client/images/bg/thinduy/DSC01494.jpg')}}"
                                data-swiper-parallax="40%"></div>
                            <div class="overlay" style="opacity:0.3;"></div>
                            {{-- <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div> --}}
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="fs-slider-item fl-wrap">
                            <div class="bg " data-bg="{{ asset('client/images/bg/thinduy/DSC01365.jpg')}}"
                                data-swiper-parallax="40%"></div>
                            <div class="overlay" style="opacity:0.3;"></div>


                        </div>
                    </div>

                    {{-- <div class="swiper-slide">
                        <div class="fs-slider-item fl-wrap">
                            <div class="bg " data-bg="{{ asset('client/images/bg/thinduy/DSC01518-min.jpg')}}"
                                data-swiper-parallax="40%"></div>

                        </div>
                    </div> --}}
                    {{-- <div class="overlay"></div> --}}
                    {{-- <div class="grid-carousel-title">
                        <h3>Visit Our Online Store</h3>
                        <div class="clearfix"></div>
                        <h4>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                            laboriosam.</h4>
                        <div class="bold-separator"><span></span></div>
                        <a href="{{ route('menu') }}" class="hero_btn">Menu Online<i
                                class="fal fa-long-arrow-right"></i></a>
                    </div> --}}

                </div>
            </div>
        </div>
        <div class="hero-slider_btn hero-slider_btn_next fs-slider-button-next"><i class="fas fa-caret-right"></i>
        </div>
        <div class="hero-slider_btn hero-slider_btn_prev fs-slider-button-prev"><i class="fas fa-caret-left"></i>
        </div>
        <div class="hero-slider-wrap_pagination"></div>
    </div>
    <!--fs-slider-wrap end -->
    <div class="hero-dec_top"></div>
    <div class="hero-dec_bottom"></div>
    <div class="hero-dec_top_right"></div>
    <div class="hero-dec_bottom_right"></div>
    <div class="brush-dec"></div>
</div>
<!-- hero-wrap  end -->
<!-- content  -->
<div class="content">
    <section class="hidden-section big-padding" data-scrollax-parent="true" id="sec2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title text-align_left">
                        <h4>Our story</h4>
                        <h2>Về Stade de france</h2>
                        <div class="dots-separator fl-wrap"><span></span></div>
                    </div>
                    <div class="text-block ">
                        <p>Là nhà hàng cao cấp Fine Dining đầu tiên tại Bắc Ninh.
                            Với không gian và phục vụ chuẩn 5 sao đầu tiên và duy nhất tại TP Bắc Ninh, với đầy đủ hạng
                            phòng phù hợp với các cặp đôi, gia đình, hội nghị, tiếp khách.
                            Thực đơn hấp dẫn được chế biến bởi Bếp Trưởng với 15 năm kinh nghiệm từ DuBai mang đến cho
                            bạn những trải nghiệm thú vị về ẩm thực chuẩn Âu đầu tiên tại Bắc Ninh, từ những món ăn bình
                            dân cho đến những sản phẩm đẳng cấp xa hoa.
                            Có không gian Lounge ở tầng 1 phục vụ cocktail, trà và bánh ngỡ như đang ở Châu Âu.

                        </p>
                        <p> Hãy đặt bàn tại STADE DE FRANCE để hưởng nhiều ưu đãi hấp dẫn, cùng trải nghiệm phong cách
                            ẩm thực Châu Âu cùng không gian đầy tinh tế, lãng mạn thật tuyệt vời trong lòng thành phố
                            Bắc Ninh.</p>
                        <a href="menu.html" class="btn fl-btn">Explore Our Menu<i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-collge-wrap fl-wrap">
                        <div class="main-iamge">
                            <video width="100%" class="video-style" height="130%" controls autoplay
                                onloadstart="this.volume=0.5">
                                <source src="{{ asset('client/Stadedefrance.mp4')}}" type="video/mp4">
                            </video>

                        </div>

                        <div class="images-collage-item" style="width:65%" data-position-left="68"
                            data-position-top="-15" data-zindex="2" data-opacity="1.0"><img
                                src=" {{ asset('client/images/all/8.jpg')}}" alt=""></div>
                        <div class="images-collage-item col_par" style="width:120px" data-position-left="-23"
                            data-position-top="-17" data-zindex="9" data-scrollax="properties: { translateY: '150px' }">
                            <img src="{{ asset('client/images/cube.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-dec sec-dec_top"></div>
            <div class="wave-bg" data-scrollax="properties: { translateY: '-150px' }"></div>
        </div>
    </section>
    <!--  section end  -->
    <!-- section   -->
    <section class="column-section no-padding hidden-section" data-scrollax-parent="true" id="sec4">
        <div class="column-wrap-bg left-wrap">
            <div class="bg par-elem " data-bg="{{ asset('client/images/home/bgh1.jpg')}}"
                data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="quote-box">
                <i class="fal fa-quote-right"></i>
                <p>"Nhưng để bạn có thể hiểu tất cả lỗi lầm này được sinh ra từ khi nào, niềm vui được buộc tội và ca
                    ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và chính những điều đến từ người phát minh ra sự thật, và
                    cũng như những người buộc tội anh ta."</p>
                <div class="signature"><img src="{{ asset('client/images/signature.png')}}" alt=""></div>
                <h4>Kevin Kowalsky - Restaurant’s cheaf</h4>
            </div>
        </div>
        <div class="column-section-wrap dark-bg">
            <div class="container">
                <div class="column-text">
                    <div class="section-title">
                        <h4>Gọi để đặt chỗ</h4>
                        <h2>Thời gian mở cửa</h2>
                        <div class="dots-separator fl-wrap"><span></span></div>
                    </div>
                    <div class="work-time fl-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Thứ hai đến Thứ sáu</h3>
                                <div class="hours">
                                    14:00<br>
                                    23:45
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Thứ bảy đến Chủ nhật</h3>
                                <div class="hours">
                                    10:00<br>
                                    23:45
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="bold-separator"><span></span></div>
                    <div class="big-number"><a href="#">+0921 898 999</a></div>
                </div>
            </div>
            <div class="illustration_bg">
                <div class="bg" data-bg="{{ asset('client/images/bg/dec/7.png')}}"></div>
            </div>
        </div>
    </section>
    <!-- section end -->
    <!--  section    -->
    <section data-scrollax-parent="true">
        <div class="container">
            <div class="section-title">
                <h4>Why people choose us</h4>
                <h2>Prepare for first-class service</h2>
                <div class="dots-separator fl-wrap"><span></span></div>
            </div>
            <div class="cards-wrap fl-wrap">
                <div class="row">
                    <!--card item -->
                    <div class="col-md-4">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " data-bg="{{ asset('client/images/services/1.jpg')}}"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <h2>Thực đơn mới hằng ngày</h2>
                                        <h4>Bắt đầu ăn ngon hơn</h4>
                                    </div>
                                    <div class="serv-num">01.</div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <i class="fal fa-fish"></i>
                                        </div>
                                        <p>Chúng tôi luông mang lại những món thực đơn mới lạ với hương vị đặc sắc nhất
                                            dành cho bạn.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card item end -->
                    <!--card item -->
                    <div class="col-md-4">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " data-bg="{{ asset('client/images/services/2.jpg')}}"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <h2>Nguyên liệu tươi, bữa ăn ngon</h2>
                                        <h4>Chất lượng là trái tim</h4>
                                    </div>
                                    <div class="serv-num">02.</div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <i class="fal fa-carrot"></i>
                                        </div>
                                        <p>Nguyên liệu được stade de france nhập từ các nơi xuất khẩu thực phẩm tươi
                                            ngon tại châu á, giúp bữa ăn của bạn luôn luôn chất lượng nhất!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card item end -->
                    <!--card item -->
                    <div class="col-md-4">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " data-bg="{{ asset('client/images/services/3.jpg')}}"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <h2>Đầu bếp Tài năng & Sáng tạo</h2>
                                        <h4>Luôn luôn sẵn sàng phục vụ</h4>
                                    </div>
                                    <div class="serv-num">03.</div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <i class="fal fa-utensils-alt"></i>
                                        </div>
                                        <p>Các đầu bếp tại stade de france là những đầu bếp có kinh nghiệm làm việc cũng
                                            như sự tài năng đã được chọn lọc tốt nhất.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card item end -->
                </div>
                <div class="section-dec sec-dec_top"></div>
                <div class="section-dec sec-dec_bottom"></div>
            </div>
            <a href="about.html" class="btn fl-btn border-btn">Xem thêm về chúng tôi <i
                    class="fal fa-long-arrow-right"></i></a>
            <div class="images-collage-item col_par" style="width:120px" data-position-left="83" data-position-top="87"
                data-zindex="1" data-scrollax="properties: { translateY: '150px' }"><img
                    src="{{ asset('client/images/cube.png')}}" alt=""></div>
        </div>
        <div class="section-bg">
            <div class="bg" data-bg="{{ asset('client/images/bg/dec/section-bg.png')}}"></div>
        </div>
    </section>
    <!--  section end  -->
    <!--  section  -->
    <section class="parallax-section dark-bg hidden-section" data-scrollax-parent="true">
        <div class="brush-dec2"></div>
        <div class="brush-dec"></div>
        <div class="bg par-elem bg_tabs" data-bg="{{ asset('client/images/home/dm1.jpg')}}"
            data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="cd-tabs-layer" data-frame="10">
            <div class="tabs-layer"></div>
        </div>
        <div class="overlay op7"></div>
        <div class="container">
            <div class="section-title">
                <h4>Ưu đãi thực đơn đặc biệt.</h4>
                <h2>Thưởng thức đặc sản của nhà hàng</h2>
                <div class="dots-separator fl-wrap"><span></span></div>
            </div>
            <!--  hero-menu_header  end-->
            <div class="hero-menu tabs-act fl-wrap">
                <div class="row">
                    <!--  hero-menu_header-->
                    <div class="col-md-3">
                        <div class="hero-menu_header fl-wrap">
                            <ul class="tabs-menu no-list-style change_bg">
                                <li class="current"><a href="#tab-1"
                                        data-bgtab="{{ asset('client/images/home/dm1.jpg')}}"><span>01.</span>Main
                                        dishes</a></li>
                                <li><a href="#tab-2"
                                        data-bgtab="{{ asset('client/images/home/dm3.jpg')}}"><span>02.</span>Starter</a>
                                </li>
                                <li><a href="#tab-3"
                                        data-bgtab="{{ asset('client/images/home/dm4.jpg')}}"><span>03.</span>Desserts</a>
                                </li>
                                <li><a href="#tab-4"
                                        data-bgtab="{{ asset('client/images/home/dm5.jpg')}}"><span>04.</span>Sea
                                        Food</a></li>
                                <li><a href="#tab-5"
                                        data-bgtab="{{ asset('client/images/home/dm2.jpg')}}"><span>05.</span>Drinks</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--  hero-menu_header  end-->
                    <!--  hero-menu_content   -->
                    <div class="col-md-9">
                        <div class="hero-menu_content fl-wrap">
                            <div class="tabs-container">
                                <div class="tab">
                                    <!--tab -->
                                    <div id="tab-1" class="tab-content first-tab">
                                        <!-- header-menu-item-->
                                        <div class="hero-menu-item">
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6><span>01.</span>Soft shell crab</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$29</span>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Granny help you treat yourself with a different meal everyday</p>
                                            </div>
                                        </div>
                                        <!-- header-menu-item end-->
                                        <!-- header-menu-item-->
                                        <div class="hero-menu-item">
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6><span>02.</span>Miso chicken</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$19</span>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Etiam tempus felis eros, id lobortis turpis</p>
                                            </div>
                                        </div>
                                        <!-- header-menu-item end-->
                                        <!-- header-menu-item-->
                                        <div class="hero-menu-item">
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6><span>03.</span>Fish pie</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$12</span>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>usce tempus tempus maximus volutpat</p>
                                            </div>
                                        </div>
                                        <!-- header-menu-item end-->
                                        <!-- header-menu-item-->
                                        <div class="hero-menu-item">
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6><span>04.</span>Salmon riverland</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$105</span>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet
                                                </p>
                                            </div>
                                        </div>
                                        <!-- header-menu-item end-->
                                    </div>
                                    <!--tab end -->
                                    <!--tab 2-->
                                    <div class="tab">
                                        <div id="tab-2" class="tab-content">
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>01.</span>Fried Potatoes</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$29</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Granny help you treat yourself with a different meal everyday
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>02.</span>Doner Burger</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$19</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>03.</span>Steak Filet</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$12</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>usce tempus tempus maximus volutpat</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>04.</span>Cayenne Shrimp</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$37</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>usce tempus tempus maximus volutpat</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                        </div>
                                    </div>
                                    <!--tab end -->
                                    <!--tab 3-->
                                    <div class="tab">
                                        <div id="tab-3" class="tab-content">
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>01.</span>Soft shell crab</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$29</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Granny help you treat yourself with a different meal everyday
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>02.</span>Tarte Tatin</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$25</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>03.</span>Creme Brulee</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$64</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>usce tempus tempus maximus volutpat</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>04.</span>Lemon Meringue</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$12</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>usce tempus tempus maximus volutpat</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                        </div>
                                    </div>
                                    <!--tab end -->
                                    <!--tab 4-->
                                    <div class="tab">
                                        <div id="tab-4" class="tab-content">
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>01.</span> Lobster with melted mozarella</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$156</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Granny help you treat yourself with a different meal everyday
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>02.</span> Butterfly fried shrimps platter</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$98</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                        </div>
                                    </div>
                                    <!--tab end -->
                                    <!--tab 5-->
                                    <div class="tab">
                                        <div id="tab-5" class="tab-content">
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>01.</span>Kiwi Coctail</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$12</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Granny help you treat yourself with a different meal everyday
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>02.</span>Summer Beer</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$21</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>03.</span>Red Mojitos</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$17</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>usce tempus tempus maximus volutpat</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>04.</span>Cabernet Sauvignon</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$40</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>usce tempus tempus maximus volutpat</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                        </div>
                                    </div>
                                    <!--tab end -->
                                </div>
                                <!--tabs end -->
                            </div>
                        </div>
                    </div>
                    <!--  hero-menu_content end  -->
                    <div class="clearfix"></div>
                    <a href="menu.html" class="hero_btn" style="margin-left:30px;">Xem tất cả menu <i
                            class="fal fa-long-arrow-right"></i></a>
                    <a href="#" class="pdf-link">Download PDF</a>
                </div>
            </div>
            <!--  hero-menu  end-->
        </div>
    </section>
    <!--  section  end-->

    <section data-scrollax-parent="true">
        <div class="container">
            <div class="section-title">
                <h4>Độ tuyệt vời của chúng tôi</h4>
                <h2>Top các sự kiện từ nhà hàng</h2>
                <div class="dots-separator fl-wrap"><span></span></div>
            </div>
            <div class="about-wrap  fl-wrap">
                <div class="row">
                    <div class="col-md-4">
                        <!-- team-item -->
                        <div class="team-box">
                            <div class="team-photo">
                                <img src="{{ asset('client/images/home/ev (1).jpg')}}" alt="" class="respimg">
                                <div class="overlay"></div>

                            </div>
                            <div class="team-info fl-wrap">
                                <h3> Kevin Gray </h3>
                                <h4> <i class="far fa-calendar-alt"></i> 21/12/2021 10:00</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                    </div>
                    <!-- team-item  end-->
                    <!-- team-item -->
                    <div class="col-md-4">
                        <div class="team-box">
                            <div class="team-photo">
                                <img src="{{ asset('client/images/home/ev (2).jpg')}}" alt="" class="respimg">
                                <div class="overlay"></div>

                            </div>
                            <div class="team-info fl-wrap">
                                <h3> Austin Evon </h3>
                                <h4> <i class="far fa-calendar-alt"></i> 21/12/2021 10:00</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                    </div>
                    <!-- team-item end  -->
                    <!-- team-item -->
                    <div class="col-md-4">
                        <div class="team-box">
                            <div class="team-photo">
                                <img src="{{ asset('client/images/home/ev (3).jpg')}}" alt="" class="respimg">
                                <div class="overlay"></div>

                            </div>
                            <div class="team-info fl-wrap">
                                <h3> Taylor Roberts </h3>
                                <h4> <i class="far fa-calendar-alt"></i> 21/12/2021 10:00</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                    </div>
                    <!-- team-item end  -->
                    <div class="col-md-12">
                        <div class="align-text-block">
                            <h4>Bạn muốn xem thêm các sự kiện hấp dẫn? chúng tôi luôn đón chào bạn.</h4>
                            <a href="blog.html" class="btn">Xem sự kiện <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="section-dec sec-dec_top"></div>
            </div>
            <div class="wave-bg wave-bg_right " data-scrollax="properties: { translateY: '-150px' }"></div>
        </div>
    </section>
    <!-- section end  -->
    <!-- section   -->
    <section class="column-section no-padding hidden-section" data-scrollax-parent="true">
        <div class="column-wrap-bg right-wrap">
            <div class="bg par-elem " data-bg="{{ asset('client/images/home/bgh2.jpg')}}"
                data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="column-wrap-bg-text">
                <h3>Nhà hàng của chúng tôi</h3>
                <h4>Bạn muốn đặt đồ ăn về nhà? Ghé thăm cửa hàng trực tuyến của chúng tôi.</h4>
                <a href="{{ route('menu') }}" class="btn  ajax">Menu online <i class="fal fa-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="column-section-wrap left-column-section dark-bg">
            <div class="container">
                <div class="column-text">
                    <div class="section-title">
                        <h4>Đặt bàn tại nhà hàng</h4>
                        <h2>Các tin tức</h2>
                        <div class="dots-separator fl-wrap"><span></span></div>
                    </div>
                    <!-- events-carousel-wrap -->
                    <div class="events-carousel-wrap fl-wrap">
                        <div class="events-carousel fl-wrap">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="event-carousel-item">
                                            <h4>Jazz Band Live Event</h4>
                                            <span class="event-date">25 may 2020</span>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium totam aperiam. </p>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end -->
                                    <!-- swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="event-carousel-item">
                                            <h4>Wine and Steak Day</h4>
                                            <span class="event-date">19 June 2020</span>
                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa
                                                convallis cursus. Nulla eu mi magna. Etiam suscipit gravida. </p>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end -->
                                    <!-- swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="event-carousel-item">
                                            <h4>Freedom Day Celebration</h4>
                                            <span class="event-date">14 October 2020</span>
                                            <p>Lorem Ipsum generators on the Internet king this the first true
                                                generator laudantium totam aperiam. </p>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end -->
                                </div>
                            </div>
                        </div>
                        <div class="ec-button ec-button-prev"><i class="fas fa-caret-left"></i></div>
                        <div class="ec-button ec-button-next"><i class="fas fa-caret-right"></i></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="bold-separator"><span></span></div>
                    <!-- events-carousel-wrap end -->
                    <a href="#" class="hero_btn no-align show-rb">Đặt bàn ngay bây giờ<i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="illustration_bg">
                <div class="bg" data-bg="{{ asset('client/images/bg/dec/6.png') }}"></div>
            </div>
        </div>
        <div class="wave-bg wave-bg_right " data-scrollax="properties: { translateY: '-150px' }"></div>
    </section>
    <!-- section end  -->
    <!-- section   -->
    <section>
        <div class="brush-dec2 brush-dec_bottom"></div>
        <div class="container">
            <div class="section-title">
                <h4>Thông tin về nhà hàng </h4>
                <h2>Sản phẩm và Dịch vụ</h2>
                <div class="dots-separator fl-wrap" style="margin-bottom:55px;"><span></span></div>
                <!-- inline-facts -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <i class="fas fa-hard-hat sz-cl-icon" ></i>

                            </div>
                        </div>
                        <h6>Nhà hàng, cà phê</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <i class="fas fa-glass-martini-alt sz-cl-icon" ></i>

                            </div>
                        </div>
                        <h6>Phòng chờ</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <i class="far fa-calendar-alt sz-cl-icon" ></i>
                            </div>
                        </div>
                        <h6>Tổ chức sự kiện</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                {{-- <div class="num" data-content="0" data-num="732">732</div> --}}
                                <i class="fas fa-camera-retro sz-cl-icon" ></i>
                            </div>
                        </div>
                        <h6>Điểm chụp hình, quay phim</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <!-- section end  -->
</div>
<!-- content end  -->
<!-- footer -->



@endsection
{{--

<section class="parallax-section dark-bg hidden-section" data-scrollax-parent="true">
    <div class="brush-dec2"></div>
    <div class="brush-dec"></div>
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h4>What said about us</h4>
            <h2>Customer Reviews</h2>
            <div class="dots-separator fl-wrap"><span></span></div>
        </div>
        <!-- inline-facts -->
        <div class="inline-facts-wrap">
            <div class="inline-facts">
                <div class="milestone-counter">
                    <div class="stats animaper">
                        <div class="num" data-content="0" data-num="254">154</div>
                    </div>
                </div>
                <h6>New Visiters Every Week</h6>
            </div>
        </div>
        <!-- inline-facts end -->
        <!-- inline-facts  -->
        <div class="inline-facts-wrap">
            <div class="inline-facts">
                <div class="milestone-counter">
                    <div class="stats animaper">
                        <div class="num" data-content="0" data-num="12168">12168</div>
                    </div>
                </div>
                <h6>Happy Customers Every Year</h6>
            </div>
        </div>
        <!-- inline-facts end -->
        <!-- inline-facts  -->
        <div class="inline-facts-wrap">
            <div class="inline-facts">
                <div class="milestone-counter">
                    <div class="stats animaper">
                        <div class="num" data-content="0" data-num="172">172</div>
                    </div>
                </div>
                <h6>Won Awards</h6>
            </div>
        </div>
        <!-- inline-facts end -->
        <!-- inline-facts  -->
        <div class="inline-facts-wrap">
            <div class="inline-facts">
                <div class="milestone-counter">
                    <div class="stats animaper">
                        <div class="num" data-content="0" data-num="732">732</div>
                    </div>
                </div>
                <h6>Weekly Deliveries</h6>
            </div>
        </div>
        <!-- inline-facts end -->
    </div>
</section> --}}