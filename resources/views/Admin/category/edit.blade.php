@extends('Admin.dashboard')
@section('content')
    ویرایش دسته بندی
    <form method="post" style="padding: 20px;background-color: #f0f0f0" action="/admin/categories/{{$category->id}}" enctype="multipart/form-data">
        <input name="_method" type="hidden" value="PUT">

        @csrf
        <div style="padding: 20px">
            <div class="row">

                <div class="col-md-6">
                    <label>عنوان دسته بندی : </label><span style="color: red">*</span>
                    <input class="form-control" type="text" name="title" value="{{$category->title}}">
                    @error('title')<span style="color: red;font-size: small">{{$message}}</span>@enderror
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <label>وضعیت دسته : </label>
                    <select name="active" >
                        <option value="" @if($category->active==null) selected @endif>انتخاب کنید</option>
                        <option value="1" @if($category->active==1) selected @endif>فعال</option>
                        <option value="0" @if($category->active==0) selected @endif>غیر فعال</option>

                    </select>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>تصویر دسته بندی : </label>
                    <input id="cat-img" class="form-control" name="image" type="file" value="{{$category->image}}">
                </div>

            </div>
            @if($category->image!=null)
            <div id="old-img" class="row" style="padding: 20px">
                <div class="col-md-2">
                    <p>تصویر قبلی</p>
                </div>
                <div class="col-md-4">
                    <img src="{{url($category->image)}}" style="height: 200px;width: 200px">
                </div>
{{--                <a type="submit" onclick="delete_image()">حذف تصویر</a>--}}

            </div>
            @endif

            <button class="btn btn-info">ذخیره</button>
        </div>
    </form>

{{--    <script>--}}
{{--        function delete_image(){--}}

{{--           var test= document.getElementById("cat-img").value = null;--}}
{{--            document.getElementById('old-img').innerHTML=null--}}
{{--        }--}}
{{--    </script>--}}
@endsection
