@extends('client.layouts.main')
@section('title', 'News')
@section('content')
<div id="wrapper">
    <!-- content  -->	
    <div class="content">
        <!--  section  -->  
        <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="{{ asset('client/images/bg/11.jpg') }} " data-scrollax="properties: { translateY: '30%' }"></div>
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
                                                    <div class="swiper-slide hov_zoom"><img src="{{ asset('client/images/all/9.jpg') }} " alt=""><a href="images/all/9.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                    <div class="swiper-slide hov_zoom"><img src="{{ asset('client/images/all/10.jpg') }} " alt=""><a href="images/all/10.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                    <div class="swiper-slide hov_zoom"><img src="{{ asset('client/images/all/11.jpg') }} " alt=""><a href="images/all/11.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
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
                                            <li><a href="#">12 may 2020</a></li>
                                            <li> - </li>
                                            <li><a href="#">Interviews </a></li>
                                            <li><a href="#">Receipts</a></li>
                                        </ul>
                                    </div>
                                    <p>
                                        Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. Sed viverra dolor sed dolor placerat ornare ut . Integer iaculis tellus nulla, quis imperdiet magna venenatis vitae..
                                    </p>
                                    <a href="blog-single.html" class="btn">Read more <i class="fal fa-long-arrow-right"></i></a>
                                    <ul class="post-counter">
                                        <li><i class="far fa-eye"></i><span>687</span></li>
                                        <li><i class="far fa-comment"></i><span>10</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post end-->
                            <!-- post -->
                            <div class="post fl-wrap fw-post">
                                <h2><a href="blog-single.html">Pasta Receipt</a></h2>
                                <ul class="blog-title-opt">
                                    <li><a href="#">12 may 2020</a></li>
                                    <li> - </li>
                                    <li><a href="#">Interviews </a></li>
                                    <li><a href="#">Receipts</a></li>
                                </ul>
                                <!-- blog media -->
                                <div class="blog-media fl-wrap">
                                    <img src="{{ asset('client/images/all/4.jpg') }} " class="respimg" alt="">
                                </div>
                                <!-- blog media end -->
                                <div class="blog-text fl-wrap">
                                    <div class="pr-tags fl-wrap">
                                        <span>Tags : </span>
                                        <ul>
                                            <li><a href="#">Dishes</a></li>
                                            <li><a href="#">Photography</a></li>
                                            <li><a href="#">Receipts</a></li>
                                        </ul>
                                    </div>
                                    <p>
                                        Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. Sed viverra dolor sed dolor placerat ornare ut . Integer iaculis tellus nulla, quis imperdiet magna venenatis vitae..
                                    </p>
                                    <a href="blog-single.html" class="btn">Read more <i class="fal fa-long-arrow-right"></i></a>
                                    <ul class="post-counter">
                                        <li><i class="far fa-eye"></i><span>567</span></li>
                                        <li><i class="far fa-comment"></i><span>3</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post end--> 
                            <!-- post -->
                            <div class="post fl-wrap fw-post">
                                <h2><a href="blog-single.html">Jazz Band Bingo</a></h2>
                                <ul class="blog-title-opt">
                                    <li><a href="#">12 may 2020</a></li>
                                    <li> - </li>
                                    <li><a href="#">Interviews </a></li>
                                    <li><a href="#">Events</a></li>
                                </ul>
                                <!-- blog media -->
                                <div class="blog-media fl-wrap">
                                    <img src="{{ asset('client/images/all/11.jpg') }} " class="respimg" alt="">
                                </div>
                                <!-- blog media end -->
                                <div class="blog-text fl-wrap">
                                    <div class="pr-tags fl-wrap">
                                        <span>Tags : </span>
                                        <ul>
                                            <li><a href="#">Dishes</a></li>
                                            <li><a href="#">Photography</a></li>
                                            <li><a href="#">Receipts</a></li>
                                        </ul>
                                    </div>
                                    <p>
                                        Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. Sed viverra dolor sed dolor placerat ornare ut . Integer iaculis tellus nulla, quis imperdiet magna venenatis vitae..
                                    </p>
                                    <a href="blog-single.html" class="btn">Read more <i class="fal fa-long-arrow-right"></i></a>
                                    <ul class="post-counter">
                                        <li><i class="far fa-eye"></i><span>134</span></li>
                                        <li><i class="far fa-comment"></i><span>40</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post end-->
                            <!-- post -->
                            <div class="post fl-wrap fw-post">
                                <h2><a href="blog-single.html">Burger Big Daddy Receipt</a></h2>
                                <ul class="blog-title-opt">
                                    <li><a href="#">12 may 2020</a></li>
                                    <li> - </li>
                                    <li><a href="#">Interviews </a></li>
                                    <li><a href="#">Receipts</a></li>
                                </ul>
                                <!-- blog media -->
                                <div class="blog-media fl-wrap">
                                    <img src="{{ asset('client/images/all/15.jpg') }} " class="respimg" alt="">
                                </div>
                                <!-- blog media end -->
                                <div class="blog-text fl-wrap">
                                    <div class="pr-tags fl-wrap">
                                        <span>Tags : </span>
                                        <ul>
                                            <li><a href="#">Dishes</a></li>
                                            <li><a href="#">Photography</a></li>
                                            <li><a href="#">Receipts</a></li>
                                        </ul>
                                    </div>
                                    <p>
                                        Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. Sed viverra dolor sed dolor placerat ornare ut . Integer iaculis tellus nulla, quis imperdiet magna venenatis vitae..
                                    </p>
                                    <a href="blog-single.html" class="btn">Read more <i class="fal fa-long-arrow-right"></i></a>
                                    <ul class="post-counter">
                                        <li><i class="far fa-eye"></i><span>227</span></li>
                                        <li><i class="far fa-comment"></i><span>3</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post end-->                                        
                            <!--pagination-->   
                            <div class="pagination fl-wrap">
                                <a href="#" class="prevposts-link"><i class="fal fa-long-arrow-left"></i></a>
                                <a href="#">01.</a>
                                <a href="#" class="current-page">02.</a>
                                <a href="#">03.</a>
                                <a href="#">04.</a>
                                <a href="#" class="nextposts-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <!--pagination end-->                                          
                        </div>
                    </div>
                    <!--  sidebar  -->  
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
                                    <img src="{{ asset('client/images/all/19.jpg') }} " alt="">
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
                                            <div class="recent-post-img"><a href="#"><img src="{{ asset('client/images/all/14.jpg') }} " alt=""></a></div>
                                            <div class="recent-post-content">
                                                <h4><a href="#">Snowy Mountains Trip</a></h4>
                                                <div class="recent-post-opt">
                                                    <span class="post-date">3 May 2016</span> 
                                                    <a href="#" class="post-comments">0 Comments</a> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="recent-post-img"><a href="#"><img src="{{ asset('client/images/all/15.jpg') }} " alt=""></a></div>
                                            <div class="recent-post-content">
                                                <h4><a href="#">Snowy Mountains Trip</a></h4>
                                                <div class="recent-post-opt">
                                                    <span class="post-date">3 May 2016</span> 
                                                    <a href="#" class="post-comments">0 Comments</a> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="recent-post-img"><a href="#"><img src="{{ asset('client/images/all/16.jpg') }} " alt=""></a></div>
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
                    <!--  sidebar end-->    
                </div>
                <div class="fl-wrap limit-box"></div>
            </div>
            <div class="section-bg">
                <div class="bg"  data-bg="images/bg/dec/section-bg.png"></div>
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
                <a href="index.html" class="footer-logo"><img src="images/logo2.png" alt=""></a>
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