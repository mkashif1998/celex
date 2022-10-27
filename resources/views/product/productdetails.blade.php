@extends('layout.main-layout')
@push('Title')
<title>Product Details</title>
@endpush
@section('CSSStyle')
<style>
    .star {
  position: relative;
  display: inline-block;
  font-size: 30px;
}

.star-under {
  color: #ddd;
  font-size: 40px;
}

.star-over {
  color: #f4a825;
  overflow: hidden;
  position: absolute;
  font-size: 40px;
  top: 0;
  left: 0;
  display: none;
}

.star-visible {
  display: inline-block;
}
</style>
@endsection
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
                <a data-bs-toggle="tab" href="#des-details3">Reviews ({{ $feedback_count }})</a>
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
                                @foreach ($feedback_view as $product_rating)
                                    <div class="single-review">
                                        <?php
                                            $ratingstr = $product_rating->product_rating;
                                            $goldstr = 5 - $ratingstr ;
                                            $graystr = 5 - $goldstr ;

                                            $acronym = "";
                                            $first_words = $product_rating->user_name;
                                            $acronym .= $first_words[0];
                                        ?>
                                        <div class="review-img">
                                            {{-- <img src="{{url('/')}}/images/review-image/1.png" alt="" /> --}}
                                            {{-- <span class="firstName" hidden>{{ $acronym }}</span> --}}
                                            {{-- <span id="" >{{   Str::limit($product_rating->desc, 2) }}</span> --}}

                                            <div class="text-uppercase profile_image_name" >{{ $acronym }}</div>
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4 class="text-capitalize">{{  $product_rating->user_name }}</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        @for ($i =0; $i<$graystr; $i++)
                                                        <i class="ion-android-star"></i>
                                                        @endfor
                                                        @for ($i =0; $i<$goldstr; $i++)
                                                        <i class="ion-android-star graystr"></i>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">{{  $product_rating->created_at }}</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    {{  $product_rating->feedback_comment }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                {{-- <div class="single-review child-review">
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
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="">
                                <div class="chart">
                                  <div class="rate-box">
                                    <span class="value">5</span>
                                    <div class="progress-bar">
                                      <span class="progress"></span>
                                    </div>
                                    <span class="count">{{ $five_star }}</span>
                                  </div>
                                  <div class="rate-box">
                                    <span class="value">4</span>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">{{ $foure_star }}</span>
                                  </div>
                                  <div class="rate-box">
                                    <span class="value">3</span>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">{{ $three_star }}</span>
                                  </div>
                                  <div class="rate-box">
                                    <span class="value">2</span>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">{{ $two_star }}</span>
                                  </div>
                                  <div class="rate-box">
                                    <span class="value">1</span>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">{{ $one_star }}</span>
                                  </div>
                                </div>
                                <div class="global">
                                    <?php
                                            $fivestr = 5*$five_star;
                                            $fourstr = 4*$foure_star;
                                            $threestr = 3*$three_star;
                                            $twostr = 2*$two_star;
                                            $onestr = 1*$one_star;

                                            $average_rating = ($fivestr+$fourstr+$threestr+$twostr+$onestr)/$feedback_count;


                                    ?>
                                  <span class="global-value" id="over_all_rating">{{ number_format($average_rating,2) }}</span>
                                  {{-- <div class="rating-icons">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <span class="one"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                    <span class="two"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                  </div> --}}
                                    <div id="parent1" class="mt-2">
                                        <i class="star star-under fa fa-star">
                                            <i class="star star-over fa fa-star"></i>
                                        </i>
                                        <i class="star star-under fa fa-star">
                                            <i class="star star-over fa fa-star"></i>
                                        </i>
                                        <i class="star star-under fa fa-star">
                                            <i class="star star-over fa fa-star"></i>
                                        </i>
                                        <i class="star star-under fa fa-star">
                                            <i class="star star-over fa fa-star"></i>
                                        </i>
                                        <i class="star star-under fa fa-star">
                                            <i class="star star-over fa fa-star"></i>
                                        </i>
                                    </div>
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


