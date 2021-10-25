@extends('layouts.theme')

@section('content')
<!--Banner-->
<section class="page-heading" style="background-image:url('/storage/images/banners/{{ $blog_page->banner ?? ''}}') no-repeat center rgba(0, 0, 0, 0)">
    <div class="title-slide">
        <div class="container">
                <div class="banner-content slide-container">									
                    <div class="page-title">
                        <h3>REGISTER NEW ACCOUNT</h3>
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
                            <div class="title">{{ __('Register') }}</div>
                            <div class="box">
                                <p>
                                    Register new account to discover our products, services and much more. If you already have an account please login <a href="{{ route('login') }}" style="color: crimson;">here.</a>
                                </p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert" style="color: #fff;">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                            <input name="name" id="name" type="text" class="input-text {{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                            value="{{ old('name') }}" required autofocus placeholder="{{ __('Name') }}">

                                        </div>
                                        <div class="col-md-12">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert" style="color: #fff;">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            <input name="email" id="email" type="email" class="input-text {{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                            value="{{ old('email') }}" required autofocus placeholder="{{ __('E-Mail Address') }}">

                                        </div>
                                        <div class="col-md-12">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert" style="color: #fff;">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                            <input name="password" id="password" type="password" class="input-text {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" required>
                                        </div>
                                        <div class="col-md-12">
                                            <input id="password-confirm" type="password" class="input-text" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                                        </div>
                                        
                                    </div>
                                    <button type="submit"  class="button">
                                        <em class="fa-icon"><i class="fa fa-unlock"></i></em>
                                        <span>{{ __('Register') }}</span>
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
