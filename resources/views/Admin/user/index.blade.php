@extends('Admin.dashboard')
@section('content')

    <a class="btn btn-info" style="color: white" href="/admin/users/create ">افزودن کاربر</a>
    <table class="table table-responsive-sm table-striped" style="padding: 20px">
        <thead>
        <tr class="text-right">
            <th>ردیف</th>
            <th>نام کاربری</th>
            <th>ایمیل</th>
            <th>عملیات</th>

        </tr>
        </thead>


        @foreach($users as $key=>$user)
            <tr style="text-align: right">
                <td>{{$key+1}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a class="btn " style="background-color: #cc9966 !important;margin: 5px" href="/admin/users/{{$user->id}}/edit">ویرایش</a>
                    <form method="post" action="/admin/users/{{$user->id}}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn " style="color: white;background-color: #707070 !important;margin: 5px" onclick="return confirm('از حذف این کاربر مطمئن هستید؟')">حذف</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </table>
@endsection
