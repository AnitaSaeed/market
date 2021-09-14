@extends('Client.Layout.master')

@section('content')

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container-fluid">
            <h1 class="page-title">{{$category->title}}</h1>
        </div><!-- End .container-fluid -->
    </div><!-- End .page-header -->


    <div class="page-content">
        <div class="container-fluid">


            <div class="products" style="padding: 50px">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
                        <div class="product">
                            <figure class="product-media">
                                <a href="/front/product/{{$product->id}}">
                                    @if(isset($product->images()->first()->id))
                                        <img style="height: 270px" src="{{url($product->images()->first()->image)}}" alt="تصویر محصول"
                                             class="product-image">
                                    @endif
                                </a>



                                <div class="product-action action-icon-top">
                                    <a href="/cart/{{$product->id}}" class="btn-product btn-cart"><span>افزودن به سبد</span></a>

                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">

                                <h3 class="product-title"><a href="/front/product/{{$product->id}}">{{$product->title}}</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    {{$product->price}} تومان
                                </div><!-- End .product-price -->



                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                    @endforeach
                </div><!-- End .row -->


            </div><!-- End .products -->


        </div><!-- End .container-fluid -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection
