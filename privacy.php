<?php require("libs/fetch_data.php");?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from zwin.io/html/phootio/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2024 14:52:08 GMT -->
<head>

<title>privacy policy</title>
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
                       <li><a href="gallery.php">fine art</a></li>
                       <li><a href="fashion.php">fashion</a></li>
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
                       <li><a href="gallery.php">fine art</a></li>
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
                       <li><a href="gallery.php">fine art</a></li>
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
    <div class="page-header-section faq-page section">
        <div class="container">
            <div class="page-header">
                <h2 class="title">Faq</h2>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!--Main Content Wrapper Start-->
    <div id="content-wrapper">

        <div class="faq-page-section section section-margin mb-0">
            <div class="container">
                <h3 class="text-center ff-rubik fw-500 mb-xl-16 mb-lg-12 mb-md-10 mb-8">privacy policy.</h3>
                <div class="faq-accordion accordion mx-auto" id="faq-example">
                    <div class="card active">
                        

                        <div id="faqOne" class="collapse show" data-parent="#faq-example">
                            <div class="card-body">
                                <p>GENERAL

We, the editors of Taurai take the protection of your personal data very seriously and adhere strictly to the rules of data protection laws. Personal data is collected on this website only to the extent technically necessary. In no case will the data collected be sold or otherwise disclosed to third parties.

This Privacy Policy describes the information we collect about you as a user of our websites and mobile applications (“Site”) and our services, how this information is processed, and how you can opt out of certain types of processing.

 

DATA PROCESSING ON THIS WEBSITE

Taurai automatically collects and stores information in its server log files that your browser transmits to us. These are:

Browser type / version
used operating system
Referrer URL (the previously visited page)
Host name of the accessing computer (IP address)
Time of the server request.
This data cannot be assigned to specific persons and apart from the IP Address the person using the address is not known to Taurai. taurai.com does not merge this data with other data sources in any way. The data is also deleted after a statistical evaluation.

 

COOKIES

The websites use so-called cookies in several places. They serve to make our offer more user-friendly, effective and secure. Cookies are small text files that are stored on your computer and stored by your browser. Most of the cookies we use are so-called “session cookies”. They are automatically deleted after your visit. Cookies do not harm your computer and do not contain viruses.

 

GOOGLE ANALYTICS

We use “Google Analytics” to collect information about the use of our website. “Google Analytics” is a service offered by Google Inc. (Google) that generates detailed statistics about a website’s traffic and traffic sources and measures conversions and sales. GoogleAnalytics uses “cookies” stored on your computer to help analyze how users use our website. Google Analytics collects information such as how often users visit this site, what pages they visit when they do so, and what other sites they used prior to coming to this site. We use the information we get from Google Analytics only to improve this site. Google Analytics collects only the IP address assigned to you on the date you visit this site but does not store your name or any other identifying information. We do not combine the information collected using Google Analytics with personally identifiable information. The cookie that is stored on your web browser to identify you as a unique user the next time you visit this site cannot be used by anyone but Google. Google’s use of information collected in this way is restricted by the Google Analytics Terms of Use, the Google Privacy Policy and EU laws & regulations. By using our website, you consent to the processing of any personal data Google will collect on you in the way and for the purpose as described above. You can prevent Google Analytics from recognizing you on return visits to this site by disabling cookies on your browser.

 

NEWSLETTER

If you would like to receive our newsletter offered through this website, we need a valid email address from you and information that allows us to verify that you are the owner of the specified email address or that the owner agrees to receive the newsletter, any further data is not collected. You can revoke your consent to the storage of the data, the e-mail address and their use for sending the newsletter at any time. When you contact us through the contact form of our website, you can explicit opt out of any newsletter subscription. If you decide to opt out of our free newsletter subscription when contacting us, we only use personal information as far as necessary to handle your request. We may store information for a longer period or indefinitely, if the nature of your request deems this necessary. Under no circumstances do we pass on information we receive from you to any third party.

 

DATA SECURITY

We have gone to great length to protect our website users against unauthorized access to alteration, disclosure or destruction of data. We encrypt all transactions via our website, especially form data (which you send to us via our webform) via SSL. In addition, we limit the access to personal data to a few employees or persons who have been specifically commissioned by us to process this data and who necessarily must know the data to process it. Persons whom we have been assigned to process data are subject to strict confidentiality obligations and disciplinary measures and may be terminated if they fail to comply to these obligations.

 

RIGHT TO INFORMATION

At any time, you have the right to information about the data stored about you, their origins and recipients as well as the purpose of the storage. Information about the stored data is provided by our data protection officer: info@taurai.com.

 

FURTHER INFORMATION

Your trust is important to us. Therefore, we would like to offer you the possibility to ask us questions regarding the processing of your personal data at any time you so please. If you have any questions regarding this Privacy Policy or would like more in-depth information, please contact the privacy officer at info@taurai.com.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- FAQ Section End -->

        <!-- Clients Section Start -->
        
        <!-- Clients Section End -->

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


<!-- Mirrored from zwin.io/html/phootio/faqs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2024 14:52:08 GMT -->
</html>