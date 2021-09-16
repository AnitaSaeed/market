@extends('Client.Layout.dasshboard-layout')
@section('dashboard-content')
    <table class="table table-responsive-sm table-striped" style="padding: 20px">
        <thead>
        <tr class="text-right">
            <th>ردیف</th>
            <th>نام</th>
            <th>تصویر</th>
            <th>توضیحات</th>
            <th>قیمت</th>

        </tr>
        </thead>


        @foreach($products as $key=>$product)
            <tr style="text-align: right">
                <td>{{$key+1}}</td>
                <td>{{$product->title}}</td>
                <td>
                    @if(isset($product->images()->first()->id))
                        <img style="padding: 20px;width: 200px;height: 200px;border-radius: 50px" src="{{url($product->images()->first()->image)}}">
                    @endif
                </td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}} تومان </td>


            </tr>
        @endforeach
    </table>
@endsection
