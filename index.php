<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo2.min.css">
    
</head>

<body class="home">
<!-- Google Tag Manager (noscript) -->

    <div class="page-wrapper">
    
       <!-- Start of Header -->
        <?php
        include('main-header.php')
        
        ?>
       <video id="video1" width="100%" height="100%" loop controls autoplay muted>
    <source src="assets/video/eltron-compress.mp4" type="video/webm">
    </video>

        <main class="main">
            
            <!-- End of .intro-section -->

            <div class="container">
            <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm mt-6 mb-10"
                    data-swiper-options="{
                    'loop': true,
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 4000,
                        'disableOnInteraction': false
                    },
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- End of Iocn Box Wrapper -->

                <div class="title-link-wrapper mb-3 appear-animate">
                    <h2 class="title title-deals mb-1"> Fog Light</h2>
                    
                    <a href="fog-light-accessories.php" class="font-weight-bold ls-25">More Products<i
                            class="w-icon-long-arrow-right"></i></a>
                </div>
                <!-- End of .title-link-wrapper -->

                <div class="swiper-container swiper-theme product-deals-wrapper appear-animate mb-7"
                    data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-2">
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="18-9-9-led-fog-light.php">
                                        <img src="assets/images/bike-accessories-fog-light/18-led-9-9-led-fog-light/bike-accessories-19-9-9-led-fog-light-main.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                        <img src="assets/images/bike-accessories-fog-light/18-led-9-9-led-fog-light/bike-accessories-19-9-9-led-fog-light-1.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="18-9-9-led-fog-light.php">18 Led 9+9 Fog Light</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                   <ins class="new-price"><sup>&#8377;</sup>339.00/-</ins><del
                                                        class="old-price"><sup>&#8377;</sup>669.00/-</del>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="dc-power-mini-driving-fog-light.php">
                                        <img src="assets/images/bike-accessories-fog-light/mini-driving-fog-light/bike-accessories-mini-driving-fog-light.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                        <img src="assets/images/bike-accessories-fog-light/mini-driving-fog-light/bike-accessories-mini-driving-fog-light-1.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="dc-power-mini-driving-fog-light.php">Mini Driving Fog Light</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                   <ins class="new-price"><sup>&#8377;</sup>1650.00/-</ins><del
                                                        class="old-price"><sup>&#8377;</sup>1999.00/-</del>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="4-led-fog-light.php">
                                        <img src="assets/images/bike-accessories-fog-light/4-led-fog-light/4-led-fog-light-main.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                        <img src="assets/images/bike-accessories-fog-light/4-led-fog-light/4-led-fog-light-1.jpg" alt="Product"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="4-led-fog-light.php">4 Led Fog Light</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(6 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                                   <ins class="new-price"><sup>&#8377;</sup>1649.00/-</ins><del
                                                        class="old-price"><sup>&#8377;</sup>1999.00/-</del>
                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="6-led-fog-light.php">
                                        <img src="assets/images/bike-accessories-fog-light/6-led-fog-light/bike-accessories-6-led-fog-light.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                        <img src="assets/images/bike-accessories-fog-light/6-led-fog-light/bike-accessories-6-led-fog-light-1.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="6-led-fog-light.php">6 Led Fog Light</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(8 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                                   <ins class="new-price"><sup>&#8377;</sup>259.00/-</ins><del
                                                        class="old-price"><sup>&#8377;</sup>499.00/-</del>
                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="9-led-round-shape-fog-light.php">
                                         <img src="assets/images/bike-accessories-fog-light/9-led-round-shape-fog-light/bike-accessories-9-led-round-shape-fog-light.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                        <img src="assets/images/bike-accessories-fog-light/9-led-round-shape-fog-light/bike-accessories-9-led-round-shape-fog-light-1.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="9-led-round-shape-fog-light.php">9 Led Round Shape Fog Light</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                                   <ins class="new-price"><sup>&#8377;</sup>329.00/-</ins><del
                                                        class="old-price"><sup>&#8377;</sup>699.00/-</del>
                                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    
                    <div class="row category-wrapper electronics-cosmetics appear-animate mb-7">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="assets/images/headlight/headlight-banner.jpg" alt="Category Banner"
                                    width="640" height="200" style="background-color: #25282D;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h3 class="banner-title text-white ls-25 mb-0">Fog Light</h3>
                                <div class="banner-price-info text-white font-weight-bold text-uppercase mb-1">Starting
                                    At
                                    <strong class="text-secondary">&#8377;299/-</strong>
                                </div>
                                <hr class="banner-divider bg-white" />
                                <a href="bike-fog-light-accessories.php"
                                    class="btn btn-white btn-link btn-underline btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-sm">
                            <figure>
                                <img src="assets/images/fog-light/fog-light.jpg" alt="Headlights"
                                    width="640" height="200" style="background-color: #eeedec;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h3 class="banner-title text-white ls-25 text-capitalize mb-0">HeadLight</h3>
                                <div class="banner-price-info text-white font-weight-bold text-uppercase mb-1">Sale Up To
                                    <strong class="text-secondary">10% Off</strong>
                                </div>
                                <hr class="banner-divider bg-white" />
                                <a href="headlight-accessories.php"
                                    class="btn btn-dark text-white btn-link btn-underline btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    
                   <div class="title-link-wrapper mb-3 appear-animate">
                    <h2 class="title title-deals mb-1"> Headlight</h2>
                    
                    <a href="headlight-accessories.php" class="font-weight-bold ls-25">More Products<i
                            class="w-icon-long-arrow-right"></i></a>
                </div> 
                    
                <div class="swiper-container swiper-theme product-deals-wrapper appear-animate mb-8"
                    data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-2">
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="dc-40w-headlight.php">
                                        <img src="assets/images/headlight-thumbnail/DC-40w-headlight/dc-40w-headlight-main.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                        <img src="assets/images/headlight-thumbnail/DC-40w-headlight/dc-40w-headlight-1.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="dc-40w-headlight.php">DC 40W Headlight</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                                   <ins class="new-price"><sup>₹</sup>749.00/-</ins><del class="old-price"><sup>₹</sup>1599.00/-</del>
                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/headlight-thumbnail/ac-dc-50w-headlight/ac-dc-50w-headlight-main.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                        <img src="assets/images/headlight-thumbnail/ac-dc-50w-headlight/ac-dc-50w-headlight-1.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">AC DC 50W Headlight </a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                                   <ins class="new-price"><sup>₹</sup>339.00/-</ins><del class="old-price"><sup>₹</sup>669.00/-</del>
                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="ac-dc-60w-m3a-headlight.php">
                                        <img src="assets/images/headlight-thumbnail/ac-dc-60w-m3a-headlight/ac-dc-60w-m3a-headlight-main.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                        <img src="assets/images/headlight-thumbnail/ac-dc-60w-m3a-headlight/ac-dc-60w-m3a-headlight-1.jpg" alt="Product"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="ac-dc-60w-m3a-headlight.php">AC DC 60W M3A Headlight</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(6 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                                   <ins class="new-price"><sup>₹</sup>749.00/-</ins><del class="old-price"><sup>₹</sup>1599.00/-</del>
                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="projector-lens-headlight-white-yellow-beam.php">
                                        <img src="assets/images/headlight-thumbnail/projector-lens-headlight-white-yellow-beam/projector-lens-headlight-white-yellow-beam-main.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                        <img src="assets/images/headlight-thumbnail/projector-lens-headlight-white-yellow-beam/projector-lens-headlight-white-yellow-beam-1.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="projector-lens-headlight-white-yellow-beam.php">Projector Lens Headlight<br> White Yellow Beam</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(8 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                                   <ins class="new-price"><sup>₹</sup>349.00/-</ins><del class="old-price"><sup>₹</sup>799.00/-</del>
                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="7-inch-12-led-bullet-headlight.php">
                                         <img src="assets/images/headlight-thumbnail/7-inch-12-led-bullet-headlight-full-ring/7-inch-12-led-bullet-headlight-fullring-main.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                        <img src="assets/images/headlight-thumbnail/7-inch-12-led-bullet-headlight-full-ring/7-inch-12-led-bullet-headlight-fullring-1.jpg" alt="Bike Accessories Fog Light"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="7-inch-12-led-bullet-headlight.php">7 Inch 12 LED Bullet <br>Headlight with Full Ring</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                                   <ins class="new-price"><sup>₹</sup>2100.00/-</ins><del class="old-price"><sup>₹</sup>2999.00/-</del>
                                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                
                
                
                
                    
                    
                </div>
                <!-- End of Product Deals Warpper -->
 </div>
            <!-- End of Container -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <?php
        
        include('main-footer.php')
        
        ?>
        
       <div class="newsletter-popup mfp-hide">
        <div class="newsletter-content">
            <h4 class="text-uppercase font-weight-normal ls-25">Get Up to<span class="text-primary">25% Off</span></h4>
            <h2 class="ls-25">Sign up to Wolmart</h2>
            <p class="text-light ls-10">Subscribe to the Wolmart market newsletter to
                receive updates on special offers.</p>
            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="email" class="form-control email font-size-md" name="email" id="email2"
                    placeholder="Your email address" required>
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>
            <div class="form-checkbox d-flex align-items-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                    required="">
                <label for="hide-newsletter-popup" class="font-size-sm text-light">Don't show this popup again.</label>
            </div>
        </div>
    </div> 
        
      <!-- Plugin JS File -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/floating-parallax/parallax.min.js"></script>
    <script src="assets/vendor/zoom/jquery.zoom.js"></script>

    <!-- Main Js -->
    <script src="assets/js/main.min.js"></script>  

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
            version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>
    <!-- End of Scroll Top -->

    
   


   
</body>
</html>