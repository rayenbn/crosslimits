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
                        <li class="category-2"><a href="#" style="color: #fff">Warranty & Policies</a></li>
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
                    <h3 class="section-title text-center">{{ $warranty->title ?? ''}}</h3>
                    <br>
                    <br>
                    {!! $warranty->content ?? '' !!}
                   
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team -->
    
</div>

@endsection