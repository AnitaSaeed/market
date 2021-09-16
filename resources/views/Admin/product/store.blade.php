@extends('Admin.dashboard')
@section('content')
    ثبت محصول
<form method="post" style="padding: 20px;background-color: #f0f0f0" action="/admin/products" enctype="multipart/form-data">

    @csrf
    <div style="padding: 20px">
    <div class="row">

        <div class="col-md-6">
            <label>نام محصول : </label><span style="color: red">*</span>
            <input class="form-control" type="text" name="title">
            @error('title')<span style="color: red">{{$message}}</span>@enderror
        </div>
        <div class="col-md-6">
            <label>قیمت : </label><span style="color: red">*</span>
            <input class="form-control" type="text" name="price">
            @error('price')<span style="color: red">{{$message}}</span>@enderror

        </div>

    </div>
        <div class="row">
            <div class="col-md-6">
                <label>دسته بندی</label>
                <select name="categories[]" id="categories" multiple="multiple">

                    <option value="">انتخاب کنید</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <label>توضیحات : </label><span style="color: red">*</span>
            <textarea class="form-control" name="description"></textarea>
            @error('description')<span style="color: red">{{$message}}</span>@enderror
        </div>

    </div>
        <div class="row">

            <div class="col-md-6">
                <label>محصول شگفت انگیز باشد : </label>
                <input class="form-check-input" type="checkbox" name="amazing" value="1">
            </div>
            <div class="col-md-6">
                <label>محصول پیشنهادی باشد : </label>
                <input class="form-check-input" type="checkbox" name="offer" value="1">
            </div>
        </div>
 <div class="row">
        <div class="col-md-12">
            <label>تصاویر : </label>
                <input class="form-control" name="images[]" type="file" multiple>
        </div>

    </div>
    <button class="btn btn-info">ذخیره</button>
    </div>

</form>
@endsection
