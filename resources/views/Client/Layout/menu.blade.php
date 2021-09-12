<header class="header">
    <div class="header-top">
        <div class="container">


            <div class="header-right">
                <ul class="top-menu">
                    <li>
                        <a href="#">لینک ها</a>
                        <ul>
                            <li><a href="tel:#"><i class="icon-phone"></i>تلفن تماس : 02155667788</a></li>
                            <li><a href="wishlist.html"><i class="icon-heart-o"></i>لیست علاقه مندی من
                                    <span>(3)</span></a></li>
                            <li><a href="about.html">درباره ما</a></li>
                            <li><a href="contact.html">تماس با ما</a></li>
                            <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>ورود</a>
                            </li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">فهرست</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="{{route('home')}}" class="logo">
                    <img src="/client/images/logo.png" alt="Molla Logo" width="105" height="25">
                </a>

                <nav class="main-nav">
                    <ul class="menu sf-arrows">

                        <li>
                            <a href="#" class="sf-with-ul">صفحات </a>

                            <ul>
                                <li>
                                    <a href="about.html" class="sf-with-ul">درباره ما</a>

                                    <ul>
                                        <li><a href="about.html">درباره ما 01</a></li>
                                        <li><a href="about-2.html">درباره ما 02</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html" class="sf-with-ul">تماس با ما</a>

                                    <ul>
                                        <li><a href="contact.html">تماس با ما 01</a></li>
                                        <li><a href="contact-2.html">تماس با ما 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="login.html">ورود</a></li>
                                <li><a href="faq.html">سوالات متداول</a></li>
                                <li><a href="404.html">خطای 404</a></li>
                                <li><a href="coming-soon.html">به زودی</a></li>
                            </ul>
                        </li>


                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-left -->

            <div class="header-right">

                <div class="dropdown cart-dropdown">
                    <a href="/cart-list" class="dropdown-toggle"
{{--                       role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false" data-display="static"--}}
                    >
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">2</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-cart-products">
                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">کتونی ورزشی مخصوص دویدن رنگ بژ</a>
                                    </h4>

                                    <span class="cart-product-info">
                                                <span class="cart-product-qty">1 x </span>
                                                84,000 تومان
                                            </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="/client/images/products/cart/product-1.jpg" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="حذف محصول"><i class="icon-close"></i></a>
                            </div><!-- End .product -->

                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">لباس زنانه آبی</a>
                                    </h4>

                                    <span class="cart-product-info">
                                                <span class="cart-product-qty">1 x </span>
                                                76,000 تومان
                                            </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="/client/images/products/cart/product-2.jpg" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="حذف محصول"><i class="icon-close"></i></a>
                            </div><!-- End .product -->
                        </div><!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                            <span>مجموع</span>

                            <span class="cart-total-price">160,000 تومان</span>
                        </div><!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="cart.html" class="btn btn-primary">مشاهده سبد خرید</a>
                            <a href="checkout.html" class="btn btn-outline-primary-2"><span>پرداخت</span><i
                                    class="icon-long-arrow-left"></i></a>
                        </div><!-- End .dropdown-cart-total -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .cart-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->
