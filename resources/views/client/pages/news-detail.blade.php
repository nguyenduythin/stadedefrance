@extends('client.layouts.main')
@section('title', '- News details')
@section('content')
<div class="content">
    <!--  section  -->  
    <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem "  data-bg="{{ asset('client/images/bg/20.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h4>Our last News and Events</h4>
                <h2>Our Journal</h2>
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
    <section class="hidden-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="fl-wrap post-container">
                        <!-- post -->
                        <div class="post fl-wrap fw-post">
                            <h2><a href="blog-single.html">The Secret Ingredient</a></h2>
                            <ul class="blog-title-opt">
                                <li><a href="#">12 may 2020</a></li>
                                <li> - </li>
                                <li><a href="#">Interviews </a></li>
                                <li><a href="#">Receipts</a></li>
                            </ul>
                            <!-- blog media -->
                            <div class="blog-media fl-wrap">
                                <div class="single-slider-wrap">
                                    <div class="single-slider fl-wrap">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper lightgallery">
                                                <div class="swiper-slide hov_zoom"><img src="{{ asset('client/images/all/9.jpg')}}" alt=""><a href="{{ asset('client/images/all/9.jpg')}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                <div class="swiper-slide hov_zoom"><img src="{{ asset('client/images/all/10.jpg')}}" alt=""><a href="{{ asset('client/images/all/10.jpg')}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                <div class="swiper-slide hov_zoom"><img src="{{ asset('client/images/all/11.jpg')}}" alt=""><a href="{{ asset('client/images/all/11.jpg')}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                            </div>
                                            <div class="ss-slider-pagination"></div>
                                            <div class="ss-slider-cont ss-slider-cont-prev"><i class="fas fa-caret-left"></i></div>
                                            <div class="ss-slider-cont ss-slider-cont-next"><i class="fas fa-caret-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog media end -->
                            <div class="blog-text fl-wrap">
                                <div class="pr-tags fl-wrap">
                                    <span>Tags : </span>
                                    <ul>
                                        <li><a href="#">Interviews </a></li>
                                        <li><a href="#">Receipts</a></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.
                                    Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.
                                </p>
                                <blockquote>
                                    <p> Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.Cras lacinia magna vel molestie faucibus.   </p>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.
                                    Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.
                                </p>
                                <p>Quisque varius eros ac purus dignissim.
                                    Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.
                                </p>
                            </div>
                        </div>
                        <!-- post end-->
                        <!-- post-author-->                                   
                        {{-- <div class="post-author fl-wrap">
                            <div class="author-content">
                               <div class="author-social">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <!--post-author end-->
                        <div class="main-sidebar-widget fl-wrap">
                            <div class="social-widget">
                                <ul>
                                    <li><a href="#" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank" ><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#" target="_blank" ><i class="fab fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--post-related-->
                        <div class="post-related fl-wrap">
                            <h6 class="comments-title">You Might Also Like</h6>
                            <!-- post-related -->  
                            <div class=" row">
                                <!-- 1  --> 
                                <div class="item-related col-md-4">
                                    <a href="#"><img src="{{ asset('client/images/all/12.jpg')}}"   alt=""></a>
                                    <h3><a href="#">Pasta Receipt</a></h3>
                                    <span class="post-date">15 may 2020</span>
                                </div>
                                <!-- 1 end--> 
                                <!-- 2  --> 
                                <div class="item-related col-md-4">
                                    <a href="#"><img src="{{ asset('client/images/all/13.jpg')}}"   alt=""></a>
                                    <h3><a href="#">Jazz Band Bingo</a></h3>
                                    <span class="post-date">15 may 2020</span>
                                </div>
                                <!-- 2 end-->  
                                <!-- 3  --> 
                                <div class="item-related col-md-4">
                                    <a href="#"><img src="{{ asset('client/images/all/14.jpg')}}"   alt=""></a>
                                    <h3><a href="#">Burger Big Daddy Receipt</a></h3>
                                    <span class="post-date">25 may 2020</span>
                                </div>
                                <!-- 3 end-->                                        
                            </div>
                        </div>
                        <!-- post-related  end-->                                      
                        <div   class="single-post-comm fl-wrap">
                            <!--title-->
                          
                            <div class="clearfix"></div>
                            <!--end respond-->
                        </div>
                        <!--comments end -->                                        
                    </div>
                </div>
                {{-- <!--  sidebar  -->  
                <div class="col-md-4">
                    <!-- main-sidebar -->   
                    <div class="main-sidebar fixed-bar fl-wrap">
                        <!-- main-sidebar-widget-->   
                        <div class="main-sidebar-widget fl-wrap">
                            <div class="search-widget fl-wrap">
                                <form action="#">
                                    <input name="se" id="se" type="text" class="search-inpt-item" placeholder="Search.." value="Search..." />
                                    <button class="search-submit color-bg" id="submit_btn"><i class="fa fa-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <!-- main-sidebar-widget end-->                            
                        <!-- main-sidebar-widget-->   
                        <div class="main-sidebar-widget fl-wrap">
                            <h3>About Us</h3>
                            <div class="about-widget">
                                <img src="{{ asset('client/images/all/19.jpg')}}" alt="">
                                <h4>Restabook restaurant</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
                            </div>
                        </div>
                        <!-- main-sidebar-widget end-->
                        <!-- main-sidebar-widget-->   
                        <div class="main-sidebar-widget fl-wrap">
                            <h3>Recent Posts</h3>
                            <div class="recent-post-widget">
                                <ul>
                                    <li>
                                        <div class="recent-post-img"><a href="#"><img src="{{ asset('client/images/all/14.jpg')}}" alt=""></a></div>
                                        <div class="recent-post-content">
                                            <h4><a href="#">Snowy Mountains Trip</a></h4>
                                            <div class="recent-post-opt">
                                                <span class="post-date">3 May 2016</span> 
                                                <a href="#" class="post-comments">0 Comments</a> 
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="recent-post-img"><a href="#"><img src="{{ asset('client/images/all/15.jpg')}}" alt=""></a></div>
                                        <div class="recent-post-content">
                                            <h4><a href="#">Snowy Mountains Trip</a></h4>
                                            <div class="recent-post-opt">
                                                <span class="post-date">3 May 2016</span> 
                                                <a href="#" class="post-comments">0 Comments</a> 
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="recent-post-img"><a href="#"><img src="{{ asset('client/images/all/16.jpg')}}" alt=""></a></div>
                                        <div class="recent-post-content">
                                            <h4><a href="#">Snowy Mountains Trip</a></h4>
                                            <div class="recent-post-opt">
                                                <span class="post-date">3 May 2016</span> 
                                                <a href="#" class="post-comments">0 Comments</a> 
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- main-sidebar-widget end-->  
                        <!-- main-sidebar-widget-->   
                        <div class="main-sidebar-widget fl-wrap">
                            <h3>Resent tags </h3>
                            <div class="tags-widget">
                                <div class="tagcloud">
                                    <a href="#">Lifystyle</a>
                                    <a href="#">Travel</a>
                                    <a href="#">Trip</a>
                                    <a href="#">Outdoor</a>
                                    <a href="#">Camping</a>
                                    <a href="#">Photos</a>
                                    <a href="#">Adventure</a>
                                </div>
                            </div>
                        </div>
                        <!-- main-sidebar-widget end-->                       
                        <!-- main-sidebar-widget end-->
                        <!-- main-sidebar-widget-->   
                        <div class="main-sidebar-widget fl-wrap">
                            <h3>Categories</h3>
                            <div class="category-widget">
                                <ul class="cat-item">
                                    <li><a href="#">Seafood</a><span>12</span></li>
                                    <li><a href="#">Receipts</a><span>21</span></li>
                                    <li><a href="#">Dishes</a><span>34</span></li>
                                    <li><a href="#">Travel</a><span>8</span></li>
                                    <li><a href="#">Photos</a><span>9</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- main-sidebar-widget end-->
                        <!-- main-sidebar-widget-->   
                        <div class="main-sidebar-widget fl-wrap">
                            <h3>Social widget</h3>
                            <div class="social-widget">
                                <ul>
                                    <li><a href="#" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank" ><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#" target="_blank" ><i class="fab fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- main-sidebar-widget end--> 
                    </div>
                    <!-- main-sidebar end-->                                        
                </div>
                <!--  sidebar end-->     --}}
            </div>
            <div class="fl-wrap limit-box"></div>
        </div>
        <div class="section-bg">
            <div class="bg"  data-bg="{{ asset('client/images/bg/dec/section-bg.png')}}"></div>
        </div>
    </section>
    <!--  section end  -->  
    <div class="brush-dec2 brush-dec_bottom"></div>
</div>
@endsection