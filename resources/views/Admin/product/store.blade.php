@extends('Admin.dashboard')
@section('content')
    ثبت محصول
<form method="post" style="padding: 20px;background-color: #f0f0f0" action="/admin/products" enctype="multipart/form-data">

    @csrf
    <div style="padding: 20px">
    <div class="row">

        <div class="col-md-6">
            <label>نام محصول : </label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="col-md-6">
            <label>قیمت : </label>
            <input class="form-control" type="text" name="price">
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <label>توضیحات : </label>
            <textarea class="form-control" name="description"></textarea>
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
