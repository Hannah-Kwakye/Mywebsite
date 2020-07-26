


@extends('layouts.app')
@section('content')
    

 <!-- banner area start -->
 
    <div class="banner-area">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#"><img src="{{asset('img/banner/1.jpg')}}')}}" alt=""></a>
                    <div class="banner-content banner-content-style1">
                        <h2>BLUE <br> <span>Glasses</span></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#"><img src="{{asset('img/banner/2.jpg')}}" alt=""></a>
                    <div class="banner-content banner-content-style2">
                        <span>-  Up to  -</span>
                        <h2>30% off</h2>
                        <p>Black Friday Discount</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#"><img src="{{asset('img/banner/3.jpg')}}" alt=""></a>
                    <div class="banner-content banner-content-style3">
                        <h2>Trand <br>2018.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- banner area end -->
<!-- product area start -->
    <div class="product-area pt-115 pb-120">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>New Arrivals</h2>
                </div>
                <div class="product-style">
                    <div class="arrival-active owl-carousel">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html"> Dagger Smart Trousers </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Homme Tapered Smart </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Navy Bird Print </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('img/product/fashion-colorful/4.jpg')}}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Jacket Stonewash </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('img/product/fashion-colorful/5.jpg')}}" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Skinny Jeans Terry </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Black Faux Suede </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Black Faux Suede </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->
    <!-- banner area two start -->
    <div class="banner-area-two">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-wrapper mrgn-r-4">
                        <a href="#"><img src="{{asset('img/banner/4.jpg')}}" alt=""></a>
                        <div class="banner-wrapper-content">
                            <h3>20% <br><span>off</span></h3>
                            <h2><span>Trending</span> <br>Fashion <br>2018...</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="row no-gutters">
                        <div class="col-lg-12">
                            <div class="banner-wrapper mrgn-b-4">
                                <a href="#"><img src="{{asset('img/banner/5.jpg')}}" alt=""></a>
                                <div class="banner-wrapper-content2">
                                    <h3>Winter <br>Collection.</h3>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="banner-wrapper mrgn-r-4">
                                        <a href="#"><img src="{{asset('img/banner/6.jpg')}}" alt=""></a>
                                        <div class="banner-wrapper-content3">
                                            <h3><span>new</span> <br>fashion</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-wrapper">
                                        <a href="#"><img src="{{asset('img/banner/7.jpg')}}" alt=""></a>
                                        <div class="banner-wrapper-content4">
                                            <h4>25 December.</h4>
                                            <h2>Gift Shop</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area two end -->
    <!-- all products area start -->
    <div class="all-products-area pt-115 pb-50">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>All Products</h2>
                </div>
                <div class="product-style">
                    <div class="product-tab-list text-center mb-95 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                            <h4>all </h4>
                        </a>
                        <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                            <h4>woman </h4>
                        </a>
                        <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                            <h4>man</h4>
                        </a>
                        <a href="#home4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home4">
                            <h4>ACCESSORIES</h4>
                        </a>
                        <a href="#home5" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home5">
                            <h4>kids</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="home1" role="tabpanel">
                            <div class="custom-row">
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Black Faux Suede</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Denim Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Dagger Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Homme Tapered Smart</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Jacket Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Arifo Stylas Dress </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Skinny Jeans Terry</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Leg Smart Trousers </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home2" role="tabpanel">
                            <div class="custom-row">
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Black Faux Suede</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Leg Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Skinny Jeans Terry </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Jacket Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Homme Tapered Smart</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Dagger Smart Trousers </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Denim Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home3" role="tabpanel">
                            <div class="custom-row">
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Black Faux Suede</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Leg Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Skinny Jeans Terry</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Jacket Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Homme Tapered Smart</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Dagger Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Denim Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home4" role="tabpanel">
                            <div class="custom-row">
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Denim Stonewash </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Dagger Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Homme Tapered Smart</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Jacket Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Skinny Jeans Terry</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Leg Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Black Faux Suede </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home5" role="tabpanel">
                            <div class="custom-row">
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Black Faux Suede</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Leg Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Skinny Jeans Terry</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Jacket Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Homme Tapered Smart</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Dagger Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Denim Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- all products area end -->
    <!-- brand logo area start -->
    <div class="brand-logo-area pl-100 pr-100">
        <div class="ptb-135 gray-bg">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand">
                    <img src="{{asset('img/brand-logo/1.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('img/brand-logo/2.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('img/brand-logo/1.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('img/brand-logo/3.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('img/brand-logo/4.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('img/brand-logo/5.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('img/brand-logo/6.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- brand logo area end -->
    <!-- banner3 area start -->
    <div class="banner-area3 pt-120 pb-115">
        <div class="pl-100 pr-100">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="banner-wrapper mrgn-negative">
                            <a href="#"><img src="{{asset('img/banner/8.jpg')}}" alt=""></a>
                            <div class="banner-wrapper2-content">
                                <h3>Speatial </h3>
                                <h2>Style</h2>
                                <span>Start from $299.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-8">
                        <div class="row no-gutters banner-mrg">
                            <div class="col-md-6">
                                <div class="banner-wrapper mrgn-b-5 mrgn-r-5 ">
                                    <img src="{{asset('img/banner/9.jpg')}}" alt="">
                                    <div class="banner-wrapper3-content">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-wrapper mrgn-b-5">
                                    <img src="{{asset('img/banner/10.jpg')}}" alt="">
                                    <div class="banner-wrapper3-content banner-text-color">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-wrapper mrgn-r-5">
                                    <img src="{{asset('img/banner/11.jpg')}}" alt="">
                                    <div class="banner-wrapper3-content">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-wrapper">
                                    <img src="{{asset('img/banner/12.jp')}}" alt="">
                                    <div class="banner-wrapper3-content">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection