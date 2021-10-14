@extends('layouts.theme')
@section('content')  
<!--Banner-->
<section class="page-heading">
    <div class="title-slide">
        <div class="container">
            <div class="banner-content">									
                <div class="page-title">
                    <h3>Product listing</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner-->
<div class="page-content">					

    @include('frontend.components.shop-category', $categories)
    
    <div class="product-list">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="toolbar">
                        <p class="amount">
                            <strong>SHOWING {{ count($products)}} RESULTS</strong>
                        </p>
                        <div class="sorter">
                            <div class="sort-by">
                                <select onchange="setLocation(this.value)">
                                    <option selected="selected" value="">Default sorting</option>
                                    <option value="">Position</option>
                                    <option value="">Name</option>
                                    <option value="">Price</option>
                                </select>
                            </div>                                                
                            <!-- <p class="view-mode">
                                <strong class="grid-active" title="Grid"><i class="fa fa-th-large"></i></strong>
                                <a class="list" title="List" href="product-listing-row.html"><i class="fa fa-th-list"></i></a>
                            </p> -->
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $key => $product)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="product-image-wrapper">
                                <div class="product-content">
                                    <div class="product-image">
                                        <a href="{{  $product->path() }}"><img alt="" src="/storage/products/thumbnail/{{ $product->img }}"></a>
                                    </div>
                                    <div class="info-products">
                                        <div class="product-name" >
                                            <a href="{{  $product->path() }}">{{ $product->name ?? ''}}</a>
                                            <div class="product-bottom"></div>
                                        </div>
                                        <!-- <div class="price-box">																										
                                            <span class="special-price">$200.60</span>
                                            <span class="old-price">$227.96</span>
                                        </div> -->
                                        <!-- <div class="actions">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <a class="arrows quickview" href="#quickview"><i class="fa fa-arrows"></i></a> -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="clearfix"></div>
                    <div class="pages">
                    {{ $products->links('vendor.pagination.theme_paginator') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection