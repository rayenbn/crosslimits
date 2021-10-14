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
                                        <!-- <div class="product-view"> -->
                                             <!--  Blog -->
                                            <div class="blog-page">
                                                <section class="blog-listing">
                                                    <section class="blog-item">
                                                        <div class="blog-main">
                                                            <div class="blog-content">
                                                                <div class="blog-header">
                                                                    <div class="blog-title" style="margin-top: 15px;">
                                                                        <a href="/my-profile#tabs-2">Your order is successfully submitted</a>
                                                                    </div>
                                                                    <div class="blog-intro">
                                                                        @if(session()->has('invoiceNumber'))
                                                                            <div class="created-by"> Save your order number: <span>{{session()->get('invoiceNumber', '')}}</span></div>
                                                                        @endif
                                                                
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </section>
                                            </div>
                                            <!-- End Blog -->	
                                        
                                         
                                        <!-- </div> -->
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
