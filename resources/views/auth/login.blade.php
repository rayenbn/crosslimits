@extends('layouts.theme')
@section('content')
<!--Banner-->
<section class="page-heading" style="background-image:url('/storage/images/banners/{{ $blog_page->banner ?? ''}}') no-repeat center rgba(0, 0, 0, 0)">
    <div class="title-slide">
        <div class="container">
                <div class="banner-content slide-container">									
                    <div class="page-title">
                        <h3>LOGIN</h3>
                    </div>
                </div>
        </div>
    </div>
</section>
<!--End Banner-->
<div class="product-check-out">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="checkout">                                            
                    <div class="checkout-row row ">
                        @if(\Session::has('message'))
                            <p class="alert alert-info">
                                {{ \Session::get('message') }}
                            </p>
                        @endif
                        <div class="col-md-3"></div>
                        <div class="log-in col-md-6">
                            <div class="title">Log in</div>
                            <div class="box">
                                <p>
                                    If you have shopped with us before, please enter your details in the boxes below. If you are a new customer register new account <a href="#" style="color: crimson;">here.</a>
                                </p>
                                <form method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="email" type="text" class="input-text" placeholder="{{ trans('global.login_email') }}">
                                        </div>
                                        <div class="col-md-12">
                                        <input name="password" type="password" class="input-text" placeholder="{{ trans('global.login_password') }}">
                                        </div>
                                        <label class="col-md-6 ml-2" style="color: white;">
                                            <input name="remember" type="checkbox" /> {{ trans('global.remember_me') }}
                                        </label>
                                        <label class="col-6 text-right" >
                                            <a class="" href="{{ route('password.request') }}" style="color: white;">
                                                {{ trans('global.forgot_password') }}
                                            </a>
                                        </label>
                                    </div>
                                    <button type="submit" title="Log in" class="button">
                                        <em class="fa-icon"><i class="fa fa-unlock"></i></em>
                                        <span>{{ trans('global.login') }}</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                  
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection