<header class="main-header">
    <!-- header-top  -->
    <div class="header-top">
        <div class="container">
            <div class="lang-wrap"><a href="#" class="act-lang">En</a><span>/</span><a href="#">Vi</a></div>
            <div class="header-top_contacts"><a href="#"><span>Call now:</span> +0921898999</a><a href="#"><span>Email :</span> stadedefrancestore@domain.com</a></div>
        </div>
    </div>
    <!--header-top end -->
    <!-- header-inner -->
    <div class="header-inner  fl-wrap">
        <div class="container">
            <div class="header-container fl-wrap">
                <a href="{{ route('home') }}" class="logo-holder"><img src="{{ asset('client/images/logo.png') }}" alt=""></a>
                <div class="show-reserv_button show-rb"><span>Booking Now</span> <i class="fal fa-bookmark"></i></div>
                <div class="show-share-btn showshare htact"><i class="fal fa-bullhorn"></i> <span class="header-tooltip">Share</span></div>
                {{-- <div class="show-cart sc_btn htact"><i class="fal fa-shopping-bag"></i><span class="show-cart_count">3</span><span class="header-tooltip">Your Cart</span></div> --}}
                <!-- nav-button-wrap-->
                <div class="nav-button-wrap">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!--  navigation -->
                @include('client.layouts.nav')
                <!-- navigation  end -->                        
                <!-- header-cart_wrap  -->
                {{-- <div class="header-cart_wrap novis_cart">
                    <div class="header-cart_title">Your Cart <span>4 items</span></div>
                    <div class="header-cart_wrap_container fl-wrap">
                        <div class="box-widget-content">
                            <div class="widget-posts fl-wrap">
                                <ol>
                                    <li class="clearfix">
                                        <a href="#"  class="widget-posts-img"><img src=" {{ asset('client/images/menu/1.jpg') }}" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Grilled Steaks</a>
                                            <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $45</div>
                                        </div>
                                        <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#"  class="widget-posts-img"><img src=" {{ asset('client/images/menu/2.jpg') }}" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Cripsy Lobster & Shrimp Bites</a>
                                            <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $22</div>
                                        </div>
                                        <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#"  class="widget-posts-img"><img src=" {{ asset('client/images/menu/3.jpg') }}" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Chicken tortilla soup</a>
                                            <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $37</div>
                                        </div>
                                        <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="header-cart_wrap_total fl-wrap">
                        <div class="header-cart_wrap_total_item">Subtotal : <span>$147</span></div>
                    </div>
                    <div class="header-cart_wrap_footer fl-wrap">
                        <a href="cart.html"> View Cart</a>
                        <a href="checkout.html">  Checkout</a>
                    </div>
                </div> --}}
                <!-- header-cart_wrap end  -->
                <!-- share-wrapper -->
                <div class="share-wrapper isShare">
                    <div class="share-container fl-wrap"></div>
                </div>
                <!-- share-wrapper-end -->
            </div>
        </div>
    </div>
    <!-- header-inner end  -->
</header>