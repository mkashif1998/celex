@extends('layout.main-layout')
@push('Title')
<title>Sign in / Sign up</title>
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
                            <li class="breadcrumb-item active">Login</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- login area start -->
<div class="login-register-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 mx-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4>login</h4>
                        </a>
                        <a class="" data-bs-toggle="tab" href="#lg2">
                            <h4>register</h4>
                        </a>
                    </div>
                    <div class="tab-content ">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="{{url('/')}}/customer/login" method="post">
                                        @if (Session::has('Successlogin'))
                                        <div class="alert alert-success">{{Session::get('Successlogin')}}</div>
                                        @endif
                                        @if (Session::has('Faillogin'))
                                        <div class="alert alert-danger">{{Session::get('Faillogin')}}</div>
                                        @endif
                                        @if (Session::has('Failpass'))
                                        <div class="alert alert-danger">{{Session::get('Failpass')}}</div>
                                        @endif
                                        @csrf
                                        <input type="email" name="login_email" placeholder="Emial" />
                                        <span class="text-danger pb-3">
                                            @error('login_email')
                                                {{$message}}
                                            @enderror
                                        </span>
                                        <input type="password" name="login_password" placeholder="Password" />
                                        <span class="text-danger pb-3">
                                            @error('login_password')
                                                {{$message}}
                                            @enderror
                                        </span>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" />
                                                <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button type="submit"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane ">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="{{url('/')}}/customer/register" method="post">
                                        @if (Session::has('Successreg'))
                                            <div class="alert alert-success"> {{Session::get('Successreg')}}</div>
                                        @endif
                                        @if (Session::has('Failreg'))
                                            <div class="alert alert-danger">{{Session::get('Failreg')}}</div>
                                        @endif

                                        @csrf
                                        <input type="text" name="user_name" placeholder="Username" />
                                        <span class="text-danger pb-3">
                                            @error('user_name')
                                                {{$message}}
                                            @enderror
                                        </span>
                                        <input type="email" class="mt-3" name="user_email" placeholder="Email"  />
                                        <span class="text-danger pb-3">
                                            @error('user_email')
                                                {{$message}}
                                            @enderror
                                        </span>
                                        <input type="password" class="mt-3" name="user_password" placeholder="Password" />
                                        <span class="text-danger pb-3">
                                            @error('user_password')
                                                {{$message}}
                                            @enderror
                                        </span>
                                        <input type="password" class="mt-3" name="confirm_password" placeholder="Confirm Password" />
                                        <span class="text-danger pb-3">
                                            @error('confirm_password')
                                                {{$message}}
                                            @enderror
                                        </span>
                                        <div class="button-box mt-3">
                                            <button type="submit"><span>Register</span></button>
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
<!-- login area end -->

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
