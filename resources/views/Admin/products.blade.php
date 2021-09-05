@extends('Admin.dashboard')
@section('content')


    <a class="btn btn-info" style="color: white" href="/admin/products/create ">افزودن محصول</a>
    <table class="table table-responsive-sm table-striped" style="padding: 20px">
        <thead>
        <tr class="text-right">
            <th>ردیف</th>
            <th>نام</th>
            <th>تصویر</th>
            <th>توضیحات</th>
            <th>قیمت</th>
            <th>عملیات</th>
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

                <td style="color: white">

                    <a class="btn " style="background-color: #968f6b !important;" href="/admin/products/{{$product->id}}/edit">ویرایش</a>
                    <form method="post" action="/admin/products/{{$product->id}}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn " style="color: white;background-color: #707070 !important;" onclick="return confirm('از حذف این محصول مطمئن هستید؟')">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
