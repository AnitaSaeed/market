@extends('Client.Layout.master')

@section('content')

<main class="main">


    <div class="page-content">
        <div class="container">
            <div class="product-details-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery product-gallery-vertical">
                            <div class="row">
                                <figure class="product-main-image">
                                    @if(isset($product->images()->first()->id))
                                    <img id="product-zoom" src="{{url($product->images()->first()->image)}}"
                                         data-zoom-image="assets/images/products/single/1-big.jpg"
                                         alt="تصویر محصول">
                                    @endif
{{--                                    <a href="#" id="btn-product-gallery" class="btn-product-gallery">--}}
{{--                                        <i class="icon-arrows"></i>--}}
{{--                                    </a>--}}
                                </figure><!-- End .product-main-image -->

                                <div id="product-zoom-gallery" class="product-image-gallery">
                                    @if($images!= null)
                                    @foreach($images as $img)


                                            <img style="height: 100px; width: 100%; padding: 10px" src="{{url($img->image)}}"
                                                 alt="توضیحات تصویر">

                                    @endforeach
                                    @endif

{{--                                    <a class="product-gallery-item" href="#"--}}
{{--                                       data-image="assets/images/products/single/2.jpg"--}}
{{--                                       data-zoom-image="assets/images/products/single/2-big.jpg">--}}
{{--                                        <img src="assets/images/products/single/2-small.jpg"--}}
{{--                                             alt="توضیحات تصویر">--}}
{{--                                    </a>--}}

{{--                                    <a class="product-gallery-item" href="#"--}}
{{--                                       data-image="assets/images/products/single/3.jpg"--}}
{{--                                       data-zoom-image="assets/images/products/single/3-big.jpg">--}}
{{--                                        <img src="assets/images/products/single/3-small.jpg"--}}
{{--                                             alt="توضیحات تصویر">--}}
{{--                                    </a>--}}

{{--                                    <a class="product-gallery-item" href="#"--}}
{{--                                       data-image="assets/images/products/single/4.jpg"--}}
{{--                                       data-zoom-image="assets/images/products/single/4-big.jpg">--}}
{{--                                        <img src="assets/images/products/single/4-small.jpg" alt="product back">--}}
{{--                                    </a>--}}
                                </div><!-- End .product-image-gallery -->
                            </div><!-- End .row -->
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-title">{{$product->title}}</h1>
                            <!-- End .product-title -->



                            <div class="product-price">
                                {{$product->price}} تومان
                            </div><!-- End .product-price -->

                            <div class="product-content">
                                <p>
                                    {{$product->description}}
                                </p>
                            </div><!-- End .product-content -->




                            <div class="details-filter-row details-row-size">
                                <label for="qty">تعداد : </label>
                                <div class="product-details-quantity">
                                    <input type="number" id="qty" class="form-control" value="1" min="1"
                                           max="10" step="1" data-decimals="0" required>
                                </div><!-- End .product-details-quantity -->
                            </div><!-- End .details-filter-row -->
                            @auth()
                            <div class="product-details-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>


                            </div><!-- End .product-details-action -->
                            @endauth
                            @guest()
                                <a href="#">برای افزودن محصول به سبد خرید ابتدا وارد شوید</a>
                            @endguest
                            <div class="product-details-footer">
                                <div class="product-cat text-center">
                                    <span>دسته بندی : </span>

                                    @foreach($product->category as $item)
                                        <a>{{$item->title}}</a>
                                    @endforeach
                                </div><!-- End .product-cat -->


                            </div><!-- End .product-details-footer -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->


        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection
