@extends('layout.main-layout')
@push('Title')
<title>Product</title>
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
                            <li class="breadcrumb-item active">Shop</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- Shop Category pages -->
<div class="shop-category-area pb-100px pt-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                <!-- Shop Top Area Start -->
                <div class="shop-top-bar d-flex">
                    <!-- Left Side start -->
                    <p>There Are 17 Products.</p>
                    <!-- Left Side End -->
                    <!-- Right Side Start -->
                    <div class="select-shoing-wrap d-flex align-items-center">
                        <div class="shot-product">
                            <p>Sort By:</p>
                        </div>
                            <div class="shop-select">
                                {{-- class="shop-sort" --}}
                                <select class="" id="sortingdata" >
                                    <option value="0">Relevance</option>
                                    <option value="1">Name, A to Z</a></option>
                                    <option value="2"> Name, Z to A</option>
                                    <option value="3"> Price, low to high</option>
                                    <option value="4"> Price, high to low</option>
                                </select>
                            </div>
                    </div>
                    <!-- Right Side End -->
                </div>
                <!-- Shop Top Area End -->

                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area">

                    <div class="row" id="bodyData">
                        {{-- @foreach ($all_product as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="product mb-40px">
                                    <div class="thumb">
                                        <a href="{{ url('/') }}/customer/product-details/{{ $product->id }}"
                                            class="image">
                                            <img src="{{ asset('images/add-product/' . $product->product_image) }}"
                                                alt="Product">
                                        </a>
                                        <span class="badges">
                                            @if ($product->product_tag == 'New')
                                                <span class="new">{{ $product->product_tag }}</span>
                                            @elseif ($product->product_tag == 'Sale')
                                                <span class="sale">{{ $product->product_price_off . '%' }}</span>
                                            @elseif ($product->product_tag == 'Both')
                                                <span class="new">New</span>
                                                <span class="sale">{{ $product->product_price_off . '%' }}</span>
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
                                                href="{{ url('/') }}/customer/product-details/{{ $product->id }}">{{ $product->product_name }}</a>
                                        </h5>
                                        <span class="price">
                                            <?php
                                            $price_off = $product->product_price_off;
                                            if ($price_off != '') {
                                                $price = $product->product_price;
                                                $persent_price = ($price_off * $price) / 100;
                                                $new_price = $price - $persent_price;
                                            } else {
                                                $price_off = 0;
                                            }
                                            ?>
                                            @if ($price_off == 0)
                                                <span class="new">{{ '$' . $product->product_price }}</span>
                                            @else
                                                <span class="new">{{ '$' . $new_price }}</span>
                                                <span class="old">{{ '$' . $product->product_price }}</span>
                                            @endif

                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach --}}

                    </div>
                    <table class="table table-bordered table-sm">
                        <thead>
                         <tr>
                             <th>No</th>
                             <th>Name</th>
                             <th>email</th>
                             <th>Phone</th>
                             <th>City</th>
                             <th width="280px">Action</th>
                         </tr>
                        </thead>
                        <tbody >

                        </tbody>
                     </table>
                    <!--  Pagination Area Start -->
                    <div class="pro-pagination-style text-center mb-md-30px mb-lm-30px mt-30px" data-aos="fade-up">
                        <ul>
                            <li>
                                <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                            </li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li>
                                <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--  Pagination Area End -->
                </div>
                <!-- Shop Bottom Area End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                <div class="shop-sidebar-wrap">
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget">
                        <div class="main-heading">
                            <h3 class="sidebar-title">Category</h3>
                        </div>
                        <div class="sidebar-widget-category">
                            <ul id="mylist">
                                <li><a href="javascript:void(0);" id="" class="selected">All <span>(4)</span> </a></li>
                                <li><a href="javascript:void(0);" class="">Accesssories <span>(3)</span> </a></li>
                                <li><a href="javascript:void(0);" class="">Automation <span>(5)</span> </a></li>
                                <li><a href="javascript:void(0);" class="">Boxes <span>(2)</span> </a></li>
                                <li><a href="javascript:void(0);" class="">Sensore <span>(6)</span> </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget-group">
                        <h3 class="sidebar-title">Filter By</h3>
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Price</h4>
                            <div class="price-filter">
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" class="p-0 h-auto lh-1" name="price"
                                        placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title mt-30px">Size</h4>
                            <div class="sidebar-widget-list">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" /> <a href="#">Large <span>(4)</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">Medium
                                                <span>(4)</span></a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">Small <span>(4)</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">Extra
                                                Large<span>(4)</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget no-cba">
                            <h4 class="pro-sidebar-title">Colour</h4>
                            <div class="sidebar-widget-list">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" /> <a href="#">Grey<span>(2)</span> </a>
                                            <span class="checkmark grey"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">White<span>(4)</span></a>
                                            <span class="checkmark white"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">Black<span>(4)</span>
                                            </a>
                                            <span class="checkmark black"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">Camel<span>(4)</span>
                                            </a>
                                            <span class="checkmark camel"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Brand</h4>
                            <div class="sidebar-widget-list">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" /> <a href="#">Studio Design<span>(10)</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value="" /> <a href="#">Graphic
                                                Corner<span>(7)</span></a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget tag">
                        <div class="main-heading">
                            <h3 class="sidebar-title mt-3">Tags</h3>
                        </div>
                        <div class="sidebar-widget-tag">
                            <ul>
                                <li><a href="#">All</a></li>
                                <li><a href="#">eBooks</a></li>
                                <li><a href="#">Video</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Digital </a></li>
                                <li><a href="#">Audio & music</a></li>
                                <li><a href="#">Photography</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>


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
    $(document).ready(function(){
        var a = document.getElementById('mylist').getElementsByTagName('li');
        var productcategory = "";
        for(var i = 0; i < a.length; i++){
            a[i].onclick = function(){
                    // alert(this.innerText);
                    productcategory = this.innerText;
            }
        }
        $('#sortingdata').on('change', function() {
            let sorting = $(this).val();
            alert(productcategory);



            $.ajax({
                url: '/customer/product',
                type: 'post',
                dataType: 'json',
                cache: false,
                data: 'sorting='+sorting+ ' category='+productcategory+ ' &_token= {{ csrf_token() }}',
                success:function(response)
                {
                    // alert(JSON.stringify(response));
                    var resultData = response.search_product;
                    var bodyData = "";
                    var i=1;
                    if(bodyData=="")
                    {
                        $.each(resultData,function(index,s_product){
                        // alert(JSON.stringify(s_product.id));
                        // $("#id").val(s_product.id);
                        // $('.cart_item').remove();

                        // bodyData+="<tr>"+"<td>"+ i++ +"</td><td>"+s_product.product_name+"</td><td>"+s_product.product_tag+"</td><td>"+s_product.product_tag+"</td>"
                        // +"<td>"+s_product.product_tag+"</td><td><a class='btn btn-primary' href=''>Edit</a>"
                        // +"<button class='btn btn-danger delete' value='"+s_product.id+"' style='margin-left:20px;'>Delete</button></td>"+"</tr>";
                        bodyData+=`
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="200" style="border:1px solid red">
                                <div class="product mb-40px">
                                    <div class="thumb">
                                        <a href="#"
                                            class="image">
                                            <img src=""
                                                alt="Product">
                                        </a>
                                        <span class="badges">
                                                <span class="new">New</span>
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
                                                href="#">s_product.product_name</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">price</span>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        `;
                        })
                        $("#bodyData").html(bodyData);
                    }

                }
            })
        });
    });
</script>
@endsection
