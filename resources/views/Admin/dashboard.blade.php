<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>قالب Molla - قالب بوت استرپ فروشگاهی</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/client/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/client/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/client/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/client/images/icons/site.webmanifest">
    <link rel="mask-icon" href="/client/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="/client/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="/client/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="/client/css/bootstrap.min.css">
    <link rel="stylesheet" href="/client/css/bootstrap-rtl.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="/client/css/style.css">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">--}}

</head>

<body>
<div class="page-wrapper">

    @auth()
    @if(auth()->user()->type=='admin')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('/client/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">پنل ادمین</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->


        <div class="page-content">
            <div class="dashboard">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-4 col-lg-3">
                            <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('admin/products') ? 'active' : '' }}" href="/admin/products">محصولات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}" href="/admin/users">کاربران</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('admin/categories') ? 'active' : '' }}" href="/admin/categories" >دسته بندی ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address"
                                       role="tab" aria-controls="tab-address" aria-selected="false">آدرس</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account"
                                       role="tab" aria-controls="tab-account" aria-selected="false">جزئیات حساب
                                        کاربری</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">خروج از حساب کاربری</a>
                                </li>
                            </ul>
                        </aside><!-- End .col-lg-3 -->

                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content" style="text-align: right">
                                @yield('content')
{{--                                <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel"--}}
{{--                                     aria-labelledby="tab-dashboard-link">--}}
{{--                                  --}}
{{--                                </div><!-- .End .tab-pane -->--}}

{{--                                <div class="tab-pane fade" id="tab-orders" role="tabpanel"--}}
{{--                                     aria-labelledby="tab-orders-link">--}}
{{--                                    <p>سفارش جدیدی وجود ندارد</p>--}}
{{--                                    <a href="category.html" class="btn btn-outline-primary-2"><span>رفتن به--}}
{{--                                                فروشگاه</span><i class="icon-long-arrow-left"></i></a>--}}
{{--                                </div><!-- .End .tab-pane -->--}}

{{--                                <div class="tab-pane fade" id="tab-downloads" role="tabpanel"--}}
{{--                                     aria-labelledby="tab-downloads-link">--}}
{{--                                    <p>دانلود جدیدی وجود ندارد</p>--}}
{{--                                    <a href="category.html" class="btn btn-outline-primary-2"><span>رفتن به--}}
{{--                                                فروشگاه</span><i class="icon-long-arrow-left"></i></a>--}}
{{--                                </div><!-- .End .tab-pane -->--}}

{{--                                <div class="tab-pane fade" id="tab-address" role="tabpanel"--}}
{{--                                     aria-labelledby="tab-address-link">--}}
{{--                                    <p>آدرسی که اینجا ثبت می کنید به صورت پیش فرض برای ارسال محصولات به شما استفاده--}}
{{--                                        می شود.</p>--}}

{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-12">--}}
{{--                                            <div class="card card-dashboard">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <h3 class="card-title">آدرس شما</h3><!-- End .card-title -->--}}

{{--                                                    <p>نام کاربری شما<br>--}}
{{--                                                        نام شرکت شما<br>--}}
{{--                                                        محمد محمدی<br>--}}
{{--                                                        تهران-تهران<br>--}}
{{--                                                        خیابان آزادی - پلاک 7<br>--}}
{{--                                                        yourmail@mail.com<br>--}}
{{--                                                        <a href="#">ویرایش <i class="icon-edit"></i></a></p>--}}
{{--                                                </div><!-- End .card-body -->--}}
{{--                                            </div><!-- End .card-dashboard -->--}}
{{--                                        </div><!-- End .col-lg-12 -->--}}
{{--                                    </div><!-- End .row -->--}}
{{--                                </div><!-- .End .tab-pane -->--}}

{{--                                <div class="tab-pane fade" id="tab-account" role="tabpanel"--}}
{{--                                     aria-labelledby="tab-account-link">--}}
{{--                                    <form action="#">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-sm-6">--}}
{{--                                                <label>نام *</label>--}}
{{--                                                <input type="text" class="form-control" required>--}}
{{--                                            </div><!-- End .col-sm-6 -->--}}

{{--                                            <div class="col-sm-6">--}}
{{--                                                <label>نام خانوادگی *</label>--}}
{{--                                                <input type="text" class="form-control" required>--}}
{{--                                            </div><!-- End .col-sm-6 -->--}}
{{--                                        </div><!-- End .row -->--}}

{{--                                        <label>نام نمایش *</label>--}}
{{--                                        <input type="text" class="form-control" required>--}}
{{--                                        <small class="form-text">این نام در قسمت بازدیدها، نظرات و حساب کاربری شما--}}
{{--                                            نمایش داده می شود.</small>--}}

{{--                                        <label>ایمیل *</label>--}}
{{--                                        <input type="email" class="form-control" required>--}}

{{--                                        <label>پسورد فعلی</label>--}}
{{--                                        <input type="password" class="form-control">--}}

{{--                                        <label>پسورد جدید</label>--}}
{{--                                        <input type="password" class="form-control">--}}

{{--                                        <label>تکرار پسورد جدید</label>--}}
{{--                                        <input type="password" class="form-control mb-2">--}}

{{--                                        <button type="submit" class="btn btn-outline-primary-2 float-right">--}}
{{--                                            <span>ذخیره تغییرات</span>--}}
{{--                                            <i class="icon-long-arrow-left"></i>--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                </div><!-- .End .tab-pane -->--}}
                            </div>
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .dashboard -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->


    <footer class="footer">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget widget-about">
                            <img src="/client/images/logo.png" class="footer-logo" alt="Footer Logo" width="105"
                                 height="25">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم. </p>

                            <div class="social-icons">
                                <a href="#" class="social-icon" title="فیسبوک" target="_blank"><i
                                        class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" title="توییتر" target="_blank"><i
                                        class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" title="اینستاگرام" target="_blank"><i
                                        class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" title="یوتیوب" target="_blank"><i
                                        class="icon-youtube"></i></a>
                                <a href="#" class="social-icon" title="پینترست" target="_blank"><i
                                        class="icon-pinterest"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">لینک های مفید</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="about.html">درباره ما</a></li>
                                <li><a href="#">خدمات</a></li>
                                <li><a href="#">نحوه خرید</a></li>
                                <li><a href="faq.html">سوالات متداول</a></li>
                                <li><a href="contact.html">تماس با ما</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">خدمات مشتری</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">شیوه پرداخت</a></li>
                                <li><a href="#">گارانتی بازگشت وجه</a></li>
                                <li><a href="#">شیوه ارسال محصولات</a></li>
                                <li><a href="#">قوانین و مقررات</a></li>
                                <li><a href="#">خط مشی</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">حساب کاربری</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">ورود</a></li>
                                <li><a href="cart.html">سبد خرید</a></li>
                                <li><a href="#">لیست علاقه مندی ها</a></li>
                                <li><a href="#">پیگیری سفارشات</a></li>
                                <li><a href="#">راهنما</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <p class="footer-copyright">کپی رایت © 2019 تمامی حقوق محفوظ است.</p>
                <!-- End .footer-copyright -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
        @else
        <div style="padding: 200px">
            <p style="font-size: xx-large">شما به این صفحه دسترسی ندارید!</p>
        </div>

        @endif
    @endauth
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>







<!-- Plugins JS File -->
<script src="/client/js/jquery.min.js"></script>
<script src="/client/js/bootstrap.bundle.min.js"></script>
<script src="/client/js/jquery.hoverIntent.min.js"></script>
<script src="/client/js/jquery.waypoints.min.js"></script>
<script src="/client/js/superfish.min.js"></script>
<script src="/client/js/owl.carousel.min.js"></script>
<!-- Main JS File -->
<script src="/client/js/main.js"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>--}}

</body>

</html>
