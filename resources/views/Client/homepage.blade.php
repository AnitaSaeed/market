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
                <h2 class="title-lg">محصولات برتر</h2><!-- End .title -->

                <ul class="nav nav-pills justify-content-center" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active" id="trendy-all-link" data-toggle="tab" href="#trendy-all-tab"
                           role="tab" aria-controls="trendy-all-tab" aria-selected="true">همه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="trendy-fur-link" data-toggle="tab" href="#trendy-fur-tab" role="tab"
                           aria-controls="trendy-fur-tab" aria-selected="false">مبل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="trendy-decor-link" data-toggle="tab" href="#trendy-decor-tab"
                           role="tab" aria-controls="trendy-decor-tab" aria-selected="false">دکور</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="trendy-light-link" data-toggle="tab" href="#trendy-light-tab"
                           role="tab" aria-controls="trendy-light-tab" aria-selected="false">روشنایی</a>
                    </li>
                </ul>
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
                        @foreach($products as $product)
                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="/client/images/demos/demo-2/products/product-1-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="/client/images/demos/demo-2/products/product-1-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">{{$product->titlep}}
                                    </a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    251,000 تومان
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->
                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
{{--                <div class="tab-pane p-0 fade" id="trendy-fur-tab" role="tabpanel"--}}
{{--                     aria-labelledby="trendy-fur-link">--}}
{{--                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"--}}
{{--                         data-toggle="owl" data-owl-options='{--}}
{{--                                "nav": false,--}}
{{--                                "dots": true,--}}
{{--                                "margin": 20,--}}
{{--                                "loop": false,--}}
{{--                                "rtl": true,--}}
{{--                            "responsive": {--}}
{{--                                    "0": {--}}
{{--                                        "items":2--}}
{{--                                    },--}}
{{--                                    "480": {--}}
{{--                                        "items":2--}}
{{--                                    },--}}
{{--                                    "768": {--}}
{{--                                        "items":3--}}
{{--                                    },--}}
{{--                                    "992": {--}}
{{--                                        "items":4--}}
{{--                                    },--}}
{{--                                    "1200": {--}}
{{--                                        "items":4,--}}
{{--                                        "nav": true,--}}
{{--                                        "dots": false--}}
{{--                                    }--}}
{{--                                }--}}
{{--                            }'>--}}
{{--                        <div class="product product-11 text-center">--}}
{{--                            <figure class="product-media">--}}
{{--                                <span class="product-label label-new">جدید</span>--}}
{{--                                <a href="product.html">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-3-1.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-3-2.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image-hover">--}}
{{--                                </a>--}}

{{--                                <div class="product-action-vertical">--}}
{{--                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به--}}
{{--                                                لیست علاقه مندی</span></a>--}}
{{--                                </div><!-- End .product-action-vertical -->--}}

{{--                            </figure><!-- End .product-media -->--}}

{{--                            <div class="product-body">--}}
{{--                                <h3 class="product-title text-center"><a href="product.html">صندلی راحتی جدید--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <!-- End .product-title -->--}}
{{--                                <div class="product-price">--}}
{{--                                    970,000 تومان--}}
{{--                                </div><!-- End .product-price -->--}}
{{--                            </div><!-- End .product-body -->--}}
{{--                            <div class="product-action">--}}
{{--                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>--}}
{{--                            </div><!-- End .product-action -->--}}
{{--                        </div><!-- End .product -->--}}

{{--                        <div class="product product-11 text-center">--}}
{{--                            <figure class="product-media">--}}
{{--                                <span class="product-label label-sale">30% تخفیف</span>--}}
{{--                                <a href="product.html">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-4-1.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-4-2.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image-hover">--}}
{{--                                </a>--}}

{{--                                <div class="product-action-vertical">--}}
{{--                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به--}}
{{--                                                لیست علاقه مندی</span></a>--}}
{{--                                </div><!-- End .product-action-vertical -->--}}

{{--                            </figure><!-- End .product-media -->--}}

{{--                            <div class="product-body">--}}
{{--                                <h3 class="product-title text-center"><a href="product.html">مبل تخت خواب شو</a>--}}
{{--                                </h3>--}}
{{--                                <!-- End .product-title -->--}}
{{--                                <div class="product-price">--}}
{{--                                    <span class="new-price">337,000 تومان</span>--}}
{{--                                    <span class="old-price">449,000</span>--}}
{{--                                </div><!-- End .product-price -->--}}

{{--                                <div class="product-nav product-nav-dots">--}}
{{--                                    <a href="#" class="active" style="background: #878883;"><span--}}
{{--                                            class="sr-only">نام رنگ</span></a>--}}
{{--                                    <a href="#" style="background: #dfd5c2;"><span class="sr-only">نام--}}
{{--                                                رنگ</span></a>--}}
{{--                                </div><!-- End .product-nav -->--}}
{{--                            </div><!-- End .product-body -->--}}
{{--                            <div class="product-action">--}}
{{--                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>--}}
{{--                            </div><!-- End .product-action -->--}}
{{--                        </div><!-- End .product -->--}}
{{--                    </div><!-- End .owl-carousel -->--}}
{{--                </div><!-- .End .tab-pane -->--}}
{{--                <div class="tab-pane p-0 fade" id="trendy-decor-tab" role="tabpanel"--}}
{{--                     aria-labelledby="trendy-decor-link">--}}
{{--                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"--}}
{{--                         data-toggle="owl" data-owl-options='{--}}
{{--                                "nav": false,--}}
{{--                                "dots": true,--}}
{{--                                "margin": 20,--}}
{{--                                "loop": false,--}}
{{--                                "rtl": true,--}}
{{--                            "responsive": {--}}
{{--                                    "0": {--}}
{{--                                        "items":2--}}
{{--                                    },--}}
{{--                                    "480": {--}}
{{--                                        "items":2--}}
{{--                                    },--}}
{{--                                    "768": {--}}
{{--                                        "items":3--}}
{{--                                    },--}}
{{--                                    "992": {--}}
{{--                                        "items":4--}}
{{--                                    },--}}
{{--                                    "1200": {--}}
{{--                                        "items":4,--}}
{{--                                        "nav": true,--}}
{{--                                        "dots": false--}}
{{--                                    }--}}
{{--                                }--}}
{{--                            }'>--}}
{{--                        <div class="product product-11 text-center">--}}
{{--                            <figure class="product-media">--}}
{{--                                <a href="product.html">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-1-1.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-1-2.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image-hover">--}}
{{--                                </a>--}}

{{--                                <div class="product-action-vertical">--}}
{{--                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به--}}
{{--                                                لیست علاقه مندی</span></a>--}}
{{--                                </div><!-- End .product-action-vertical -->--}}
{{--                            </figure><!-- End .product-media -->--}}

{{--                            <div class="product-body">--}}
{{--                                <h3 class="product-title text-center"><a href="product.html">چهارپایه چوبی--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <!-- End .product-title -->--}}
{{--                                <div class="product-price">--}}
{{--                                    251,000 تومان--}}
{{--                                </div><!-- End .product-price -->--}}
{{--                            </div><!-- End .product-body -->--}}
{{--                            <div class="product-action">--}}
{{--                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>--}}
{{--                            </div><!-- End .product-action -->--}}
{{--                        </div><!-- End .product -->--}}
{{--                        <div class="product product-11 text-center">--}}
{{--                            <figure class="product-media">--}}
{{--                                <a href="product.html">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-6-1.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-6-2.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image-hover">--}}
{{--                                </a>--}}

{{--                                <div class="product-action-vertical">--}}
{{--                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به--}}
{{--                                                لیست علاقه مندی</span></a>--}}
{{--                                </div><!-- End .product-action-vertical -->--}}

{{--                            </figure><!-- End .product-media -->--}}

{{--                            <div class="product-body">--}}
{{--                                <h3 class="product-title text-center"><a href="product.html">صندلی پلاستیکی--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <!-- End .product-title -->--}}
{{--                                <div class="product-price">--}}
{{--                                    457,000 تومان--}}
{{--                                </div><!-- End .product-price -->--}}
{{--                            </div><!-- End .product-body -->--}}
{{--                            <div class="product-action">--}}
{{--                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>--}}
{{--                            </div><!-- End .product-action -->--}}
{{--                        </div><!-- End .product -->--}}
{{--                    </div><!-- End .owl-carousel -->--}}
{{--                </div><!-- .End .tab-pane -->--}}
{{--                <div class="tab-pane p-0 fade" id="trendy-light-tab" role="tabpanel"--}}
{{--                     aria-labelledby="trendy-light-link">--}}
{{--                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"--}}
{{--                         data-toggle="owl" data-owl-options='{--}}
{{--                                "nav": false,--}}
{{--                                "dots": true,--}}
{{--                                "margin": 20,--}}
{{--                                "loop": false,--}}
{{--                                "rtl": true,--}}
{{--                            "responsive": {--}}
{{--                                    "0": {--}}
{{--                                        "items":2--}}
{{--                                    },--}}
{{--                                    "480": {--}}
{{--                                        "items":2--}}
{{--                                    },--}}
{{--                                    "768": {--}}
{{--                                        "items":3--}}
{{--                                    },--}}
{{--                                    "992": {--}}
{{--                                        "items":4--}}
{{--                                    },--}}
{{--                                    "1200": {--}}
{{--                                        "items":4,--}}
{{--                                        "nav": true,--}}
{{--                                        "dots": false--}}
{{--                                    }--}}
{{--                                }--}}
{{--                            }'>--}}
{{--                        <div class="product product-11 text-center">--}}
{{--                            <figure class="product-media">--}}
{{--                                <a href="product.html">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-2-1.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-2-2.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image-hover">--}}
{{--                                </a>--}}

{{--                                <div class="product-action-vertical">--}}
{{--                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به--}}
{{--                                                لیست علاقه مندی</span></a>--}}
{{--                                </div><!-- End .product-action-vertical -->--}}
{{--                            </figure><!-- End .product-media -->--}}

{{--                            <div class="product-body">--}}
{{--                                <h3 class="product-title text-center"><a href="product.html">چراغ روشنایی اوکتو--}}
{{--                                        4240</a></h3>--}}
{{--                                <!-- End .product-title -->--}}
{{--                                <div class="product-price">--}}
{{--                                    746,000 تومان--}}
{{--                                </div><!-- End .product-price -->--}}

{{--                                <div class="product-nav product-nav-dots">--}}
{{--                                    <a href="#" class="active" style="background: #1f1e18;"><span--}}
{{--                                            class="sr-only">نام رنگ</span></a>--}}
{{--                                    <a href="#" style="background: #e8e8e8;"><span class="sr-only">نام--}}
{{--                                                رنگ</span></a>--}}
{{--                                </div><!-- End .product-nav -->--}}
{{--                            </div><!-- End .product-body -->--}}
{{--                            <div class="product-action">--}}
{{--                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>--}}
{{--                            </div><!-- End .product-action -->--}}
{{--                        </div><!-- End .product -->--}}
{{--                        <div class="product product-11 text-center">--}}
{{--                            <figure class="product-media">--}}
{{--                                <a href="product.html">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-5-1.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image">--}}
{{--                                    <img src="/client/images/demos/demo-2/products/product-5-2.jpg" alt="تصویر محصول"--}}
{{--                                         class="product-image-hover">--}}
{{--                                </a>--}}

{{--                                <div class="product-action-vertical">--}}
{{--                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به--}}
{{--                                                لیست علاقه مندی</span></a>--}}
{{--                                </div><!-- End .product-action-vertical -->--}}

{{--                            </figure><!-- End .product-media -->--}}

{{--                            <div class="product-body">--}}
{{--                                <h3 class="product-title text-center"><a href="product.html">چراغ رومیزی زیبا</a>--}}
{{--                                </h3>--}}
{{--                                <!-- End .product-title -->--}}
{{--                                <div class="product-price">--}}
{{--                                    675,000 تومان--}}
{{--                                </div><!-- End .product-price -->--}}

{{--                                <div class="product-nav product-nav-dots">--}}
{{--                                    <a href="#" class="active" style="background: #74543e;"><span--}}
{{--                                            class="sr-only">نام رنگ</span></a>--}}
{{--                                    <a href="#" style="background: #e8e8e8;"><span class="sr-only">نام--}}
{{--                                                رنگ</span></a>--}}
{{--                                </div><!-- End .product-nav -->--}}
{{--                            </div><!-- End .product-body -->--}}
{{--                            <div class="product-action">--}}
{{--                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>--}}
{{--                            </div><!-- End .product-action -->--}}
{{--                        </div><!-- End .product -->--}}
{{--                    </div><!-- End .owl-carousel -->--}}
{{--                </div><!-- .End .tab-pane -->--}}
            </div><!-- End .tab-content -->
        </div><!-- End .container -->

        <div class="container categories pt-6">
            <h2 class="title-lg text-center mb-4">دسته بندی ها</h2><!-- End .title-lg text-center -->

            <div class="row">
                <div class="col-6 col-lg-4">
                    <div class="banner banner-display banner-link-anim">
                        <a href="#">
                            <img src="/client/images/banners/home/banner-1.jpg" alt="بنر">
                        </a>

                        <div class="banner-content banner-content-center">
                            <h3 class="banner-title text-white text-center"><a href="#">بیرون از منزل</a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="btn btn-outline-white banner-link">خرید<i
                                    class="icon-long-arrow-left"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-sm-6 col-lg-3 -->
                <div class="col-6 col-lg-4 order-lg-last">
                    <div class="banner banner-display banner-link-anim">
                        <a href="#">
                            <img src="/client/images/banners/home/banner-4.jpg" alt="بنر">
                        </a>

                        <div class="banner-content banner-content-center">
                            <h3 class="banner-title text-white text-center"><a href="#">روشنایی</a></h3>
                            <!-- End .banner-title -->
                            <a href="#" class="btn btn-outline-white banner-link">خرید<i
                                    class="icon-long-arrow-left"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-sm-6 col-lg-3 -->
                <div class="col-sm-12 col-lg-4 banners-sm">
                    <div class="row">
                        <div class="banner banner-display banner-link-anim col-lg-12 col-6">
                            <a href="#">
                                <img src="/client/images/banners/home/banner-2.jpg" alt="بنر">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-title text-white text-center"><a href="#">مبلمان و طراحی</a></h3>
                                <!-- End .banner-title -->
                                <a href="#" class="btn btn-outline-white banner-link">خرید<i
                                        class="icon-long-arrow-left"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->

                        <div class="banner banner-display banner-link-anim col-lg-12 col-6">
                            <a href="#">
                                <img src="/client/images/banners/home/banner-3.jpg" alt="بنر">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-title text-white text-center"><a href="#">آشپزخانه و ظروف</a></h3>
                                <!-- End .banner-title -->
                                <a href="#" class="btn btn-outline-white banner-link">خرید<i
                                        class="icon-long-arrow-left"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div>
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-5"></div><!-- End .mb-6 -->


        <div class="container">
            <div class="heading heading-center mb-6">
                <h2 class="title text-center">محصولات جدید</h2><!-- End .title -->

                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab"
                           role="tab" aria-controls="top-all-tab" aria-selected="true">همه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab" role="tab"
                           aria-controls="top-fur-tab" aria-selected="false">مبل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-decor-link" data-toggle="tab" href="#top-decor-tab" role="tab"
                           aria-controls="top-decor-tab" aria-selected="false">دکور</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-light-link" data-toggle="tab" href="#top-light-tab" role="tab"
                           aria-controls="top-light-tab" aria-selected="false">روشنایی</a>
                    </li>
                </ul>
            </div><!-- End .heading -->

            <div class="tab-content">
                <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel"
                     aria-labelledby="top-all-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-12-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-12-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">میز چرخ دار
                                                متحرک</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            229,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">نام رنگ</span></a>
                                            <a href="#" style="background: #e8e8e8;"><span class="sr-only">نام
                                                        رنگ</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-10-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-10-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">لامپ سقفی</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            892,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #e8e8e8;"><span
                                                    class="sr-only">نام رنگ</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">نام
                                                        رنگ</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">جدید</span>
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-9-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-9-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">صندلی راحتی
                                                باغ</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            94,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-8-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-8-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">نگه دارنده
                                                هیزم</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            104,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">نام رنگ</span></a>
                                            <a href="#" style="background: #927764;"><span class="sr-only">نام
                                                        رنگ</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-11-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-11-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">صندلی بین
                                                بگ</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            259,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-13-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-13-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">مبل 2 نفره </a>
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            999,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-14-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-14-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">صندلی پشت
                                                دار</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            984,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #999999;"><span
                                                    class="sr-only">نام رنگ</span></a>
                                            <a href="#" style="background: #cc9999;"><span class="sr-only">نام
                                                        رنگ</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">جدید</span>
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-16-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-16-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">دکور</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">روشنایی 3
                                                تیکه</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            199,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-fur-tab" role="tabpanel" aria-labelledby="top-fur-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">جدید</span>
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-9-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-9-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">صندلی راحتی
                                                باغ</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            94,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-12-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-12-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">میز چرخ دار
                                                متحرک</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            229,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">نام رنگ</span></a>
                                            <a href="#" style="background: #e8e8e8;"><span class="sr-only">نام
                                                        رنگ</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-13-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-13-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">مبل 2 </a>
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            999,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-decor-tab" role="tabpanel" aria-labelledby="top-decor-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-8-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-8-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">نگه دارنده
                                                هیزم</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            104,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">نام رنگ</span></a>
                                            <a href="#" style="background: #927764;"><span class="sr-only">نام
                                                        رنگ</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-11-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-11-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">صندلی بین
                                                بگ</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            259,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-14-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-14-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">صندلی پشت
                                                دار</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            984,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #999999;"><span
                                                    class="sr-only">نام رنگ</span></a>
                                            <a href="#" style="background: #cc9999;"><span class="sr-only">نام
                                                        رنگ</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-light-tab" role="tabpanel" aria-labelledby="top-light-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-10-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-10-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title text-center"><a href="product.html">لامپ سقفی</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            892,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #e8e8e8;"><span
                                                    class="sr-only">نام رنگ</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">نام
                                                        رنگ</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">جدید</span>
                                        <a href="product.html">
                                            <img src="/client/images/demos/demo-2/products/product-16-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="/client/images/demos/demo-2/products/product-16-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">دکور</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">روشنایی 3
                                                تیکه</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            199,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
            <div class="more-container text-center">
                <a href="#" class="btn btn-outline-darker btn-more"><span>محصولات بیشتر</span><i
                        class="icon-long-arrow-down"></i></a>
            </div><!-- End .more-container -->
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
        <div class="blog-posts pt-7 pb-7" style="background-color: #fafafa;">
            <div class="container">
                <h2 class="title-lg text-center mb-3 mb-md-4">از وبلاگ ما</h2><!-- End .title-lg text-center -->

                <div class="owl-carousel owl-simple carousel-with-shadow" data-toggle="owl" data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "rtl": true,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                }
                            }
                        }'>
                    <article class="entry entry-display">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="/client/images/blog/home/post-1.jpg" alt="توضیحات عکس">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body pb-4 text-center">
                            <div class="entry-meta">
                                <a href="#">22 فروردین 1399</a>، 0 دیدگاه
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title text-center">
                                <a href="single.html">لورم ایپسوم متن ساختگی</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <p class="text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم<br>لورم ایپسوم
                                    متن ساختگی با تولید
                                    سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
                                <a href="single.html" class="read-more">خواندن
                                    بیشتر</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry entry-display">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="/client/images/blog/home/post-2.jpg" alt="توضیحات عکس">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body pb-4 text-center">
                            <div class="entry-meta">
                                <a href="#">7 اردیبهشت 1399</a>، 0 دیدگاه
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title text-center">
                                <a href="single.html">لورم ایپسوم متن ساختگی</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <p class="text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم<br>لورم ایپسوم
                                    متن ساختگی با تولید
                                    سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
                                <a href="single.html" class="read-more">خواندن
                                    بیشتر</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry entry-display">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="/client/images/blog/home/post-3.jpg" alt="توضیحات عکس">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body pb-4 text-center">
                            <div class="entry-meta">
                                <a href="#">6 اردیبهشت 1399</a>، 2 دیدگاه
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title text-center">
                                <a href="single.html">لورم ایپسوم متن ساختگی</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <p class="text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم<br>لورم ایپسوم
                                    متن ساختگی با تولید
                                    سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
                                <a href="single.html" class="read-more">خواندن
                                    بیشتر</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .owl-carousel -->
            </div><!-- container -->

            <div class="more-container text-center mb-0 mt-3">
                <a href="blog.html" class="btn btn-outline-darker btn-more"><span>مشاهده اخبار بیشتر</span><i
                        class="icon-long-arrow-left"></i></a>
            </div><!-- End .more-container -->
        </div>
        <div class="cta cta-display bg-image pt-4 pb-4"
             style="background-image: url(assets/images/backgrounds/cta/bg-6.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9 col-xl-8">
                        <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                            <div class="col-md-8">
                                <h3 class="cta-title text-white text-right">ثبت نام کنید و 10% تخفیف بگیرید</h3>
                                <!-- End .cta-title -->
                                <p class="cta-desc text-white">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                <!-- End .cta-desc -->
                            </div><!-- End .col -->

                            <div class="col-auto d-flex">
                                <a href="login.html" class="btn btn-outline-white"><span>ثبت نام</span><i
                                        class="icon-long-arrow-left"></i></a>
                            </div><!-- End .col-auto -->
                        </div><!-- End .row no-gutters -->
                    </div><!-- End .col-md-10 col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cta -->
    </main><!-- End .main -->
    @endsection
@section('script')
    <!-- Plugins JS File -->
    <script src="/client/js/jquery.min.js"></script>
    <script src="/client/js/bootstrap.bundle.min.js"></script>
    <script src="/client/js/jquery.hoverIntent.min.js"></script>
    <script src="/client/js/jquery.waypoints.min.js"></script>
    <script src="/client/js/superfish.min.js"></script>
    <script src="/client/js/owl.carousel.min.js"></script>

    <!-- Main JS File -->
    <script src="/client/js/main.js"></script>
@endsection
