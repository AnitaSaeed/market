@extends('Client.Layout.dasshboard-layout')
@section('dashboard-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-dashboard">
                <div class="card-body">
                    <p>نام کاربری: {{$user->name}}</p>
                    <P> ایمیل :  {{$user->email}}</P>
                    <p>نام :  {{$user->firstname}}</p>
                    <p>نام خانوادگی:  {{$user->lastname}}</p>
                    <p>موبایل :  {{$user->mobile}}</p>
                    <p>جنسیت : @if($user->gender==1)زن @elseif($user->gender==0) مرد@endif</p>


                    <a class="btn btn-outline-primary btn-rounded" href="/dashboard/user/edit" style="float: left" >ویرایش اطلاعات</a>
                </div>
            </div>
        </div>
    </div>


@endsection

