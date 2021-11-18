@extends('client.layouts.main')
@section('title', 'About')
@section('content')
<div id="wrapper">
    <!-- content  -->	
    <div class="content">
        <!--  section  -->  
        <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="{{ asset('client/images/bg/10.jpg') }} " data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Enjoy your time in our restaurant with pleasure.</h4>
                    <h2>About our Restaurant</h2>
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
        <section class="hidden-section big-padding" data-scrollax-parent="true">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title text-align_left">
                            <h4>Our story</h4>
                            <h2>Few words about us</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="text-block ">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.
                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.
                            </p>
                            <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                            <a href="about.html" class="btn fl-btn">Explore Our Menu<i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-collge-wrap fl-wrap">
                            <div class="single-slider-wrap">
                                <div class="single-slider fl-wrap">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper lightgallery">
                                            <div class="swiper-slide hov_zoom"><img src="{{ asset('client/images/all/4.jpg') }} " alt=""><a href="images/all/4.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                            <div class="swiper-slide hov_zoom"><img src="{{ asset('client/images/all/1.jpg') }} " alt=""><a href="images/all/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                            <div class="swiper-slide hov_zoom"><img src="{{ asset('client/images/all/2.jpg') }} " alt=""><a href="images/all/2.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                        </div>
                                        <div class="ss-slider-pagination"></div>
                                        <div class="ss-slider-cont ss-slider-cont-prev"><i class="fas fa-caret-left"></i></div>
                                        <div class="ss-slider-cont ss-slider-cont-next"><i class="fas fa-caret-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="images-collage-item col_par" style="width:120px" data-position-left="-23" data-position-top="-17" data-zindex="9" data-scrollax="properties: { translateY: '150px' }"><img src="images/cube.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="section-dec sec-dec_top"></div>
                <div class="wave-bg" data-scrollax="properties: { translateY: '-150px' }"></div>							
            </div>
        </section>
        <!--  section  end-->  
        <!--  section  -->   
        <section class="parallax-section dark-bg hidden-section" data-scrollax-parent="true">
            <div class="brush-dec2"></div>
            <div class="brush-dec"></div>
            <div class="bg par-elem bg_tabs"  data-bg="{{ asset('client/images/bg/14.jpg') }} " data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
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
        </section>
        <!--  section  end-->  
        <!--  section  -->                               
        <section data-scrollax-parent="true">
            <div class="container">
                <div class="section-title">
                    <h4>Our awesome team</h4>
                    <h2>Met Our Chefs</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
                <div class="about-wrap  fl-wrap">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- team-item -->
                            <div class="team-box">
                                <div class="team-photo">
                                    <img src="{{ asset('client/images/team/1.jpg') }} " alt="" class="respimg">
                                    <div class="overlay"></div>
                                    <div class="team-social">
                                        <span class="ts_title">Follow</span>
                                        <ul class="no-list-style">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info fl-wrap">
                                    <h3> Kevin  Gray </h3>
                                    <h4>Master chef in New York</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                </div>
                            </div>
                        </div>
                        <!-- team-item  end-->
                        <!-- team-item -->
                        <div class="col-md-4">
                            <div class="team-box">
                                <div class="team-photo">
                                    <img src="{{ asset('client/images/team/2.jpg') }} " alt="" class="respimg">
                                    <div class="overlay"></div>
                                    <div class="team-social">
                                        <span class="ts_title">Follow</span>
                                        <ul class="no-list-style">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info fl-wrap">
                                    <h3> Austin Evon </h3>
                                    <h4>Master chef in Florida</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                </div>
                            </div>
                        </div>
                        <!-- team-item end  -->
                        <!-- team-item -->
                        <div class="col-md-4">
                            <div class="team-box">
                                <div class="team-photo">
                                    <img src="{{ asset('client/images/team/3.jpg') }} " alt="" class="respimg">
                                    <div class="overlay"></div>
                                    <div class="team-social">
                                        <span class="ts_title">Follow</span>
                                        <ul class="no-list-style">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info fl-wrap">
                                    <h3> Taylor Roberts </h3>
                                    <h4>Master chef in Maiami</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                </div>
                            </div>
                        </div>
                        <!-- team-item end  -->
                        <div class="col-md-8">
                            <div class="align-text-block">
                                <h4>Want to cook something tasty? Read our best recipes.</h4>
                                <a href="blog.html" class="btn">Recipes Book <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="section-dec sec-dec_top"></div>
                </div>
                <div class="wave-bg wave-bg_right " data-scrollax="properties: { translateY: '-150px' }"></div>
            </div>
        </section>
        <!--  section  end-->  
        <!--  section  -->                               
        <section class="parallax-section dark-bg hidden-section" data-scrollax-parent="true">
            <div class="brush-dec2"></div>
            <div class="brush-dec"></div>
            <div class="bg par-elem bg_tabs"  data-bg="{{ asset('client/images/bg/12.jpg') }} " data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="video_section-title fl-wrap">
                    <h4>Our promo video</h4>
                    <h2>Get ready to start your exciting journey. <br> Our restaurant will lead you through the amazing food world.</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
                <a href="https://vimeo.com/10322316" class="promo-link big_prom     image-popup"><span class="color-bg"><i class="fas fa-play"></i></span></a>                          
            </div>
        </section>
        <!--  section  end-->  
        <!--  section  -->                               
        <section>
            <div class="brush-dec2 brush-dec_bottom"></div>
            <div class="container">
                <div class="section-title">
                    <h4>What said about us</h4>
                    <h2>Testimonials</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="testimonilas-carousel-wrap fl-wrap">
                <div class="tc-button tc-button-next"><i class="fas fa-caret-right"></i></div>
                <div class="tc-button tc-button-prev"><i class="fas fa-caret-left"></i></div>
                <div class="testimonilas-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--testi-item-->
                            <div class="swiper-slide">
                                <div class="testi-item fl-wrap">
                                    <div class="testi-avatar"><img src="{{ asset('client/images/avatar/2.jpg') }} " alt=""></div>
                                    <div class="testimonilas-text fl-wrap">
                                        <h3>Andy Dimasky</h3>
                                        <div class="star-rating" data-starrating="5"> </div>
                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                        <span class="testi-number">01.</span>
                                    </div>
                                </div>
                            </div>
                            <!--testi-item end-->
                            <!--testi-item-->
                            <div class="swiper-slide">
                                <div class="testi-item fl-wrap">
                                    <div class="testi-avatar"><img src="{{ asset('client/images/avatar/3.jpg') }} " alt=""></div>
                                    <div class="testimonilas-text fl-wrap">
                                        <h3>Frank Dellov</h3>
                                        <div class="star-rating" data-starrating="4"> </div>
                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                        <span class="testi-number">02.</span>
                                    </div>
                                </div>
                            </div>
                            <!--testi-item end-->
                            <!--testi-item-->
                            <div class="swiper-slide">
                                <div class="testi-item fl-wrap">
                                    <div class="testi-avatar"><img src="{{ asset('client/images/avatar/4.jpg') }} " alt=""></div>
                                    <div class="testimonilas-text fl-wrap">
                                        <h3>Centa Simpson</h3>
                                        <div class="star-rating" data-starrating="5"> </div>
                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                        <span class="testi-number">03.</span>
                                    </div>
                                </div>
                            </div>
                            <!--testi-item end-->
                            <!--testi-item-->
                            <div class="swiper-slide">
                                <div class="testi-item fl-wrap">
                                    <div class="testi-avatar"><img src="{{ asset('client/images/avatar/5.jpg') }} " alt=""></div>
                                    <div class="testimonilas-text fl-wrap">
                                        <h3>Nicolo Svensky</h3>
                                        <div class="star-rating" data-starrating="5"> </div>
                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                        <span class="testi-number">04.</span>
                                    </div>
                                </div>
                            </div>
                            <!--testi-item end-->
                        </div>
                    </div>
                </div>
                <div class="tc-pagination"></div>
            </div>
        </section>
        <!--  section  end-->  
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
<!-- reservation-modal-wrap-->          
<div class="reservation-modal-wrap">
    <div class="reserv-overlay crm">
        <div class="cd-reserv-overlay-layer" data-frame="25">
            <div class="reserv-overlay-layer"></div>
        </div>
    </div>
    <div class="reservation-modal-container bot-element">
        <div class="reservation-modal-item fl-wrap">
            <div class="close-reservation-modal crm"><i class="fal fa-times"></i></div>
            <div class="reservation-bg"></div>
            <div class="section-title">
                <h4>Don't forget to book a table</h4>
                <h2>Table Reservations</h2>
                <div class="dots-separator fl-wrap"><span></span></div>
            </div>
            <div class="reservation-wrap">
                <div id="reserv-message"></div>
                <form  class="custom-form" action="http://restabook.kwst.net/dark/php/reservation.php" name="reservationform" id="reservationform">
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                            </div>
                            <div class="col-sm-6">
                                <input type="text"  name="email" id="email" placeholder="Email Address *" value=""/>
                            </div>
                            <div class="col-sm-6">
                                <input type="text"  name="phone" id="phone" placeholder="Phone *" value=""/>
                            </div>
                            <div class="col-sm-6">
                                <div class="fl-wrap">
                                    <select name="numperson" id="persons" data-placeholder="Persons" class="chosen-select no-search-select">
                                        <option data-display="Persons">Any</option>
                                        <option value="1">1 Person</option>
                                        <option value="2">2 People</option>
                                        <option value="3">3 People</option>
                                        <option value="4">4 People</option>
                                        <option value="5">5 People</option>
                                        <option value="Banquet">Banquet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-6">
                                <div class="date-container2 fl-wrap">
                                    <input type="text" placeholder="Date" id="res_date"     name="resdate"   value=""/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="fl-wrap">
                                    <select name="restime" id="resrv-time" data-placeholder="Time" class="chosen-select no-search-select">
                                        <option data-display="Time">Any</option>
                                        <option value="10:00am">10:00 am</option>
                                        <option value="11:00am">11:00 am</option>
                                        <option value="12:00pm">12:00 pm</option>
                                        <option value="1:00pm">1:00 pm</option>
                                        <option value="2:00pm">2:00 pm</option>
                                        <option value="3:00pm">3:00 pm</option>
                                        <option value="4:00pm">4:00 pm</option>
                                        <option value="5:00pm">5:00 pm</option>
                                        <option value="6:00pm">6:00 pm</option>
                                        <option value="7:00pm">7:00 pm</option>
                                        <option value="8:00pm">8:00 pm</option>
                                        <option value="9:00pm">9:00 pm</option>
                                        <option value="10:00pm">10:00 pm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <textarea name="comments"  id="comments" cols="30" rows="3" placeholder="Your Message:"></textarea>
                        <div class="clearfix"></div>
                        <button class="btn color-bg" id="reservation-submit">Reserve Table  <i class="fal fa-long-arrow-right"></i></button>
                    </fieldset>
                </form>
            </div>
            <!-- reservation-wrap end-->
        </div>
    </div>
</div>
@endsection