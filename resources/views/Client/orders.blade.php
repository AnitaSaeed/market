@extends('Client.Layout.dasshboard-layout')
@section('dashboard-content')
    <table class="table table-responsive-sm table-striped" style="padding: 20px">
        <thead>
        <tr class="text-right">
            <th>ردیف</th>
            <th>کد پیگیری</th>
            <th>قیمت</th>
            <th>وضعیت</th>
            <th>جزئیات</th>


        </tr>
        </thead>


        @foreach($orders as $key=>$order)
            <tr style="text-align: right">
                <td>{{$key+1}}</td>
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
                <td>
                    <form method="post" action="/dashboard/orders/detail/{{$order->id}}">
                        @csrf
                    <button type="submit" class="btn " style="color: white;background-color: #968f6b !important;margin: 5px" >نمایش</button>
                    </form>
                </td>


            </tr>
        @endforeach
    </table>



@endsection
