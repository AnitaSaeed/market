<header class="header">
    <div class="header-top">
        <div class="container">


            <div class="header-right">
                <ul class="top-menu">
                    <li>
                        <a href="#">لینک ها</a>
                        <ul>
                            <li><a href="tel:#"><i class="icon-phone"></i>تلفن تماس : 02155667788</a></li>
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
                            <a href="#" class="sf-with-ul">دسته بندی ها </a>

                            <ul>
                               @foreach($categories as $category)
                                <li><a href="/category/{{$category->id}}">{{$category->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>


                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-left -->

            <div class="header-right">

                <div class="dropdown cart-dropdown">
                    <a href="/cart-list" class="dropdown-toggle">
                        <p>سبد خرید</p>
                        <i class="icon-shopping-cart"></i>

                    </a>

                </div><!-- End .cart-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->
