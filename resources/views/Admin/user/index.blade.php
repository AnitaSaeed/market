@extends('Admin.dashboard')
@section('content')


    <table class="table table-responsive-sm table-striped" style="padding: 20px">
        <thead>
        <tr class="text-right">
            <th>ردیف</th>
            <th>نام کاربر</th>
            <th>ایمیل</th>

        </tr>
        </thead>


        @foreach($users as $key=>$user)
            <tr style="text-align: right">
                <td>{{$key+1}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>

            </tr>
        @endforeach
    </table>
@endsection
