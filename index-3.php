
<?php require("libs/fetch_data.php");?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from zwin.io/html/phootio/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2024 14:51:02 GMT -->
<head>

    <meta charset="utf-8">
    <title>Phootio - Photography HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Vendor CSS-->
    <link rel="stylesheet" href="assets/css/vendors/font-awesome.min.css">

    <meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />

    <!--Plugins CSS-->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">

    <!--Main Style CSS-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Header Start -->
    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">

                <!-- Site Logo Start -->
                <div class="col-auto d-none d-lg-block">
                    <button class="overlay-menu-toogle" data-target="#overlay-menu-section"><img class="svg-inject" src="assets/images/icons/menu-grid.svg" alt="Overlay Menu Toggle Grid Icon"></button>
                </div>
                <!-- Site Logo End -->

                <!-- Site Logo Start -->
                <div class="col">
                    <div class="site-logo">
                        <a href="index-2.html">
                            <img class="logo-dark d-none d-lg-block" src="assets/images/logo/logo-dark.png" alt="rstate">
                            <img class="logo-light d-lg-none" src="assets/images/logo/logo-light.png" alt="rstate">
                        </a>
                    </div>
                </div>
                <!-- Site Logo End -->

                <!-- Header Toggle Buttons Start -->
                <div class="col-auto">
                    <div class="header-toggle-buttons header-toggle-buttons-light">
                        <a href="#fullscreen-search" class="search-toggle"><i class="fa fa-search"></i></a>
                        <a href="#widget-offcanvas" class="offcanvas-toggle d-none d-xl-flex"><i class="bar"></i> <i class="bar"></i> <i class="bar"></i></a>
                        <a href="#offcanvas-mobile-menu" class="menu-toggle d-xl-none"><i class="bar"></i> <i class="bar"></i> <i class="bar"></i></a>
                    </div>
                </div>
                <!-- Header Toggle Buttons End -->

                <!-- Mobile Menu Start -->
                <div class="col-12 d-none">
                    <div class="mobile-menu">
                        <ul>
                            <li><a href="index-3.html">home</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="index-2.html">Home One</a></li>
                                    <li><a href="index-3.html">Home Two</a></li>
                                    <li><a href="index-4.html">Home Three</a></li>
                                    <li><a href="index-5.html">Home Four</a></li>
                                </ul> -->
                            </li>
                            <li><a href="blog.html">blog</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog2.html">Blog 2</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul> -->
                            </li>
                            <li><a href="#">pages</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="faqs.html">FAQ</a></li>
                                    <li><a href="coming-soon.html">Coming-Soon</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="sign-in.html">Sign In</a></li>
                                    <li><a href="sign-up.html">Sign Up</a></li>
                                </ul> -->
                            </li>
                            <li><a href="gallery.html">gallery</a></li>
                            <li><a href="shop.html">shop</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul> -->
                            </li>
                            <li><a href="contact.html">contacts</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu End -->

            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Fullscreen Search Start  -->
    <div id="fullscreen-search" class="fullscreen-search">
        <button class="close-btn" data-target="#fullscreen-search">close</button>
        <div class="fullscreen-search-form">
            <form action="#">
                <input class="form-control" type="text" placeholder="Search..">
                <button class="btn btn-primary px-6"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- Fullscreen Search End  -->

    <!-- Widget Offcanvas Start  -->
    <div id="widget-offcanvas" class="widget-offcanvas">
        <button class="close-btn" data-target="#widget-offcanvas">close</button>
        <div class="inner">

            <div class="offcanvas-about mb-8">
                <img src="assets/images/logo/logo-dark.png" alt="">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
            </div>
            <div class="offcanvas-contact">
                <h3 class="title">Contact Us</h3>
                <ul class="contact-info">
                    <li>Phone : +971 52 128 6974</li>
                    <li>Email : taurai@info.com</li>
                    <li></li>
                </ul>
                <div class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>

        </div>
    </div>
    <!-- Widget Offcanvas Start  -->

    <!-- Offcanvas Menu Start  -->
    <div id="offcanvas-mobile-menu" class="offcanvas-mobile-menu">
        <button class="close-btn" data-target="#offcanvas-mobile-menu">close</button>
        <div class="inner">

            <div class="mobile-menu">
                <ul>
                    <li><a href="index-3.html">home</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="index-2.html">Home One</a></li>
                            <li><a href="index-3.html">Home Two</a></li>
                            <li><a href="index-4.html">Home Three</a></li>
                            <li><a href="index-5.html">Home Four</a></li>
                        </ul> -->
                    </li>
                    <li><a href="blog.html">blog</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog2.html">Blog 2</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul> -->
                    </li>
                    <li><a href="#">pages</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li><a href="faqs.html">FAQ</a></li>
                            <li><a href="coming-soon.html">Coming-Soon</a></li>
                            <li><a href="404.html">404 Error</a></li>
                            <li><a href="sign-in.html">Sign In</a></li>
                            <li><a href="sign-up.html">Sign Up</a></li>
                        </ul> -->
                    </li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li><a href="shop.html">shop</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul> -->
                    </li>
                    <li><a href="contact.html">contacts</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Offcanvas Menu Start  -->

    <!-- Overlay Menu Start -->
    <div id="overlay-menu-section" class="overlay-menu-section">
        <button class="close-btn" data-target="#overlay-menu-section">close</button>
        <div class="overlay-menu-wrapper">
            <div class="overlay-menu">
                <ul>
                    <li><a href="index-3.html">home</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="index-2.html">Home One</a></li>
                            <li><a href="index-3.html">Home Two</a></li>
                            <li><a href="index-4.html">Home Three</a></li>
                            <li><a href="index-5.html">Home Four</a></li>
                        </ul> -->
                    </li>
                    <li><a href="blog.html">blog</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog2.html">Blog 2</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul> -->
                    </li>
                    <li><a href="#">pages</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li><a href="faqs.html">FAQ</a></li>
                            <li><a href="coming-soon.html">Coming-Soon</a></li>
                            <li><a href="404.html">404 Error</a></li>
                            <li><a href="sign-in.html">Sign In</a></li>
                            <li><a href="sign-up.html">Sign Up</a></li>
                        </ul> -->
                    </li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li><a href="shop.html">shop</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul> -->
                    </li>
                    <li><a href="contact.html">contacts</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Overlay Menu End -->

    <!-- Slider One Section Start -->
    <div class="section slider2-section">
        <div class="container position-relative">

            <!-- Slider One Social Start -->
            <ul class="slider2-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <!-- Slider One Social End -->

            <div class="row mb-n6">

                <!-- Slider Two Static Content Wrapper Satrt -->
                <div class="col-lg-6 col-12 order-lg-2 mb-6">
                    <div class="slider2-static-content-wrapper">
                        <img src="assets/images/slider/slider2/slider-1.jpg" alt="Slider Static Image">
                        <div class="content">
                            <span class="number">03</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        </div>
                        <div class="play-button">
                            <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="mfp-video"><img src="assets/images/icons/chevron-right.svg" alt="" class="svg-inject"></a>
                            <span>Play Now</span>
                        </div>
                        <span class="special-title">NEW TRENDS OF 2024</span>
                    </div>
                </div>
                <!-- Slider Two Static Content Wrapper End -->

                <!-- Slider Two Active Start -->
                <div class="col-lg-6 col-12 align-self-end order-lg-1 mb-6">
                    <div class="slider2-wrapper">
                        <div class="slider2-active swiper-container">
                            <div class="swiper-wrapper">
                                <div class="slider2-slide swiper-slide">
                                    <div class="content">
                                        <span>NEW GENERATION 2024</span>
                                        <h2>PHOTOGRAPHY</h2>
                                    </div>
                                    <div class="image"><img src="assets/images/slider/slider2/slide1-1.jpg" alt=""></div>
                                    <span class="special-title">NEW TRENDS OF 2024</span>
                                </div>
                                <div class="slider2-slide swiper-slide">
                                    <div class="content">
                                        <span>NEW GENERATION 2024</span>
                                        <h2>PHOTOGRAPHY</h2>
                                    </div>
                                    <div class="image"><img src="assets/images/slider/slider2/slide1-2.png" alt=""></div>
                                    <span class="special-title">NEW TRENDS OF 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="slider2-prev swiper-button-prev"><img class="svg-inject" src="assets/images/icons/long-arrow-left-2.svg" alt="Previous Slide"></div>
                        <div class="slider2-next swiper-button-next"><img class="svg-inject" src="assets/images/icons/long-arrow-right-2.svg" alt="Next Slide"></div>
                    </div>
                    <!-- Slider Two Active End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Slider One Section End -->

    <!--Main Content Wrapper Start-->
    <div id="content-wrapper">

        <!-- About Section Start -->
        <div class="about2-section stickySidebar-container section section-margin position-relative">
            <div class="container">
                <div class="row mb-n6">

                    <div class="col-lg-6 align-self-center col-md-10 col-12 mb-6">
                        <div class="section-title mb-8">
                            <h2 class="title">INSPIRING <br> GENERATIONS</h2>
                        </div>
                        <!-- <div class="row mb-3">
                            <div class="funfact col mb-4">
                                <span class="number"><span class="counter">280</span></span>
                                <p class="title">FINISHED <br>PHOTOSESSIONS</p>
                            </div>
                            <div class="funfact col mb-4">
                                <span class="number"><span class="counter">245</span></span>
                                <p class="title">ONGOING <br>PROJECTS NEW</p>
                            </div>
                            <div class="funfact col mb-4">
                                <span class="number"><span class="counter">222</span></span>
                                <p class="title">WINNING <br>AWARD PROJECT</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-default-outline mt-xl-10 mt-3">VIEW COLLECTIONS</a> -->

                    </div>

                    <div class="col-lg-6 col-12 mb-6">
                        <div class="row mb-n6">
                            <div class="col-sm-6 col-12 mb-6">
                                <div class="about-image"><img src="assets/images/about/about-4.jpg" alt="About Image"></div>
                            </div>
                            <div class="col-sm-6 col-12 mb-6 mt-lg-20 mt-0">
                                <div class="about-image mt-xl-10 mt-0"><img src="assets/images/about/about-5.jpg" alt="About Image"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="about-toolbar stickySidebar d-none d-md-block">
                <div class="inner stickySidebar-inner">
                    <a href="#opening-hours-popup"><img src="assets/images/icons/call.svg" alt="" class="svg-inject"></a>
                    <a href="#address-popup"><img src="assets/images/icons/marker-pin.svg" alt="" class="svg-inject"></a>
                    <a href="#query-popup"><img src="assets/images/icons/email.svg" alt="" class="svg-inject"></a>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- About Toolbar Popup Wrapper Start -->
        <div class="about-toolbar-popup-wrapper">

            <!-- Opening Hours Start -->
            <div id="opening-hours-popup" class="opening-hours-popup about-toolbar-popup">
                <button class="popup-close" data-target="#opening-hours-popup"><img src="assets/images/icons/popup-close.svg" alt="" class="svg-inject"></button>
                <div class="image"><img src="assets/images/others/opening-hours-popup.jpg" alt="Opening Hours Popup Image"></div>
                <div class="content">
                    <div class="opening-hours-content">
                        <h3 class="title">Opening hours</h3>
                        <ul class="info">
                            <li class="day">Monday - Friday</li>
                            <li class="time">08.00 am - 16.00 pm</li>
                            <li class="phone">+24 45 15 62 129</li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- Opening Hours End -->

            <!-- Address Start -->
            <div id="address-popup" class="address-popup about-toolbar-popup">
                <button class="popup-close" data-target="#address-popup"><img src="assets/images/icons/popup-close.svg" alt="" class="svg-inject"></button>
                <div class="image"><img src="assets/images/others/address-popup.jpg" alt="Address Popup Image"></div>
                <div class="content">
                    <div class="address-content">
                        <h3 class="title">Address</h3>
                        <p>2, Ave Manchester, Lorem ipsum St, Rio Danubin</p>
                        <a href="#">Open In Map</a>
                    </div>
                </div>
            </div>
            <!-- Address End -->

            <!-- Query Start -->
            <div id="query-popup" class="query-popup about-toolbar-popup">
                <button class="popup-close" data-target="#query-popup"><img src="assets/images/icons/popup-close.svg" alt="" class="svg-inject"></button>
                <div class="image"><img src="assets/images/others/query-popup.jpg" alt="query Popup Image"></div>
                <div class="content">
                    <div class="query-content">
                        <h3 class="title">You have a question for us?</h3>
                        <p>leave your message below or email us at <br> info@geekstudio.com</p>
                            <div class="query-form">
                                <form action="#">
                                    <div class="row mb-n6">
                                        <div class="col-12 mb-6">
                                            <label for="query-email">Email Address *</label>
                                            <input type="email" id="query-email" placeholder="info@geekstudio.com">
                                        </div>
                                        <div class="col-12 mb-6">
                                            <label for="query-message">Message *</label>
                                            <textarea id="query-message" placeholder="Hello ! I am from Dhaka Bangladesh .........."></textarea>
                                            <small class="message-info">120 characters left</small>
                                        </div>
                                        <div class="col-12 mb-6"><button class="query-submit">Send Message</button></div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
            <!-- Query End -->

        </div>
        <!-- About Toolbar Popup Wrapper End -->

        <!-- Gallery Section Start -->
        <div class="gallery2-section section position-relative">
            <div class="section-title text-center mb-lg-8 mb-6">
                <img src="assets/images/dr/dr.png" alt="dr" style="width: 150px;">
            </div>

            <div class="gallery-grid-filter center">
                <button data-filter="*" class="active">all</button>
                <button data-filter=".fashion">FASHION</button>
                <button data-filter=".lifestyle">LIFESTYLE</button>
                <button data-filter=".portraits">PORTRAITS</button>
                <button data-filter=".studio">STUDIO</button>
                <button data-filter=".nature">NATURE</button>
            </div>

            <!-- Gallery Grid Start -->
            <div class="gallery-grid mfp-gallery row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 no-gutters">
                <div class="grid-sizer col"></div>
                <div class="fashion grid-item col">
                    <a href="assets/images/gallery/gallery2-1.jpg" class="gallery2">
                        <img src="assets/images/gallery/gallery2-1.jpg" alt="Gallery Image">
                        <img class="svg-inject" src="assets/images/icons/gallery-zoom.svg" alt="Gallery Zoom Icon">
                    </a>
                </div>
                <div class="lifestyle grid-item col">
                    <a href="assets/images/gallery/gallery2-2.jpg" class="gallery2">
                        <img src="assets/images/gallery/gallery2-2.jpg" alt="Gallery Image">
                        <img class="svg-inject" src="assets/images/icons/gallery-zoom.svg" alt="Gallery Zoom Icon">
                    </a>
                </div>
                <div class="portraits nature grid-item col">
                    <a href="assets/images/gallery/gallery2-3.jpg" class="gallery2">
                        <img src="assets/images/gallery/gallery2-3.jpg" alt="Gallery Image">
                        <img class="svg-inject" src="assets/images/icons/gallery-zoom.svg" alt="Gallery Zoom Icon">
                    </a>
                </div>
                <div class="fashion lifestyle grid-item col">
                    <a href="assets/images/gallery/gallery2-4.jpg" class="gallery2">
                        <img src="assets/images/gallery/gallery2-4.jpg" alt="Gallery Image">
                        <img class="svg-inject" src="assets/images/icons/gallery-zoom.svg" alt="Gallery Zoom Icon">
                    </a>
                </div>
                <div class="studio grid-item col">
                    <a href="assets/images/gallery/gallery2-5.jpg" class="gallery2">
                        <img src="assets/images/gallery/gallery2-5.jpg" alt="Gallery Image">
                        <img class="svg-inject" src="assets/images/icons/gallery-zoom.svg" alt="Gallery Zoom Icon">
                    </a>
                </div>
                <div class="portraits grid-item col">
                    <a href="assets/images/gallery/gallery2-6.jpg" class="gallery2">
                        <img src="assets/images/gallery/gallery2-6.jpg" alt="Gallery Image">
                        <img class="svg-inject" src="assets/images/icons/gallery-zoom.svg" alt="Gallery Zoom Icon">
                    </a>
                </div>
                <div class="lifestyle studio grid-item col">
                    <a href="assets/images/gallery/gallery2-7.jpg" class="gallery2">
                        <img src="assets/images/gallery/gallery2-7.jpg" alt="Gallery Image">
                        <img class="svg-inject" src="assets/images/icons/gallery-zoom.svg" alt="Gallery Zoom Icon">
                    </a>
                </div>
                <div class="studio nature grid-item col">
                    <a href="assets/images/gallery/gallery2-8.jpg" class="gallery2">
                        <img src="assets/images/gallery/gallery2-8.jpg" alt="Gallery Image">
                        <img class="svg-inject" src="assets/images/icons/gallery-zoom.svg" alt="Gallery Zoom Icon">
                    </a>
                </div>
                <div class="fashion portraits grid-item col">
                    <a href="assets/images/gallery/gallery2-9.jpg" class="gallery2">
                        <img src="assets/images/gallery/gallery2-9.jpg" alt="Gallery Image">
                        <img class="svg-inject" src="assets/images/icons/gallery-zoom.svg" alt="Gallery Zoom Icon">
                    </a>
                </div>
                <div class="nature grid-item col">
                    <a href="assets/images/gallery/gallery2-10.jpg" class="gallery2">
                        <img src="assets/images/gallery/gallery2-10.jpg" alt="Gallery Image">
                        <img class="svg-inject" src="assets/images/icons/gallery-zoom.svg" alt="Gallery Zoom Icon">
                    </a>
                </div>
            </div>
            <!-- Gallery Grid End -->

        </div>
        <!-- Gallery Section End -->

        <!-- Testimonial Section Start -->
        <div class="testimonial2-section section section-margin mb-0">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title text-center mb-10">
                    <h2 class="title">TESTIMONIAL</h2>
                </div>
                <!-- Section Title End -->


                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="testimonial2-slider">
                            <div class="testimonial2">
                                <span class="title">NEW TRENDS OF PHOTOGRAPHY</span>
                                <div class="summery">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Praesent hendrerit, ipsum commodo tristique pulvinar, lectus felis auctor diam, at sollicitudin turpis risus sit amet justo. Proin velit turpis, viverra at hendrerit ut, elementum nec dui. Nullam eget tincidunt odio. Ut maximus eros et massa congue,</p>
                                </div>
                                <div class="author">
                                    <span class="name">Mira Bie</span>
                                    <span class="designation">Creative Director</span>
                                </div>
                            </div>
                            <div class="testimonial2">
                                <span class="title">NEW TRENDS OF PHOTOGRAPHY</span>
                                <div class="summery">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Praesent hendrerit, ipsum commodo tristique pulvinar, lectus felis auctor diam, at sollicitudin turpis risus sit amet justo. Proin velit turpis, viverra at hendrerit ut, elementum nec dui. Nullam eget tincidunt odio. Ut maximus eros et massa congue,</p>
                                </div>
                                <div class="author">
                                    <span class="name">Mira Bie</span>
                                    <span class="designation">Creative Director</span>
                                </div>
                            </div>
                            <div class="testimonial2">
                                <span class="title">NEW TRENDS OF PHOTOGRAPHY</span>
                                <div class="summery">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Praesent hendrerit, ipsum commodo tristique pulvinar, lectus felis auctor diam, at sollicitudin turpis risus sit amet justo. Proin velit turpis, viverra at hendrerit ut, elementum nec dui. Nullam eget tincidunt odio. Ut maximus eros et massa congue,</p>
                                </div>
                                <div class="author">
                                    <span class="name">Mira Bie</span>
                                    <span class="designation">Creative Director</span>
                                </div>
                            </div>
                            <div class="testimonial2">
                                <span class="title">NEW TRENDS OF PHOTOGRAPHY</span>
                                <div class="summery">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Praesent hendrerit, ipsum commodo tristique pulvinar, lectus felis auctor diam, at sollicitudin turpis risus sit amet justo. Proin velit turpis, viverra at hendrerit ut, elementum nec dui. Nullam eget tincidunt odio. Ut maximus eros et massa congue,</p>
                                </div>
                                <div class="author">
                                    <span class="name">Mira Bie</span>
                                    <span class="designation">Creative Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial2-thumb-slider">
                            <div class="testimonial2-thumbnail"><img src="assets/images/testimonial/testimonial2-thumbnail-1.jpg" alt="Testimonial Image"></div>
                            <div class="testimonial2-thumbnail"><img src="assets/images/testimonial/testimonial2-thumbnail-2.jpg" alt="Testimonial Image"></div>
                            <div class="testimonial2-thumbnail"><img src="assets/images/testimonial/testimonial2-thumbnail-3.jpg" alt="Testimonial Image"></div>
                            <div class="testimonial2-thumbnail"><img src="assets/images/testimonial/testimonial2-thumbnail-3.jpg" alt="Testimonial Image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->

        <!-- Blog Section Start -->
        <div class="blog2-section section section-margin mb-0">
            <div class="container">

                <div class="row mb-10">
                    <div class="section-title text-center col-lg-10 mx-auto">
                        <h2 class="title mb-4">GEEK ARCHIVE</h2>
                        <p>Maecenas at tristique enim. Curabitur varius, mauris non posuere varius, nisl massa fringilla libero, ac vulputate lectus nunc non arcu. Nulla a est lacus. Maecenas at tristique enim. Curabitur varius, mauris non posuere varius, nisl massa fringilla libero, ac vulputate lectus nunc non arcu. Nulla a est lacus.</p>
                    </div>
                </div>

                <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<!--grid blogs below-->
					<div class="blog-girds-sec">
						<div class="row">
							<?php getblogridposts("blogs");?>
							<!--bloggrids-->
						</div>
					</div>
				</div>

                <div class="row mb-n6">

                    <!-- Blog Start -->
                    <div class="col-lg-4 col-md-6 col-12 mb-6">
                        <div class="blog2">
                            <div class="thumbnail">
                                <span class="date">26<br>Jan</span>
                                <a href="blog-details.html"><img src="assets/images/blog/blog2-1.jpg" alt="Blog Thumbnail"></a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="blog-details.html">Your wide eyes are the only light I know from</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority There are many variations of passages</p>
                            </div>
                        </div>
                    </div>
                    <!-- Blog End -->

                    <!-- Blog Start -->
                    <div class="col-lg-4 col-md-6 col-12 mb-6">
                        <div class="blog2">
                            <div class="thumbnail">
                                <span class="date">26<br>Jan</span>
                                <a href="blog-details.html"><img src="assets/images/blog/blog2-2.jpg" alt="Blog Thumbnail"></a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="blog-details.html">True love is never blind, but rather brings</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority There are many variations of passages</p>
                            </div>
                        </div>
                    </div>
                    <!-- Blog End -->

                    <!-- Blog Start -->
                    <div class="col-lg-4 col-md-6 col-12 mb-6">
                        <div class="blog2">
                            <div class="thumbnail">
                                <span class="date">26<br>Jan</span>
                                <a href="blog-details.html"><img src="assets/images/blog/blog2-3.jpg" alt="Blog Thumbnail"></a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="blog-details.html">I believe love is always eternal. Even if eternity</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority There are many variations of passages</p>
                            </div>
                        </div>
                    </div>
                    <!-- Blog End -->

                </div>

            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Clients Section Start -->
        <div class="client2-section section section-padding">
            <div class="container">
                <div class="client-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="client"><img src="assets/images/clients/client-1.png" alt="Client Image"></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client"><img src="assets/images/clients/client-2.png" alt="Client Image"></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client"><img src="assets/images/clients/client-3.png" alt="Client Image"></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client"><img src="assets/images/clients/client-4.png" alt="Client Image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Clients Section End -->

    </div>
    <!--Main Content Wrapper End-->

    <!--Footer Area Start-->
    <!-- Footer Start -->
    <div class="footer-section section">

        <!-- Footer Top Start -->
        <div class="footer-top-section section">
            <div class="container">
                <div class="row mb-n6">

                    <!-- Subscrube & Banner Widget Start -->
                    <div class="col-xl-9 col-lg-8 col-12 mb-6">
                        <div class="row mb-n6">

                            <!-- Subscribe Widget Start -->
                            <div class="col-12 mb-6">
                                <h3 class="footer-subscribe-title">Subscribe Our Weekly Magazine</h3>
                                <div class="footer-subscribe-form">
                                    <form id="mc-form" class="mc-form">
                                        <input id="mc-email" autocomplete="off" type="email" placeholder="Enter Your Email Address">
                                        <button id="mc-submit" class="button" type="submit">Subscribe</button>
                                    </form>
                                    <div class="mailchimp-msg-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-msg-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-msg-error"></div><!-- mailchimp-error end -->
                                </div>
                            </div>
                            <!-- Subscribe Widget End -->

                        </div>
                    </div>
                    <!-- Subscrube & Banner Widget End -->

                    <div class="col-12 mb-6">
                        <div class="row justify-content-between mb-n6">

                            <!-- Banner Widget Start -->
                            <div class="col-lg-6 col-md-7 col-12 align-self-end mb-6">
                                <div class="footer-banner-widget row mb-n6">

                                    <div class="col-sm-6 mb-6"><a href="#"><img src="assets/images/banner/footer-banner-1.jpg" alt="Footer Banner"></a></div>
                                    <div class="col-sm-6 mb-6"><a href="#"><img src="assets/images/banner/footer-banner-2.jpg" alt="Footer Banner"></a></div>

                                </div>
                            </div>
                            <!-- Banner Widget End -->

                            <!-- Contact Widget Start -->
                            <div class="col-lg-auto col-md-5 mb-6">
                                <div class="footer-contact-widget">
                                    <img class="logo" src="assets/images/logo/logo-light.png" alt="GeekStudio">
                                    <ul class="contact-info">
                                        <li>Phone : <a href="#">+1 (800) 456 37 11</a></li>
                                        <li>Email : <a href="#">support@geekstudio.com</a></li>
                                        <li>Web: <a href="#">www.geekstudio.com</a></li>
                                    </ul>
                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Widget End -->

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-section section">
            <div class="container">
                <div class="row">

                    <div class="col">
                        <p class="copyright">&copy; Phootio 2020 All Right Reserved. Powered With <i class="fa fa-heart"></i> by <a href="http://zwin.io/" target="_blanc">Zwin</a></p>
                    </div>

                </div>

            </div>
        </div>
        <!-- Footer Bottom End -->

    </div>
    <!-- Footer End -->
    <!--Footer Area End-->

    <!-- Ventor JS -->
    <script src="assets/js/vendors/modernizr-3.8.0.min.js"></script>
    <script src="assets/js/vendors/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/svg-inject.min.js"></script>
    <script src="assets/js/plugins/ResizeSensor.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/instafeed.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/jquery.easypiechart.js"></script>

    <!-- Activation JS -->
    <script src="assets/js/active.js"></script>

</body>


<!-- Mirrored from zwin.io/html/phootio/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2024 14:51:19 GMT -->
</html>