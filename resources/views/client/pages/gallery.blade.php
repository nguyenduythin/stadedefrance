@extends('client.layouts.main')
@section('title', 'Gallery')
@section('content')
  <!-- content  -->	
  <div class="content">
    <!--  section  -->  
    <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem "  data-bg="{{ asset('client/images/banner/bn2.jpg') }}  " data-scrollax="properties: { translateY: '30%' }"></div>
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
                <a href="#" class="gallery-filter" data-filter=".model"><span>05.</span>Model</a>

                <a href="#" class="gallery-filter" data-filter=".food"><span>06.</span>Food</a>
            </div>
            <!-- gallery-filters end-->
            <!-- gallery start -->
            <div class="gallery-items min-pad  lightgallery three-column fl-wrap" style="margin-bottom:50px;">
                <!-- gallery-item-->
                <div class="gallery-item dishes events">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (4).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (4).jpg') }} "    alt="">
                    </div>
                </div>
                <!-- gallery-item end-->
                <!-- gallery-item-->
                <div class="gallery-item resta_img events">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (1).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (1).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  events">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (2).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (2).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item resta_img events">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (3).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (3).jpg') }} "    alt="">
                    </div>
                </div>

                <div class="gallery-item  resta_img">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (5).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (5).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  resta_img">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (6).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (6).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  resta_img">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (7).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (7).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  resta_img">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (8).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (8).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  food">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (22).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (22).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  food">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (21).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (21).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  food">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (20).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (20).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  food">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (19).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (19).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  food">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (18).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (18).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  food">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (17).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (17).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  food">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (16).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (16).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  food">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (15).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (15).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/model/md (1).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/model/md (1).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/model/md (2).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/model/md (2).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/model/md (3).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/model/md (3).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/model/md (4).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/model/md (4).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/model/md (5).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/model/md (5).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/model/md (6).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/model/md (6).jpg') }} "    alt="">
                    </div>
                </div> <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/model/md (7).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/model/md (7).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/model/md (8).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/model/md (8).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  resta_img">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (10).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (10).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (35).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (35).jpg') }} "    alt="">
                    </div>
                </div> <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (36).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (36).jpg') }} "    alt="">
                    </div>
                </div> <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (37).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (37).jpg') }} "    alt="">
                    </div>
                </div> <div class="gallery-item  model">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (38).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (38).jpg') }} "    alt="">
                    </div>
                </div> <div class="gallery-item  events">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (39).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (39).jpg') }} "    alt="">
                    </div>
                </div> <div class="gallery-item  events">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (40).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (40).jpg') }} "    alt="">
                    </div>
                </div> <div class="gallery-item  events">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (41).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (41).jpg') }} "    alt="">
                    </div>
                </div> <div class="gallery-item  events">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (42).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (42).jpg') }} "    alt="">
                    </div>
                </div> <div class="gallery-item  events">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (43).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (43).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item  events">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/gallery/gl (44).jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/gallery/gl (44).jpg') }} "    alt="">
                    </div>
                </div>
                <div class="gallery-item resta_img events">
                    <div class="grid-item-holder hov_zoom">
                        <a href="{{ asset('client/images/all/14.jpg') }} " class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        <img  src="{{ asset('client/images/all/14.jpg') }} "    alt="">
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
@endsection