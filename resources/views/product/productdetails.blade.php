@extends('layout.main-layout')
@push('Title')
<title>Product Details</title>
@endpush
@section('main-section')
  <!-- breadcrumb-area start -->
  <div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box  align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                        <h2 class="breadcrumb-title">Shop</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list text-center text-md-end">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop-left-sidebar.html">Shop</a></li>
                            <li class="breadcrumb-item active">Product Details</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- Product Details Area Start -->
<div class="product-details-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                <!-- Swiper -->
                <div class="swiper-container zoom-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src="{{url('/')}}/images/add-product/{{$single_product->product_image}}"
                                alt="">
                        </div>
                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src="{{url('/')}}/images/add-product/{{$single_product->product_image}}"
                                alt="">
                        </div>
                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src="{{url('/')}}/images/add-product/{{$single_product->product_image}}"
                                alt="">
                        </div>
                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src="{{url('/')}}/images/add-product/{{$single_product->product_image}}"
                                alt="">
                        </div>
                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src="{{url('/')}}/images/add-product/{{$single_product->product_image}}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-container zoom-thumbs slider-nav-style-1 small-nav mt-3 mb-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{url('/')}}/images/add-product/{{$single_product->product_image}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{url('/')}}/images/add-product/{{$single_product->product_image}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{url('/')}}/images/add-product/{{$single_product->product_image}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{url('/')}}/images/add-product/{{$single_product->product_image}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{url('/')}}/images/add-product/{{$single_product->product_image}}" alt="">
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                <div class="product-details-content quickview-content">
                    <h2>{{$single_product->product_name}}</h2>
                    <p class="reference">Reference:<span> demo_17</span></p>
                    <div class="pro-details-rating-wrap">
                        <div class="rating-product">
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                        </div>
                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                    </div>
                    <div class="pricing-meta">
                        <ul>
                            <li class="old-price not-cut">{{"$".$single_product->product_price}}</li>
                        </ul>
                    </div>
                    <p class="quickview-para">{{$single_product->product_description}}</p>
                    <form action="{{url('/')}}/customer/cart/{{$single_product->id}}" method="post">
                        @csrf
                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                            </div>
                            <div class="pro-details-cart">
                                <button type="submit" class=" btn btn-primary btn-hover-primary ml-4 "> Add To Cart</button>
                            </div>
                        </div>
                    </form>
                    <div class="pro-details-wish-com">
                        <div class="pro-details-wishlist">
                            <a href="wishlist.html"><i class="fa fa-heart-o"></i>Add to
                                wishlist</a>
                        </div>
                        <div class="pro-details-compare">
                            <a href="compare.html"><i class="fa fa-random"></i>Add to compare</a>
                        </div>
                    </div>
                    <div class="pro-details-social-info">
                        <span>Share</span>
                        <div class="social-info">
                            <ul class="d-flex">
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
                    <div class="pro-details-policy">
                        <ul>
                            <li><img src="{{url('/')}}/images/icons/policy.png" alt="" /><span>Security Policy (Edit With
                                    Customer Reassurance Module)</span></li>
                            <li><img src="{{url('/')}}/images/icons/policy-2.png" alt="" /><span>Delivery Policy (Edit
                                    With Customer Reassurance Module)</span></li>
                            <li><img src="{{url('/')}}/images/icons/policy-3.png" alt="" /><span>Return Policy (Edit With
                                    Customer Reassurance Module)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- product details description area start -->
