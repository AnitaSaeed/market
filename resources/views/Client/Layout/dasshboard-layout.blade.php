@extends('Client.Layout.master')
@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">داشبورد<span>فروشگاه</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="page-content">
            <div class="dashboard">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-4 col-lg-3">
                            <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard" >داشبورد</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('dashboard/orders') ? 'active' : '' }}" href="/dashboard/orders">سفارشات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('dashboard/user') ? 'active' : '' }}" href="/dashboard/user">مشخصات</a>
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
                                @yield('dashboard-content')

                            </div>
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .dashboard -->
        </div><!-- End .page-content -->
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
