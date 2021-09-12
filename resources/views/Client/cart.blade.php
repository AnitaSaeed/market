@extends('Client.Layout.master')

@section('content')

    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">سبد خرید<span>فروشگاه</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-1.html">خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">فروشگاه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">سبد خرید</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <table class="table table-cart table-mobile">
                                <thead>
                                <tr>
                                    <th>محصول</th>
                                    <th>قیمت</th>
                                    <th>تعداد</th>
                                    <th>مجموع</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @php($total=0)
                                @foreach($cart as $cart)
                                    @php( $product= \App\Models\Product::where('id',$cart)->first())
                                    @php( $total+=$product->price)
                                    <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                @if(isset($product->images()->first()->id))
                                                    <img src="{{url($product->images()->first()->image)}}"
                                                         alt="تصویر محصول">
                                                @endif
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="#">{{$product->title}}</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">{{$product->price}}</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            <input type="number" class="form-control" value="1" min="1" max="10"
                                                   step="1" data-decimals="0" required>
                                        </div><!-- End .cart-product-quantity -->
                                    </td>
                                    <td class="total-col">84,000</td>
                                    <td class="remove-col"><button class="btn-remove"><i
                                                class="icon-close"></i></button></td>
                                </tr>



                                @endforeach


                                </tbody>
                            </table><!-- End .table table-wishlist -->


                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary summary-cart">
                                <h3 class="summary-title">جمع سبد خرید</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <tbody>
                                    <tr class="summary-subtotal">
                                        <td>جمع کل سبد خرید : </td>
                                        <td class="text-left">{{$total}} تومان</td>
                                    </tr><!-- End .summary-subtotal -->


                                    <tr class="summary-shipping-estimate">
                                        <td>آدرس<br> <a href="dashboard.html">تغییر آدرس</a></td>
                                        <td>&nbsp;</td>
                                    </tr><!-- End .summary-shipping-estimate -->

                                    <tr class="summary-total">
                                        <td>مبلغ قابل پرداخت :</td>
                                        <td class="text-left">{{$total}} تومان</td>
                                    </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <a href="/order" class="btn btn-outline-primary-2 btn-order btn-block">رفتن
                                    به صفحه پرداخت</a>
                            </div><!-- End .summary -->

                            <a href="{{route('home')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>ادامه
                                        خرید</span><i class="icon-refresh"></i></a>
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cart -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->


@endsection
