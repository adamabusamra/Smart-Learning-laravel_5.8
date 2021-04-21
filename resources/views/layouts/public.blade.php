<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- meta tag -->
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/fav-orange.png')}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/off-canvas.css')}}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linea-fonts.css')}}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{asset('assets/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body class="defult-home">

        <!--Preloader area start here-->
        <div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/pre-logo1.png" alt="">
                    {{-- <img src="https://img.favpng.com/23/3/4/logo-business-advertising-png-favpng-VSFv9S8EmX9YV25iiZnAzrheq.jpg"
                        alt=""> --}}
                </div>
            </div>
        </div>
        <!--Preloader area End here-->

        <!--Full width header Start-->
        <div class="full-width-header header-style1 home8-style4">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area home8-topbar">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-7">
                                <ul class="topbar-contact">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-location"></i>
                                        374 William S Canning Blvd, MA 2721, USA
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5 text-right">
                                <ul class="topbar-right">
                                    <li class="login-register">
                                        <i class="fa fa-sign-in"></i>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li class="btn-part">
                                        <a class="apply-btn" href="#">Apply Now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky innerpage">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-2">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part">
                                        <a href='/'>
                                            <img src="{{asset('assets/images/dark-logo.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 text-right">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu">
                                            <ul class="nav-menu">
                                                <li class="menu-item-has-children current-menu-item">
                                                    <a href="/">Home</a>
                                                </li>

                                                <li class="menu-item-has-children ">
                                                    <a href="#">About</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about.html">About One</a> </li>
                                                        <li class="active"><a href="about2.html">About Two</a> </li>
                                                    </ul>
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href="#">Courses</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="course.html">Courses One</a> </li>
                                                        <li><a href="course2.html">Courses Two</a> </li>
                                                        <li><a href="course3.html">Courses Three</a> </li>
                                                        <li><a href="course4.html">Courses Four</a>
                                                        </li>
                                                        <li><a href="course5.html">Courses Five</a> </li>
                                                        <li><a href="course6.html">Courses Six</a> </li>
                                                        <li><a href="course-single.html">Courses Single</a> </li>
                                                    </ul>
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href="#">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-has-children">
                                                            <a href="#">Team</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="team.html">Team One</a></li>
                                                                <li><a href="team2.html">Team Two</a></li>
                                                                <li><a href="team-single.html">Team Single</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a href="#">Event</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="events-style1.html">Event One</a></li>
                                                                <li><a href="events-style2.html">Event Two</a></li>
                                                                <li><a href="events-style3.html">Event Three</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a href="#">Gallery</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="gallery-style1.html">Gallery One</a></li>
                                                                <li><a href="gallery-style2.html">Gallery Two</a></li>
                                                                <li><a href="gallery-style3.html">Gallery Three</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a href="#">Shop</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="shop.html">Shop</a></li>
                                                                <li><a href="shop-single.html">Shop Single</a></li>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a href="#">Others</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="faq.html">FAQ</a></li>
                                                                <li><a href="error.html">404 Page</a></li>
                                                                <li><a href="login.html">Login</a></li>
                                                                <li><a href="register.html">Register</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href="#">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li class="menu-item-has-children">
                                                            <a href="#">Blog Sidebar</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                                                <li><a href="blog-right.html">Blog Right Sidebar</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a href="#">Single Post</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="blog-post-left.html">Post Left Sidebar</a>
                                                                </li>
                                                                <li><a href="blog-post-right.html">Post Right
                                                                        Sidebar</a></li>
                                                                <li><a href="blog-single.html">Full Width Post</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href="#">Contact</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="contact.html">Contact One</a> </li>
                                                        <li><a href="contact2.html">Contact Two</a> </li>
                                                        <li><a href="contact3.html">Contact Three</a> </li>
                                                        <li><a href="contact4.html">Contact Four</a> </li>
                                                    </ul>
                                                </li>
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->

                                </div>
                            </div>
                            <div class="col-lg-2 text-right">
                                <div class="expand-btn-inner">
                                    <ul>
                                        <li>
                                            <a class="hidden-xs rs-search" data-target=".search-modal"
                                                data-toggle="modal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <span id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </span>
                    </div>
                    <div class="canvas-logo">
                        <a href="index-2.html"><img src="{{asset('assets/images/dark-logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo by
                            the charms of pleasure of the moment data com so blinded by desire.</p>
                    </div>
                    <div class="offcanvas-gallery">
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/1.jpg')}}"><img
                                    src="{{asset('assets/images/gallery/1.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/2.jpg')}}"><img
                                    src="{{asset('assets/images/gallery/2.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/3.jpg')}}"><img
                                    src="{{asset('assets/images/gallery/3.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/4.jpg')}}"><img
                                    src="{{asset('assets/images/gallery/4.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="assets/images/gallery/5.jpg"><img
                                    src="assets/images/gallery/5.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/6.jpg')}}"><img
                                    src="{{asset('assets/images/gallery/6.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="map-img">
                        <img src="{{asset('assets/images/map.jpg')}}" alt="">
                    </div>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->



        <!-- Main content Start -->
        <div class="main-content">
            @yield('main')
        </div>
        <!-- Main content End -->



        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer home9-style main-home">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="index-2.html"><img src="assets/images/lite-logo.png" alt="" /></a>
                            </div>
                            <div class="textwidget white-color pr-60 md-pr-15">
                                <p>
                                    We denounce with righteous indi gnation and dislike men who
                                    are so beguiled and demoralized by the charms of pleasure of
                                    your moment, so blinded by desire those who fail weakness.
                                </p>
                            </div>
                            <ul class="footer_social">
                                <li>
                                    <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                                </li>
                                <li>
                                    <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                                </li>

                                <li>
                                    <a href="# " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a>
                                </li>
                                <li>
                                    <a href="# " target="_blank"><span><i
                                                class="fa fa-google-plus-square"></i></span></a>
                                </li>
                                <li>
                                    <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h3 class="widget-title">Address</h3>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">
                                        374 William S Canning Blvd, River MA 2721, USA
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                        <a href="tel:(+880)155-69569">(+880)155-69569</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                            <h3 class="widget-title">Courses</h3>
                            <ul class="site-map">
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Course Two</a></li>
                                <li><a href="#">Single Course</a></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Login/Register</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <h3 class="widget-title">Recent Posts</h3>
                            <div class="recent-post mb-20">
                                <div class="post-img">
                                    <img src="assets/images/footer/1.jpg" alt="" />
                                </div>
                                <div class="post-item">
                                    <div class="post-desc">
                                        <a href="#">University while the lovely valley team work</a>
                                    </div>
                                    <span class="post-date">
                                        <i class="fa fa-calendar"></i>
                                        September 20, 2020
                                    </span>
                                </div>
                            </div>
                            <div class="recent-post mb-20 md-pb-0">
                                <div class="post-img">
                                    <img src="assets/images/footer/2.jpg" alt="" />
                                </div>
                                <div class="post-item">
                                    <div class="post-desc">
                                        <a href="#">High school program starting soon 2021</a>
                                    </div>
                                    <span class="post-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        September 14, 2020
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-20">
                            <div class="copyright">
                                <p>
                                    &copy; 2020 All Rights Reserved. Developed By
                                    <a href="http://rstheme.com/">RSTheme</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right md-text-left">
                            <ul class="copy-right-menu">
                                <li><a href="#">Event</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="{{ asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Menu js -->
        <script src="{{ asset('assets/js/rsmenu-main.js')}}"></script>
        <!-- op nav js -->
        <script src="{{ asset('assets/js/jquery.nav.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- Slick js -->
        <script src="{{ asset('assets/js/slick.min.js')}}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('assets/js/skill.bars.jquery.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
        <!-- counter top js -->
        <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
        <!-- video js -->
        <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
        <!-- magnific popup js -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- plugins js -->
        <script src="{{ asset('assets/js/plugins.js')}}"></script>
        <!-- contact form js -->
        <script src="{{ asset('assets/js/contact.form.js')}}"></script>
        <!-- main js -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>

</html>
