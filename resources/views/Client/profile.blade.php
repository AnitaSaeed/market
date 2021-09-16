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
                                        شما در اینجا میتوانید <a href="#tab-orders"
                                                                 class="tab-trigger-link link-underline">سفارشات خود را ببینید</a>، وضعیت
                                        ارسال <a href="#tab-address" class="tab-trigger-link">سفارشات خود را مشاهده
                                            کنید وآدرس خود را تغییر دهید</a>، و همچنین <a href="#tab-account"
                                                                                          class="tab-trigger-link">می توانید رمز عبور یا جزئیات حساب کاربری خود را
                                            ویرایش کنید </a>.</p>
                                </div><!-- .End .tab-pane -->
@endsection
