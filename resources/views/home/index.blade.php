@extends('layout.main-layout')
@push('Title')
    <title>Welcome</title>
@endpush
@section('product-search')
<div class="col d-none d-lg-block">
    <div class="dropdown_search">
        <form class="action-form" action="#">
            <input type="search" class="form-control" name="search" id="product_search" placeholder="Search Your Products" value="" >
            <button class="submit" type="submit"><i class="ion-ios-search"></i></button>
        </form>
    </div>
</div>
@endsection
@section('main-section')
@include('sweetalert::alert')
    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 hero-slider-nav slider-dot-style-1 hero-slider-dot">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                @foreach ($slider_data as $slider_details)
                    <div class="hero-slide-item slider-height swiper-slide d-flex" data-bg-image="{{ url('/') }}/images/slider/{{ $slider_details->slider_image }}">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                    <div class="hero-slide-content slider-animated-1">
                                        <h2 class="title-1">{{ $slider_details->slider_title }} </h2>
                                        <p>{{ $slider_details->slider_text }}</p>
                                        <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark mt-4">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Single slider item -->
                {{-- <div class="hero-slide-item slider-height swiper-slide d-flex"
                    data-bg-image="{{ url('/') }}/images/slider-image/bg-2.jpg">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="hero-slide-content slider-animated-1">
                                    <h2 class="title-1">Flight Simulator <br> & Setup </h2>
                                    <p>Avail 15% off on Making Charges for all Items</p>
                                    <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark mt-4">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->
    <!-- Banner Section Start -->
    <div class="section pb-100px pt-100px">
        <div class="container">
            <!-- Banners Start -->
            <div class="row">
                <!-- Banner Start -->
                <div class="col-lg-6 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <div class="banner-2">
                        <img src="{{ url('/') }}/images/banner/5.jpg" alt="" />
                        <div class="info justify-content-end">
                            <div class="content align-self-center text-end">
                                <span class="category">New Arrival</span>
                                <h3 class="title">
                                    Bluetooth
                                    <br /> Speaker
                                </h3>
                                <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-lg-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="banner-2">
                        <img src="{{ url('/') }}/images/banner/6.jpg" alt="" />
                        <div class="info justify-content-end">
                            <div class="content align-self-center text-end">
                                <span class="category">New Arrival</span>
                                <h3 class="title">
                                    Bluetooth
                                    <br /> Speaker
                                </h3>
                                <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner End -->
            </div>
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->



    <!-- Feature Section Start -->
    <div class="section">
        <div class="container">
            <div class="feature-wrap section-padding-sm">
                <div class="row row-cols-lg-auto row-cols-sm-2 row-cols-1 justify-content-between mb-n5">
                    <!-- Feature Start -->
                    <div class="col mb-5">
                        <div class="feature">
                            <div class="icon text-primary align-self-center"><img
                                    src="{{ url('/') }}/images/icons/feature-icon-1.png" alt=""></div>
                            <div class="content">
                                <h5 class="title">Free shipping</h5>
                                <p>Free shipping all order</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->

                    <!-- Feature Start -->
                    <div class="col mb-5">
                        <div class="feature">
                            <div class="icon text-primary align-self-center"><img
                                    src="{{ url('/') }}/images/icons/feature-icon-2.png" alt=""></div>
                            <div class="content">
                                <h5 class="title">online support</h5>
                                <p>Support 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->
                    <!-- Feature Start -->
                    <div class="col mb-5">
                        <div class="feature">
                            <div class="icon text-primary align-self-center"><img
                                    src="{{ url('/') }}/images/icons/feature-icon-3.png" alt=""></div>
                            <div class="content">
                                <h5 class="title">100% monney back</h5>
                                <p>We ensure secure payment</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->

                    <!-- Feature Start -->
                    <div class="col mb-5">
                        <div class="feature">
                            <div class="icon text-primary align-self-center"><img
                                    src="{{ url('/') }}/images/icons/feature-icon-4.png" alt=""></div>
                            <div class="content">
                                <h5 class="title">Money Return</h5>
                                <p>30 days for free return</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Product tab Area Start -->
    <div class="section product-tab-area pt-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-aos="fade-up">
                    <div class="section-title mb-0">
                        <h2 class="title">Our Products</h2>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center mb-40px" data-aos="fade-up" data-aos-delay="200">
                    <ul class="product-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                href="#tab-product-new-arrivals">New Arrivals</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-product-best-sellers">Best
                                Sellers </a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-sale-item">Sale
                                Items</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-on-sales">On
                                Sales</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                            <!-- New Product Slider Start -->
                            <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="new-product-wrapper swiper-wrapper">
                                    @foreach ($newarrivalitem as $newarrival)
                                        <!-- Single Prodect -->
                                        <div class="new-product-item swiper-slide">
                                            <div class="product">
                                                <div class="thumb">
                                                    <a href="{{ url('/') }}/customer/product-details/{{ $newarrival->id }}" class="image">
                                                        <img src="{{ url('/') }}/images/add-product/{{ $newarrival->product_image }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ url('/') }}/images/add-product/{{ $newarrival->product_image }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        @if ($newarrival->product_tag == 'New')
                                                            <span class="new">{{ $newarrival->product_tag }}</span>
                                                        @elseif ($newarrival->product_tag == 'Sale')
                                                            <span
                                                                class="sale">{{ $newarrival->product_price_off . '%' }}</span>
                                                        @elseif ($newarrival->product_tag == 'Both')
                                                            <span class="new">New</span>
                                                            <span
                                                                class="sale">{{ $newarrival->product_price_off . '%' }}</span>
                                                        @else
                                                            <span class=""></span>
                                                        @endif
                                                    </span>
                                                    <div class="actions">
                                                        <a href="wishlist.html" class="action wishlist"
                                                            title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" class="action quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                                                class="fa fa-search"></i></a>
                                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                                class="fa fa-refresh"></i></a>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title"><a title="New Affordable Fire TV"
                                                            href="{{ url('/') }}/customer/product-details/{{ $newarrival->id }}">{{ $newarrival->product_name }}</a>
                                                    </h5>
                                                    <span class="price">
                                                        <?php
                                                        $price_off = $newarrival->product_price_off;
                                                        if ($price_off != '') {
                                                            $price = $newarrival->product_price;
                                                            $persent_price = ($price_off * $price) / 100;
                                                            $new_price = $price - $persent_price;
                                                        } else {
                                                            $price_off = 0;
                                                        }
                                                        ?>
                                                        @if ($price_off == 0)
                                                            <span
                                                                class="new">{{ '$' . $newarrival->product_price }}</span>
                                                        @else
                                                            <span class="new">{{ '$' . $new_price }}</span>
                                                            <span
                                                                class="old">{{ '$' . $newarrival->product_price }}</span>
                                                        @endif

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 1st tab end -->
                        <!-- 2nd tab start -->
                        <div class="tab-pane fade" id="tab-product-best-sellers">
                            <!-- New Product Slider Start -->
                            <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="new-product-wrapper swiper-wrapper">
                                    <!-- Single Prodect -->
                                    @foreach ($bestselleritem as $bestseller)
                                        <!-- Single Prodect -->
                                        <div class="new-product-item swiper-slide">
                                            <div class="product">
                                                <div class="thumb">
                                                    <a href="{{ url('/') }}/customer/product-details/{{ $bestseller->id }}" class="image">
                                                        <img src="{{ url('/') }}/images/add-product/{{ $bestseller->product_image }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ url('/') }}/images/add-product/{{ $bestseller->product_image }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        @if ($bestseller->product_tag == 'New')
                                                            <span class="new">{{ $bestseller->product_tag }}</span>
                                                        @elseif ($bestseller->product_tag == 'Sale')
                                                            <span
                                                                class="sale">{{ $bestseller->product_price_off . '%' }}</span>
                                                        @elseif ($bestseller->product_tag == 'Both')
                                                            <span class="new">New</span>
                                                            <span
                                                                class="sale">{{ $bestseller->product_price_off . '%' }}</span>
                                                        @else
                                                            <span class=""></span>
                                                        @endif
                                                    </span>
                                                    <div class="actions">
                                                        <a href="wishlist.html" class="action wishlist"
                                                            title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" class="action quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                                                class="fa fa-search"></i></a>
                                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                                class="fa fa-refresh"></i></a>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title"><a title="New Affordable Fire TV"
                                                            href="{{ url('/') }}/customer/product-details/{{ $bestseller->id }}">{{ $bestseller->product_name }}</a>
                                                    </h5>
                                                    <span class="price">
                                                        <?php
                                                        $price_off = $bestseller->product_price_off;
                                                        if ($price_off != '') {
                                                            $price = $bestseller->product_price;
                                                            $persent_price = ($price_off * $price) / 100;
                                                            $new_price = $price - $persent_price;
                                                        } else {
                                                            $price_off = 0;
                                                        }
                                                        ?>
                                                        @if ($price_off == 0)
                                                            <span
                                                                class="new">{{ '$' . $bestseller->product_price }}</span>
                                                        @else
                                                            <span class="new">{{ '$' . $new_price }}</span>
                                                            <span
                                                                class="old">{{ '$' . $bestseller->product_price }}</span>
                                                        @endif

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd tab end -->
                        <!-- 3rd tab start -->
                        <div class="tab-pane fade" id="tab-product-sale-item">
                            <!-- New Product Slider Start -->
                            <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="new-product-wrapper swiper-wrapper">
                                    <!-- Single Prodect -->
                                    @foreach ($saleitem as $sale)
                                        <!-- Single Prodect -->
                                        <div class="new-product-item swiper-slide">
                                            <div class="product">
                                                <div class="thumb">
                                                    <a href="{{ url('/') }}/customer/product-details/{{ $sale->id }}" class="image">
                                                        <img src="{{ url('/') }}/images/add-product/{{ $sale->product_image }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ url('/') }}/images/add-product/{{ $sale->product_image }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        @if ($sale->product_tag == 'New')
                                                            <span class="new">{{ $sale->product_tag }}</span>
                                                        @elseif ($sale->product_tag == 'Sale')
                                                            <span
                                                                class="sale">{{ $sale->product_price_off . '%' }}</span>
                                                        @elseif ($sale->product_tag == 'Both')
                                                            <span class="new">New</span>
                                                            <span
                                                                class="sale">{{ $sale->product_price_off . '%' }}</span>
                                                        @else
                                                            <span class=""></span>
                                                        @endif
                                                    </span>
                                                    <div class="actions">
                                                        <a href="wishlist.html" class="action wishlist"
                                                            title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" class="action quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                                                class="fa fa-search"></i></a>
                                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                                class="fa fa-refresh"></i></a>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title"><a title="New Affordable Fire TV"
                                                            href="{{ url('/') }}/customer/product-details/{{ $sale->id }}">{{ $sale->product_name }}</a>
                                                    </h5>
                                                    <span class="price">
                                                        <?php
                                                        $price_off = $sale->product_price_off;
                                                        if ($price_off != '') {
                                                            $price = $sale->product_price;
                                                            $persent_price = ($price_off * $price) / 100;
                                                            $new_price = $price - $persent_price;
                                                        } else {
                                                            $price_off = 0;
                                                        }
                                                        ?>
                                                        @if ($price_off == 0)
                                                            <span
                                                                class="new">{{ '$' . $sale->product_price }}</span>
                                                        @else
                                                            <span class="new">{{ '$' . $new_price }}</span>
                                                            <span
                                                                class="old">{{ '$' . $sale->product_price }}</span>
                                                        @endif

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 3rd tab end -->
                        <!-- 4th tab start -->
                        <div class="tab-pane fade" id="tab-product-on-sales">
                            <!-- New Product Slider Start -->
                            <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="new-product-wrapper swiper-wrapper">
                                    <!-- Single Prodect -->
                                    @foreach ($onsaleitem as $onsale)
                                        <!-- Single Prodect -->
                                        <div class="new-product-item swiper-slide">
                                            <div class="product">
                                                <div class="thumb">
                                                    <a href="{{ url('/') }}/customer/product-details/{{ $onsale->id }}" class="image">
                                                        <img src="{{ url('/') }}/images/add-product/{{ $onsale->product_image }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ url('/') }}/images/add-product/{{ $onsale->product_image }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        @if ($onsale->product_tag == 'New')
                                                            <span class="new">{{ $onsale->product_tag }}</span>
                                                        @elseif ($onsale->product_tag == 'Sale')
                                                            <span
                                                                class="sale">{{ $onsale->product_price_off . '%' }}</span>
                                                        @elseif ($onsale->product_tag == 'Both')
                                                            <span class="new">New</span>
                                                            <span
                                                                class="sale">{{ $onsale->product_price_off . '%' }}</span>
                                                        @else
                                                            <span class=""></span>
                                                        @endif
                                                    </span>
                                                    <div class="actions">
                                                        <a href="wishlist.html" class="action wishlist"
                                                            title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" class="action quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                                                class="fa fa-search"></i></a>
                                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                                class="fa fa-refresh"></i></a>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title"><a title="New Affordable Fire TV"
                                                            href="{{ url('/') }}/customer/product-details/{{ $onsale->id }}">{{ $onsale->product_name }}</a>
                                                    </h5>
                                                    <span class="price">
                                                        <?php
                                                        $price_off = $onsale->product_price_off;
                                                        if ($price_off != '') {
                                                            $price = $onsale->product_price;
                                                            $persent_price = ($price_off * $price) / 100;
                                                            $new_price = $price - $persent_price;
                                                        } else {
                                                            $price_off = 0;
                                                        }
                                                        ?>
                                                        @if ($price_off == 0)
                                                            <span
                                                                class="new">{{ '$' . $onsale->product_price }}</span>
                                                        @else
                                                            <span class="new">{{ '$' . $new_price }}</span>
                                                            <span
                                                                class="old">{{ '$' . $onsale->product_price }}</span>
                                                        @endif

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 4th tab end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product tab Area End -->


    <!-- Product Category Start -->
    <div class="section pt-100px pb-100px">
        <div class="category-slider swiper-container" data-aos="fade-up">
            <div class="category-wrapper swiper-wrapper">
                <!-- Single Category -->
                <div class=" swiper-slide">
                    <a href="shop-left-sidebar.html" class="category-inner ">
                        <div class="category-single-item">
                            <span class="badges">
                                <span class="new">sale</span>
                            </span>
                            <img src="{{ url('/') }}/images/category-image/1.jpg" alt="">
                            <span class="title">headphones</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class=" swiper-slide">
                    <a href="shop-left-sidebar.html" class="category-inner ">
                        <div class="category-single-item">
                            <span class="badges">
                                <span class="new">sale</span>
                            </span>
                            <img src="{{ url('/') }}/images/category-image/2.jpg" alt="">
                            <span class="title">New speaker</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class=" swiper-slide">
                    <a href="shop-left-sidebar.html" class="category-inner ">
                        <div class="category-single-item">
                            <span class="badges">
                                <span class="sale">-7%</span>
                            </span>
                            <img src="{{ url('/') }}/images/category-image/3.jpg" alt="">
                            <span class="title">Laser Light</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class=" swiper-slide">
                    <a href="shop-left-sidebar.html" class="category-inner ">
                        <div class="category-single-item">
                            <span class="badges">
                                <span class="new">sale</span>
                            </span>
                            <img src="{{ url('/') }}/images/category-image/4.jpg" alt="">
                            <span class="title">vr 3d box</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class="swiper-slide">
                    <a href="shop-left-sidebar.html" class="category-inner ">
                        <div class="category-single-item">
                            <span class="badges">
                                <span class="sale">-7%</span>
                            </span>
                            <img src="{{ url('/') }}/images/category-image/2.jpg" alt="">
                            <span class="title">headphones</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
            </div>
        </div>
    </div>

    <!-- Product Category End -->
    <!-- Product tab Area Start -->
    <div class="section feature-product-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-aos="fade-up">
                    <div class="section-title mb-0">
                        <h2 class="title">Features Products</h2>
                        <p class="sub-title mb-50px">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($featureitem as $feature)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-40px" data-aos="fade-up" data-aos-delay="200">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="{{ url('/') }}/customer/product-details/{{ $feature->id }}"
                                    class="image">
                                    <img src="{{ asset('images/add-product/' . $feature->product_image) }}"
                                        alt="Product">
                                    {{-- <img class="hover-image" src="{{url('/')}}/images/product-image/2.jpg" alt="Product"> --}}
                                </a>
                                <span class="badges">
                                    @if ($feature->product_tag == 'New')
                                        <span class="new">{{ $feature->product_tag }}</span>
                                    @elseif ($feature->product_tag == 'Sale')
                                        <span class="sale">{{ $feature->product_price_off . '%' }}</span>
                                    @elseif ($feature->product_tag == 'Both')
                                        <span class="new">New</span>
                                        <span class="sale">{{ $feature->product_price_off . '%' }}</span>
                                    @else
                                        <span class=""></span>
                                    @endif
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                            class="fa fa-search"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fa fa-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a title="New Affordable Fire TV"
                                        href="{{ url('/') }}/customer/product-details/{{ $feature->id }}">{{ $feature->product_name }}</a>
                                </h5>
                                <span class="price">
                                    <?php
                                    $price_off = $feature->product_price_off;
                                    if ($price_off != '') {
                                        $price = $feature->product_price;
                                        $persent_price = ($price_off * $price) / 100;
                                        $new_price = $price - $persent_price;
                                    } else {
                                        $price_off = 0;
                                    }
                                    ?>
                                    @if ($price_off == 0)
                                        <span class="new">{{ '$' . $feature->product_price }}</span>
                                    @else
                                        <span class="new">{{ '$' . $new_price }}</span>
                                        <span class="old">{{ '$' . $feature->product_price }}</span>
                                    @endif

                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-40px" data-aos="fade-up" data-aos-delay="400">
                <!-- Single Prodect -->
                <div class="product">
                    <div class="thumb">
                        <a href="{{url('/')}}/customer/product-details" class="image">
                            <img src="{{url('/')}}/images/product-image/3.jpg" alt="Product">
                            <img class="hover-image" src="{{url('/')}}/images/product-image/4.jpg" alt="Product">
                        </a>
                        <span class="badges">
                            <span class="new">New</span>
                            <span class="sale">-10%</span>
                        </span>
                        <div class="actions">
                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                    class="fa fa-heart-o"></i></a>
                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                    class="fa fa-search"></i></a>
                            <a href="compare.html" class="action compare" title="Compare"><i
                                    class="fa fa-refresh"></i></a>
                        </div>
                        <button title="Add To Cart" class=" add-to-cart">Add
                            To Cart</button>
                    </div>
                    <div class="content">
                        <h5 class="title"><a title="Webcam, Cameras Optics, Output"
                                href="shop-left-sidebar.html">Webcam, Cameras
                                Optics, Output </a></h5>
                        <span class="price">
                            <span class="new">$38.50</span>
                            <span class="old">$48.50</span>
                        </span>
                    </div>
                </div>
                <!-- Single Prodect -->
            </div> --}}
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-40px" data-aos="fade-up" data-aos-delay="600">
                <!-- Single Prodect -->
                <div class="product">
                    <div class="thumb">
                        <a href="{{url('/')}}/customer/product-details" class="image">
                            <img src="{{url('/')}}/images/product-image/5.jpg" alt="Product">
                            <img class="hover-image" src="{{url('/')}}/images/product-image/6.jpg" alt="Product">
                        </a>
                        <span class="badges">
                            <span class="sale">-7%</span>
                        </span>
                        <div class="actions">
                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                    class="fa fa-heart-o"></i></a>
                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                    class="fa fa-search"></i></a>
                            <a href="compare.html" class="action compare" title="Compare"><i
                                    class="fa fa-refresh"></i></a>
                        </div>
                        <button title="Add To Cart" class=" add-to-cart">Add
                            To Cart</button>
                    </div>
                    <div class="content">
                        <h5 class="title"><a title="Digital Air Fryer Stainless Steel"
                                href="shop-left-sidebar.html">Digital Air Fryer
                                Stainless Steel</a></h5>
                        <span class="price">
                            <span class="new">$30.50</span>
                            <span class="old">$38.00</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-40px" data-aos="fade-up" data-aos-delay="800">
                <!-- Single Prodect -->
                <div class="product">
                    <div class="thumb">
                        <a href="{{url('/')}}/customer/product-details" class="image">
                            <img src="{{url('/')}}/images/product-image/7.jpg" alt="Product">
                            <img class="hover-image" src="{{url('/')}}/images/product-image/8.jpg" alt="Product">
                        </a>
                        <span class="badges">
                            <span class="new">Sale</span>
                        </span>
                        <div class="actions">
                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                    class="fa fa-heart-o"></i></a>
                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                    class="fa fa-search"></i></a>
                            <a href="compare.html" class="action compare" title="Compare"><i
                                    class="fa fa-refresh"></i></a>
                        </div>
                        <button title="Add To Cart" class=" add-to-cart">Add
                            To Cart</button>
                    </div>
                    <div class="content">
                        <h5 class="title"><a title="Bissell SpotClean Pro Portable Carpet"
                                href="shop-left-sidebar.html">Bissell SpotClean Pro
                                Portable Carpet</a></h5>
                        <span class="price">
                            <span class="new">$38.50</span>
                        </span>
                    </div>
                </div>
                <!-- Single Prodect -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up"
                data-aos-delay="200">
                <!-- Single Prodect -->
                <div class="product">
                    <div class="thumb">
                        <a href="{{url('/')}}/customer/product-details" class="image">
                            <img src="{{url('/')}}/images/product-image/9.jpg" alt="Product">
                            <img class="hover-image" src="{{url('/')}}/images/product-image/10.jpg" alt="Product">
                        </a>
                        <span class="badges">
                            <span class="new">New</span>
                            <span class="sale">-5%</span>
                        </span>
                        <div class="actions">
                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                    class="fa fa-heart-o"></i></a>
                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                    class="fa fa-search"></i></a>
                            <a href="compare.html" class="action compare" title="Compare"><i
                                    class="fa fa-refresh"></i></a>
                        </div>
                        <button title="Add To Cart" class=" add-to-cart">Add
                            To Cart</button>
                    </div>
                    <div class="content">
                        <h5 class="title"><a title="Alexa-Compatible Echo Devices"
                                href="shop-left-sidebar.html">Alexa-Compatible Echo
                                Devices</a></h5>
                        <span class="price">
                            <span class="new">$38.50</span>
                            <span class="old">$40.50</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up"
                data-aos-delay="400">
                <!-- Single Prodect -->
                <div class="product">
                    <div class="thumb">
                        <a href="{{url('/')}}/customer/product-details" class="image">
                            <img src="{{url('/')}}/images/product-image/11.jpg" alt="Product">
                            <img class="hover-image" src="{{url('/')}}/images/product-image/12.jpg" alt="Product">
                        </a>
                        <span class="badges">
                            <span class="new">Sale</span>
                        </span>
                        <div class="actions">
                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                    class="fa fa-heart-o"></i></a>
                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                    class="fa fa-search"></i></a>
                            <a href="compare.html" class="action compare" title="Compare"><i
                                    class="fa fa-refresh"></i></a>
                        </div>
                        <button title="Add To Cart" class=" add-to-cart">Add
                            To Cart</button>
                    </div>
                    <div class="content">
                        <h5 class="title"><a title="Fashion Stainless Steel Smart Watch"
                                href="shop-left-sidebar.html">Fashion Stainless Steel Smart Watch</a></h5>
                        <span class="price">
                            <span class="new">$38.50</span>
                        </span>
                    </div>
                </div>
                <!-- Single Prodect -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                <!-- Single Prodect -->
                <div class="product">
                    <div class="thumb">
                        <a href="{{url('/')}}/customer/product-details" class="image">
                            <img src="{{url('/')}}/images/product-image/2.jpg" alt="Product">
                            <img class="hover-image" src="{{url('/')}}/images/product-image/1.jpg" alt="Product">
                        </a>
                        <span class="badges">
                        </span>
                        <div class="actions">
                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                    class="fa fa-heart-o"></i></a>
                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                    class="fa fa-search"></i></a>
                            <a href="compare.html" class="action compare" title="Compare"><i
                                    class="fa fa-refresh"></i></a>
                        </div>
                        <button title="Add To Cart" class=" add-to-cart">Add
                            To Cart</button>
                    </div>
                    <div class="content">
                        <h5 class="title"><a title="Piano Black Nespresso Vertuo Plus"
                                href="shop-left-sidebar.html">Piano Black Nespresso Vertuo Plus</a></h5>
                        <span class="price">
                            <span class="new">$30.50</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                <!-- Single Prodect -->
                <div class="product">
                    <div class="thumb">
                        <a href="{{url('/')}}/customer/product-details" class="image">
                            <img src="{{url('/')}}/images/product-image/4.jpg" alt="Product">
                            <img class="hover-image" src="{{url('/')}}/images/product-image/3.jpg" alt="Product">
                        </a>
                        <span class="badges">
                            <span class="new">New</span>
                        </span>
                        <div class="actions">
                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                    class="fa fa-heart-o"></i></a>
                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#show_product_modal"><i
                                    class="fa fa-search"></i></a>
                            <a href="compare.html" class="action compare" title="Compare"><i
                                    class="fa fa-refresh"></i></a>
                        </div>
                        <button title="Add To Cart" class=" add-to-cart">Add
                            To Cart</button>
                    </div>
                    <div class="content">
                        <h5 class="title"><a title="Mpow Flame Bluetooth Headphones"
                                href="shop-left-sidebar.html">Mpow Flame Bluetooth Headphones</a></h5>
                        <span class="price">
                            <span class="new">$38.50</span>
                        </span>
                    </div>
                </div>
                <!-- Single Prodect -->
            </div> --}}
            </div>
        </div>
    </div>
    <!-- Product tab Area End -->

    <!-- Testimonial Start -->
    <div class="testimonial-area pt-100px pb-100px" data-bg-image="{{ url('/') }}/images/testimonial-image/178.png">
        <div class="container">
            <div class="testimonial-slider-container swiper-container slider-dot-style-1 testi-dot">
                <div class="testimonial-slider-wrapper swiper-wrapper">
                    <!-- Testimonial item Start -->
                    <div class="testimonial-slider-item swiper-slide text-center">
                        <div class="testimonial-image">
                            <img src="{{ url('/') }}/images/testimonial-image/1.png" alt="man-image">
                        </div>
                        <div class="testimonial-content">
                            <p>Phasellus rhoncus aliquam lacus vitae semper. Quisque pellentesque vestibulum dolor,
                                varius maximus lectus ultricies a. In interdum, metus malesuada aliquam elementum, enim
                                tellus aliquam mi, ac cursus ante lorem at libero.</p>
                        </div>
                        <div class="testimonial-author">
                            <h4>Rebecka Filson <span>Customer</span></h4>
                        </div>
                    </div>
                    <!-- Testimonial item End -->
                    <!-- Testimonial item Start -->
                    <div class="testimonial-slider-item swiper-slide  text-center">
                        <div class="testimonial-image">
                            <img src="{{ url('/') }}/images/testimonial-image/2.png" alt="man-image">
                        </div>
                        <div class="testimonial-content">
                            <p>Phasellus rhoncus aliquam lacus vitae semper. Quisque pellentesque vestibulum dolor,
                                varius maximus lectus ultricies a. In interdum, metus malesuada aliquam elementum, enim
                                tellus aliquam mi, ac cursus ante lorem at libero.</p>
                        </div>
                        <div class="testimonial-author">
                            <h4>Nathanael Jaworski <span>Customer</span></h4>
                        </div>
                    </div>
                    <!-- Testimonial item End -->
                    <!-- Testimonial item Start -->
                    <div class="testimonial-slider-item swiper-slide  text-center">
                        <div class="testimonial-image">
                            <img src="{{ url('/') }}/images/testimonial-image/3.png" alt="man-image">
                        </div>
                        <div class="testimonial-content">
                            <p>Phasellus rhoncus aliquam lacus vitae semper. Quisque pellentesque vestibulum dolor,
                                varius maximus lectus ultricies a. In interdum, metus malesuada aliquam elementum, enim
                                tellus aliquam mi, ac cursus ante lorem at libero.</p>
                        </div>
                        <div class="testimonial-author">
                            <h4>Magdalena Valencia <span>Customer</span></h4>
                        </div>
                    </div>
                    <!-- Testimonial item End -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Best rated Product Start -->
    <div class="top-rated-area pt-100px pb-75px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center mb-6">
                        <h2 class="title">Top Rated Products</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod
                        </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <!-- Best Product Activation Start -->
            <div class="top-rated-slider  swiper-container slider-nav-style-1">
                <div class="swiper-wrapper">
                    <!-- Double Product Start -->
                    <div class="double-pro swiper-slide">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/1.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(5)</span>
                                </span>
                                <h4 class="title"><a title="Alexa-Compatible Echo Devices"
                                        href="{{ url('/') }}/customer/product-details">Alexa-Compatible Echo
                                        Devices</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/2.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 80%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <h4 class="title"><a title="Fire TV Blaster lets Fire TV"
                                        href="{{ url('/') }}/customer/product-details">Fire TV
                                        Blaster lets Fire TV</a></h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro swiper-slide">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/3.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 60%"></span>
                                    </span>
                                    <span class="rating-num">(3)</span>
                                </span>
                                <h4 class="title"><a title="Fashion Stainless Steel Smart Watch"
                                        href="{{ url('/') }}/customer/product-details">Fashion Stainless Smart
                                        Watch</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/4.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 70%"></span>
                                    </span>
                                    <span class="rating-num">(3.5)</span>
                                </span>
                                <h4 class="title"><a title="Morphy Richards Travel Jug Kettle"
                                        href="{{ url('/') }}/customer/product-details">Morphy Richards Travel Jug</a>
                                </h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro swiper-slide">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/5.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(5)</span>
                                </span>
                                <h4 class="title"><a title="JBL Link Portable Review"
                                        href="{{ url('/') }}/customer/product-details">JBL
                                        Link
                                        Portable Review</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/6.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 80%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <h4 class="title"><a title="Bissell SpotClean Professional Portable Carpet Cleaner"
                                        href="{{ url('/') }}/customer/product-details">Bissell Portable Carpet
                                        Cleaner</a>
                                </h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro swiper-slide">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/7.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(5)</span>
                                </span>
                                <h4 class="title"><a title="Avalon Bay Stainless Steel Basket Air Fryer"
                                        href="{{ url('/') }}/customer/product-details">Avalon Bay Basket Air
                                        Fryer</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/8.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 80%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <h4 class="title"><a title="Honeywell TurboForce Air Circulator Fan Black, HT-900"
                                        href="{{ url('/') }}/customer/product-details">Honeywell Air Fan Black,
                                        HT-900</a>
                                </h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro swiper-slide">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/1.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 60%"></span>
                                    </span>
                                    <span class="rating-num">(3)</span>
                                </span>
                                <h4 class="title"><a title="Alexa-Compatible Echo Devices"
                                        href="{{ url('/') }}/customer/product-details">Alexa-Compatible Echo
                                        Devices</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/2.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 80%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <h4 class="title"><a title="Fire TV Blaster lets Fire TV"
                                        href="{{ url('/') }}/customer/product-details">Fire TV
                                        Blaster lets Fire TV</a></h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro swiper-slide">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/3.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 60%"></span>
                                    </span>
                                    <span class="rating-num">(3)</span>
                                </span>
                                <h4 class="title"><a title="Fashion Stainless Steel Smart Watch"
                                        href="{{ url('/') }}/customer/product-details">Fashion Stainless Smart
                                        Watch</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('/') }}/customer/product-details"><img class="img"
                                        src="{{ url('/') }}/images/product-small/4.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(5)</span>
                                </span>
                                <h4 class="title"><a title="Morphy Richards Travel Jug Kettle"
                                        href="{{ url('/') }}/customer/product-details">Morphy Richards Travel Jug
                                    </a></h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                </div>
                <!-- Best Product Activation End -->
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best rated Product End -->
    <!-- Brand area start -->
    <div class="brand-area">
        <div class="container">
            <div class="brand-slider d-flex swiper-container slider-nav-style-1">
                <div class="brand-slider-wrapper swiper-wrapper align-items-center align-self-center">
                    <div class="brand-slider-item swiper-slide">
                        <a href="#"><img src="{{ url('/') }}/images/brand-logo/1.png"
                                alt="" /></a>
                    </div>
                    <div class="brand-slider-item swiper-slide">
                        <a href="#"><img src="{{ url('/') }}/images/brand-logo/2.png"
                                alt="" /></a>
                    </div>
                    <div class="brand-slider-item swiper-slide">
                        <a href="#"><img src="{{ url('/') }}/images/brand-logo/3.png"
                                alt="" /></a>
                    </div>
                    <div class="brand-slider-item swiper-slide">
                        <a href="#"><img src="{{ url('/') }}/images/brand-logo/4.png"
                                alt="" /></a>
                    </div>
                    <div class="brand-slider-item swiper-slide">
                        <a href="#"><img src="{{ url('/') }}/images/brand-logo/5.png"
                                alt="" /></a>
                    </div>
                    <div class="brand-slider-item swiper-slide">
                        <a href="#"><img src="{{ url('/') }}/images/brand-logo/1.png"
                                alt="" /></a>
                    </div>
                    <div class="brand-slider-item swiper-slide">
                        <a href="#"><img src="{{ url('/') }}/images/brand-logo/2.png"
                                alt="" /></a>
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
    <!--  Blog area Start -->
    <div class="main-blog-area pb-100px pt-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center mb-11">
                        <h2 class="title">Latest Blog</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="blog-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
                <!-- Start single blog -->
                <div class="swiper-wrapper">
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img
                                    src="{{ url('/') }}/images/blog-image/1.jpg" class="img-responsive w-100"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date d-flex">
                                <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span></p>
                                <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                            </div>
                            <h5 class="blog-heading"><a
                                    title="Successful completion of largest digital industry research project in Europe"
                                    class="blog-heading-link" href="blog-single-left-sidebar.html">Successful completion
                                    of largest digital project.</a></h5>
                            <p class="blog-detail-text">Quisque vel nibh cursus, congue nisl sit amet, mollis lorem.
                                Aliquam erat volutpat. Etiam sit amet tortor in odio malesuada ultrices.</p>

                            <a href="blog-single-left-sidebar.html"
                                class="btn btn-lg btn-hover-color-primary btn-color-dark mt-30px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img
                                    src="{{ url('/') }}/images/blog-image/2.jpg" class="img-responsive w-100"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date d-flex">
                                <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span></p>
                                <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                            </div>
                            <h5 class="blog-heading"><a
                                    title="Some M1 Macs Affected By Fast User Switching Screensaver Bug"
                                    class="blog-heading-link" href="blog-single-left-sidebar.html">Some M1 Macs Affected
                                    By Fast User Switching.
                                </a></h5>
                            <p class="blog-detail-text">Quisque vel nibh cursus, congue nisl sit amet, mollis lorem.
                                Aliquam erat volutpat. Etiam sit amet tortor in odio malesuada ultrices.</p>

                            <a href="blog-single-left-sidebar.html"
                                class="btn btn-lg btn-hover-color-primary btn-color-dark mt-30px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img
                                    src="{{ url('/') }}/images/blog-image/3.jpg" class="img-responsive w-100"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date d-flex">
                                <p class="m-0">By: <a class="blog-date" href="#">Admin </a><span>-</span></p>
                                <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                            </div>
                            <h5 class="blog-heading"><a title="Electrical technicians working on electronics parts"
                                    class="blog-heading-link" href="blog-single-left-sidebar.html">Electrical
                                    technicians working on electronics parts.</a></h5>
                            <p class="blog-detail-text">Quisque vel nibh cursus, congue nisl sit amet, mollis lorem.
                                Aliquam erat volutpat. Etiam sit amet tortor in odio malesuada ultrices.</p>

                            <a href="blog-single-left-sidebar.html"
                                class="btn btn-lg btn-hover-color-primary btn-color-dark mt-30px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img
                                    src="{{ url('/') }}/images/blog-image/4.jpg" class="img-responsive w-100"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date d-flex">
                                <p class="m-0">By: <a class="blog-date" href="#">Admin </a> <span>-</span>
                                </p>
                                <p class="m-0">On: <a class="blog-date" href="#">14 Dec 2028</a></p>
                            </div>
                            <h5 class="blog-heading"><a title="Best Laptop for Blogging and Bloggers"
                                    class="blog-heading-link" href="blog-single-left-sidebar.html">Best Laptop for
                                    Blogging and Bloggers.</a></h5>
                            <p class="blog-detail-text">Quisque vel nibh cursus, congue nisl sit amet, mollis lorem.
                                Aliquam erat volutpat. Etiam sit amet tortor in odio malesuada ultrices.</p>

                            <a href="blog-single-left-sidebar.html"
                                class="btn btn-lg btn-hover-color-primary btn-color-dark mt-30px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  Blog area End -->
@endsection
@section('script')
<script>
    $( function() {
      var availableTags = [];
      $.ajax({
        method: "GET",
        url: "/serach-ajax",
        success: function(response)
        {
            autocomplete(response);
        }
      });
      function autocomplete(availableTags)
      {
        $( "#product_search" ).autocomplete({
            source: availableTags
        });
      }


    } );
</script>
@endsection
