<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/tm/celex/celex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Aug 2022 05:20:05 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    @stack('Title')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Add site Favicon -->
    <link rel="icon" href="{{url('/')}}/images/favicon/favicon.png" sizes="32x32" />
    <link rel="icon" href="{{url('/')}}/images/favicon/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{url('/')}}/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="{{url('/')}}/images/favicon/favicon.png" />

     <!-- Main Style -->
    <link rel="stylesheet" href="{{url('/')}}/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/css/style.min.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    @yield('CSSStyle')
</head>

<body>
    <!-- Header Area start  -->
    <div class="header section">
        <!-- Header Top Message Start -->
        <div class="header-top section-fluid bg-white border-bottom">
            <div class="container">
                <div class="row row-cols-xl-3 row-cols-lg-auto justify-content-lg-between align-items-center">
                    <!-- Header Top Message Start -->
                    <div class="col text-center text-lg-left">
                        <div
                            class="header-top-massege justify-content-center justify-content-lg-start d-flex align-items-center">
                            <img src="{{url('/')}}/images/icons/phone.png" alt="">
                            <p> Call Us :<a href="tel:+0123456789"> +0123456789</a></p>
                        </div>
                    </div>
                    <!-- Header Top Message End -->
                    <!-- Header Top Search Start -->
                    @yield("product-search")
                    <!-- Header Top Search End -->
                    <!-- Header Top Language Currency -->
                    <div class="col d-none d-lg-block">
                        <div class="header-top-set-lan-curr d-flex justify-content-end">
                            <!-- Single Wedge Start -->
                            <div class="header-top-curr dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"> Language : (ENG) <i
                                        class="ion-ios-arrow-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Italiano</a></li>
                                    <li><a class="dropdown-item" href="#">Français</a></li>
                                    <li><a class="dropdown-item" href="#">Filipino</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge End -->
                            <!-- Single Wedge Start -->
                            <div class="header-top-curr dropdown">
                                <button class="dropdown-toggle pe-0 border-0" data-bs-toggle="dropdown">Currency : (USD)
                                    <i class="ion-ios-arrow-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#">USD $</a></li>
                                    <li><a class="dropdown-item" href="#">EUR €</a></li>
                                    <li><a class="dropdown-item" href="#">POUND $</a></li>
                                    <li><a class="dropdown-item" href="#">FRANC ₣</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge End -->
                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                </div>
            </div>
        </div>
        <!-- Header Top  End -->
        <!-- Header Bottom  Start -->
        <div class="header-bottom d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row justify-content-between align-items-center">
                    <!-- Header Logo Start -->
                    <div class="col-lg-2">
                        <div class="header-logo">
                            <a href="{{url('/')}}"><img src="{{url('/')}}/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->
                    <!-- Header Menu Start -->
                    <div class="col-lg-8">
                        <div class="main-menu manu-color-white">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/')}}/customer/product">Shop</a></li>
                                <li><a href="{{url('/')}}/customer/blog">Blog</a></li>
                                <li><a href="{{url('/')}}/customer/contact-us">Contact us</a></li>
                                <li><a href="{{url('/')}}/customer/about-us">About us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Menu End -->
                    <!-- Header Action Start -->
                    <div class="col-lg-2">
                        <div class="header-actions">
                            <!-- Single Wedge Start -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="fa fa-cog"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="{{url('/')}}/customer/my-account">My account</a></li>
                                    <li><a class="dropdown-item" href="{{url('/')}}/admin/products-view">Product Setting</a></li>
                                    <li><a class="dropdown-item" href="{{url('/')}}/admin/slider">Slider Setting</a></li>
                                    <li><a class="dropdown-item" href="{{url('/')}}/customer/checkout">Checkout</a></li>
                                    <li><a class="dropdown-item" href="{{url('/')}}/customer/cart">Cart</a></li>
                                    <li><a class="dropdown-item" href="{{url('/')}}/customer/sign-in">Sign in</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-wishlist"
                                class="header-action-btn header-action-btn-cart offcanvas-toggle ">
                                <i class="fa fa-heart"></i>
                                <span class="header-action-num">3</span>
                            </a>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart"
                                class="header-action-btn header-action-btn-cart offcanvas-toggle pe-0">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="header-action-num">3</span>
                            </a>
                            <a href="#offcanvas-mobile-menu"
                                class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom  End -->
        <!-- Header Bottom  Start -->
        <div class="header-bottom d-lg-none sticky-nav bg-white">
            <div class="container">
                <div class="row align-self-center">
                    <!-- Header Logo Start -->
                    <div class="col align-self-center">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{url('/')}}/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->
                    <!-- Header Action Start -->
                    <div class="col align-self-center">
                        <div class="header-actions">
                            <!-- Single Wedge Start -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="fa fa-cog"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.html">Sign in</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-wishlist"
                                class="header-action-btn header-action-btn-cart offcanvas-toggle ">
                                <i class="fa fa-heart"></i>
                                <span class="header-action-num">3</span>
                            </a>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart"
                                class="header-action-btn header-action-btn-cart offcanvas-toggle pe-0">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="header-action-num">3</span>
                                <!-- <span class="cart-amount">$30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu"
                                class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom  End -->
    </div>
    <!-- Header Area End  -->



    <!-- Header Top Search Start -->
    <div class="d-block d-lg-none mb-5">
        <div class="container">
            <div class="dropdown_search">
                <form class="action-form" action="#">
                    <input class="form-control" placeholder="Search Your Products" type="text">
                    <button class="submit" type="submit"><i class="ion-ios-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Header Top Search End -->


    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="{{url('/')}}/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{url('/')}}/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{url('/')}}/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="{{url('/')}}/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{url('/')}}/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{url('/')}}/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$23.30</td>
                            </tr>
                            <tr>
                                <td class="text-left">Eco Tax (-2.00) :</td>
                                <td class="text-right">$4.52</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$5.66</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right theme-color">$33.48</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="buttons">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-6">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>
        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Product Single</a></li>
                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                    <li><a href="single-product-group.html">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                    </li>
                                    <li><a href="single-product-gallery-right.html">Product Gallery Right</a>
                                    </li>
                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Other Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>

                            <li><a href="faq.html">Faq Page</a></li>
                            <li><a href="thank-you-page.html">Thank You Page</a></li>
                            <li><a href="coming-soon.html">Coming Soon Page</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span class="menu-text">Blog Grid</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog List</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                    <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->

            <!-- Language Currency start -->
            <div class="offcanvas-userpanel mt-8">
                <ul>
                    <!-- Language Start -->
                    <li class="offcanvas-userpanel__role">
                        <a href="#">English <i class="ion-ios-arrow-down"></i></a>
                        <ul class="user-sub-menu">
                            <li><a class="current" href="#">English</a></li>
                            <li><a href="#"> Italiano</a></li>
                            <li><a href="#"> Français</a></li>
                            <li><a href="#"> Filipino</a></li>
                        </ul>
                    </li>
                    <!-- Language End -->
                    <!-- Currency Start -->
                    <li class="offcanvas-userpanel__role">
                        <a href="#">USD $ <i class="ion-ios-arrow-down"></i></a>
                        <ul class="user-sub-menu">
                            <li><a class="current" href="#">USD $</a></li>
                            <li><a href="#">EUR €</a></li>
                            <li><a href="#">POUND $</a></li>
                            <li><a href="#">FRANC ₣</a></li>
                        </ul>
                    </li>
                    <!-- Currency End -->
                </ul>
            </div>
            <!-- Language Currency End -->
            <div class="offcanvas-social mt-auto">
                <ul>
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
                        <a href="#"><i class="ion-social-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->


    <div class="offcanvas-overlay"></div>
