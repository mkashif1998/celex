@extends('layout.main-layout')
@push('Title')
<title>Cart</title>
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
                            <li class="breadcrumb-item active">Cart</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- Cart Area Start -->
<div class="cart-main-area pt-100px pb-100px">
    <div class="container">
        <h3 class="cart-page-title">Your cart items</h3>
        {{-- <h5 class="value123">ddddd</h5> --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total_price = 0 ?>
                                @foreach ($cart_view as $cart)
                                <?php
                                        $price  = $cart->addproduct->product_price * $cart->product_quantity;
                                        $total_price +=  $price;

                                ?>
                                <tr id="product_id{{ $cart->id }}">
                                    <td class="product-thumbnail">
                                        <a href="{{ url('/') }}/customer/product-details/{{ $cart->addproduct->id }}"><img class="img-responsive ml-3"
                                                src="{{url('/')}}/images/add-product/{{$cart->addproduct->product_image}}" alt="" /></a>
                                    </td>
                                    <td class="product-name"><a href="{{ url('/') }}/customer/product-details/{{ $cart->addproduct->id }}">{{$cart->addproduct->product_name}}</a></td>
                                    <td class="product-price-cart"><span class="amount">{{$cart->addproduct->product_price}}</td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus" onclick="getvalue({{ $cart->id }})">
                                            <input class="cart-plus-minus-box" id="qtybuttonvalue" type="text" name="qtybutton"
                                                value="{{$cart->product_quantity}}" />
                                        </div>
                                    </td>
                                    <td class="product-subtotal">{{$price}}</td>
                                    <td class="product-remove">
                                        <a href="{{ url('/') }}/customer/cart-item-delete/{{ $cart->id }}"><i class="ion-close"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
                <div class="row">
                    <div class=" col-md-12 mt-md-30px">
                        <form action="{{ url('/') }}/customer/cart-confirm/{{ $login_id }}" method="post">
                            @csrf
                            <div class="grand-totall">
                                <h4 class="grand-totall-title">Grand Total <span>${{ $total_price }}</span></h4>
                                <p class="text-center"><button type="submit" class="btn btn-color-dark btn-hover-color-primary w-25">Proceed to Checkout</button></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Area End -->



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
@section('script')
<script>
    //  $(document).ready(function(){
        function getvalue(id) {
            let inc_btn = $('#qtybuttonvalue').val();
            let prod_id = id;
            // alert(pro_id);

            $.ajax({
                url: '/customer/cart-quantity',
                type: 'post',
                dataType: 'json',
                cache: false,
                data: 'inc_btn='+inc_btn+ 'prod_id='+prod_id+'  &_token= {{ csrf_token() }}',
                success:function(response)
                {
                    console.log(response);
                }
            })
        }

    // });



</script>
@endsection
