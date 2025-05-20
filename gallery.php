<?php require("libs/fetch_data.php");?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from zwin.io/html/phootio/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2024 14:52:08 GMT -->
<head>

<title>visual art</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
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
                <p>Get in touch</p>
            </div>
            <div class="offcanvas-contact">
                <h3 class="title">Contact</h3>
                <ul class="contact-info">
                
                <li>Email : <a href="#">info@taurai.com</a></li>
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
    <div  class="page-header-section gallery-page section">
        <div class="container">
            <div class="page-header">
                <h2 class="title">Visual art</h2>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!--Main Content Wrapper Start-->
    <div id="content-wrapper">

        <!-- Gallery Section Start -->
        <div class="gallery-page-section section section-margin mb-0">
            <div class="container">
                <div class="gallery-grid-filter center">
                    <button data-filter="*" class="active">all</button>
                    <button data-filter=".fashion">F4U</button>
                    <button data-filter=".lifestyle">GENDER IDENTITY</button>
                    <button data-filter=".portraits">MULTI-DISCIPLINARY APPROACH</button>
                    <button data-filter=".studio">PERCEPXXXION</button>
                    <button data-filter=".nature">UNFINISHED</button>
                </div>

                <!-- Gallery Grid Start -->
                <div class="gallery-grid row row-cols-lg-3 row-cols-md-2 row-cols-1 mb-n6">
                    <div class="grid-sizer col"></div>
                    <div class="fashion grid-item col mb-6">
                        <a href="assets/images/gallery/F4U/F4U4.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/F4U/F4U4.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">F4U</h3>
                        </a>
                    </div>
                    <div class="studio grid-item col mb-6">
                        <a href="assets/images/gallery/PERCEPXXXION/PERCEPXXXION1.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/PERCEPXXXION/PERCEPXXXION1.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">PERCEPXXXION</h3>
                        </a>
                    </div>
                    <div class="lifestyle grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD8.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD8.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="studio grid-item col mb-6">
                        <a href="assets/images/gallery/PERCEPXXXION/PERCEPXXXION3.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/PERCEPXXXION/PERCEPXXXION3.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">PERCEPXXXION</h3>
                        </a>
                    </div>
                    <div class="fashion grid-item col mb-6">
                        <a href="assets/images/gallery/F4U/F4U5.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/F4U/F4U5.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">F4U</h3>
                        </a>
                    </div>
                    <div class="lifestyle grid-item col mb-6">
                        <a href="assets/images/gallery/gender/GI1.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/gender/GI1.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">GENDER IDENTITY</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD1.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD1.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="fashion grid-item col mb-6">
                        <a href="assets/images/gallery/F4U/F4U2.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/F4U/F4U2.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">F4U</h3>
                        </a>
                    </div>
                    <div class="lifestyle grid-item col mb-6">
                        <a href="assets/images/gallery/gender/GI2.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/gender/GI2.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">GENDER IDENTITY</h3>
                        </a>
                    </div>
                    <div class="studio grid-item col mb-6">
                        <a href="assets/images/gallery/PERCEPXXXION/PERCEPXXXION2.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/PERCEPXXXION/PERCEPXXXION2.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">PERCEPXXXION</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD2.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD2.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="fashion grid-item col mb-6">
                        <a href="assets/images/gallery/F4U/F4U3.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/F4U/F4U3.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">F4U</h3>
                        </a>
                    </div>
                    <div class="lifestyle grid-item col mb-6">
                        <a href="assets/images/gallery/gender/GI3.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/gender/GI3.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">GENDER IDENTITY</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD3.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD3.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD4.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD4.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="lifestyle grid-item col mb-6">
                        <a href="assets/images/gallery/gender/GI4.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/gender/GI4.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">GENDER IDENTITY</h3>
                        </a>
                    </div>
                    <div class="studio grid-item col mb-6">
                        <a href="assets/images/gallery/PERCEPXXXION/PERCEPXXXION4.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/PERCEPXXXION/PERCEPXXXION4.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">PERCEPXXXION</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD5.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD5.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD6.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD6.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="studio grid-item col mb-6">
                        <a href="assets/images/gallery/PERCEPXXXION/PERCEPXXXION5.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/PERCEPXXXION/PERCEPXXXION5.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">PERCEPXXXION</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD7.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD7.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD8.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD8.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="nature grid-item col mb-6">
                        <a href="assets/images/gallery/UNFINISHED/UNFINISHED1.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/UNFINISHED/UNFINISHED1.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">UNFINISHED</h3>
                        </a>
                    </div>
                    <div class="nature grid-item col mb-6">
                        <a href="assets/images/gallery/UNFINISHED/UNFINISHED2.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/UNFINISHED/UNFINISHED2.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">UNFINISHED</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD9.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD9.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="nature grid-item col mb-6">
                        <a href="assets/images/gallery/UNFINISHED/UNFINISHED3.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/UNFINISHED/UNFINISHED3.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">UNFINISHED</h3>
                        </a>
                    </div>
                    <div class="nature grid-item col mb-6">
                        <a href="assets/images/gallery/UNFINISHED/UNFINISHED4.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/UNFINISHED/UNFINISHED4.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">UNFINISHED</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD10.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD10.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/multi/MD11.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/multi/MD11.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/F4U/f4u1/f4u1.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/F4U/f4u1/f4u1.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/F4U/f4u1/f4u2.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/F4U/f4u1/f4u2.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/F4U/f4u1/f4u3.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/F4U/f4u1/f4u3.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
                        </a>
                    </div>
                    <div class="portraits grid-item col mb-6">
                        <a href="assets/images/gallery/F4U/f4u1/f4u4.jpg" class="mfp-image gallery5">
                            <img src="assets/images/gallery/F4U/f4u1/f4u4.jpg" alt="Gallery Image">
                            <span class="icon">+</span>
                            <h3 class="title">MULTI-DISCIPLINARY APPROACH</h3>
							
                            <span class="name">Artwork: Shanelle Infante | Model: Taurai</span>
                            
                        </a>
                    </div>
                   
                    
                    
                    
                </div>
                <!-- Gallery Grid End -->
            </div>
        </div>
        <!-- Gallery Section End -->

        <!-- Clients Section Start -->
        <!-- <div class="client-section section section-margin">
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
        </div> -->
        <!-- Clients Section End -->

    </div>
    <!--Main Content Wrapper End-->

    <!--Footer Area Start-->
    <!-- Footer Start -->
    <div style="margin-top: 100px;" class="footer-section section">

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
                                <li>Email : <a href="#">info@taurai.com</a></li>
                                
                            </ul>
                            <div  class="social">
                                <<li><a href="https://www.youtube.com/@7aurai"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/7aurai/"><i class="fa fa-instagram"></i></a></li>
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


<!-- Mirrored from zwin.io/html/phootio/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2024 14:52:10 GMT -->
</html>