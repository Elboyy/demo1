@extends('layout')
@section('content')

    <!-- Slider/Intro Section Start -->
    <div class="intro11-slider-wrap section-2 mrl-50">
        <div class="intro11-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="intro11-section swiper-slide slide-4 slide-bg-2 bg-position" >
                   
                    <!-- Intro Content Start -->
                    <div class="intro11-content-2 text-center" style="background-color: rgba(173, 194, 177, 0.581); height: 400px;">
                        <h1 class="different-title">Welcome </h1>
                        <h2 class="title">Legend Sport </h2>
                        <h3 class="title">Since 2024 </h3>
                    </div>
                    <!-- Intro Content End -->
                </div>
                <div class="intro11-section swiper-slide slide-3 slide-bg-2 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content text-left" style="background-color: rgba(173, 194, 177, 0.581); height: 400px;">
                        <h3 class="title-slider text-uppercase">Top Trend</h3>
                        <h2 class="title">Boost Your Limits <br> New Product</h2>
                        <p class="desc-content">New and high technology can make you more comfort and play all around at the court.</p>
                        <a href="productPage.html" class="btn flosun-button secondary-btn rounded-0">Shop Now</a>
                    </div>
                    <!-- Intro Content End -->
                </div>
            </div>
            <!-- Slider Navigation -->
            <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left" style="font-size: 40px;background-color: rgba(98, 96, 96, 0.599);"></i></div>
            <div class="home1-slider-next swiper-button-next main-slider-nav" ><i class="lnr lnr-arrow-right" style="font-size: 40px;background-color: rgba(98, 96, 96, 0.599);"></i></div>
            <!-- Slider pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Slider/Intro Section End -->

    <!-- Banner Area Start Here -->
    <div class="banner-area mt-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style mb-30">
                        <div class="banner-img">
                            <a href="#">
                                <img src="assets/images/banner/e.jpg" alt="">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
                <div class="col-md-4 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style mb-30">
                        <div class="banner-img">
                            <a href="#">
                                <img src="assets/images/banner/c.jpg" alt="">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
                <div class="col-md-4 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style mb-30">
                        <div class="banner-img">
                            <a href="#">
                                <img src="assets/images/banner/d.jpg" alt="">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End Here -->


  
    <!--Product Area Start-->
    <div class="product-area mt-text-2 mb-text-3">
        <div class="container custom-area-2 overflow-hidden">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center mb-30">
                        <span class="section-title-1">New Product</span>
                        <h3 class="section-title-3">Popular Now</h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row product-row">
                <div class="col-12 col-custom">
                    <div class="product-slider swiper-container anime-element-multi">
                        <div class="swiper-wrapper">
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="productPage.html">
                                            <img src="assets/images/product/New folder/tech7i_1.jpeg" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/New folder/tech7i.jpeg" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <span class="onsale">Sale!</span>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="cart.html" title="Add To Cart">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="productPage.html">Lining Tectonic 7i</a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">RM 680.00</span>
                                            <span class="old-price"><del>RM 790.00</del></span>
                                        </div>
                                        <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                
                            </div>
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="productPage.html">
                                            <img src="assets/images/product/New folder/88dp_1.webp" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/New folder/88dp_2.webp" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="cart.html" title="Add To Cart">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="productPage.html">Yonex Axtros 88D Pro</a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">RM 890.00</span>
                                            <span class="old-price"><del>RM 990.00</del></span>
                                        </div>
                                        <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                    </div>
                                </div>
                                <!--Single Product End-->

                            </div>
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="details.html">
                                            <img src="assets/images/product/New folder/tech7_1.png" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/New folder/tech7.png" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="cart.html" title="Add To Cart">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="details.html">Lining Tectonic 7</a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">RM 790.00</span>
                                            <span class="old-price"><del>RM 890.00</del></span>
                                        </div>
                                        <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                    </div>
                                </div>
                                <!--Single Product End-->

                            </div>
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="details3.html">
                                            <img src="assets/images/product/New folder/1000z_1.webp" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/New folder/1000z_2.webp" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="cart.html" title="Add To Cart">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="details3.html">Ynoex Nanoframe 1000Z</a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">RM 890.00</span>
                                            <span class="old-price"><del>RM 990.00</del></span>
                                        </div>
                                        <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                    </div>
                                </div>
                                <!--Single Product End-->

                            </div>
                        </div>
                        <!-- Slider pagination -->
                        <div class="swiper-pagination default-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Product Area End-->

    <!-- Product Countdown Area Start Here -->
    <div class="product-countdown-area product-countdown-style pb-text-4">
        <div class="container custom-area">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center">
                        <h3 class="section-title-3">Deal of The Day</h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row">
                <!--Countdown Start-->
                <div class="col-12 col-custom">
                    <div class="countdown-area">
                        <div class="countdown-wrapper d-flex justify-content-center" data-countdown="2024/12/24"></div>
                    </div>
                </div>
                <!--Countdown End-->
            </div>
            <div class="row product-row">
                <div class="col-12 col-custom">
                    <div class="item-carousel-2 swiper-container anime-element-multi product-area">
                        <div class="swiper-wrapper">
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="details2.html">
                                            <img src="assets/images/product/New folder/victor_1.webp" alt="" class="product-image-1 w-100">
                                        </a>
                                        <span class="onsale">Sale!</span>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="cart.html" title="Add To Cart">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="details2.html">Victor Ryuga II</a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">RM 780.00</span>
                                            <span class="old-price"><del>RM 999.00</del></span>
                                        </div>
                                        <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="details5.html">
                                            <img src="assets/images/product/New folder/cloth2.jpeg" alt="" class="product-image-1 w-100">
                                        </a>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="cart.html" title="Add To Cart">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="details5.html">Yonex Brand Cloth Set</a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">RM 180.00</span>
                                            <span class="old-price"><del>RM 230.00</del></span>
                                        </div>
                                        <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="details6.html">
                                            <img src="assets/images/product/New folder/cover.webp" alt="" class="product-image-1 w-100">
                                        </a>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="cart.html" title="Add To Cart">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="details6.html">Victor Anti-slip and swent glove</a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">RM 19.00</span>
                                            <span class="old-price"><del>RM 30.00</del></span>
                                        </div>
                                        <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="productPage.html">
                                            <img src="assets/images/product/New folder/tech7i.jpeg" alt="" class="product-image-1 w-100">
                                        </a>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="cart.html" title="Add To Cart">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="productPage.html">Lining Tectonic 7i</a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">RM 680.00</span>
                                            <span class="old-price"><del>RM 790.00</del></span>
                                        </div>
                                        <a href="cart.html" class="btn product-cart">Add to Cart</a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="single-item swiper-slide"></div>
                        </div>
                        <!-- Slider pagination -->
                        <div class="swiper-pagination default-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Countdown Area End Here -->

    <!--Categories Area Start-->
    <div class="categories-area mt-no-text">
        <div class="container custom-area">
            <div class="row">
                <div class="cat-1 col-md-4 col-sm-12 col-custom">
                    <div class="categories-img mb-30">
                        <a href="yonexPage.html"><img src="assets/images/brand/yonex.png" alt=""></a>
                        <div class="categories-content">
                            <h3>Yonex</h3>
                            <h4>18 items</h4>
                        </div>
                    </div>
                </div>
                <div class="cat-2 col-md-8 col-sm-12 col-custom">
                    <div class="row">
                        <div class="cat-3 col-md-7 col-custom">
                            <div class="categories-img mb-30">
                                <a href="liningPage.html"><img src="assets/images/brand/lining.jpeg" alt=""></a>
                                <div class="categories-content">
                                    <h3>Lining</h3>
                                    <h4>18 items</h4>
                                </div>
                            </div>
                        </div>
                        <div class="cat-4 col-md-5 col-custom">
                            <div class="categories-img mb-30">
                                <a href="victorPage.html"><img src="assets/images/brand/victor.png" alt=""></a>
                                <div class="categories-content">
                                    <h3>Victor</h3>
                                    <h4>18 items</h4>
                                </div>
                            </div>
                        </div>
                        <div class="cat-5 col-md-4 col-custom">
                            <div class="categories-img mb-30">
                                <a href="equirePage.html"><img src="assets/images/product/New folder/cover.webp" alt=""></a>
                                <div class="categories-content">
                                    <h3>Equipments</h3>
                                    <h4>18 items</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Categories Area End-->

    <!-- Testimonial Area Start Here -->
    <div class="testimonial-area mt-text-2">
        <div class="container custom-area">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center">
                        <span class="section-title-1">We love our clients</span>
                        <h3 class="section-title-3">Look What They’re Saying</h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row">
                <div class="testimonial-carousel swiper-container intro11-carousel-wrap col-12 col-custom">
                    <div class="swiper-wrapper">
                        <div class="single-item swiper-slide">
                            <!--Single Testimonial Start-->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-img">
                                    <img src="assets/images/banner/logo.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                                    <div class="testimonial-author">
                                        <h6>Katherine Sullivan <span>Customer</span></h6>
                                    </div>
                                </div>
                            </div>
                            <!--Single Testimonial End-->
                        </div>
                        <div class="single-item swiper-slide">
                            <!--Single Testimonial Start-->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-img">
                                    <img src="assets/images/banner/logo.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                                    <div class="testimonial-author">
                                        <h6>Katherine Sullivan <span>Customer</span></h6>
                                    </div>
                                </div>
                            </div>
                            <!--Single Testimonial End-->
                        </div>
                    </div>
                    <!-- Slider Navigation -->
                    <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
                    <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
                    <!-- Slider pagination -->
                    <div class="swiper-pagination default-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End Here -->

    <!-- Newsletter Area Start Here -->
    <div class="news-letter-area gray-bg pt-no-text pb-no-text mt-text-3">
        <div class="container custom-area">
            <div class="row align-items-center">
                <!--Section Title Start-->
                <div class="col-md-6 col-custom">
                    <div class="section-title text-left mb-35">
                        <h3 class="section-title-3">Send Newsletter</h3>
                        <p class="desc-content mb-0">Enter Your Email Address For Our Mailing List To Keep Your Self Update</p>
                    </div>
                </div>
                <!--Section Title End-->
                <div class="col-md-6 col-custom">
                    <div class="news-latter-box">
                        <div class="newsletter-form-wrap text-center">
                            <form id="mc-form" class="mc-form">
                                <input type="email" id="mc-email" class="form-control email-box" placeholder="email@example.com" name="EMAIL">
                                <button id="mc-submit" class="btn rounded-0" type="submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Area End Here -->
    
    <!-- Brand Logo Area Start Here -->
    <div class="brand-logo-area gray-bg pt-no-text pb-no-text mt-text-5">
        <div class="container custom-area">
            <div class="row">
                <div class="col-12 col-custom">
                    <div class="brand-logo-carousel swiper-container intro11-carousel-wrap arrow-style-3">
                        <div class="swiper-wrapper">
                            <div class="single-brand swiper-slide">
                                <a href="yonexPage.html">
                                    <img src="assets/images/brand/yonex.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="single-brand swiper-slide">
                                <a href="liningPage.html">
                                    <img style="height: 100px;width: 280px;"src="assets/images/brand/lining.jpeg" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="single-brand swiper-slide">
                                <a href="victorPage.html">
                                    <img src="assets/images/brand/victor.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="single-brand swiper-slide">
                                <a href="productPage.html">
                                    <img src="assets/images/brand/dunlop.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="single-brand swiper-slide">
                                <a href="productPage.html">
                                    <img style="height: 80px;width: 280px;" src="assets/images/brand/kawasaki.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="single-brand swiper-slide">
                                <a href="productPage.html">
                                    <img src="assets/images/brand/kumpoo.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="single-brand swiper-slide">
                                <a href="productPage.html">
                                    <img src="assets/images/brand/felet.jpg" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <!-- Slider Navigation -->
                        <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
                        <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Logo Area End Here -->

    @endsection