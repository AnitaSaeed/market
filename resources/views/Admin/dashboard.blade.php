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
                                    <a class="nav-link {{ Request::is('admin/orders') ? 'active' : '' }}" href="/admin/orders" >سفارشات</a>
                                </li>

                                <li class="nav-item">
                                    <form method="post" action="/logout">
                                        @csrf
                                        <button class="nav-link" style="background-color: white;border: none">خروج از حساب کاربری</button>
                                    </form>
                                </li>
                            </ul>
                        </aside><!-- End .col-lg-3 -->

                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content" style="text-align: right">
                                @yield('content')

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

                            </div><!-- End .soial-icons -->
                        </div><!-- End .widget about-widget -->
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
