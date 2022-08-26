@extends('app')
@section('content')
    <!-- Start of Breadcrumb section
         ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>Sea Freight</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section
         ============================================= -->

    <!-- Start of Service details section
         ============================================= -->
    <section id="ft-service-details" class="ft-service-details-section page-padding">
        <div class="container">
            <div class="ft-service-details-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-service-sidebar">
                            <div class="ft-service-sidebar-widget headline ul-li-block">
                                <div class="service-category-widget">
                                    <h3 class="widget-title">All Service</h3>
                                    <ul>
                                        <li><a href="service">Air Freight </a></li>
                                        <li><a href="seafreight">Sea Freight </a></li>
                                        <li><a href="landfreight">Land Freight </a></li>
                                        <li><a href="service-single.html">Train Freight </a></li>
                                        <li><a href="service-single.html">Thaird Party Logistics </a></li>
                                        <li><a href="service-single.html">Air Freight </a></li>
                                        <li><a href="service-single.html">Air Freight </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ft-service-sidebar-widget headline ul-li-block">
                                <div class="service-form-widget">
                                    <h3 class="widget-title text-uppercase">24/7 ONLINE SUPPORT</h3>
                                    <p>Get immediate quotes & book shipment.</p>
                                    <form action="contact">
                                        <input type="text" placeholder="Name">
                                        <input type="email" placeholder="Email">
                                        <textarea name="#" placeholder="Your Question Here"></textarea>
                                        <button>Contact Now</button>
                                    </form>
                                </div>
                            </div>
                            <div class="ft-service-sidebar-widget headline ul-li-block">
                                <div class="service-download-widget">
                                    <h3 class="widget-title">Download Now</h3>
                                    <ul>
                                        <li><a href="#">Compnay Report -2020 <i class="far fa-file-pdf"></i></a></li>
                                        <li><a href="#">Compnay Report -2021 <i class="far fa-file-pdf"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ft-service-details-content-wrapper headline pera-content">
                            <div class="ft-service-details-img-wrapper">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ft-service-details-img">
                                            <img src="assets/img/service/sd1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ft-service-details-img">
                                            <img src="assets/img/service/sd2.jpg" alt="">
                                        </div>
                                        <div class="ft-service-details-img">
                                            <img src="assets/img/service/sd3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ft-service-details-text-wrapper">
                                <h3>Overview</h3>
                                <p>Connecting continents, we offer sea freight services with fixed departure and arrival
                                    times bringing the world right to your doorstep. Through our partners and alliances
                                    across the globe, we are completely flexible to provide a sea freight solution for your
                                    company whether LCL (consolidated container) or FCL (full container), whether
                                    roll-on/roll-off or conventional shipping.
                                    We offer full service for FCL and LCL, in addition to transportation, we also take care
                                    of upstream and downstream warehouse and logistics services. Our multi-modal transport
                                    solutions enable us to achieve the shortest possible transit times for your sea freight

                                </p>
                                <div class="ft-service-details-counter-wrapper">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div
                                                class="ft-service-details-counter-item d-flex align-items-center headline pera-content">
                                                <div class="ft-service-details-count-icon">
                                                    <i class="flaticon-worldwide"></i>
                                                </div>
                                                <div class="ft-service-details-count-text">
                                                    <h4 class="title text-uppercase">WE COVERED</h4>
                                                    <h4 class="count-number"><span class="counter">158</span>+</h4>
                                                    <p>International gateways</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="ft-service-details-counter-item d-flex align-items-center headline pera-content">
                                                <div class="ft-service-details-count-icon">
                                                    <i class="flaticon-logistics"></i>
                                                </div>
                                                <div class="ft-service-details-count-text">
                                                    <h4 class="title text-uppercase">WE HANDLED</h4>
                                                    <h4 class="count-number"><span class="counter">2000</span>+</h4>
                                                    <p>Tons of air freight annually</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>How It Works</h3>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    viverra maecenas accumsan lacus vel facilisis. </p> --}}
                                <div class="ft-video-content position-relative">
                                    <div class="ft-video-img-play-btn">
                                        <div class="ft-video-img">
                                            <img src="assets/img/bg/v-bg.jpg" alt="">
                                        </div>
                                        <div class="ft-video-play">
                                            <a class="d-flex justify-content-center align-items-center position-relative video_box"
                                                href="https://www.youtube.com/watch?v=C4jjFanHZo8">
                                                <i class="fas fa-play"></i>
                                                <span class="video_btn_border border_wrap-1"></span>
                                                <span class="video_btn_border border_wrap-2"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service details section
         ============================================= -->
@endsection
