@extends('layouts.theme')
@section('content')
<!--Banner-->
<section class="page-heading" >
    <div class="title-slide">
        <div class="container">
            <div class="banner-content slide-container">									
                <div class="page-title">
                    <h3>Contact us</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner-->

<!--End Banner-->
<div class="page-content">					
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul>
                        <li class="home"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><span>//</span></li>
                        <li class="category-2"><a href="#" style="color: #fff">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- Our Team -->
    <section id="our-team" class="our-team-page">				
        <div class="our-team-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="headding">
                            <div class="headding-title">
                                <h4>{{ $contactus->title ?? ''}}</h4>
                                <div class="headding-bottom"></div>
                            </div>
                            <ul class="headding-content">
                                <li>
                                    <div class="icon-headding">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont-headding" style="float: none;">
                                        <h5>CrossLimits fitness Store</h5>
                                        <p>{{ $contactus->address ?? ''}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-headding">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div class="cont-headding" style="float: none;">
                                        <h5>Website & online store </h5>
                                        <a style="color: black;" href="#">{{ $contactus->website ?? ''}}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-headding">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont-headding" style="float: none;">
                                        <h5>Telephone </h5>
                                        <p>{{ $contactus->phone ?? ''}}  - {{ $contactus->mobile ?? ''}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <section class="contact-form">
                            <div class="contact-submit">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12 col-xs-12 justify-content-center">
                                            <div class="contact">
                                                <h4 style="color: #fff;">Contact Form</h4>
                                                <div class="headding-bottom"></div>
                                                @if(count($errors) > 0)
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                    <li style="color: #ff4a56;">-> {{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                                @if($message = Session::get('success'))
                                                <h1 style="font-size: 22px;color:#34e582;">*** {{ $message }} ***</h1>
                                                @endif

                                                <form  action="{{ url('contact-us/send') }}" class="main-contact-form row" method="post">
                                                {{ csrf_field() }}
                                                    <div class="form-group col-md-12">
                                                        <input style="color: #fff" type="text" name="name" class="control" required="required" placeholder="Your Name *">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input  style="color: #fff" type="text" name="company_name" class="control" placeholder="Company">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input style="color: #fff" type="email" name="email" class="control" required="required" placeholder="Your Email">
                                                    </div>			
                                                    <div class="form-group col-md-12">
                                                        <input style="color: #fff" type="text" name="phone" class="control" placeholder="+12345678932 *">
                                                    </div>						
                                                    <div class="form-group col-md-12">
                                                        <textarea style="color: #fff" name="message" id="message" required="required" class="control" rows="8" placeholder="Your Message"></textarea>
                                                    </div>                        
                                                    <div class="form-group form-submit col-md-12">
                                                        <button type="submit" name="submit" class="btn-submit">Send Message</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="contact-map">							
                                <div class="map-frame-event">
                                    <input type="hidden" class="map-zoom" value="11" />
                                    <input type="hidden" class="map-lat" value="40.67" />
                                    <input type="hidden" class="map-lng" value="-73.94" />
                                    <input type="hidden" class="map-icon-title" value="Athlete!" />
                                    <input type="hidden" class="map-icon-img" value="images/pin.png" />
                                </div>
                            </div>					 -->
                        </section>
                        <!-- End Contact Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team -->
    
    <!-- Our Partners -->
    <!-- <section class="our-partners">
        <div class="container">
            <div class="row">
                <div class="headding-title">
                    <h4 style="margin-left: 10px;"><b>Our Partners</b></h4>
                    <div class="headding-bottom"></div>
                </div>
                <div class="brand">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="img-brand"><img src="images/logos/home-logo-02.png" alt=""></div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="img-brand"><img src="images/logos/home-logo-03.png" alt=""></div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="img-brand"><img src="images/logos/home-logo-04.png" alt=""></div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="img-brand"><img src="images/logos/home-logo-05.png" alt=""></div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="img-brand"><img src="images/logos/home-logo-06.png" alt=""></div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="img-brand"><img src="images/logos/home-logo-02.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Our Partners -->
</div>

@endsection