<div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav">
                <a data-bs-toggle="tab" href="#des-details1">Description</a>
                <a class="active" data-bs-toggle="tab" href="#des-details2">Product Details</a>
                <a data-bs-toggle="tab" href="#des-details3">Reviews (2)</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details2" class="tab-pane active">
                    <div class="product-anotherinfo-wrapper">
                        <ul>
                            <li><span>Weight</span> 500 g</li>
                            <li><span>Dimensions</span>20 x 10 x 15 cm</li>
                            <li><span>Materials</span> 50% cotton, 40% polyester</li>
                            <li><span>Other Info</span> American heirloom kjean shorts pug seitan letterpress</li>
                        </ul>
                    </div>
                </div>
                <div id="des-details1" class="tab-pane">
                    <div class="product-description-wrapper">
                        <p>Morbi vel dictum mauris. Nullam leo dolor, mattis vel ullamcorper vitae
                        </p>
                        <p>
                            Donec non ligula mi. Aliquam erat volutpat. Sed pretium nisi fermentum, ullamcorper elit non, pellentesque metus. Morbi hendrerit vehicula justo, auctor luctus felis venenatis quis. Cras vehicula scelerisque felis vel vehicula.
                        </p>
                    </div>
                </div>
                <div id="des-details3" class="tab-pane">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="review-wrapper">
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="{{url('/')}}/images/review-image/1.png" alt="" />
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-left">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>
                                                Quisque varius sed purus ac euismod. Duis urna mauris, pharetra quis ultricies id, eleifend vitae ipsum. Mauris dui nisi, sagittis sit amet luctus ut, pellentesque quis risus
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-review child-review">
                                    <div class="review-img">
                                        <img src="{{url('/')}}/images/review-image/2.png" alt="" />
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-left">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>Quisque varius sed purus ac euismod. Duis urna mauris, pharetra quis ultricies id, eleifend vitae ipsum. Mauris dui nisi, sagittis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="ratting-form-wrapper pl-50">
                                <h3>Add a Review</h3>
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="star-box">
                                            <span>Your rating:</span>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="rating-form-style">
                                                    <input placeholder="Name" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rating-form-style">
                                                    <input placeholder="Email" type="email" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <textarea name="Your Review" placeholder="Message"></textarea>
                                                    <button class="btn btn-primary btn-hover-color-primary "
                                                        type="submit" value="Submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details description area end -->

<!-- New Product Start -->
<div class="section pb-100px" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <!-- section title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-left mb-11">
                    <h2 class="title">You Might Also Like</h2>
                </div>
            </div>
        </div>
        <!-- section title start -->
        <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
            <div class="new-product-wrapper swiper-wrapper">
                <!-- Single Prodect -->
                @foreach ($like_product as $products )
                <div class="new-product-item swiper-slide">
                    <div class="product">
                        <div class="thumb">
                            <a href="{{url('/')}}/customer/product-details/{{ $products->id }}" class="image">
                                <img src="{{url('/')}}/images/add-product/{{ $products->product_image }}" alt="Product" />
                                <img class="hover-image" src="{{url('/')}}/images/add-product/{{ $products->product_image }}" alt="Product" />
                            </a>
                            <span class="badges">
                                @if ($products->product_tag == 'New')
                                    <span class="new">{{ $products->product_tag }}</span>
                                @elseif ($products->product_tag == 'Sale')
                                    <span class="sale">{{ $products->product_price_off . '%' }}</span>
                                @elseif ($products->product_tag == 'Both')
                                    <span class="new">New</span>
                                    <span class="sale">{{ $products->product_price_off . '%' }}</span>
                                @else
                                    <span class=""></span>
                                @endif
                            </span>
                            <div class="actions">
                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="fa fa-search"></i></a>
                                <a href="compare.html" class="action compare" title="Compare"><i
                                        class="fa fa-refresh"></i></a>
                            </div>
                            <button title="Add To Cart" class=" add-to-cart">Add
                                To Cart</button>
                        </div>
                        <div class="content">
                            <h5 class="title"><a title="New Affordable Fire TV" href="{{url('/')}}/customer/product-details/{{ $products->id }}">New
                                    Affordable Fire
                                    TV</a></h5>
                                    <span class="price">
                                        <?php
                                        $price_off = $products->product_price_off;
                                        if ($price_off != '') {
                                            $price = $products->product_price;
                                            $persent_price = ($price_off * $price) / 100;
                                            $new_price = $price - $persent_price;
                                        } else {
                                            $price_off = 0;
                                        }
                                        ?>
                                        @if ($price_off == 0)
                                            <span class="new">{{ '$' . $products->product_price }}</span>
                                        @else
                                            <span class="new">{{ '$' . $new_price }}</span>
                                            <span class="old">{{ '$' . $products->product_price }}</span>
                                        @endif

                                    </span>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Single Prodect -->

            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>

<!-- New Product End -->



<!-- New Product End -->


<!-- Brand area start -->
<div class="brand-area pb-100px">
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
