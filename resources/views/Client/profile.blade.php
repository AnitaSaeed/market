@extends('Client.Layout.dasshboard-layout')
@section('dashboard-content')
                                @if(\Illuminate\Support\Facades\Session::has('success'))
                                    <div class="alert alert-success">
                                        {{\Illuminate\Support\Facades\Session::get('success')}}
                                    </div>
                                @endif
                                <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel"
                                     aria-labelledby="tab-dashboard-link">
                                    <p>سلام <span class="font-weight-normal text-dark">{{Auth::user()->name}}</span>
                                        <br>
                                        شما در اینجا میتوانید <a href="/dashboard/orders"
                                                               >سفارشات خود را ببینید</a></p>
                                </div><!-- .End .tab-pane -->
@endsection
