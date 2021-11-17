@extends('client.layouts.main')
@section('title', 'Menu')
@section('content')
<div id="wrapper">
    <!-- content  -->	
    <div class="content">
        <!--  section  -->  
        <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="{{ asset('client/images/bg/12.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Special menu offers.</h4>
                    <h2>Discover Our menu</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
            </div>
            <div class="brush-dec"></div>
        </section>
        <!--  section  end-->  
        <!--  section  -->   
        <section class="small-top-padding">
            <div class="brush-dec2 brush-dec_bottom"></div>
            <div class="container">
                <!--  hero-menu_header  end-->
                <div class="hero-menu single-menu  tabs-act fl-wrap">
                    <div class="gallery_filter-button btn">Show Filters <i class="fal fa-long-arrow-down"></i></div>
                    <!--  hero-menu_header-->
                    <div class="hero-menu_header fl-wrap gth">
                        <ul class="tabs-menu  no-list-style">
                            <li class="current"><a href="#tab-1"><span>01.</span>Main dishes</a></li>
                            <li><a href="#tab-2"><span>02.</span>Starter</a></li>
                            <li><a href="#tab-3"><span>03.</span>Desserts</a></li>
                            <li><a href="#tab-4"><span>04.</span>Sea Food</a></li>
                            <li><a href="#tab-5"><span>05.</span>Drinks</a></li>
                        </ul>
                    </div>
                    <!--  hero-menu_header  end-->
                    <!--  hero-menu_content   -->
                    <div class="hero-menu_content fl-wrap">
                        <div class="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content first-tab">
                                    <!-- hero-menu-item-->
                                    <div class="hero-menu-item">
                                        <a href="{{ asset('client/images/menu/1.jpg')}}" class="hero-menu-item-img image-popup"><img src=" {{ asset('client/images/menu/thumbnails/1.jpg')}} " alt=""></a>
                                        <div class="hero-menu-item-title fl-wrap">
                                            <h6>  Soft shell crab</h6>
                                            <div class="hmi-dec"></div>
                                            <span class="hero-menu-item-price">$29</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                        <div class="hero-menu-item-details">
                                            <p>Seasoned with an herb crust, served with au jus and handcarved to order.</p>
                                        </div>
                                    </div>
                                    <!-- hero-menu-item end-->  
                                    <!-- hero-menu-item-->
                                    <div class="hero-menu-item">
                                        <a href=" {{ asset('client/images/menu/2.jpg')}}" class="hero-menu-item-img image-popup"><img src="{{ asset('client/images/menu/thumbnails/2.jpg')}}" alt=""></a>
                                        <div class="hero-menu-item-title fl-wrap">
                                            <h6> Miso chicken</h6>
                                            <div class="hmi-dec"></div>
                                            <span class="hero-menu-item-price">$19</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                        <div class="hero-menu-item-details">
                                            <p>Our tender, juicy filet paired with a steamed lobster tail. Served with your choice of signature potato and one freshly made side.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- hero-menu-item end-->                                                           
                                    <!-- hero-menu-item-->
                                    <div class="hero-menu-item">
                                        <a href="{{ asset('client/images/menu/3.jpg')}}" class="hero-menu-item-img image-popup"><img src="{{ asset('client/images/menu/thumbnails/3.jpg ')}}" alt=""></a>
                                        <div class="hero-menu-item-title fl-wrap">
                                            <h6> Fish pie</h6>
                                            <div class="hmi-dec"></div>
                                            <span class="hero-menu-item-price">$12</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                        <div class="hero-menu-item-details">
                                            <p>Integer nec lacinia arcu, vel rhoncus leo aliquet.</p>
                                        </div>
                                    </div>
                                    <!-- hero-menu-item end-->                                                           
                                    <!-- hero-menu-item-->
                                    <div class="hero-menu-item">
                                        <a href=" {{ asset('client/images/menu/4.jpg')}}" class="hero-menu-item-img image-popup"><img src=" {{ asset('client/images/menu/thumbnails/4.jpg')}}" alt=""></a>
                                        <div class="hero-menu-item-title fl-wrap">
                                            <h6> Garden salad</h6>
                                            <div class="hmi-dec"></div>
                                            <span class="hero-menu-item-price">$9</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                        <div class="hero-menu-item-details">
                                            <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur nec nunc. </p>
                                        </div>
                                    </div>
                                    <!-- hero-menu-item end-->
                                    <!-- hero-menu-item-->
                                    <div class="hero-menu-item">
                                        <a href="{{ asset('client/images/menu/5.jpg')}}" class="hero-menu-item-img image-popup"><img src="{{ asset('client/images/menu/thumbnails/5.jpg ')}}" alt=""></a>                                                        
                                        <div class="hero-menu-item-title fl-wrap">
                                            <h6>Victoria's Filet Mignon</h6>
                                            <div class="hmi-dec"></div>
                                            <span class="hero-menu-item-price">$49</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                        <div class="hero-menu-item-details">
                                            <p>Usce tempus tempus maximus volutpat</p>
                                        </div>
                                    </div>
                                    <!-- hero-menu-item end-->                                                                                                                  
                                    <!-- hero-menu-item-->
                                    <div class="hero-menu-item">
                                        <a href="{{ asset('client/images/menu/6.jpg ')}}" class="hero-menu-item-img image-popup"><img src=" {{ asset('client/images/menu/thumbnails/6.jpg')}}" alt=""></a>                                                        
                                        <div class="hero-menu-item-title fl-wrap">
                                            <h6> Salmon Riverland</h6>
                                            <div class="hmi-dec"></div>
                                            <span class="hero-menu-item-price">$105</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                        <div class="hero-menu-item-details">
                                            <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet</p>
                                        </div>
                                    </div>
                                    <!-- hero-menu-item end-->                                                         
                                    <!-- hero-menu-item-->
                                    <div class="hero-menu-item">
                                        <a href=" {{ asset('client/images/menu/7.jpg')}}" class="hero-menu-item-img image-popup"><img src=" {{ asset('client/images/menu/thumbnails/7.jpg')}}" alt=""></a>                                                        
                                        <div class="hero-menu-item-title fl-wrap">
                                            <h6>Prime Cuts of Beef</h6>
                                            <div class="hmi-dec"></div>
                                            <span class="hero-menu-item-price">$34</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                        <div class="hero-menu-item-details">
                                            <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur nec nunc.</p>
                                        </div>
                                    </div>
                                    <!-- hero-menu-item end-->                                                                                                                  
                                    <!-- hero-menu-item-->
                                    <div class="hero-menu-item">
                                        <a href="images/menu/8.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/8.jpg" alt=""></a>                                                        
                                        <div class="hero-menu-item-title fl-wrap">
                                            <h6> Slow-Roasted Prime Rib</h6>
                                            <div class="hmi-dec"></div>
                                            <span class="hero-menu-item-price">$52</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                        <div class="hero-menu-item-details">
                                            <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet</p>
                                        </div>
                                    </div>
                                    <!-- hero-menu-item end-->                                                         
                                </div>
                                <!--tab end -->
                                <!--tab 2-->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/9.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/9.jpg" alt=""></a>
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Fried Potatoes</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$29</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Granny help you treat yourself with a different meal everyday</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->  
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/10.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/10.jpg" alt=""></a>                                                        
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Doner Burger</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$19</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Etiam tempus felis eros, id lobortis turpis</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->                                                           
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/3.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/3.jpg" alt=""></a>                                                        
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Steak Filet</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$12</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Granny help you treat yourself with a different meal everyday</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->                                                           
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/8.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/8.jpg" alt=""></a>                                                        
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Cayenne Shrimp</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$37</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Cum sociis natoque penatibus et magnis</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->                                                            
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/2.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/2.jpg" alt=""></a>                                                        
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Meatball tagliatelle</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$22</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Etiam fermentum justo nec auctor pretium</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->   
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab 3-->
                                <div class="tab">
                                    <div id="tab-3" class="tab-content">
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/10.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/10.jpg" alt=""></a>                                                        
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Soft shell crab</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$29</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Granny help you treat yourself with a different meal everyday</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->  
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/7.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/7.jpg" alt=""></a>                                                         
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Tarte Tatin</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$25</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Etiam tempus felis eros, id lobortis turpis</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->                                                           
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/9.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/9.jpg" alt=""></a>                                                        
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Creme Brulee</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$64</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>usce tempus tempus maximus volutpat</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->                                                           
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/4.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/4.jpg" alt=""></a>                                                         
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Lemon Meringue</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$12</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>usce tempus tempus maximus volutpat</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->                                                            
                                    </div>
                                </div>
                                <!--tab end -->                                                    
                                <!--tab 4-->
                                <div class="tab">
                                    <div id="tab-4" class="tab-content">
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/1.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/1.jpg" alt=""></a>
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>  Lobster with melted mozarella</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$36</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Granny help you treat yourself with a different meal everyday</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->  
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/2.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/2.jpg" alt=""></a>
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>  Butterfly fried shrimps platter</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$98</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Etiam tempus felis eros, id lobortis turpis</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/8.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/8.jpg" alt=""></a>
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Filet De Saumon</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$156</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Granny help you treat yourself with a different meal everyday</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->  
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/5.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/5.jpg" alt=""></a>
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Chapel Down</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$18</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Etiam tempus felis eros, id lobortis turpis</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end--> 													
                                    </div>
                                </div>
                                <!--tab end -->                                                     
                                <!--tab 5-->
                                <div class="tab">
                                    <div id="tab-5" class="tab-content">
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/2.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/2.jpg" alt=""></a>
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Kiwi Coctail</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$12</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Granny help you treat yourself with a different meal everyday</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->  
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/5.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/5.jpg" alt=""></a>
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Summer Beer</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$21</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>Etiam tempus felis eros, id lobortis turpis</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->                                                           
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/6.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/6.jpg" alt=""></a>
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Red Mojitos</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$17</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>usce tempus tempus maximus volutpat</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end-->                                                           
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/9.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/9.jpg" alt=""></a>
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Cabernet Sauvignon</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$40</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>usce tempus tempus maximus volutpat</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end--> 
                                        <!-- hero-menu-item-->
                                        <div class="hero-menu-item">
                                            <a href="images/menu/1.jpg" class="hero-menu-item-img image-popup"><img src="images/menu/thumbnails/1.jpg" alt=""></a>
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>Italian Soup</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">$11</span>
                                                <div class="add_cart">Add To Cart</div>
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>usce tempus tempus maximus volutpat</p>
                                            </div>
                                        </div>
                                        <!-- hero-menu-item end--> 													
                                    </div>
                                </div>
                                <!--tab end -->                                                    
                            </div>
                            <!--tabs end -->
                        </div>
                    </div>
                    <!--  hero-menu_content end  -->
                </div>
                <!--  hero-menu  end-->                                
                <div class="clearfix"></div>
                <div class="bold-separator bold-separator_dark"><span></span></div>
                <div class="clearfix"></div>
                <a href="#" class="btn  ">Download menu in PDF<i class="fal fa-long-arrow-right"></i></a>                       
            </div>
            <div class="section-bg">
                <div class="bg"  data-bg="images/bg/dec/section-bg.png"></div>
            </div>
        </section>
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