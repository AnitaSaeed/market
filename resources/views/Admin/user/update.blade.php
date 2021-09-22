@extends('Admin.dashboard')
@section('content')
ویرایش کاربر
<form method="post" style="padding: 20px;background-color: #f0f0f0" action="/admin/users/{{$user->id}}" >
    <input name="_method" type="hidden" value="PUT">

    @csrf
    <div style="padding: 20px">
        <div class="row">

            <div class="col-md-6">
                <label>نام کاربری: </label><span style="color: red">*</span>
                <input class="form-control" type="text" name="name" value="{{$user->name}}">
                @error('name')<span style="color: red;font-size: small">{{$message}}</span>@enderror
            </div>

            <div class="col-md-6">
                <label>ایمیل: </label><span style="color: red">*</span>
                <input class="form-control" type="text" name="email" value="{{$user->email}}">
                @error('email')<span style="color: red;font-size: small">{{$message}}</span>@enderror
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <label>نام : </label>
                <input class="form-control" type="text" name="firstname" value="{{$user->firstname}}">
                @error('firstname')<span style="color: red;font-size: small">{{$message}}</span>@enderror
            </div>
            <div class="col-md-6">
                <label>نام خانوادگی: </label>
                <input class="form-control" type="text" name="lastname" value="{{$user->lastname}}">
                @error('lastname')<span style="color: red;font-size: small">{{$message}}</span>@enderror
            </div>

        </div>
        <div class="row">

            <div class="col-md-6">
                <label>جنسیت : </label>
                <select name="gender" id="gender" class="form-control">
                    <option value="">انتخاب کنید</option>
                    <option value="1" @if($user->gender===1) selected @endif>زن</option>
                    <option value="0"  @if($user->gender===0) selected @endif>مرد</option>
                </select>
                @error('gender')<span style="color: red;font-size: small">{{$message}}</span>@enderror
            </div>
            <div class="col-md-6">
                <label>موبایل: </label>
                <input class="form-control" type="number" name="mobile" value="{{$user->mobile}}">
                @error('mobile')<span style="color: red;font-size: small">{{$message}}</span>@enderror
            </div>
        </div>
        <button class="btn btn-info">ذخیره</button>
    </div>
</form>
@endsection
