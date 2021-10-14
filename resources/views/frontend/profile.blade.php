@extends('layouts.theme')
@push('head.styles')
 
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('theme/css/intlTelInput.css')}}">
@endpush
@section('content')
<!--Banner-->

<section class="page-heading" style="background-image:url('/storage/images/banners/{{ $aboutus->banner ?? ''}}') no-repeat center rgba(0, 0, 0, 0)">
    <div class="title-slide">
        <div class="container">
                <div class="banner-content slide-container">
                    <div class="page-title">
                        <h3>{{ $aboutus->banner_title ?? ''}}</h3>
                    </div>
                </div>
        </div>
    </div>
</section>
<!--End Banner-->

<div class="page-content">					
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                        <ul>
                            <li class="home"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li><span>//</span></li>
                            <li class="category-2">My profile</li>
                        </ul>
                </div>
            </div>
        </div>		
    </div>
    <!-- End Breadcrumbs -->
    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-view">
                        <div class="product-detail">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="product-view">
                                            <div id="profiletabs" class="product-collateral">
                                                <ul style="text-align: center;margin-bottom: 20px">
                                                    <li><a href="#tabs-1">My info</a></li>
                                                    <li><a href="#tabs-2">My Orders</a></li>
                                                </ul>
                                                <div id="tabs-1" class="box-collateral">
                                                    <div class="bd-example">
                                                    <form action="{{ route('my-profile.update', [$user->id]) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" id="name" name="name" value="{{ old('name', isset($user) ? $user->name : '') }}" placeholder="Your Name">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="company_name">Company Name</label>
                                                                    <input type="text" class="form-control {{ $errors->has('company_name') ? 'has-error' : '' }}" id="company_name" name="company_name" value="{{ old('company_name', isset($user) ? $user->company_name : '') }}" placeholder="Your Company Name">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="position">Position in company</label>
                                                                    <input type="text" class="form-control {{ $errors->has('position') ? 'has-error' : '' }}" id="position" name="position" value="{{ old('position', isset($user) ? $user->position : '') }}" placeholder="Your position in company">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="country">Country</label>
                                                                    <input type="text" class="form-control {{ $errors->has('country') ? 'has-error' : '' }}" id="country" name="country" value="{{ old('country', isset($user) ? $user->country : '') }}" placeholder="Country">
                                                                    <input type="hidden" name="countryCode" id="countryCode" value="">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="phone">Phone</label>
                                                                    <div class="row">
                                                                        <div class="col-md-3" style="padding-right: 0;">
                                                                            <input type="text" name="phoneCode" id="phoneCode" required class="form-control" style="width: 100%;" value="" disabled>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control {{ $errors->has('phone') ? 'has-error' : '' }}" id="phone" name="phone" value="{{ old('phone', isset($user) ? $user->phone : '') }}" placeholder="Your Phone Number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="address">Address</label>
                                                                    <input type="text" class="form-control {{ $errors->has('phone') ? 'has-error' : '' }}" id="address" name="address" value="{{ old('address', isset($user) ? $user->address : '') }}" aria-describedby="countryHelp" placeholder="Full address">
                                                                    <small id="countryHelp" class="form-text text-muted">This will be also your shipping address.</small>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="address">Email address</label>
                                                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="addressHelp" value="{{ old('email', isset($user) ? $user->email : '') }}" placeholder="Enter email">
                                                                    <!-- <small id="addressHelp" class="form-text text-muted">This will be also your shipping address.</small> -->
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="password">Change Password</label>
                                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                                </div>
                                                            </div>
                                                    
                                                            <button type="submit" class="button btn-checkout">Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div id="tabs-2" class="box-collateral" style="min-height: 300px;">
                                                    @foreach($orders as $order)
                                                    <div class="box-collateral row">
                                                        <div class="col-md-8">
                                                            <p>Invoice Nb: {{ $order->invoice_number}}</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a href="#" class="btn btn-default ">View</a>
                                                            <a href="#" class="btn btn-info">Invoice</a>
                                                        </div>
                                                        </span>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
@parent
<!--for phone country code-->
<script>
$(document).ready(function() {

        function flagButtonValue(){
            var countryData = $("#country").intlTelInput("getSelectedCountryData"); //     get country code
            telNumber = "+" + countryData.dialCode;		//Whole phone number (with Country code and value of input)
            console.log(countryData.iso2);
            $("#phoneCode").val(telNumber);
            $("#country").val(countryData.name);
            $("#countryCode").val(countryData.iso2);
        }
        
        var defaultcountry = '{{$user->countryCode ?? "us"}}';
       
        $("#country").intlTelInput({
            initialCountry: defaultcountry,				//Function to put as default country the country where the IP is located
            // geoIpLookup: function(callback) {
            //     $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
            //         var countryCode = (resp && resp.country) ? resp.country : defaultcountry;
            //         callback(countryCode);
            //     });
            // },
        });
        setTimeout(
            function () {
                flagButtonValue();
            },
            5000
        );
});

</script>
@endsection