<form action="{{url('/')}}/customer/product-feedback/{{$single_product->id}}" method="POST" class="ratingstr " style="border: px solid black">
    @csrf
    <h5 class="text-center"> Please give feedback</h5>
	<div class="ratingstr__stars d-flex justify-content-center">
		<input id="ratingstr-1" class="ratingstr__input ratingstr__input-1" type="radio" name="ratingstr" value="1">
		<input id="ratingstr-2" class="ratingstr__input ratingstr__input-2" type="radio" name="ratingstr" value="2">
		<input id="ratingstr-3" class="ratingstr__input ratingstr__input-3" type="radio" name="ratingstr" value="3">
		<input id="ratingstr-4" class="ratingstr__input ratingstr__input-4" type="radio" name="ratingstr" value="4">
		<input id="ratingstr-5" class="ratingstr__input ratingstr__input-5" type="radio" name="ratingstr" value="5">
		<label class="ratingstr__label" for="ratingstr-1">
			<svg class="ratingstr__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
				<g transform="translate(16,16)">
					<circle class="ratingstr__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
				</g>
				<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<g transform="translate(16,16) rotate(180)">
						<polygon class="ratingstr__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
						<polygon class="ratingstr__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
					</g>
					<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
						<polyline class="ratingstr__star-line" transform="rotate(0)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(72)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(144)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(216)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(288)" points="0 4,0 16" />
					</g>
				</g>
			</svg>
			<span class="ratingstr__sr">1 star—Terrible</span>
		</label>
		<label class="ratingstr__label" for="ratingstr-2">
			<svg class="ratingstr__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
				<g transform="translate(16,16)">
					<circle class="ratingstr__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
				</g>
				<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<g transform="translate(16,16) rotate(180)">
						<polygon class="ratingstr__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
						<polygon class="ratingstr__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
					</g>
					<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
						<polyline class="ratingstr__star-line" transform="rotate(0)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(72)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(144)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(216)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(288)" points="0 4,0 16" />
					</g>
				</g>
			</svg>
			<span class="ratingstr__sr">2 stars—Bad</span>
		</label>
		<label class="ratingstr__label" for="ratingstr-3">
			<svg class="ratingstr__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
				<g transform="translate(16,16)">
					<circle class="ratingstr__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
				</g>
				<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<g transform="translate(16,16) rotate(180)">
						<polygon class="ratingstr__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
						<polygon class="ratingstr__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
					</g>
					<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
						<polyline class="ratingstr__star-line" transform="rotate(0)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(72)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(144)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(216)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(288)" points="0 4,0 16" />
					</g>
				</g>
			</svg>
			<span class="ratingstr__sr">3 stars—OK</span>
		</label>
		<label class="ratingstr__label" for="ratingstr-4">
			<svg class="ratingstr__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
				<g transform="translate(16,16)">
					<circle class="ratingstr__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
				</g>
				<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<g transform="translate(16,16) rotate(180)">
						<polygon class="ratingstr__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
						<polygon class="ratingstr__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
					</g>
					<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
						<polyline class="ratingstr__star-line" transform="rotate(0)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(72)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(144)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(216)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(288)" points="0 4,0 16" />
					</g>
				</g>
			</svg>
			<span class="ratingstr__sr">4 stars—Good</span>
		</label>
		<label class="ratingstr__label" for="ratingstr-5">
			<svg class="ratingstr__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
				<g transform="translate(16,16)">
					<circle class="ratingstr__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
				</g>
				<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<g transform="translate(16,16) rotate(180)">
						<polygon class="ratingstr__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
						<polygon class="ratingstr__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
					</g>
					<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
						<polyline class="ratingstr__star-line" transform="rotate(0)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(72)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(144)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(216)" points="0 4,0 16" />
						<polyline class="ratingstr__star-line" transform="rotate(288)" points="0 4,0 16" />
					</g>
				</g>
			</svg>
			<span class="ratingstr__sr">5 stars—Excellent</span>
		</label>
		<p class="ratingstr__display" data-ratingstr="1" hidden>Terrible</p>
		<p class="ratingstr__display" data-ratingstr="2" hidden>Bad</p>
		<p class="ratingstr__display" data-ratingstr="3" hidden>OK</p>
		<p class="ratingstr__display" data-ratingstr="4" hidden>Good</p>
		<p class="ratingstr__display" data-ratingstr="5" hidden>Excellent</p>
	</div>
    <div class="d-flex justify-content-center">
        <textarea type="text" name="feedback_comment" rows="5" style="width: 60%" placeholder="Please enter here..."></textarea>
    </div>
    <div class="text-center mt-4">
        <div class="text-danger">
            @error('ratingstr')
            {{ $message }}
            @enderror
        </div>
        <div class="text-danger">
            @error('feedback_comment')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <button type="submit" class=" btn btn-primary btn-hover-primary ml-4 float-right"> Submit</button>
    </div>
