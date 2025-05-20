<?php require("libs/fetch_data.php");?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from zwin.io/html/phootio/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2024 14:52:03 GMT -->
<head>

    <meta charset="utf-8">
    <title>about</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">

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
                <div class="col-xl-auto col">
                    <div class="site-logo ml-0">
                        <a href="index.php">
                            <img class="logo-light" src="assets/images/logo/logo-light.png" alt="rstate">
                        </a>
                    </div>
                </div>
                <!-- Site Logo End -->

                <!-- Site Main Navigation Start -->
                <div class="col d-none d-xl-block">
                    <nav class="main-menu light">
                        <ul>
                        <li><a href="index.php">home</a>
                       
                       </li>
                       <li><a href="about.php">about</a></li>
                       <li><a href="gallery.php">visual art</a></li>
                       <li><a href="fashion.php">dean rode studio</a></li>
                       <li  class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                       blog
                                   </a>
                                   <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a  class="dropdown-item" href="#"></a>
                                       <?php getcategoriesmenu("blog_categories"); ?>
                                   </div>
                               </li>
                       
                           
                       
                       
                         <li><a href="music.php">music</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Site Main Navigation End -->

                <!-- Header Toggle Buttons Start -->
                <div class="col-auto">
                    <div class="header-toggle-buttons header-toggle-buttons-light pr-0">
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
                        <li><a href="index.php">home</a>
                       
                       </li>
                       <li><a href="about.php">about</a></li>
                       <li><a href="gallery.php">visual art</a></li>
                       <li><a href="fashion.php">dean rode studio</a></li>
                       <li  class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                       blog
                                   </a>
                                   <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a  class="dropdown-item" href="#"></a>
                                       <?php getcategoriesmenu("blog_categories"); ?>
                                   </div>
                               </li>
                       
                           
                       
                       
                         <li><a href="music.php">music</a></li>
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
                <li>Phone : <a href="#">+971 52 128 6974</a></li>
                <li>Email : <a href="#">taurai@info.com</a></li>
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
                <li><a href="index.php">home</a>
                       
                       </li>
                       <li><a href="about.php">about</a></li>
                       <li><a href="gallery.php">visual art</a></li>
                       <li><a href="fashion.php">dean rode studio</a></li>
                       <li  class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                       blog
                                   </a>
                                   <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a  class="dropdown-item" href="#"></a>
                                       <?php getcategoriesmenu("blog_categories"); ?>
                                   </div>
                               </li>
                       
                           
                       
                       
                         <li><a href="music.php">music</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Offcanvas Menu Start  -->

    <!-- Page Header Section Start -->
    <div class="page-header-section about-page section">
        <div class="container">
            <div class="page-header">
                <h2 class="title">About</h2>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!--Main Content Wrapper Start-->
    <div id="content-wrapper">

        <!-- About Section Start -->
        <div class="about-page-section section section-margin">
            <div class="container">
                <div class="row mb-n6">

                    <div class="col-lg-6 col-12 mb-6">
                        <ul class="about-page-tab-list nav">
                            <li><a class="active" href="#about-overview" data-toggle="tab">Profile</a></li>
                            
                        </ul>
                        <div class="about-page-tab-content tab-content">
                            <div class="tab-pane fade show active" id="about-overview">
                                <p>Taurai Moore embodies versatility as a creative entrepreneur, specializing in music, mixed media fine art, fashion design, and styling. An American citizen born in London, UK, and boasting rich roots intertwining Zambia, Zimbabwe, and South Africa. Taurai's global journey has taken him through London, Germany, New Jersey, Zambia, and the UAE. His venture into fashion design blossomed with the establishment of his brand, DEAN RODE, named after the London street where his passion for fashion, music, and art flourished in his youth.</p>
                                <p>Currently, Taurai holds roles as a shareholder and managing partner across multiple companies, notably Magnum Security Services Limited in Zambia, all while nurturing his creative pursuits. Through his diverse experiences and artistic endeavors, Taurai aims to inspire fellow creatives to break free from limitations, encouraging them to embrace every aspect of their identity and explore their full potential.</p>
                               
                            </div>
                            
                            
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-6">
                        <div class="about-image-slider">
                            <img src="assets/images/about/about-4.jpg" alt="">
                            <img src="assets/images/about/about-5.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Gallery Section Start -->
        <div class="gallery-section section section-margin mt-0">
            <div class="container">
                <div class="row mb-n6">

                    <div class="col-lg-6 col-12 mb-6">
                        <div class="row mb-n6">

                            <div class="col-12 mb-6">
                                <a href="#" class="gallery4">
                                    <img src="assets/images/gallery/gallery4-1.jpg" alt="">
                                    <span class="number">01</span>
                                    <h4 class="title"></h4>
                                </a>
                            </div>
                            <div class="col-12 mb-6">
                                <a href="#" class="gallery4">
                                    <img src="assets/images/gallery/gallery4-2.jpg" alt="">
                                    <span class="number right">02</span>
                                    <h4 class="title"></h4>
                                </a></div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-6">
                        <a href="#" class="gallery4">
                            <img src="assets/images/gallery/gallery4-3.jpg" alt="">
                            <span class="number right">03</span>
                            <h4 class="title"></h4>
                        </a></div>

                </div>
            </div>
        </div>
        <!-- Gallery Section End -->

       
        <!-- Team Section End -->

        <!-- Testimonial Section Start -->
       

       
    </div>
    <!--Main Content Wrapper End-->

    <!--Footer Area Start-->
    <!-- Footer Start -->
    <div class="footer-section section">

        <!-- Footer Top Start -->
        <div style="margin-bottom: 50px;" class="footer-top-section section">
    <div class="container">
        <div class="row mb-n6">

            <!-- Subscrube & Banner Widget Start -->
            <div class="col-xl-9 col-lg-8 col-12 mb-6">
                <div class="row mb-n6">

                    <!-- Subscribe Widget Start -->
                    <div class="col-12 mb-6">
                        <h3 class="footer-subscribe-title">STAY TAPPED IN</h3>
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
                            <img  class="logo" src="assets/images/logo/logo-light.png" alt="GeekStudio">
                            <ul  class="contact-info">
                                <li><a href="#"></a></li>
                                <li>Email : <a href="#">taurai@info.com</a></li>
                                
                            </ul>
                            <div  class="social">
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

<div style="margin-top: 20px; text-align: center; padding-topp: 50px;" class="col">
                             <a style="margin-left: 3px; margin-right: 3px; padding: 2px;" href="faq.php">faq</a></li>
                             <a style="margin-left: 3px; margin-right: 3px; padding: 2px;" href="contact.php">contact</a></li>
                             <a style="margin-left: 3px; margin-right: 3px; padding: 2px;" href="privacy.php">privacy_policy</a></li>
                             
                            </div>
<!-- Footer Top End -->

<!-- Footer Bottom Start -->
<div style="margin-top: -20px;" class="footer-bottom-section section">
    <div class="container">
        <div class="row">

            <div class="col">
                <p class="copyright">&copy; 7aurai 2024 All Right Reserved. Powered With <i class="fa fa-heart"></i> by <a href="https://kondwanisakala.netlify.app/" target="_blanc">kondwani</a></p>
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


<!-- Mirrored from zwin.io/html/phootio/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2024 14:52:06 GMT -->
</html>