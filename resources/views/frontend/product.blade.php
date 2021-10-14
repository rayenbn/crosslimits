<?php

    use App\Http\Controllers\Controller;

    $social_media = Controller::footer();

?>
@extends('layouts.theme')
@section('content')
<!--Banner-->
<section class="page-heading">
    <div class="title-slide">
        <div class="container">
            <div class="banner-content">									
                <div class="page-title">
                    <h3>{{ $our_product->name}}</h3>
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
                        <li class="category-2"><a href="{{ $our_product->path()}}" style="color: #fff;">{{ $our_product->name}}</a></li>
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
                        <product
                            :product="{{ json_encode($our_product ?? null) }}" 
                            :types="{{ json_encode($types ?? null) }}" 
                            :colors="{{ json_encode($our_product->colors ?? null) }}" 
                            :images="{{ json_encode($images ?? null) }}" 
                            :prod_categories="{{ json_encode($prod_categories ?? null) }}" 
                            :user="{{ json_encode(auth()->user()) }}" 
                            :social_media="{{ json_encode($social_media ?? null) }}" 
                        >
                        </product>
                       
                        <div id="tabs" class="product-collateral">
                            <ul>
                                <li><a href="#tabs-1">Description</a></li>
                                <!-- <li><a href="#tabs-2">Reviews</a></li> -->
                            </ul>
                            <div id="tabs-1" class="box-collateral">
                                {!! $our_product->description !!}
                            </div>
                            <!-- <div id="tabs-2" class="box-collateral">
                                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. </p>
                            </div> -->
                        </div>
                        @if ( !is_null($previous_record) || !is_null($next_record))
                        <div class="product-related row">
                            <div class="col-md-12">
                                <h3 class="title">Product Related</h3>
                            </div>
                            @foreach ( $previous_record as $prev_product)
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-image-wrapper">
                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="{{ $prev_product->path() }}">
                                                <img alt="{{ $prev_product->name ?? '' }}" src="/storage/products/thumbnail/{{ $prev_product->img }}">
                                            </a>
                                        </div>
                                        <div class="info-products">
                                            <div class="product-name" >
                                                <a href="{{ $prev_product->path() }}">{{ $prev_product->name ?? ''}}</a>
                                                <div class="product-bottom"></div>
                                            </div>
                                            <div class="price-box">							
                                                @if($prev_product->discount_price)
                                                <span class="old-price">$ {{ $prev_product->price ?? ''}}</span>
                                                <span class="special-price">$ {{ $prev_product->discount_price ?? ''}}</span>
                                                @elseif ($prev_product->price)
                                                <span class="special-price">$ {{ $prev_product->price ?? ''}}</span>
                                                @endif
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <a class="arrows quickview" href="#quickview"><i class="fa fa-arrows"></i></a> -->
                                </div>
                            </div>
                            @endforeach
                            @foreach ( $next_record as $next_product)
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-image-wrapper">
                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="{{ $next_product->path() }}">
                                                <img alt="{{ $next_product->title ?? '' }}" src="/storage/products/thumbnail/{{ $next_product->img }}">
                                            </a>
                                        </div>
                                        <div class="info-products">
                                            <div class="product-name" >
                                                <a href="{{ $next_product->path() }}">{{ $next_product->name }}</a>
                                                <div class="product-bottom"></div>
                                            </div>
                                            <div class="price-box">																										
                                                @if($next_product->discount_price)
                                                <span class="old-price">$ {{ $next_product->price ?? ''}}</span>
                                                <span class="special-price">$ {{ $next_product->discount_price ?? ''}}</span>
                                                @elseif ($next_product->price)
                                                <span class="special-price">$ {{ $next_product->price ?? ''}}</span>
                                                @endif
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <a class="arrows quickview" href="#quickview"><i class="fa fa-arrows"></i></a> -->
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@include('frontend.components.Enquiry_modal')
@endsection