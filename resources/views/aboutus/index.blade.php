@extends('layout.main-layout')
@push('Title')
<title>About us</title>
@endpush
@section('main-section')
 <!-- breadcrumb-area start -->
 <div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box  align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                        <h2 class="breadcrumb-title">About Us</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list text-center text-md-end">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- About Us Area Start -->
<section class="about-area pb-100px pt-100px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left-image mb-md-30px mb-lm-30px" data-aos="fade-up">
                    <img src="{{url('/')}}/images/about-image/1.jpg" alt="" class="img-responsive w-100" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="about-title" data-aos="fade-up">
                        <h2>Welcome To Celex</h2>
                    </div>
                    <p class="mb-6" data-aos="fade-up" data-aos-delay="200">
                        Quisque eleifend orci vel tellus ornare, eget placerat nibh finibus. Maecenas ullamcorper eleifend dui molestie bibendum. Quisque egestas dolor justo, finibus tempus nulla fringilla vel. Curabitur hendrerit dignissim tellus, id bibendum ligula eleifend et. Nunc elementum imperdiet ornare. Phasellus scelerisque diam eget lacus vulputate, id tincidunt nisi viverra
                    </p>
                    <p data-aos="fade-up" data-aos-delay="300">
                        In quam lectus, fringilla non justo sit amet, porta pellentesque lectus. Aliquam iaculis, ligula dictum tempor fringilla, mi nunc eleifend mi, quis pulvinar ante tellus et urna porta pellentesque lectus. Aliquam iaculis, ligula dictum tempor.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area End -->
<!-- Start Slill Progress -->
<div class="progressbar-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="content" data-aos="fade-up" data-aos-delay="0">
                    <h4 class="title">Functionality meets perfection</h4>
                    <p class="title-desc">varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas lacus dolor, blandit efficitur consectetur et, tincidunt quis arcu. Fusce id molestie lectus, nec mollis sem. Ut faucibus molestie finibus. Nam dignissim in tortor ut pretium.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-progress m-t-40">
                    <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="0">
                        <h6 class="font--semi-bold m-b-15">UI/UX</h6>
                        <div class="line-progressbar" data-percentage="75" data-progress-color="#f1ac06"></div>
                    </div>
                    <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="200">
                        <h6 class="font--semi-bold m-b-15">Ideas</h6>
                        <div class="line-progressbar" data-percentage="86" data-progress-color="#f1ac06"></div>
                    </div>
                    <div class="skill-progressbar" data-aos="fade-up" data-aos-delay="400">
                        <h6 class="font--semi-bold m-b-15">Design</h6>
                        <div class="line-progressbar" data-percentage="97" data-progress-color="#f1ac06"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slill Progress -->
<div class="banner-preduct-wrapper pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 pe-0">
                <div class="banner-product-image">
                    <a class="venobox " href="{{url('/')}}/images/banner/8.jpg" data-gall="myGallery">
                        <img src="{{url('/')}}/images/banner/8.jpg" class="img-fluid w-100" alt="Banner images">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="banner-product-image mt-lm-15px">
                    <a class="venobox " href="{{url('/')}}/images/banner/9.jpg" data-gall="myGallery">
                        <img src="{{url('/')}}/images/banner/9.jpg" class="img-fluid w-100" alt="Banner images">
                    </a>
                </div>
                <div class="banner-product-image mt-3">
                    <a class="venobox " href="{{url('/')}}/images/banner/10.jpg" data-gall="myGallery">
                        <img src="{{url('/')}}/images/banner/10.jpg" class="img-fluid w-100" alt="Banner images">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Start  Team Section    -->
<div class="team-section">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Meet Our Team</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Content Text Area -->
    <div class="team-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-single" data-aos="fade-up" data-aos-delay="0">
                        <div class="team-img">
                            <img class="img-fluid" src="{{url('/')}}/images/team/leader1.png" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="team-name font--bold mt-30px">Ms. Veronica</h6>
                            <span class="team-title">Web Designer</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="ion-social-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-single" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-img">
                            <img class="img-fluid" src="{{url('/')}}/images/team/leader2.png" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="team-name font--bold mt-30px">Missa Santos</h6>
                            <span class="team-title">CEO Founder</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="ion-social-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-single" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-img">
                            <img class="img-fluid" src="{{url('/')}}/images/team/leader3.png" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="team-name font--bold mt-30px">Missa Santos</h6>
                            <span class="team-title">Chief Officer</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="ion-social-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-single" data-aos="fade-up" data-aos-delay="600">
                        <div class="team-img">
                            <img class="img-fluid" src="{{url('/')}}/images/team/leader4.png" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="team-name font--bold mt-30px">Lisa Antonia</h6>
                            <span class="team-title">CTO</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="ion-social-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   End  Team Section   -->

<!-- Brand area start -->
<div class="brand-area pb-100px pt-100px">
    <div class="container">
        <div class="brand-slider d-flex swiper-container slider-nav-style-1">
            <div class="brand-slider-wrapper swiper-wrapper align-items-center align-self-center">
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="{{url('/')}}/images/brand-logo/1.png" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="{{url('/')}}/images/brand-logo/2.png" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="{{url('/')}}/images/brand-logo/3.png" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="{{url('/')}}/images/brand-logo/4.png" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="{{url('/')}}/images/brand-logo/5.png" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="{{url('/')}}/images/brand-logo/1.png" alt="" /></a>
                </div>
                <div class="brand-slider-item swiper-slide">
                    <a href="#"><img src="{{url('/')}}/images/brand-logo/2.png" alt="" /></a>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!-- Brand area end -->
@endsection
