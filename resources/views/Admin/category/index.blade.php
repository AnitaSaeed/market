@extends('Admin.dashboard')
@section('content')

    <a class="btn btn-info" style="color: white" href="/admin/categories/create ">افزودن دسته جدید</a>
    <table class="table table-responsive-sm table-striped" style="padding: 20px">
        <thead>
        <tr class="text-right">
            <th>ردیف</th>
            <th>عنوان</th>
            <th>وضعیت</th>
            <th>تصویر</th>
            <th>عملیات</th>
        </tr>
        </thead>


        @foreach($categories as $key=>$category)
            <tr style="text-align: right">
                <td>{{$key+1}}</td>
                <td>{{$category->title}}</td>
                <td>{{$category->active ? 'فعال' : 'غیرفعال'}}</td>
                <td>
                    @if(isset($category->image))
                        <img style="padding: 20px;width: 200px;height: 200px;border-radius: 50px" src="{{url($category->image)}}">
                    @endif

                </td>

                <td style="color: white">

                    <form method="post" action="/admin/categories/{{$category->id}}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        @if($category->active)
                        <button type="submit" class="btn " style="color: white;background-color: red !important;" >غیر فعال کردن</button>
                        @else
                        <button type="submit" class="btn " style="color: white;background-color: #4ead4e !important;" >فعال کردن</button>

                        @endif

                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
