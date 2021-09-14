@extends('Admin.dashboard')
@section('content')
    ویرایش محصول
    <form method="post" style="padding: 20px;background-color: #f0f0f0" action="/admin/products/{{$product->id}}"  enctype="multipart/form-data">
        <input name="_method" type="hidden" value="PUT">
        @csrf
        <div style="padding: 20px">
            <div class="row">

                <div class="col-md-6">
                    <label>نام محصول : </label>
                    <input class="form-control" type="text" name="title" value="{{$product->title}}">
                </div>
                <div class="col-md-6">
                    <label>قیمت : </label>
                    <input class="form-control" type="text" name="price" value="{{$product->price}}">
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>توضیحات : </label>
                    <textarea class="form-control" name="description">{{$product->description}}</textarea>
                </div>

            </div>
            <div class="row">

                <div class="col-md-6">
                    <label>محصول شگفت انگیز باشد : </label>
                    <input class="form-check-input" type="checkbox" name="amazing" value="{{$product->amazing}}">
                </div>
                <div class="col-md-6">
                    <label>محصول پیشنهادی باشد : </label>
                    <input class="form-check-input" type="checkbox" name="offer" value="{{$product->offer}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>تصاویر : </label>
                    <div class="float-right">
                        @if($images!=null)

                    @foreach($images as $image)
                        <div class="row">
                            <div class="col-md-8">
                               <img style="padding: 20px;width: 200px;height: 200px; border-radius: 50px" src="{{url($image->image)}}">
                            </div>
                            <div  style="padding-top: 100px" class="col-md-4">
                                <form method="post" action="/product/deleteImage/{{$image->id}}">
                                    @csrf

                                    <button style="border-radius: 50px" class="btn btn-danger">حذف</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                        @endif
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>تصاویر : </label>
                    <input class="form-control" name="images[]" type="file" multiple>
                </div>

            </div>
            <button class="btn btn-info">ویرایش</button>
        </div>
    </form>
@endsection
