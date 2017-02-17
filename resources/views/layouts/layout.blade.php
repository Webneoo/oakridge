<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Oakridge | Mountain resort in Lebanon</title>
        <meta name="keywords" content="HTML5,CSS3,Template" />
        <meta name="description" content="" />
        <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- SWIPER SLIDER -->
        <link href="/assets/plugins/slider.swiper/dist/css/swiper.min.css" rel="stylesheet" type="text/css" />

        <!-- THEME CSS -->
        <link href="/assets/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/layout.css" rel="stylesheet" type="text/css" />

        <!-- PAGE LEVEL SCRIPTS -->
        <link href="/assets/css/header-1.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
    </head>

    <body class="smoothscroll enable-animation">

        <!-- wrapper -->
        <div id="wrapper">

            <div id="header" class="sticky clearfix">

                <!-- TOP NAV -->
                <header id="topNav">
                    <div class="container">

                        <!-- Mobile Menu Button -->
                        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- BUTTONS -->
                        <ul class="pull-right nav nav-pills nav-second-main">

                            <!-- SEARCH -->
                            <li class="search">
                                <a href="javascript:;">
                                    <i class="fa fa-search"></i>
                                </a>
                                <div class="search-box">
                                    <form action="page-search-result-1.html" method="get">
                                        <div class="input-group">
                                            <input type="text" name="src" placeholder="Search" class="form-control" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit">Search</button>
                                            </span>
                                        </div>
                                    </form>
                                </div> 
                            </li>
                            <!-- /SEARCH -->

                        </ul>
                        <!-- /BUTTONS -->

                        <!-- Logo -->
                        <a class="logo pull-left" href="/">
                            <img src="/assets/images/logo_oakridge.png" alt="" />
                        </a>

                        <!-- 
                            Top Nav 
                            
                            AVAILABLE CLASSES:
                            submenu-dark = dark sub menu
                        -->
                        <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                            <nav class="nav-main">

                                <!--
                                    NOTE
                                    
                                    For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                                    Direct Link Example: 

                                    <li>
                                        <a href="#">HOME</a>
                                    </li>
                                -->
                                <ul id="topMain" class="nav nav-pills nav-main">
                                    <li class="dropdown"><!-- HOME -->
                                        <a class="" href="/">
                                            OAKRIDGE'S WORLD
                                        </a>
                                    </li>
                                    <li class="dropdown"><!-- PAGES -->
                                        <a class="dropdown-toggle" href="/project">
                                            THE PROJECT
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a href="/project">PROJECT</a></li>
                                            <li><a href="/residences">RESIDENCES</a></li>
                                            <li><a href="/condominiums">CONDOMINIUMS</a></li>
                                            <li><a href="/block-g">BLOCK G</a></li>
                                            <li><a href="/villas">VILLAS</a></li>
                                            <li><a href="/lodge">LODGE</a></li>
                                            <li><a href="/facilities">FACILITIES</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown active"><!-- FEATURES -->
                                        <a class="" href="/mountain">
                                            FAQRA-KFARDEBIANE MOUNTAINS
                                        </a>
                                       
                                    </li>
                                    <!-- <li class="dropdown mega-menu">
                                        <a class="" href="/construction-updates">
                                            CONSTRUCTION UPDATES
                                        </a>
                                        
                                    </li> -->
                                    <li class="dropdown"><!-- BLOG -->
                                        <a class="" href="/behind-the-creation">
                                            BEHIND THE CREATION
                                        </a>
                                        
                                    </li>
                                    <li class="dropdown mega-menu"><!-- SHORTCODES -->
                                        <a class="" href="mountain/#footer">
                                            CONTACT US
                                        </a>
                            
                                    </li>
                                </ul>

                            </nav>
                        </div>

                    </div>
                </header>
                <!-- /Top Nav -->

            </div>




            @yield('content')


            <!-- FOOTER -->
            <footer id="footer">
                <div class="container">

                    <div class="row">
                        
                        <div class="col-md-3">
                            <!-- Footer Logo -->
                            <h4 class="letter-spacing-1">OUR CONTACTS</h4>

                            <!-- Small Description -->
                            <p>Contact us for more information about the project?</p>

                            <!-- Contact Address -->
                            <address>
                                <ul class="list-unstyled">
                                    <li class="footer-sprite address">
                                        On site Sales Office <br> Faqra <br> Kfardebian
                                    </li>
                                    <li class="footer-sprite phone">
                                        Phone: 70 707009 / 03 258020
                                    </li>
                     
                                </ul>
                            </address>
                            <!-- /Contact Address -->

                        </div>

                        <div class="col-md-3">

                            <!-- Latest Blog Post -->
                            <h4 class="letter-spacing-1">LATEST NEWS</h4>
                            <ul class="footer-posts list-unstyled">
                                <li>
                                    The Hotel is coming soon in 2017.
                                    <small>01 December 2016</small>
                                </li>
                                
                            </ul>
                            <!-- /Latest Blog Post -->

                        </div>

                        <div class="col-md-2">

                            <!-- Links -->
                            <h4 class="letter-spacing-1">EXPLORE OAKRIDGE</h4>
                            <ul class="footer-links list-unstyled">
                                <li><a href="/">Oakridge's world</a></li>
                                <li><a href="/project">The project</a></li>
                                <li><a href="/mountain">Faqra-Kfardebiane</a></li>
                                <!-- <li><a href="/construction-updates">Construction Updates</a></li> -->
                                <li><a href="/behind-the-creation">Behind the creation</a></li>
                                <li><a href="/mountain/#footer">Contact us</a></li>
                            </ul>
                            <!-- /Links -->

                        </div>

                        <div class="col-md-4">

                            <!-- Newsletter Form -->
                            <h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
                            <p>Send us your email and we will contact you for more information about the project, our offers and prices.</p>

                           <!-- Contact Address -->
                            <address>
                                <ul class="list-unstyled">
                         
                                    <li class="footer-sprite email">
                                        <a href="mailto:info@oakridgefaqra.com">info@oakridgefaqra.com</a>
                                    </li>
                                </ul>
                            </address>
                            <!-- /Newsletter Form -->

                            <!-- Social Icons -->
                            <div class="margin-top-20">
                                <a href="https://www.facebook.com/oakridgemountainresort/" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                               
                    
                            </div>
                            <!-- /Social Icons -->

                        </div>

                    </div>

                </div>

                <div class="copyright">
                    <div class="container">
                        <ul class="pull-right nomargin list-inline mobile-block">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li>&bull;</li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                        &copy; All Rights Reserved, Company LTD
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->

        </div>
        <!-- /wrapper -->


        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>


        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div><!-- /PRELOADER -->


        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
        <script type="text/javascript" src="/assets/plugins/jquery/jquery-2.1.4.min.js"></script>

        <script type="text/javascript" src="/assets/js/scripts.js"></script>
        

        <!-- SWIPER SLIDER -->
        <script type="text/javascript" src="/assets/plugins/slider.swiper/dist/js/swiper.min.js"></script>
        <script type="text/javascript" src="/assets/js/view/demo.swiper_slider.js"></script>
    </body>
</html>