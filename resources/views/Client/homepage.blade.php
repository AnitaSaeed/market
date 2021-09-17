@extends('Client.Layout.master')

@section('content')
    <main class="main">
        <div class="intro-section bg-lighter pt-5 pb-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="intro-slider-container slider-container-ratio slider-container-1 mb-2 mb-lg-0">
                            <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside"
                                 data-toggle="owl" data-owl-options='{
                                        "nav": false,
                                        "rtl": true,
                            "responsive": {
                                            "768": {
                                                "nav": true
                                            }
                                        }
                                    }'>
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)"
                                                    srcset="assets/images/slider/slide-1-480w.jpg">
                                            <img src="/client/images/slider/slide-1.jpg" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">مجموعه پر فروش</h3>
                                        <!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">مبلمان<br>اتاق نشیمن</h1>
                                        <!-- End .intro-title -->

                                        <a href="category.html" class="btn btn-outline-white">
                                            <i class="icon-long-arrow-left"></i>
                                            <span>خرید</span>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)"
                                                    srcset="assets/images/slider/slide-2-480w.jpg">
                                            <img src="/client/images/slider/slide-2.jpg" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">اخبار و اطلاعیه</h3>
                                        <!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">کالاهای جدید</h1><!-- End .intro-title -->

                                        <a href="category.html" class="btn btn-outline-white">
                                            <i class="icon-long-arrow-left"></i>
                                            <span>خرید</span>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)"
                                                    srcset="assets/images/slider/slide-3-480w.jpg">
                                            <img src="/client/images/slider/slide-3.jpg" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">مبل بیرون از منزل</h3>
                                        <!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">مبلمان <br>بیرون از منزل</h1>
                                        <!-- End .intro-title -->

                                        <a href="category.html" class="btn btn-outline-white">
                                            <i class="icon-long-arrow-left"></i>
                                            <span>خرید</span>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->
                            </div><!-- End .intro-slider owl-carousel owl-simple -->

                            <span class="slider-loader"></span><!-- End .slider-loader -->
                        </div><!-- End .intro-slider-container -->
                    </div><!-- End .col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="intro-banners">
                            <div class="row row-sm">
                                <div class="col-md-6 col-lg-12">
                                    <div class="banner banner-display">
                                        <a href="#">
                                            <img src="/client/images/banners/home/intro/banner-1.jpg" alt="Banner">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-darkwhite"><a href="#">مبل راحتی</a>
                                            </h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">صندلی و مبل راحتی <br>تا
                                                    40% تخفیف</a></h3><!-- End .banner-title -->
                                            <a href="#" class="btn btn-outline-white banner-link">خرید<i
                                                    class="icon-long-arrow-left"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-6 col-lg-12 -->

                                <div class="col-md-6 col-lg-12">
                                    <div class="banner banner-display mb-0">
                                        <a href="#">
                                            <img src="/client/images/banners/home/intro/banner-2.jpg" alt="Banner">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-darkwhite"><a href="#">جدید در</a></h4>
                                            <!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">مجمعه بهترین
                                                    <br>روشنایی ها</a></h3><!-- End .banner-title -->
                                            <a href="#" class="btn btn-outline-white banner-link">خرید<i
                                                    class="icon-long-arrow-left"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-6 col-lg-12 -->
                            </div><!-- End .row row-sm -->
                        </div><!-- End .intro-banners -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->

                <div class="mb-6"></div><!-- End .mb-6 -->

                <div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
                            "nav": false,
                            "dots": false,
                            "margin": 30,
                            "loop": false,
                            "rtl": true,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1024": {
                                    "items":6
                                }
                            }
                        }'>
                    <a href="#" class="brand">
                        <img src="/client/images/brands/1.png" alt="نام برند">
                    </a>

                    <a href="#" class="brand">
                        <img src="/client/images/brands/2.png" alt="نام برند">
                    </a>

                    <a href="#" class="brand">
                        <img src="/client/images/brands/3.png" alt="نام برند">
                    </a>

                    <a href="#" class="brand">
                        <img src="/client/images/brands/4.png" alt="نام برند">
                    </a>

                    <a href="#" class="brand">
                        <img src="/client/images/brands/5.png" alt="نام برند">
                    </a>

                    <a href="#" class="brand">
                        <img src="/client/images/brands/6.png" alt="نام برند">
                    </a>
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .bg-lighter -->

        <div class="mb-6"></div><!-- End .mb-6 -->

        <div class="container">
            <div class="heading heading-center mb-3">
                <h2 class="title-lg">شگفت انگیز ها</h2><!-- End .title -->

            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel"
                     aria-labelledby="trendy-all-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                         data-toggle="owl" data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "rtl": true,
                            "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                        @foreach($amazingProducts as $product)
                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="/front/product/{{$product->id}}">
                                    @if(isset($product->images()->first()->id))
                                    <img style="height: 270px" src="{{url($product->images()->first()->image)}}" alt="تصویر محصول"
                                         class="product-image">
                                    @endif
                                    @php
                                    $img= $product->images()->get();

                                    @endphp
                                    @if(isset($img[1]->id))
                                    <img style="height: 270px" src="{{url($img[1]->image)}}" alt="تصویر محصول"
                                         class="product-image-hover">
                                    @endif
                                </a>


                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="/front/product/{{$product->id}}">{{$product->title}}
                                    </a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    {{$product->price}} تومان
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">

                                <a href="/cart/{{$product->id}}" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->
                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->

            </div><!-- End .tab-content -->
        </div><!-- End .container -->
        <div class="container">
            <div class="heading heading-center mb-3">
                <h2 class="title-lg">پیشنهاد های ما</h2><!-- End .title -->

            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel"
                     aria-labelledby="trendy-all-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                         data-toggle="owl" data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "rtl": true,
                            "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                        @foreach($offerProducts as $product)
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="/front/product/{{$product->id}}">
                                        @if(isset($product->images()->first()->id))
                                            <img style="height: 270px" src="{{url($product->images()->first()->image)}}" alt="تصویر محصول"
                                                 class="product-image">
                                        @endif
                                        @php
                                            $img= $product->images()->get();

                                        @endphp
                                        @if(isset($img[1]->id))
                                            <img style="height: 270px" src="{{url($img[1]->image)}}" alt="تصویر محصول"
                                                 class="product-image-hover">
                                        @endif
                                    </a>


                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title text-center"><a href="/front/product/{{$product->id}}">{{$product->title}}
                                        </a>
                                    </h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        {{$product->price}} تومان
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">

                                    <a href="/cart/{{$product->id}}" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->

            </div><!-- End .tab-content -->
        </div><!-- End .container -->




        <div class="mb-5"></div><!-- End .mb-6 -->


        <div class="container">
            <div class="heading heading-center mb-6">
                <h2 class="title text-center">محصولات جدید</h2><!-- End .title -->


            </div><!-- End .heading -->

            <div class="tab-content">

                    <div class="products">
                        <div class="row justify-content-center">
                            @foreach($newProducts as $product)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="/front/product/{{$product->id}}">
                                            @if(isset($product->images()->first()->id))
                                                <img style="height: 270px" src="{{url($product->images()->first()->image)}}" alt="تصویر محصول"
                                                     class="product-image">
                                            @endif
                                            @php
                                                $img= $product->images()->get();

                                            @endphp
                                            @if(isset($img[1]->id))
                                                <img style="height: 270px" src="{{url($img[1]->image)}}" alt="تصویر محصول"
                                                     class="product-image-hover">
                                            @endif
                                        </a>


                                    </figure><!-- End .product-media -->
                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="/front/product/{{$product->id}}">{{$product->title}}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            {{$product->price}}
                                        </div><!-- End .product-price -->


                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="/cart/{{$product->id}}" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            @endforeach

                        </div><!-- End .row -->
                    </div><!-- End .products -->


            </div><!-- End .tab-content -->

        </div><!-- End .container -->

        <div class="container">
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-rocket"></i>
                            </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">پرداخت و ارسال</h3><!-- End .icon-box-title -->
                            <p class="text-center">ارسال رایگان برای سفارشات بالای 50 هزار تومان</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-rotate-left"></i>
                            </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">بازگرداندن محصول</h3><!-- End .icon-box-title -->
                            <p class="text-center">ضمانت 100% بازگشت وجه</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-life-ring"></i>
                            </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">کیفیت پشتیبانی</h3><!-- End .icon-box-title -->
                            <p class="text-center">پشتیبانی آنلاین 24 ساعته و 7 روز هفته</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->
            </div><!-- End .row -->

            <div class="mb-2"></div><!-- End .mb-2 -->
        </div><!-- End .container -->


    </main><!-- End .main -->
    @endsection

