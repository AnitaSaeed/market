@extends('Client.Layout.master')

@section('content')

    <main class="main">

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
                    @if(count($cart)>0)
                        <div class="row">
                            <div class="col-lg-9">
                                <table class="table table-cart table-mobile">
                                    <thead>
                                    <tr>
                                        <th>محصول</th>
                                        <th>قیمت</th>


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

                                            <td class="remove-col"><a class="btn-remove" href="/cart-list/delete/{{$product->id}}"><i
                                                        class="icon-close"></i></a></td>
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





                                        <tr class="summary-total">
                                            <td>مبلغ قابل پرداخت :</td>
                                            <td class="text-left">{{$total}} تومان</td>
                                        </tr><!-- End .summary-total -->
                                        </tbody>
                                    </table><!-- End .table table-summary -->
                                    @auth()
                                        <a href="/order" class="btn btn-outline-primary-2 btn-order btn-block">ثبت سفارش</a>
                                    @endauth
                                    @guest()
                                        <p>برای ثبت سفارش ابتدا <a href="/login">وارد</a> شوید</p>
                                    @endguest
                                </div><!-- End .summary -->

                                <a href="{{route('home')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>ادامه
                                        خرید</span><i class="icon-refresh"></i></a>
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->



                    @else
                        <div style="text-align: right">
                            <p style="font-size: xx-large">سبد خرید شما خالیست!</p>
                            <a href="{{route('home')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>ادامه
                                        خرید</span><i class="icon-refresh"></i></a>
                        </div>

                    @endif

                </div><!-- End .container -->
            </div><!-- End .cart -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->


@endsection
