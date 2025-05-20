<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>taurai</title>
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
                <div class="col-auto d-none d-lg-block">
                    <button class="overlay-menu-toogle" data-target="#overlay-menu-section"><img class="svg-inject" src="assets/images/icons/menu-grid.svg" alt="Overlay Menu Toggle Grid Icon"></button>
                </div>
                <!-- Site Logo End -->

                <!-- Site Logo Start -->
                <div class="col">
                    <div class="site-logo">
                        <a href="index.php">
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
                    <li></li>
                    <li>Email : info@taurai.com</li>
                    <li></li>
                </ul>
                <div class="social">
                    
                    <a href="https://www.youtube.com/@7aurai"><i class="fa fa-youtube"></i></a>
                    <a href="https://www.instagram.com/7aurai/"><i class="fa fa-instagram"></i></a>
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

    <!-- Overlay Menu Start -->
    <div id="overlay-menu-section" class="overlay-menu-section">
        <button class="close-btn" data-target="#overlay-menu-section">close</button>
        <div class="overlay-menu-wrapper">
            <div class="overlay-menu">
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
    <!-- Overlay Menu End -->

    <!-- Slider One Section Start -->
    <div style="margin-bottom: 50px;" class="section slider2-section">
        <div class="container position-relative">

            <!-- Slider One Social Start -->
            <ul class="slider2-social">
                
                <li><a href="https://www.youtube.com/@7aurai"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/7aurai/"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <!-- Slider One Social End -->

            <div class="row mb-n6">

                <!-- Slider Two Static Content Wrapper Satrt -->
                <div class="col-lg-6 col-12 order-lg-2 mb-6">
                    <div class="slider2-static-content-wrapper">
                        <img src="assets/images/slider/slider2/slider-1.jpg" alt="Slider Static Image">
                        <div class="content">
                            <span class="number">03</span>
                            <p>Welcome to an immersive gallery of visual and fine art. Explore a curated collection where creativity meets emotion and technique intertwines with imagination. Discover captivating paintings, intricate sculptures, dynamic photography, and thought-provoking installations. </p>
                        </div>
                        
                        <span class="special-title">VISUAL & FINE ARTIST</span>
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
                                        <span>MUSIC | FASHION | ART</span>
                                        
                                    </div>
                                    <div class="image"><img src="assets/images/slider/slider2/slide1-1.jpg" alt=""></div>
                                    <span class="special-title">VISUAL & FINE ARTIST</span>
                                </div>
                                <div class="slider2-slide swiper-slide">
                                    <div class="content">
                                        <span>MUSIC | FASHION | ART</span>
                                        
                                    </div>
                                    <div class="image"><img src="assets/images/slider/slider2/slide1-2.png" alt=""></div>
                                    <span class="special-title">VISUAL & FINE ARTIST</span>
                                </div>
                                <div class="slider2-slide swiper-slide">
                                    <div class="content">
                                        <span>MUSIC | FASHION | ART</span>
                                        
                                    </div>
                                    <div class="image"><img src="assets/images/slider/art.png" alt=""></div>
                                    <span class="special-title">VISUAL & FINE ARTIST</span>
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
<img style="width: 50%; display: block; margin-left: auto; margin-right: auto; margin-top: 2px;" src="assets/images/logo/tap.png" alt=""> 
    <!--Main Content Wrapper Start-->
    <div style="margin-top: -50px;" id="content-wrapper">

        <!-- About Section Start -->
        <div class="about2-section stickySidebar-container section section-margin position-relative">
            <div class="container">
                <div class="row mb-n6">

                    <div class="col-lg-6 align-self-center col-md-10 col-12 mb-6">
                        <div class="section-title mb-8">
                            <h2 class="title">Profile</h2>
                        </div>
                        <div style="margin-top: -20px;" class="row mb-3">
                        <div style="padding: 11px;" class="content">
                            
                            <p style="color: #000000; background: #ffffff;">Taurai Moore embodies versatility as a creative entrepreneur, specializing in music, mixed media fine art, fashion design, and styling. An American citizen born in London, UK, and boasting rich roots intertwining Zambia, Zimbabwe, and South Africa. Taurai's global journey has taken him through London, Germany, New Jersey, Zambia, and the UAE. His venture into fashion design blossomed with the establishment of his brand, DEAN RODE, named after the London street where his passion for fashion, music, and art flourished in his youth. Currently, Taurai holds roles as a shareholder and managing partner across multiple companies, notably Magnum Security Services Limited in Zambia, all while nurturing his creative pursuits. Through his diverse experiences and artistic endeavors, Taurai aims to inspire fellow creatives to break free from limitations, encouraging them to embrace every aspect of their identity and explore their full potential.</p>
                        </div>
                        </div>
                        <a href="https://linktr.ee/7aurai" class="btn btn-default-outline mt-xl-10 mt-3">Linktree</a>

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
                            <li class="phone">+971 52 128 6974</li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- Opening Hours End -->

            <!-- Address Start -->
            
            <!-- Address End -->

            <!-- Query Start -->
            <div id="query-popup" class="query-popup about-toolbar-popup">
                <button class="popup-close" data-target="#query-popup"><img src="assets/images/icons/popup-close.svg" alt="" class="svg-inject"></button>
                <div class="image"><img src="assets/images/others/query-popup.jpg" alt="query Popup Image"></div>
                <div class="content">
                    <div class="query-content">
                        <h3 class="title">If you have a question</h3>
                        <p>leave your message below or email at <br> info@taurai.com</p>
                            <div class="query-form">
                                <form action="#">
                                    <div class="row mb-n6">
                                        <div class="col-12 mb-6">
                                            <label for="query-email">Email Address *</label>
                                            <input type="email" id="query-email" placeholder="info@taurai.com">
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
                <button data-filter="*" class="active"></button>
                
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
                    <a href="assets/images/gallery/gallery2-2.jpg" class="gallery2">
                        <img src="assets/images/gallery/gallery2-2.jpg" alt="Gallery Image">
                        <img class="svg-inject" src="assets/images/icons/gallery-zoom.svg" alt="Gallery Zoom Icon">
                    </a>
                </div>
            </div>
            <!-- Gallery Grid End -->

        </div>
        <!-- Gallery Section End -->

		<div style="margin-top: 40px;" class="gallery-section section position-relative">
            <div class="container">
                <div class="section-title text-center mb-lg-14 mb-md-10 mb-8">
                    <h2 class="title"></h2>
                </div>
            </div>

            <div class="gallery3-slider-wrapper">
                <div class="container position-relative">
                    <div class="gallery3-slider mfp-gallery">
                        <div class="gallery3"><a href="assets/images/flow/f1.jpg" class="gallery-popup"><img src="assets/images/flow/f1.jpg" alt="Gallery Image Thumbnail"></a></div>
                        <div class="gallery3"><a href="assets/images/flow/f2.jpg" class="gallery-popup"><img src="assets/images/flow/f2.jpg" alt="Gallery Image Thumbnail"></a></div>
                        <div class="gallery3"><a href="assets/images/flow/f3.jpg" class="gallery-popup"><img src="assets/images/flow/f3.jpg" alt="Gallery Image Thumbnail"></a></div>
                        
                        <div class="gallery3"><a href="assets/images/flow/f5.jpg" class="gallery-popup"><img src="assets/images/flow/f5.jpg" alt="Gallery Image Thumbnail"></a></div>
                    
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 100px" class="testimonial-section section">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title text-center mb-10">
                    <h2 class="title">Work</h2>
                </div>
                <!-- Section Title End -->

            </div>
            <div class="testimonial-slider-wrapper">
                <div class="container">

                    <div class="testimonial-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/style1.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-content">
                                            <span class="title">Solange Knowles</span>
                                            <div class="summery">
                                            <p>Solange Knowles at Grace Wales Bonner-Stylist Assistant to Peju Famojure</p>
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Stylist Peju Famojure</span>
                                                <span class="name">Assistant Stylist Taurai Moore</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/style2.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Solange Knowles</span>
                                            <div class="summery">
                                            <p>Solange Knowles at Grace Wales Bonner-Stylist Assistant to Peju Famojure</p>
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Stylist Peju Famojure</span>
                                                <span class="name">Assistant Stylist Taurai Moore</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/w4.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Ixchel Arcoiris</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Taurai Moore</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/f42.jpg" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                            <span class="title">Rochelle Daphne</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Sifuelo</span>
                                                <span class="designation">Styling/Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Graphic Design/concept cover art</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/w5.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                            <span class="title">Ixchel Arcoiris</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Taurai Moore</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/6w.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                            <span class="title">Racheal Kundananji</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Taurai Moore</span>
                                                <span class="designation">Stylist</span>
                                                <span class="name">Wearing DEAN RODE</span>
                                                <span class="designation">Photography: @lu_denis.x</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/4w.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                            <span class="title">Racheal Kundananji</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Taurai Moore</span>
                                                <span class="designation">Stylist</span>
                                                <span class="name">Wearing DEAN RODE</span>
                                                <span class="designation">Photography: @lu_denis.x</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/3w.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                            <span class="title">Racheal Kundananji</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Taurai Moore</span>
                                                <span class="designation">Stylist</span>
                                                <span class="name">Wearing DEAN RODE</span>
                                                <span class="designation">Photography: @lu_denis.x</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/w2.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai Moore</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">The Odd Fray</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/w1.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai Moore</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">The Odd Fray</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/w3.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai Moore</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">The Odd Fray</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/three.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai Moore</span>
                                            <div class="summery">
                                           
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Taurai Moore</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/ta1.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai Moore</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Shanelle Infante</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/sh3.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Shanelle Infante</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/sh2.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai/Rochelle Daphne</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Sana Ginwalla</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/sh1.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai/Rochelle Daphne</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Sana Ginwalla</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/sh.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai/Rochelle Daphne</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Sana Ginwalla</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/rochelle1.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Rochelle Daphne</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Sana Ginwalla</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/rochelle.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Rochelle Daphne</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Sifuelo</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Stylist</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/red.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai/Ixchel</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Shanelle Infante</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/nessa.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Ixchel Arcoiris</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Taurai Moore</span>
                                                <span class="designation">Stylist/Photographer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/ixchel.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Ixchel Arcoiris</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Taurai Moore</span>
                                                <span class="designation">Stylist/Photographer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/chief.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai & Rochelle Daphne/Chief Kenzo</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Taurai Moore</span>
                                                <span class="designation">Stylist/Photographer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/afro5.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                          <span class="title">Taurai</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Shanelle Infante</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/afro2.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Shanelle Infante</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/afro.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Shanelle Infante</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/afro4.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title">Taurai</span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Shanelle Infante</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial row mb-n6">
                                    <div class="col-lg-6 mb-6">
                                        <div class="testimonial-image">
                                            <img src="assets/images/flow/afro3.png" alt="Testimonial Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-6">
                                    <div class="testimonial-content">
                                           <span class="title"></span>
                                            <div class="summery">
                                            
                                            <p>Contact Design@deanrode.com for styling consultations and inquiries</p>
                                            </div>
                                            <div class="author">
                                                <span class="name">Shanelle Infante</span>
                                                <span class="designation">Photographer</span>
                                                <span class="name">Taurai</span>
                                                <span class="designation">Stylist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-next swiper-button-next d-none d-lg-block"><img class="svg-inject" src="assets/images/icons/long-arrow-right-2.svg" alt="Next Slide"></div>
                        <div class="testimonial-prev swiper-button-prev d-none d-lg-block"><img class="svg-inject" src="assets/images/icons/long-arrow-left-2.svg" alt="Previous Slide"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Testimonial Section Start -->
        
        <!-- Testimonial Section End -->

        <!-- Blog Section Start -->
        <div class="blog2-section section section-margin mb-0">
            <div class="container">

                <div class="row mb-10">
                    <div class="section-title text-center col-lg-10 mx-auto">
                        <h2 class="title mb-4"></h2>
                        <p> </p>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                <div  class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<!--grid blogs below-->
					<div class="blog-girds-sec">
						<div class="row">
							<?php getblogridposts("blogs");?>
							<!--bloggrids-->
						</div>
					</div>
				</div>
	            </div>
                <div class="row mb-n6">

                   

                </div>

            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Clients Section Start -->
        <!-- <div class="client2-section section section-padding">
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
                                
                                <li><a href="https://www.youtube.com/@7aurai"><i class="fa fa-youtube"></i></a></li>
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


	

</html>