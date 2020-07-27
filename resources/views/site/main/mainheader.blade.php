<!-- header start -->
<header>
    <div class="header-area">
        <div class="header-left-sidebar">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{asset('img/logo/logo.png')}}" alt=""></a>
            </div>
            <div class="main-menu menu-hover">
                <nav>
                    <ul>
                        <li><a href="#">SHOP</a>
                            <ul class="single-dropdown">
                                 {{-- href="{{ route('profile.index') }} --}}
                                 <li><a href="{{ route('electricals') }}">Electronic</a> </li>
                                <li><a href="{{ route('footwears') }}">Footwear</a> </li>
                                <li><a href="{{ route('clothing') }}">Clothing</a></li>
                                <li><a href="{{ route('perfumes') }}">Perfumes</a> </li>
                                <li><a href="{{ route('giftshop') }}">GiftShop</a> </li>
                                <li><a href="{{ route('accessories') }}">Accessories</a></li>
                                {{-- <li><a href="{{ route('electshop') }}">Footwear</a></li>
                                <li><a href="{{ route('electshop') }}">Clothing</a></li>
                                <li><a href="{{ route('electshop') }}">Electronics</a></li> 
                                <li><a href="{{ route('electshop') }}">Gifts Shop</a></li>
                                <li><a href="{{ route('electshop') }}">Handicraft</a></li>
                                <li><a href="{{ route('electshop') }}">Perfumes</a></li> --}}
                                <li><a target="_blank" href="{{ route('accessories') }}">Accessories</a></li>
                               
                            </ul>
                        </li>
                        <li><a href="#">Products</a>
                            <div class="mega-menu-dropdown mega-dropdown-width-2">
                                <div class="mega-dropdown-style mega-common2 mega-common4">
                                    <h4 class="mega-subtitle"> shop layout</h4>
                                    <ul>
                                        <li><a href="{{ route('electshopgrid') }}">FASHION</a></li>
                                        <li><a href="{{ route('electshopgrid') }}"> FOOTWEAR</a></li>
                                        
                                        {{-- <li><a href="shop.html">grid 4 column</a></li>
                                        <li><a href="shop-grid-box.html">grid box style</a></li>
                                        <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                        <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                        <li><a href="shop-list-box.html">list box style</a></li>
                                        <li><a href="cart.html">shopping cart</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li> --}}
                                    </ul>
                                </div>
                                {{-- <div class="mega-dropdown-style mega-common2 mega-common4">
                                    <h4 class="mega-subtitle">product details</h4>
                                    <ul>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html"> tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">sticky style 2</a></li>
                                        <li><a href="product-details-6.html">gallery style</a></li>
                                        <li><a href="product-details-7.html">gallery style 2</a></li>
                                        <li><a href="product-details-8.html">fixed image style</a></li>
                                        <li><a href="product-details-9.html">fixed image style 2</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </li>
                        {{-- <li><a href="#">Pages</a>
                            <ul class="single-dropdown">
                                <li><a href="about-us.html">about us</a></li>
                                <li><a href="menu-list.html">menu list</a></li>
                                <li><a href="login.html">login</a></li>
                                <li><a href="register.html">register</a></li>
                                <li><a href="cart.html">cart page</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                                <li><a href="wishlist.html">wishlist</a></li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </li> --}}
                        
                        <li><a href="#">Latest <span>New</span></a>
                            <div class="mega-menu-dropdown mega-dropdown-width">
                                <div class="mega-dropdown-style mega-common4 mb-40">
                                    <h4 class="mega-subtitle"> Clothing</h4>
                                    <ul>
                                        <li><a href="{{ route('electshopgrid') }}"> New Products</a></li>
                                        {{-- <li><a href="#"> Jackets</a></li> --}}
                                        <li><a href="{{ route('electshopgrid') }}"> Dress</a></li>
                                        {{-- <li><a href="#"> Winter Collection</a></li> --}}
                                        {{-- <li><a href="#"> Ladis Jeans</a></li> --}}
                                        <li><a href="{{ route('electshopgrid') }}"> Multipacks</a></li>
                                        <li><a href="{{ route('electshopgrid') }}"> Shorts</a></li>
                                        <li><a href="{{ route('electshopgrid') }}"> Night wear</a></li>
                                        <li><a href="{{ route('electshopgrid') }}"> Top Products</a></li>
                                    </ul>
                                </div>
                                <div class="mega-dropdown-style mega-common4 mb-40">
                                    <h4 class="mega-subtitle"> New Products</h4>
                                    <ul>
                                        <li><a href="{{ route('electshopgrid') }}">View All</a></li>
                                        <li><a href="{{ route('electshopgrid') }}">Boots</a></li>
                                        <li><a href="{{ route('electshopgrid') }}">Flat Shoes</a></li>
                                        <li><a href="{{ route('electshopgrid') }}">Women Heels</a></li>
                                        <li><a href="{{ route('electshopgrid') }}">Slippers</a></li>
                                        <li><a href="{{ route('electshopgrid') }}">Socks & Tights</a></li>
                                        <li><a href="{{ route('electshopgrid') }}">Trainers</a></li>
                                    </ul>
                                </div>
                                <div class="mega-dropdown-style mega-common4 mb-40">
                                    <h4 class="mega-subtitle">Trending</h4>
                                    <ul>
                                        <li><a href="{{ route('electshopgrid') }}">Weeding</a></li>
                                        <li><a href="{{ route('electshopgrid') }}">Winter</a></li>
                                        {{-- <li><a href="#">Holidays</a></li>
                                        <li><a href="#">Night Party</a></li>
                                        <li><a href="#">Outing Dress</a></li>
                                        <li><a href="#">Outing Dress</a></li>
                                    </ul> --}}
                                </div>
                                <div class="mega-dropdown-style mega-common4 discount-mega-common4 mb-40">
                                    <div class="mega-discount">
                                        <h5>Make A Discount</h5>
                                        <h2>UP TO 30%</h2>
                                    </div>
                                </div>
                                <div class="mega-banner-img-2">
                                    <a href="single-product.html"><img src="{{asset('img/bg/3.png')}}" alt=""></a>
                                </div>
                            </div>
                        </li>


<!-- Slot for Admin Navigation -->
                        {{-- <li><a href="{{ route('admin') }}">Admin</a>

                        </li> --}}
                        {{-- <li><a href="#">Discount</a></li>
                        <li><a href="#">Health <span>New</span></a></li>
                        <li><a href="contact.html">contact</a></li> --}}
                    </ul>
                </nav>
            </div>
            <div class="currency">
                <ul>
                    <li><a href="#">GH</a></li>
                    <li><a href="#">USD</a></li>
                </ul>
            </div>
        </div>
        <div class="header-right-sidebar">
            <div class="header-search-cart-login">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('img/logo/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="header-search">
                    <form action="#">
                        <input placeholder="Search What you want" type="text">
                        <button>
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>
                
                {{-- <div class="header-login">
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Reg</a></li>
                    </ul>
                </div> --}}
                @if (Route::has('login'))
                <div class="header-login">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
        
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                        @endif
                    @endauth
                </div>
            @endif
        
                <div class="header-cart cart-res">
                    <a class="icon-cart" href="#">
                        <i class="ti-shopping-cart"></i>
                        <span class="shop-count pink">02</span>
                    </a>
                    <ul class="cart-dropdown">
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{asset('img/cart/1.jpg')}}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h5><a href="#"> Bits Headphone</a></h5>
                                <h6><a href="#">Black</a></h6>
                                <span>$80.00 x 1</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#"><i class="ti-trash"></i></a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{asset('img/cart/2.jpg')}}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h5><a href="#"> Bits Headphone</a></h5>
                                <h6><a href="#">Black</a></h6>
                                <span>$80.00 x 1</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#"><i class="ti-trash"></i></a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{asset('img/cart/3.jpg')}}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h5><a href="#"> Bits Headphone</a></h5>
                                <h6><a href="#">Black</a></h6>
                                <span>$80.00 x 1</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#"><i class="ti-trash"></i></a>
                            </div>
                        </li>
                        <li class="cart-space">
                            <div class="cart-sub">
                                <h4>Subtotal</h4>
                            </div>
                            <div class="cart-price">
                                <h4>$240.00</h4>
                            </div>
                        </li>
                        <li class="cart-btn-wrapper">
                            <a class="cart-btn btn-hover" href="#">view cart</a>
                            <a class="cart-btn btn-hover" href="#">checkout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu-area clearfix d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="#">SHOP</a>
                                <ul>
                                    
                                    <li><a href="{{ route('electricals') }}">Electronic</a> </li>
                                    <li><a href="{{ route('footwears') }}">Footwear</a> </li>
                                    <li><a href="{{ route('clothing') }}">Clothing</a></li>
                                    <li><a href="{{ route('perfumes') }}">Perfumes</a> </li>
                                    <li><a href="{{ route('giftshop') }}">GiftShop</a> </li>
                                    <li><a target="_blank" href="{{ route('accessories') }}">Accessories</a></li>
                                   
                                </ul>
                            </li>
                            {{-- <li><a href="#">pages</a>
                                <ul>
                                    <li><a href="about-us.html">about us</a></li>
                                    <li><a href="menu-list.html">menu list</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="cart.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li><a href="#">shop</a>
                                <ul>
                                    <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                    <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                    <li><a href="shop.html">grid 4 column</a></li>
                                    <li><a href="shop-grid-box.html">grid box style</a></li>
                                    <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                    <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                    <li><a href="shop-list-box.html">list box style</a></li>
                                    <li><a href="product-details.html">tab style 1</a></li>
                                    <li><a href="product-details-2.html">tab style 2</a></li>
                                    <li><a href="product-details-3.html"> tab style 3</a></li>
                                    <li><a href="product-details-4.html">sticky style</a></li>
                                    <li><a href="product-details-5.html">sticky style 2</a></li>
                                    <li><a href="product-details-6.html">gallery style</a></li>
                                    <li><a href="product-details-7.html">gallery style 2</a></li>
                                    <li><a href="product-details-8.html">fixed image style</a></li>
                                    <li><a href="product-details-9.html">fixed image style 2</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li><a href="#">BLOG</a>
                                <ul>
                                    <li><a href="blog.html">blog 3 colunm</a></li>
                                    <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="contact.html"> Contact  </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="slider-area ">
                <div class="slider-active owl-carousel">
                    <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url({{asset('img/slider/15.jpg)')}}">
                        <div class="slider-content slider-animation slider-content-style-1 slider-animated-1">
                            <h1 class="animated">Fashion</h1>
                            <p class="animated">Create you own style for better looks. </p>
                        </div>
                        <div class="position-slider-img">
                            <div class="slider-img-1">
                                <img src="{{asset('img/slider/9.png')}}" alt="">
                            </div>
                            <div class="slider-img-2">
                                <img class="tilter" src="{{asset('img/slider/7.png')}}" alt="">
                            </div>
                            <div class="slider-img-3">
                                <img src="{{asset('img/slider/8.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url({{asset('img/slider/15.jpg)')}}">
                        <div class="slider-content slider-animation slider-content-style-1 slider-animated-2">
                            <h1 class="animated">Fashion</h1>
                            <p class="animated">Create you own style for better looks. </p>
                        </div>
                        <div class="position-slider-img">
                            <div class="slider-img-1">
                                <img src="{{asset('img/slider/9.png')}}" alt="">
                            </div>
                            <div class="slider-img-4 slider-mrg">
                                <img class="tilter" src="{{asset('img/slider/10.png')}}" alt="">
                            </div>
                            <div class="slider-img-3">
                                <img src="{{asset('img/slider/8.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->