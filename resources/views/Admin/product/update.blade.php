@extends('Admin.dashboard')
@section('content')
    ویرایش محصول
    <form method="post" style="padding: 20px;background-color: #f0f0f0" action="/admin/products/{{$product->id}}">
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
                <div class="col-md-12">
                    <label>تصاویر : </label>
                    <input class="form-control" type="file" >
                </div>

            </div>
            <button class="btn btn-info">ویرایش</button>
        </div>
    </form>
@endsection
