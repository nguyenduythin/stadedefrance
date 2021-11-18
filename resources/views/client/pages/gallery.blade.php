@extends('client.layouts.main')
@section('title', 'Gallery')
@section('content')

<div id="wrapper">
    <!-- content  -->	
    <div class="content">
        <!--  section  -->  
        <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="{{ asset('client/images/bg/4.jpg') }} " data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Enjoy your time in our restaurant with pleasure.</h4>
                    <h2> Restaurant Galley</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
            </div>
            <div class="hero-section-scroll">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
            <div class="brush-dec"></div>
        </section>
        <!--  section  end-->  
        <!--  section  -->   
        <section class="hidden-section" data-scrollax-parent="true">
            <div class="container">
                <div class="gallery_filter-button btn">Show Filters <i class="fal fa-long-arrow-down"></i></div>
                <!-- gallery-filters -->
                <div class="gallery-filters gth">
                    <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*"><span>01.</span>All Images</a>
                    <a href="#" class="gallery-filter " data-filter=".dishes"><span>02.</span>Dishes</a>
                    <a href="#" class="gallery-filter" data-filter=".resta_img"><span>03.</span>Restaurant</a>
                    <a href="#" class="gallery-filter" data-filter=".events"><span>04.</span>Events</a>
                    <a href="#" class="gallery-filter" data-filter=".video_links"><span>05.</span>Video</a>
                </div>
                <!-- gallery-filters end-->
                <!-- gallery start -->
                <div class="gallery-items min-pad  lightgallery three-column fl-wrap" style="margin-bottom:50px;">
                    <!-- gallery-item-->
                    <div class="gallery-item dishes">
                        <div class="grid-item-holder hov_zoom">
                            <a href="{{ asset('client/images/all/1.jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="{{ asset('client/images/all/1.jpg') }} "    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item resta_img events">
                        <div class="grid-item-holder hov_zoom">
                            <a href="{{ asset('client/images/all/14.jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="{{ asset('client/images/all/14.jpg') }} "    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item gallery-item-second dishes">
                        <div class="grid-item-holder hov_zoom">
                            <a href="{{ asset('client/images/all/9.jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="{{ asset('client/images/all/9.jpg') }} "    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item resta_img events">
                        <div class="grid-item-holder hov_zoom">
                            <a href="{{ asset('client/images/all/10.jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="{{ asset('client/images/all/10.jpg') }} "    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item resta_img video_links">
                        <div class="grid-item-holder hov_zoom">
                            <a href="https://vimeo.com/10322316" class="box-media-zoom   popup-image"><i class="fal fa-play"></i></a>
                            <img  src="{{ asset('client/images/all/11.jpg') }} "    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item dishes">
                        <div class="grid-item-holder hov_zoom">
                            <a href="{{ asset('client/images/all/17.jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="{{ asset('client/images/all/17.jpg') }} "    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item resta_img events video_links">
                        <div class="grid-item-holder hov_zoom">
                            <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="box-media-zoom   popup-image"><i class="fal fa-play"></i></a>
                            <img  src="{{ asset('client/images/all/16.jpg') }} "    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->	
                    <!-- gallery-item-->
                    <div class="gallery-item resta_img dishes">
                        <div class="grid-item-holder hov_zoom">
                            <a href="{{ asset('client/images/all/13.jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="{{ asset('client/images/all/13.jpg') }} "    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->	
                </div>
                <!-- gallery end -->                                
                <div class="clearfix"></div>
                <div class="bold-separator bold-separator_dark"><span></span></div>
                <div class="clearfix"></div>
                <a href="#" class="btn show-rb">Book table now<i class="fal fa-long-arrow-right"></i></a>                                     
            </div>
        </section>
        <!--  section end  -->  
        <div class="brush-dec2 brush-dec_bottom"></div>
    </div>
    <!-- content end  -->
    <!-- footer -->
    <div class="height-emulator fl-wrap"></div>
    <footer class="fl-wrap dark-bg fixed-footer">
        <div class="container">
            <div class="footer-top fl-wrap">
                <a href="index.html" class="footer-logo"><img src="{{ asset('client/images/logo2.png') }} " alt=""></a>
                <div class="lang-wrap"><a href="#" class="act-lang">En</a><span>/</span><a href="#">Fr</a></div>
                <div class="footer-social">
                    <span class="footer-social-title">Follow us :</span>
                    <ul>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- footer-widget-wrap -->
            <div class="footer-widget-wrap fl-wrap">
                <div class="row">
                    <!-- footer-widget -->
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <div class="footer-widget-title">About us</div>
                            <div class="footer-widget-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
                                <a href="about.html" class="footer-widget-content-link">Read more</a>                                                    	
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Contact info  </div>
                            <div class="footer-widget-content">
                                <div class="footer-contacts footer-box fl-wrap">
                                    <ul>
                                        <li><span>Call :</span><a href="#">+489756412322</a> , <a href="#">+56897456123</a></li>
                                        <li><span>Write  :</span><a href="#">yourmail@domain.com</a></li>
                                        <li><span>Find us : </span><a href="#">USA 27TH Brooklyn NY</a></li>
                                    </ul>
                                </div>
                                <a href="contacts.html" class="footer-widget-content-link">Get in Touch</a>                                                    	
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Subscribe</div>
                            <div class="footer-widget-content">
                                <div class="subcribe-form fl-wrap">
                                    <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                    <form id="subscribe" class="fl-wrap">
                                        <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                </div>
            </div>
            <!-- footer-widget-wrap end-->
            <div class="footer-bottom fl-wrap">
                <div class="copyright">&#169; Restabook 2020 . All rights reserved. </div>
                <div class="to-top"><span>Back To Top </span><i class="fal fa-angle-double-up"></i></div>
            </div>
        </div>
    </footer>
    <!-- footer end-->                                
</div>
<!-- wrapper end -->

@endsection