</form>
@endsection
@section('script')
<script>
/* --------------------------------------Ratind stat JS----------------------------------------- */
    window.addEventListener("DOMContentLoaded",() => {
	const starRating = new StarRating("form");
});

class StarRating {
	constructor(qs) {
		this.ratingstrs = [
			{id: 1, name: "Terrible"},
			{id: 2, name: "Bad"},
			{id: 3, name: "OK"},
			{id: 4, name: "Good"},
			{id: 5, name: "Excellent"}
		];
		this.ratingstr = null;
		this.el = document.querySelector(qs);

		this.init();
	}
	init() {
		this.el?.addEventListener("change",this.updateRating.bind(this));

		// stop Firefox from preserving form data between refreshes
		try {
			this.el?.reset();
		} catch (err) {
			console.error("Element isn’t a form.");
		}
	}
	updateRating(e) {
		// clear animation delays
		Array.from(this.el.querySelectorAll(`[for*="ratingstr"]`)).forEach(el => {
			el.className = "ratingstr__label";
		});

		const ratingstrObject = this.ratingstrs.find(r => r.id === +e.target.value);
		const prevRatingID = this.ratingstr?.id || 0;

		let delay = 0;
		this.ratingstr = ratingstrObject;
		this.ratingstrs.forEach(ratingstr => {
			const { id } = ratingstr;

			// add the delays
			const ratingstrLabel = this.el.querySelector(`[for="ratingstr-${id}"]`);

			if (id > prevRatingID + 1 && id <= this.ratingstr.id) {
				++delay;
				ratingstrLabel.classList.add(`ratingstr__label--delay${delay}`);
			}

			// hide ratingstrs to not read, show the one to read
			const ratingstrTextEl = this.el.querySelector(`[data-ratingstr="${id}"]`);

			if (this.ratingstr.id !== id)
				ratingstrTextEl.setAttribute("hidden",true);
			else
				ratingstrTextEl.removeAttribute("hidden");
		});
	}
}
/* --------------------------------------Ratind stat JS----------------------------------------- */
// $(document).ready(function() {
//   setTimeout(function() {
    // $("#over_all_rating").val();
    var overrating = $("#over_all_rating").text();
    // alert(overrating)
    var rating1 = overrating;
    rateStyle(rating1, 'parent1');
    // javascript
    function rateStyle(num, divID) {
        var ratingRounded = Math.floor(num);
        var starArray = document.getElementById(divID).querySelectorAll(".star-over");
    for (var i = 0; i < ratingRounded; i++) {
        starArray[i].classList.add("star-visible");
    }
    var finalStar = Math.round((num-ratingRounded)*100);
    if (finalStar != 0) {
    starArray[ratingRounded].classList.add("star-visible");
    starArray[ratingRounded].style.width=finalStar+"%";
    }
    }
//   }, 5000);
// });


</script>
@endsection
