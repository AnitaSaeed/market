@extends('Admin.dashboard')
@section('content')
    افزودن دسته بندی
    <form method="post" style="padding: 20px;background-color: #f0f0f0" action="/admin/categories" enctype="multipart/form-data">

        @csrf
        <div style="padding: 20px">
            <div class="row">

                <div class="col-md-6">
                    <label>عنوان دسته بندی : </label>
                    <input class="form-control" type="text" name="title">
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <label>وضعیت محصول : </label>
                    <select name="active" >
                        <option value="">انتخاب کنید</option>
                        <option value="1">فعال</option>
                        <option value="0">غیر فعال</option>

                    </select>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>تصویر دسته بندی : </label>
                    <input class="form-control" name="image" type="file">
                </div>

            </div>
            <button class="btn btn-info">ذخیره</button>
        </div>
    </form>
@endsection
