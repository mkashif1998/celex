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
                                <li class="breadcrumb-item active">Single Blog</li>
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
    <div class="blog-grid pb-100px pt-100px main-blog-page single-blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <div class="blog-posts ">
                        <div class="single-blog-post blog-grid-post">
                            <div class="blog-post-media">
                                <div class="blog-image single-blog" data-aos="fade-up" data-aos-delay="200">
                                    <img src="{{url('/')}}/images/blog-image/single-blog.jpg" alt="blog" />
                                </div>
                            </div>
                            <div class="blog-post-content-inner mt-30px" data-aos="fade-up" data-aos-delay="400">
                                <div class="blog-athor-date d-flex">
                                    <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span>
                                    </p>
                                    <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                                </div>
                                <h4 class="blog-title">Successful completion of largest project in Europe.</h4>
                                <p data-aos="fade-up">
                                    Vestibulum quis risus non arcu imperdiet mollis. Donec vel nisl at purus dignissim eleifend in ut est. Etiam in metus vel nunc dictum interdum. Donec eget nulla et nunc eleifend porta. Integer sit amet dapibus nunc. Vestibulum id quam a tellus mollis pulvinar nec et neque. Pellentesque vulputate leo orci. Etiam tellus magna, dictum a congue nec, pellentesque eget purus. Maecenas aliquet ex sed faucibus rutrum. Vivamus venenatis mollis erat ac tristique. Maecenas et faucibus tortor. Integer facilisis eros nibh. Nunc sed lacinia arcu, ac sollicitudin diam. In aliquam ac purus sit amet commodo. Nullam at molestie est. Donec quis consectetur sem.
                                </p>
                            </div>
                            <div class="single-post-content">
                                <p class="quate-speech" data-aos="fade-up" data-aos-delay="200">
                                    Sed elementum commodo lacus, non vestibulum libero commodo in. Nulla consectetur vehicula ligula, non semper lorem efficitur quis. Vestibulum nec efficitur risus. Aliquam elit felis, placerat non dui tempor
                                </p>
                                <p data-aos="fade-up" data-aos-delay="200">
                                    lacinia dignissim libero. Maecenas vitae dui et erat tempus vehicula vel in sapien. Etiam non lectus ac metus eleifend accumsan eget vel urna. Nulla accumsan massa sed erat luctus, in tristique libero scelerisque. Vestibulum finibus, felis eu rutrum efficitur, ligula lorem mattis libero, ac vulputate turpis orci faucibus elit. Nam faucibus enim eu tincidunt dapibus. Pellentesque a pharetra nibh. Fusce eu nisl porttitor, blandit nibh in, tristique erat. Duis non quam mauris. Nunc dui sapien, ultrices ac pulvinar at, pretium eget quam. Nam elementum ipsum a egestas scelerisque. In hac habitasse platea dictumst..
                                </p>
                                <p data-aos="fade-up" data-aos-delay="200">
                                    In rhoncus tellus non dui eleifend dictum eu a turpis. Nunc tempus felis eget blandit ultrices. Etiam ac feugiat elit. Duis tempus mi nunc, ut pharetra diam mollis quis. Quisque consequat scelerisque ornare. Suspendisse viverra justo eu ex dignissim, a convallis libero posuere. Ut vel finibus mauris. Nunc tempus felis eget blandit ultrices. Etiam ac feugiat elit. Duis tempus mi nunc, ut pharetra diam mollis quis. Quisque consequat scelerisque ornare. Suspendisse viverra justo eu ex dignissim, a convallis libero posuere. Ut vel finibus mauris.
                                </p>
                            </div>
                        </div>
                        <!-- single blog post -->
                    </div>
                    <div class="blog-single-tags-share d-sm-flex justify-content-between">
                        <div class="blog-single-tags d-flex mb-xs-15px" data-aos="fade-up" data-aos-delay="200">
                            <span class="title">Tags: </span>
                            <ul class="tag-list">
                                <li><a href="#">Tools,</a></li>
                                <li><a href="#">Cable,</a></li>
                                <li><a href="#">Security</a></li>
                            </ul>
                        </div>
                        <div class="blog-single-share d-flex" data-aos="fade-up" data-aos-delay="200">
                            <span class="title">Share:</span>
                            <ul class="social">
                                <li>
                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-google"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-related-post">
                        <div class="row">
                            <div class="col-md-12 text-center" data-aos="fade-up">
                                <!-- Section Title -->
                                <div class="section-title">
                                    <h2 class="title m-0">Related Post</h2>
                                </div>
                                <!-- Section Title -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-lm-30px related-post-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="blog-post-media">
                                    <div class="blog-image single-blog">
                                        <a href="blog-single-left-sidebar.html"><img class="img-responsive"
                                                src="{{url('/')}}/images/blog-image/1.jpg" alt="blog" /></a>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-3">
                                    <div class="blog-athor-date d-flex">
                                        <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span>
                                        </p>
                                        <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-single-left-sidebar.html">Decorate your
                                            home with the most modern Products.</a></h4>
                                </div>
                            </div>
                            <div class="col-md-4 mb-lm-30px related-post-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="blog-post-media">
                                    <div class="blog-image single-blog">
                                        <a href="blog-single-left-sidebar.html"><img class="img-responsive"
                                                src="{{url('/')}}/images/blog-image/2.jpg" alt="blog" /></a>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-3">
                                    <div class="blog-athor-date d-flex">
                                        <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span>
                                        </p>
                                        <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-single-left-sidebar.html">Spatialize with
                                            decorations of the Celex store.</a></h4>
                                </div>
                            </div>
                            <div class="col-md-4 related-post-item" data-aos="fade-up" data-aos-delay="600">
                                <div class="blog-post-media">
                                    <div class="blog-image single-blog">
                                        <a href="blog-single-left-sidebar.html"><img class="img-responsive"
                                                src="{{url('/')}}/images/blog-image/3.jpg" alt="blog" /></a>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-3">
                                    <div class="blog-athor-date d-flex">
                                        <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span>
                                        </p>
                                        <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-single-left-sidebar.html">Unique products
                                            that will impress your home.</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment-area">
                        <h2 class="comment-heading" data-aos="fade-up" data-aos-delay="200">3 Comments</h2>
                        <div class="review-wrapper">
                            <div class="single-review" data-aos="fade-up" data-aos-delay="200">
                                <div class="review-img">
                                    <img src="{{url('/')}}/images/review-image/1.png" alt="" />
                                </div>
                                <div class="review-content">
                                    <div class="review-top-wrap">
                                        <div class="review-left">
                                            <div class="review-name">
                                                <h4 class="title">White Lewis</h4>
                                                <span class="date">February 16, 2021 at 1:38 am</span>
                                            </div>
                                        </div>
                                        <div class="review-left">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="review-bottom">
                                        <p>
                                            Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae
                                            Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus
                                            quam nisi, congue id nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-review child-review" data-aos="fade-up" data-aos-delay="200">
                                <div class="review-img">
                                    <img src="{{url('/')}}/images/review-image/2.png" alt="" />
                                </div>
                                <div class="review-content">
                                    <div class="review-top-wrap">
                                        <div class="review-left">
                                            <div class="review-name">
                                                <h4 class="title">White Lewis</h4>
                                                <span class="date">February 16, 2021 at 1:38 am</span>
                                            </div>
                                        </div>
                                        <div class="review-left">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="review-bottom">
                                        <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae
                                            Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-review" data-aos="fade-up" data-aos-delay="200">
                                <div class="review-img">
                                    <img src="{{url('/')}}/images/review-image/1.png" alt="" />
                                </div>
                                <div class="review-content">
                                    <div class="review-top-wrap">
                                        <div class="review-left">
                                            <div class="review-name">
                                                <h4 class="title">White Lewis</h4>
                                                <span class="date">February 16, 2021 at 1:38 am</span>
                                            </div>
                                        </div>
                                        <div class="review-left">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="review-bottom">
                                        <p>
                                            Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae
                                            Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus
                                            quam nisi, congue id nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-comment-form">
                        <h2 class="comment-heading" data-aos="fade-up" data-aos-delay="200">Leave a Reply</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Your email address will not be published. Required
                            fields are marked *</p>
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="single-form">
                                    <label>Your Review:</label>
                                    <textarea placeholder="Write a review"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="single-form mb-lm-15px">
                                    <label>Name:</label>
                                    <input type="text" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="single-form mb-lm-15px">
                                    <label>Email:</label>
                                    <input type="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                                <div class="single-form">
                                    <label>Website:</label>
                                    <input type="email" placeholder="Website" />
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="single-form">
                                    <button class="btn btn-primary btn-hover-dark border-0 mt-30px"
                                        type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
