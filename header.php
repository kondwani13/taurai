<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from zwin.io/html/phootio/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2024 14:51:40 GMT -->
<head>

    <meta charset="utf-8">
    <title>Phootio - Photography HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Vendor CSS-->
    <link rel="stylesheet" href="assets/css/vendors/font-awesome.min.css">

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
                <p>Get in touch</p>
            </div>
            <div class="offcanvas-contact">
                <h3 class="title">Contact</h3>
                <ul class="contact-info">
                    
                    <li>info@taurai.com</li>
                </ul>
                <div class="social">
                    <li><a href="https://www.youtube.com/@7aurai"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://www.instagram.com/7aurai/"><i class="fa fa-instagram"></i></a></li>
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
    <div style="margin-bottom: 40px;" class="page-header-section blog-page section">
        <div class="container">
            <div class="page-header">
                <h2 class="title">Blog</h2>
            </div>
        </div>
    </div>

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

</html>