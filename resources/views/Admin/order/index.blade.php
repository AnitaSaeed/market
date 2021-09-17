@extends('Admin.dashboard')
@section('content')


    <table class="table table-responsive-sm table-striped" style="padding: 20px">
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">
                {{\Illuminate\Support\Facades\Session::get('success')}}
            </div>
        @endif
        <thead>
        <tr class="text-right">
            <th>ردیف</th>
            <th>نام کاربر</th>
            <th>کد پیگیری</th>
            <th>قیمت</th>
            <th>وضعیت</th>
            <th>عملیات</th>

        </tr>
        </thead>


        @foreach($orders as $key=>$order)
            <tr style="text-align: right">
                <td>{{$key+1}}</td>
                <td>{{\App\Models\User::find($order->user_id)->name}}</td>
                <td>{{$order->tracking_code}}</td>
                <td>{{$order->price}}</td>
                <td>
                    @if($order->status==0)
                    <p>در انتظار تایید</p>
                    @elseif($order->status==1)
                    <p>تایید شده</p>
                    @else
                    <p>رد شده</p>
                    @endif
                </td>
                <th>

                    @if($order->status==0)
                        <form method="post" action="/admin/order/accept/{{$order->id}}">
                            @csrf
                            <button type="submit" class="btn " style="margin: 5px; color: white;background-color: #968f6b  !important;" >تایید</button>
                        </form>
                        <form method="post" action="/admin/order/deny/{{$order->id}}">
                            @csrf
                             <button type="submit" class="btn " style="margin: 5px; color: white;background-color: #707070  !important;" >رد</button>
                        </form>
                    @elseif($order->status==1)
                        <form method="post" action="/admin/order/deny/{{$order->id}}">
                            @csrf
                         <button type="submit" class="btn " style="margin: 5px; color: white;background-color: #707070 !important;" >رد</button>
                        </form>

                    @else
                        <form method="post" action="/admin/order/accept/{{$order->id}}">
                            @csrf
                        <button type="submit" class="btn " style="margin: 5px; color: white;background-color: #968f6b  !important;" >تایید</button>
                        </form>
                    @endif
                </th>


            </tr>
        @endforeach
    </table>
@endsection
