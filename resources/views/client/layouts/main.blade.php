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
        @yield('content')

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
                        <form class="custom-form" action="http://restabook.kwst.net/dark/php/reservation.php"
                            name="reservationform" id="reservationform">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="name" placeholder="Your Name *" value="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" id="email" placeholder="Email Address *"
                                            value="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="phone" id="phone" placeholder="Phone *" value="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="fl-wrap">
                                            <select name="numperson" id="persons" data-placeholder="Persons"
                                                class="chosen-select no-search-select">
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
                                            <input type="text" placeholder="Date" id="res_date" name="resdate"
                                                value="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="fl-wrap">
                                            <select name="restime" id="resrv-time" data-placeholder="Time"
                                                class="chosen-select no-search-select">
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
                                <textarea name="comments" id="comments" cols="30" rows="3"
                                    placeholder="Your Message:"></textarea>
                                <div class="clearfix"></div>
                                <button class="btn color-bg" id="reservation-submit">Reserve Table <i
                                        class="fal fa-long-arrow-right"></i></button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- reservation-wrap end-->
                </div>
            </div>
        </div>
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