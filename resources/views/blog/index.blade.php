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
                        <h2 class="breadcrumb-title">Blog</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list text-center text-md-end">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Blog grid</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->
<!-- Blog Area Start -->
<div class="blog-grid pb-100px pt-100px main-blog-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-md-6 mb-res-sm-30px" data-aos="fade-up" data-aos-delay="200">
                            <div class="single-blog-post mb-50px blog-grid-post">
                                <div class="blog-post-media">
                                    <div class="blog-image">
                                        <a href="blog-single-left-sidebar.html"><img
                                                src="{{url('/')}}/images/blog-image/1.jpg" alt="blog"
                                                class="img-responsive" /></a>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-30px">
                                    <div class="blog-athor-date d-flex">
                                        <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span>
                                        </p>
                                        <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-single-left-sidebar.html">Successful
                                            completion
                                            of largest  project in Europe.</a></h4>
                                    <p>
                                        Quisque sodales metus eget dapibus laoreet. Sed eu sodales augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                    </p>
                                    <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-30px">Read
                                        More</a>
                                </div>
                            </div>
                            <!-- single blog post -->
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="single-blog-post mb-50px blog-grid-post">
                                <div class="blog-post-media swiper-container slider-nav-style-1 small-nav">
                                    <div class="blog-gallery swiper-wrapper">
                                        <div class="gallery-item swiper-slide">
                                            <a href="#"><img src="{{url('/')}}/images/blog-image/2.jpg" alt="blog" /></a>
                                        </div>
                                        <div class="gallery-item swiper-slide">
                                            <a href="#"><img src="{{url('/')}}/images/blog-image/3.jpg" alt="blog" /></a>
                                        </div>
                                        <div class="gallery-item swiper-slide">
                                            <a href="#"><img src="{{url('/')}}/images/blog-image/4.jpg" alt="blog" /></a>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-buttons">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-30px">
                                    <div class="blog-athor-date d-flex">
                                        <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span>
                                        </p>
                                        <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-single-left-sidebar.html">Decorate your
                                            home with modern furnishings.</a></h4>
                                    <p>
                                        Quisque sodales metus eget dapibus laoreet. Sed eu sodales augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                    </p>
                                    <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-30px">Read
                                        More</a>
                                </div>
                            </div>
                            <!-- single blog post -->
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="single-blog-post mb-50px blog-grid-post">
                                <div class="blog-post-media">
                                    <div class="blog-post-audio">
                                        <iframe class="embed-responsive-item" width="500" height="320"
                                            allow="autoplay"
                                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-30px">
                                    <div class="blog-athor-date d-flex">
                                        <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span>
                                        </p>
                                        <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-single-left-sidebar.html">Spatialize with
                                            decorations of the Celex store.</a></h4>
                                    <p>
                                        Quisque sodales metus eget dapibus laoreet. Sed eu sodales augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                    </p>
                                    <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-30px">Read
                                        More</a>
                                </div>
                            </div>
                            <!-- single blog post -->
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="single-blog-post mb-50px blog-grid-post">
                                <div class="blog-post-media">
                                    <div class="blog-post-video position-relative">
                                        <a class="venobox venoboxvid video-icon overflow-hidden vbox-item"
                                            data-gall="gall-video" data-autoplay="true" data-vbtype="video"
                                            href="https://youtu.be/7rmQIzbgpoA">
                                            <img class="img-responsive w-100 thumb-image"
                                                src="{{url('/')}}/images/blog-image/3.jpg" alt="">
                                            <img class="icon" src="{{url('/')}}/images/icons/icon-youtube-play.png"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-30px">
                                    <div class="blog-athor-date d-flex">
                                        <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span>
                                        </p>
                                        <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-single-left-sidebar.html">Unique products
                                            that will impress your home.</a></h4>
                                    <p>
                                        Quisque sodales metus eget dapibus laoreet. Sed eu sodales augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                    </p>
                                    <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-30px">Read
                                        More</a>
                                </div>
                            </div>
                            <!-- single blog post -->
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="single-blog-post mb-50px blog-grid-post">
                                <div class="blog-post-media">
                                    <div class="blog-image">
                                        <a href="blog-single-left-sidebar.html"><img
                                                src="{{url('/')}}/images/blog-image/4.jpg" alt="blog"
                                                class="img-responsive" /></a>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-30px">
                                    <div class="blog-athor-date d-flex">
                                        <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span>
                                        </p>
                                        <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-single-left-sidebar.html">Some M1 Macs
                                            AffectedBy Fast User Switching Screensaver Bug.</a></h4>
                                    <p>
                                        Quisque sodales metus eget dapibus laoreet. Sed eu sodales augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                    </p>
                                    <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-30px">Read
                                        More</a>
                                </div>
                            </div>
                            <!-- single blog post -->
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="single-blog-post mb-50px blog-grid-post">
                                <div class="blog-post-media">
                                    <div class="blog-image">
                                        <a href="blog-single-left-sidebar.html"><img
                                                src="{{url('/')}}/images/blog-image/5.jpg" alt="blog"
                                                class="img-responsive" /></a>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-30px">
                                    <div class="blog-athor-date d-flex">
                                        <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span>
                                        </p>
                                        <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-single-left-sidebar.html">Electrical
                                            technicians working on electronics parts.</a></h4>
                                    <p>
                                        Quisque sodales metus eget dapibus laoreet. Sed eu sodales augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                    </p>
                                    <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-30px">Read
                                        More</a>
                                </div>
                            </div>
                            <!-- single blog post -->
                        </div>
                    </div>
                </div>
                <!--  Pagination Area Start -->
                <div class="pro-pagination-style mt-20px mb-md-50px mb-lm-60px text-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="pages">
                        <ul>
                            <li class="li"><a class="page-link" href="#"><i class="ion-ios-arrow-left"></i></a></li>
                            <li class="li"><a class="page-link active" href="#">1</a></li>
                            <li class="li"><a class="page-link" href="#">2</a></li>
                            <li class="li"><a class="page-link" href="#"><i class="ion-ios-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--  Pagination Area End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="col-lg-3 order-lg-first col-md-12 order-md-last mt-md-50px mt-lm-50px" data-aos="fade-up"
                data-aos-delay="200">
                <div class="left-sidebar shop-sidebar-wrap">
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget">
                        <h3 class="sidebar-title mt-0">Search</h3>
                        <div class="search-widget">
                            <form action="#">
                                <input placeholder="Search entire store here ..." type="text" />
                                <button type="submit"><i class="ion-ios-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget mt-40px">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="category-post">
                            <ul>
                                <li><a href="#" class="selected">All <span>(4)</span> </a></li>
                                <li><a href="#" class="">Accesssories <span>(3)</span> </a></li>
                                <li><a href="#" class="">Automation <span>(5)</span> </a></li>
                                <li><a href="#" class="">Boxes <span>(2)</span> </a></li>
                                <li><a href="#" class="">Sensore <span>(6)</span> </a></li>
                                <li><a href="#" class="">Fittings <span>(4)</span> </a></li>
                                <li><a href="#" class="">Ballasts <span>(1)</span> </a></li>
                                <li><a href="#" class="">Fan <span>(3)</span> </a></li>
                                <li><a href="#" class="">Cable <span>(4)</span> </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget mt-40px">
                        <h3 class="sidebar-title">Recent Post</h3>

                        <div class="recent-post-widget">
                            <div class="recent-single-post d-flex">
                                <div class="thumb-side">
                                    <a href="blog-single-left-sidebar.html"><img
                                            src="{{url('/')}}/images/blog-image/1.jpg" alt="" /></a>
                                </div>
                                <div class="media-side">
                                    <h5><a href="blog-single-left-sidebar.html">Want more charitable resources</a>
                                    </h5>
                                    <span class="date">APRIL 24, 2021</span>
                                </div>
                            </div>
                            <div class="recent-single-post d-flex">
                                <div class="thumb-side">
                                    <a href="blog-single-left-sidebar.html"><img
                                            src="{{url('/')}}/images/blog-image/2.jpg" alt="" /></a>
                                </div>
                                <div class="media-side">
                                    <h5><a href="blog-single-left-sidebar.html">A quick tutorial for using
                                        </a></h5>
                                    <span class="date">APRIL 25, 2021</span>
                                </div>
                            </div>
                            <div class="recent-single-post d-flex">
                                <div class="thumb-side">
                                    <a href="blog-single-left-sidebar.html"><img
                                            src="{{url('/')}}/images/blog-image/3.jpg" alt="" /></a>
                                </div>
                                <div class="media-side">
                                    <h5><a href="blog-single-left-sidebar.html">Informed donor is very effective
                                        </a>
                                    </h5>
                                    <span class="date">APRIL 26, 2021</span>
                                </div>
                            </div>
                            <div class="recent-single-post d-flex">
                                <div class="thumb-side m-0px">
                                    <a href="blog-single-left-sidebar.html"><img
                                            src="{{url('/')}}/images/blog-image/4.jpg" alt="" /></a>
                                </div>
                                <div class="media-side">
                                    <h5><a href="blog-single-left-sidebar.html">Want more charitable resources</a>
                                    </h5>
                                    <span class="date">APRIL 27, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget mt-40px">
                        <h3 class="sidebar-title">Tags</h3>

                        <div class="sidebar-widget-tag d-inline-block">
                            <ul>
                                <li><a href="#">Fan</a></li>
                                <li><a href="#">Lamps</a></li>
                                <li><a href="#">Fuses</a></li>
                                <li><a href="#">Cable</a></li>
                                <li><a href="#">Devices</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Tools</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget mt-40px">
                        <h3 class="sidebar-title">Instagram Widget </h3>
                        <div class="flicker-widget">
                            <ul>
                                <li>
                                    <a class="image-link" href="https://www.instagram.com/"  ><img
                                            src="{{url('/')}}/images/product-small/1.jpg" alt="instagram"></a>
                                </li>
                                <li>
                                    <a class="image-link" href="https://www.instagram.com/"  ><img
                                            src="{{url('/')}}/images/product-small/2.jpg" alt="instagram"></a>
                                </li>
                                <li>
                                    <a class="image-link" href="https://www.instagram.com/"  ><img
                                            src="{{url('/')}}/images/product-small/3.jpg" alt="instagram"></a>
                                </li>
                                <li>
                                    <a class="image-link" href="https://www.instagram.com/"  ><img
                                            src="{{url('/')}}/images/product-small/4.jpg" alt="instagram"></a>
                                </li>
                                <li>
                                    <a class="image-link" href="https://www.instagram.com/"  ><img
                                            src="{{url('/')}}/images/product-small/5.jpg" alt="instagram"></a>
                                </li>
                                <li>
                                    <a class="image-link" href="https://www.instagram.com/"  ><img
                                            src="{{url('/')}}/images/product-small/6.jpg" alt="instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                </div>
            </div>
            <!-- Sidebar Area End -->
        </div>
    </div>
</div>
<!-- Blag Area End -->
@endsection
