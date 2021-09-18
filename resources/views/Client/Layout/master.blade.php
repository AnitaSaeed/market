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
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="/client/css/bootstrap.min.css">
    <link rel="stylesheet" href="/client/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="/client/css/plugins/owl-carousel/owl.carousel.css">
{{--    <link rel="stylesheet" href="/client/css/plugins/magnific-popup/magnific-popup.css">--}}
    <!-- Main CSS File -->
    <link rel="stylesheet" href="/client/css/style.css">
</head>

<body>
<div class="page-wrapper">
   @include('Client.Layout.menu')
@yield('content')

    <footer class="footer footer-dark">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget widget-about">
                            <img src="/client/images/logo-footer.png" class="footer-logo" alt="Footer Logo"
                                 width="105" height="25">


                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">

                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">

                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">حساب کاربری</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="/login">ورود</a></li>
                                <li><a href="/cart-list">سبد خرید</a></li>

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
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>



<!-- Sign in / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin"
                                   role="tab" aria-controls="signin" aria-selected="true">ورود</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                   aria-controls="register" aria-selected="false">ثبت نام</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content-5">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                 aria-labelledby="signin-tab">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="singin-email">نام کاربری یا آدرس ایمیل *</label>
                                        <input type="email" class="form-control" id="email"
                                               name="email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="password">رمز عبور *</label>
                                        <input type="password" class="form-control" id="password"
                                               name="password" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>ورود</span>
                                            <i class="icon-long-arrow-left"></i>
                                        </button>


                                    </div><!-- End .form-footer -->
                                </form>

                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">نام شما *</label>
                                        <input type="text" class="form-control" id="name"
                                               name="name" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="email">آدرس ایمیل شما *</label>
                                        <input type="email" class="form-control" id="email"
                                               name="email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="password">رمز عبور *</label>
                                        <input type="password" class="form-control" id="password"
                                               name="password" required>
                                    </div><!-- End .form-group -->
                                    <div class="form-group">
                                        <label for="password_confirmation">تکرار رمز عبور *</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                               name="password_confirmation" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>ثبت نام</span>
                                            <i class="icon-long-arrow-left"></i>
                                        </button>


                                    </div><!-- End .form-footer -->
                                </form>

                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .modal-body -->
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div><!-- End .modal -->



    <!-- Plugins JS File -->
    <script src="/client/js/jquery.min.js"></script>
    <script src="/client/js/bootstrap.bundle.min.js"></script>
    <script src="/client/js/jquery.hoverIntent.min.js"></script>
    <script src="/client/js/jquery.waypoints.min.js"></script>
    <script src="/client/js/superfish.min.js"></script>
    <script src="/client/js/owl.carousel.min.js"></script>

    <!-- Main JS File -->
    <script src="/client/js/main.js"></script>


</body>

</html>
