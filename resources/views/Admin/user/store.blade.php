@extends('Admin.dashboard')
@section('content')
افزودن کاربر
<form method="post" style="padding: 20px;background-color: #f0f0f0" action="/admin/users" >

    @csrf
    <div style="padding: 20px">
        <div class="row">

            <div class="col-md-6">
                <label>نام کاربری: </label><span style="color: red">*</span>
                <input class="form-control" type="text" name="name">
                @error('name')<span style="color: red;font-size: small">{{$message}}</span>@enderror
            </div>

            <div class="col-md-6">
                <label>ایمیل: </label><span style="color: red">*</span>
                <input class="form-control" type="text" name="name">
                @error('name')<span style="color: red;font-size: small">{{$message}}</span>@enderror
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <label>نام : </label>
                <input class="form-control" type="text" name="firstname">
                @error('firstname')<span style="color: red;font-size: small">{{$message}}</span>@enderror
            </div>


        </div>
        <div class="row">
            <div class="col-md-6">
                <label>نام خانوادگی: </label>
                <input class="form-control" type="text" name="firstname">
                @error('firstname')<span style="color: red;font-size: small">{{$message}}</span>@enderror
            </div>
            <div class="col-md-6">
                <label>نام خانوادگی: </label>
                <input class="form-control" type="text" name="firstname">
                @error('firstname')<span style="color: red;font-size: small">{{$message}}</span>@enderror
            </div>
        </div>
        <button class="btn btn-info">ذخیره</button>
    </div>
</form>
@endsection
