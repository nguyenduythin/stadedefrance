@extends('client.layouts.main')
@section('title', 'Contact')
@section('content')
<div id="wrapper">
    <!-- content  -->	
    <div class="content">
        <section class=" no-padding dark-bg hidden-section">
            <div class="map-container">
                <div id="singleMap"></div>
                <div class="scrollContorl"></div>
            </div>
            <!-- map-view-wrap --> 
            <div class="map-view-wrap">
                <div class="container">
                    <div class="map-view-wrap_item">
                        <div class="contact-details">
                            <h4>Contacts Details</h4>
                            <ul>
                                <li><span><i class="fal fa-map-marked-alt"></i> Adress :</span> <a href="#">USA 27TH Brooklyn NY</a></li>
                                <li><span><i class="fal fa-phone-rotary"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                                <li><span><i class="fal fa-mailbox"></i> Mail :</span> <a href="#">yourmail@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--map-view-wrap end --> 
            <div class="brush-dec"></div>
        </section>
        <!--  section  -->   
        <section class="hidden-section big-padding con-sec" data-scrollax-parent="true" id="sec3">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="section-title text-align_left">
                            <h2>Get in touch</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="text-block ">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.
                            </p>
                        </div>
                        <div class="contactform-wrap">
                            <div id="message"></div>
                            <form  class="custom-form" action="http://restabook.kwst.net/dark/php/contact.php" name="contactform" id="contactform">
                                <fieldset>
                                <div id="message2"></div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" name="name" id="name2" placeholder="Your Name *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text"  name="email" id="email2" placeholder="Email Address *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text"  name="phone" id="phone2" placeholder="Phone *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class=" fl-wrap">
                                                <select name="subject" id="subject2" class="chosen-select no-search-select">
                                                    <option data-display="Subject">Any</option>
                                                    <option value="Upcoming Events">Upcoming Events </option>
                                                    <option value="Book table">Book table</option>
                                                    <option value="Banquet">Banquet</option>
                                                    <option value="Banquet">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea name="comments"  id="comments2" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                    <div class="clearfix"></div>
                                    <button class="btn float-btn flat-btn color-bg" id="submit_cnt">Send Message <i class="fal fa-long-arrow-right"></i></button>
                                </fieldset>
                            </form>
                        </div>
                        <div class="section-dec sec-dec_top"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="column-text_inside fl-wrap dark-bg" >
                            <div class="column-text">
                                <div class="section-title">
                                    <h4>Call For Reservations</h4>
                                    <h2>Opening Hours</h2>
                                    <div class="dots-separator fl-wrap"><span></span></div>
                                </div>
                                <div class="work-time fl-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Sunday to Tuesday</h3>
                                            <div class="hours">
                                                09:00<br>
                                                22:00
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Friday to Saturday</h3>
                                            <div class="hours">
                                                11:00<br>
                                                19:00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="bold-separator"><span></span></div>
                                <div class="big-number"><a href="#">+7(111)123456789</a></div>
                            </div>
                            <div class="illustration_bg">
                                <div class="bg"  data-bg="images/bg/dec/6.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
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
@section('script')
<script  src="{{ asset('client/js/map.js') }}"></script>  
<script  src="http://maps.google.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo"></script>           

@endsection