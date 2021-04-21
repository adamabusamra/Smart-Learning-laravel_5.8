@extends('layouts.public')

@section('title')
Home
@endsection

@section('main')
<!-- Slider Section Start -->
<div class="rs-slider main-home">
    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true"
        data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false"
        data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false"
        data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false"
        data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1"
        data-md-device-nav="true" data-md-device-dots="false">
        <div class="slider-content slide1">
            <div class="container">
                <div class="content-part">
                    <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Start
                        to learning today</div>
                    <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Online
                        Courses From Leading Experts</h1>
                    <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        <a class="readon orange-btn main-home" href="#">Find Courses</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-content slide2">
            <div class="container">
                <div class="content-part">
                    <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Start
                        to learning today</div>
                    <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Explore
                        Interests and Career With Courses</h1>
                    <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        <a class="readon orange-btn main-home" href="#">Find Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section start -->
    <div id="rs-features" class="rs-features main-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 md-mb-30">
                    <div class="features-wrap">
                        <div class="icon-part">
                            <img src="assets/images/features/icon/3.png" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">
                                <span class="watermark">5,320 online courses</span>
                            </h4>
                            <p class="dese">
                                Enjoy a variety of fresh topics
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 md-mb-30">
                    <div class="features-wrap">
                        <div class="icon-part">
                            <img src="assets/images/features/icon/2.png" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">
                                <span class="watermark">Expert instruction</span>
                            </h4>
                            <p class="dese">
                                Find the right instructor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="features-wrap">
                        <div class="icon-part">
                            <img src="assets/images/features/icon/1.png" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title">
                                <span class="watermark">Lifetime access</span>
                            </h4>
                            <p class="dese">
                                Learn on your schedule
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Section End -->
</div>
<!-- Slider Section End -->


<!-- About Section -->
<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 pl-60 order-last md-pl-15 md-mb-60">
                <div class="img-part js-tilt">
                    <img class="" src="assets/images/about/about3.png" alt="">
                    <img class="shape top-center" src="assets/images/about/image-center-circle.png"
                        alt="Cirle Shape Img">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="sec-title mb-26 wow" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <div class="sub-title orange">About Us</div>
                    <h2 class="title">Welcome to Educavo <br>Distance Learning</h2>
                    <div class="desc pr-30">Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed eius to mod
                        tempors incididunt ut labore et dolore magna this aliqua enims ad minim.</div>
                </div>
                <div class="btn-part wow" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <a class="readon orange-btn main-home" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->


<!-- Counter Section -->
<div class="rs-counter style7-about pb-40 md-pb-35 pt-40 md-pt-35  event-bg">
    <div class="container">
        <div class="row couter-area">
            <div class="col-lg-3 col-md-6 md-mb-30">
                <div class="counter-item text-center">
                    <h2 class="rs-count">2.958</h2>
                    <h4 class="title mb-0">Finished Sessions</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 md-mb-30">
                <div class="counter-item text-center">
                    <h2 class="rs-count plus">4.523</h2>
                    <h4 class="title mb-0">Enrolled Learners</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 sm-mb-30">
                <div class="counter-item text-center">
                    <h2 class="rs-count plus">120</h2>
                    <h4 class="title mb-0">Online Instructors</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item text-center">
                    <h2 class="rs-count percent">100</h2>
                    <h4 class="title mb-0">Satisfaction Rate</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Section End -->


<!-- Categories Section Start -->
<div id="rs-categories" class="rs-categories main-home pt-60 pb-100 md-pt-40 md-pb-40">
    <div class="container">
        <div class="sec-title3 text-center mb-45">
            <div class="sub-title"> Top Categories</div>
            <h2 class="title black-color">Popular Online Categories</h2>
        </div>
        <div class="row mb-35">
            <!-- Course item-->
            <div class="col-lg-4 col-md-6">
                <div class="categories-items">
                    <div class="cate-images">
                        <a href="#"><img src="assets/images/categories/main-home/1.jpg" alt=""></a>
                    </div>
                    <div class="contents">
                        <div class="img-part">
                            <img src="assets/images/categories/main-home/icon/1.png" alt="">
                        </div>
                        <div class="content-wrap">
                            <h2 class="title"><a href="#">General Education</a></h2>
                            <span class="course-qnty">02 Courses</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Course item End-->
        </div>
        <div class="col-lg-12 text-center">
            <a class="readon orange-btn main-home" href="#">View All categories </a>
        </div>
    </div>
</div>
<!-- Categories Section End -->


<!-- Promo banner Section Start -->
<div class="rs-cta main-home">
    <div class="partition-bg-wrap">
        <div class="container">
            <div class="row">
                <div class="offset-lg-6"></div>
                <div class="col-lg-6 pl-70 md-pl-15">
                    <div class="sec-title3 mb-40">
                        <h2 class="title white-color mb-16">20% Offer Running - Join Today</h2>
                        <div class="desc white-color pr-100 md-pr-0">We denounce with righteous indignation and dislike
                            men who are so beguiled and demoralized by the charms of pleasure of your moment, so blinded
                            by desire those who fail in their duty through weakness. These cases are perfectly simple
                            and easy every pleasure is to be welcomed and every pain avoided.</div>
                    </div>
                    <div class="btn-part">
                        <a class="readon orange-btn transparent" href="#">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promo banner Section End -->


<!-- Blog Section Start -->
<div id="rs-blog" class="rs-blog main-home pb-100 pt-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title3 text-center mb-50">
            <div class="sub-title"> News Update</div>
            <h2 class="title"> Latest News & events</h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
            data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
            data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false"
            data-md-device-dots="false">

            <!-- Blog Item -->
            <div class="blog-item">
                <div class="image-part">
                    <img src="assets/images/blog/style2/1.jpg" alt="">
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li><i class="fa fa-user-o"></i> Admin</li>
                        <li><i class="fa fa-calendar"></i>December 15, 2020</li>
                    </ul>
                    <h3 class="title"><a href="blog-single.html">Education is The Process of Facilitating Learning</a>
                    </h3>
                    <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods
                        include teach ing, training, storytelling</div>
                    <div class="btn-btm">
                        <div class="cat-list">
                            <ul class="post-categories">
                                <li><a href="#">College</a></li>
                            </ul>
                        </div>
                        <div class="rs-view-btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item End -->

        </div>
    </div>
</div>
<!-- Blog Section End -->


@endsection
