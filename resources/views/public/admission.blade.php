@extends('layouts.public')

@section('title')
Admission
@endsection

@section('main')
<!-- About Section Start -->
<div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 padding-0 md-pl-15 md-pr-15 md-mb-30">
                <div class="img-part">
                    <img class="" src="assets/images/about/history.png" alt="About Image" />
                </div>
                <ul class="nav nav-tabs histort-part" id="myTab" role="tablist">
                    <li class="nav-item tab-btns single-history">
                        <a class="nav-link tab-btn active" id="about-history-tab" data-toggle="tab"
                            href="#about-history" role="tab" aria-controls="about-history" aria-selected="true"><span
                                class="icon-part"><i class="flaticon-banknote"></i></span>History</a>
                    </li>
                    <li class="nav-item tab-btns single-history">
                        <a class="nav-link tab-btn" id="about-mission-tab" data-toggle="tab" href="#about-mission"
                            role="tab" aria-controls="about-mission" aria-selected="false"><span class="icon-part"><i
                                    class="flaticon-flower"></i></span>Mission & Vission</a>
                    </li>
                    <li class="nav-item tab-btns single-history last-item">
                        <a class="nav-link tab-btn" id="about-admin-tab" data-toggle="tab" href="#about-admin"
                            role="tab" aria-controls="about-admin" aria-selected="false"><span class="icon-part"><i
                                    class="flaticon-analysis"></i></span>Administration</a>
                    </li>
                </ul>
            </div>
            <div class="offset-lg-1"></div>
            <div class="col-lg-5">
                <div class="tab-content tabs-content" id="myTabContent">
                    <div class="tab-pane tab fade show active" id="about-history" role="tabpanel"
                        aria-labelledby="about-history-tab">
                        <div class="sec-title mb-25">
                            <h2 class="title">Educavo History</h2>
                            <div class="desc">
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blan ditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident, sim ilique sunt in
                                culpa.
                            </div>
                        </div>
                        <div class="tab-img">
                            <img class="" src="assets/images/about/tab1.jpg" alt="Tab Image" />
                        </div>
                    </div>
                    <div class="tab-pane fade" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                        <div class="sec-title mb-25">
                            <h2 class="title">Educavo Mission</h2>
                            <div class="desc">
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blan ditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident, sim ilique sunt in
                                culpa.
                            </div>
                        </div>
                        <div class="tab-img">
                            <img class="" src="assets/images/about/tab2.jpg" alt="Tab Image" />
                        </div>
                    </div>
                    <div class="tab-pane fade" id="about-admin" role="tabpanel" aria-labelledby="about-admin-tab">
                        <div class="sec-title mb-25">
                            <h2 class="title">Educavo Administration</h2>
                            <div class="desc">
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blan ditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident, sim ilique sunt in
                                culpa.
                            </div>
                        </div>
                        <div class="tab-img">
                            <img class="" src="assets/images/about/tab3.jpg" alt="Tab Image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro Info Tabs-->
        <div class="intro-info-tabs"></div>
    </div>
</div>
<!-- About Section End -->
@endsection
