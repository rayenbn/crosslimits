@extends('layouts.theme')
@section('content')
<!--Banner-->
<section class="page-heading" style="background-image:url('/storage/images/banners/{{ $blog_page->banner ?? ''}}') no-repeat center rgba(0, 0, 0, 0)">
    <div class="title-slide">
        <div class="container">
                <div class="banner-content slide-container">									
                    <div class="page-title">
                        <h3>OUR BLOG</h3>
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
                        <li class="home"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                        <li><span>//</span></li>
                        <li class="category-1"><a href="/blogs">Blog articles</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- Main Content -->
    <div class="main-content our-blog">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">																											
                    <!--  Blog -->
                    <div class="blog-page">
                        <section class="blog-listing">
                            @foreach($blogs as $key => $blog)
                            <section class="blog-item">
                                @if ($blog->image)
                                <div class="img-blog">
                                    <img src="../storage/blogs/thumbnail/{{ $blog->image }}" alt=""/>
                                </div>
                                @endif
                                <div class="blog-main">
                                    <div class="blog-content">
                                        <div class="blog-header">
                                            <!-- <div class="blog-title-top">
                                                <a href="#">Success Stories</a>
                                            </div> -->
                                            <div class="blog-title">
                                                <a href="{{ $blog->path() }}">{{ $blog->title ?? ''}}</a>
                                            </div>
                                            <div class="blog-intro">
                                                <div class="created-by"> By <span>{{ $blog->created_by ?? '' }}</span></div>
                                                <div class="published"> {{ $blog->created_at->diffForHumans() }}</div>
                                                <!-- <div class="category-name">
                                                    in <a href="#">Success Stories</a>												
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="blog-text">
                                            {!! Str::limit($blog->text, 100) ?? '' !!}
                                        </div>
                                    </div>
                                </div>
                            </section>
                            @endforeach
                            <div class="pages">
                                {{ $blogs->links('vendor.pagination.theme_paginator') }}
                            </div>
                        </section>
                    </div>
                    <!-- End Blog -->																	
                </div>		
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar-left">
                        <section class="menu-sidebar">
                            <div class="title-menu">
                                <h4>Product Categories</h4>
                            </div>
                            <ul class="nav-menu">
                                @foreach($categories as $category)
                                <li><a href="{{ $category->path() }}">{{ $category->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </section>
                        <section class="popular-event">
                            <div class="popular-event-title">
                                <h4>Popular Blogs</h4>
                            </div>
                            <div class="news-content">
                                <ul>
                                    @foreach ($popular_blogs as $pblog)		
                                        <li class="latest-news-item">
                                            <div class="news-item-inner">
                                                <div class="news-date">
                                                    <div class="news-day">{{ $pblog->created_at->format('d') }}</div>
                                                    <div class="news-month">{{ $pblog->created_at->format('M') }}</div>
                                                </div>
                                                <div class="news-info">
                                                    <div class="news-title">
                                                        <a href="{{ $pblog->path() }}">{{ $pblog->title ?? ''}}</a>
                                                    </div>
                                                    <div class="news-time">
                                                        <p>By: {{ $pblog->created_by ?? '' }}</p>				
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>										
                        </section>
                    </div>	
                </div>								
            </div>
        </div>
    </div>
    <!-- Main Content -->
</div>

@endsection