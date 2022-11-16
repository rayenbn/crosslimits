@extends('layouts.theme')
@section('content')
<!--Banner-->
<section class="page-heading">
    <div class="title-slide">
        <div class="container">
                <div class="banner-content slide-container">									
                    <div class="page-title">
                        <h3>{{ $blog->title }}</h3>
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
                        <li class="home"><a href="/"><i class="fa fa-home"></i>Home</a></li>
                        <li><span>//</span></li>
                        <li class="category-1"><a href="/blogs">Blog</a></li>
                        <li><span>//</span></li>
                        <li class="category-2"><a href="{{ $blog->path() }}" style="color: #fff">{{ $blog->title }}</a></li>
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
                            <section class="blog-item" style="background: #ffffff;">
                                <div class="img-blog">
                                    <img src="../storage/blogs/thumbnail/{{ $blog->image ?? ''}}" alt=""/>
                                </div>
                                <div class="blog-main">
                                    <div class="blog-content">
                                        <div class="blog-header">
                                            <!-- <div class="blog-title-top">
                                                <a href="#">Success Stories</a>
                                            </div> -->
                                            <div class="blog-title">
                                                <h3>{{ $blog->title ?? '' }}</h3>
                                            </div>	
                                        </div>
                                        <div class="details-desc-full" style="font-size: 15px;font-weight: 400">
                                        {!! $blog->text !!}
                                        </div>
                                        
                                    </div>
                                </div>																							
                            </section>											
                        </section>
                        
                    </div>
                        <!-- End Blog -->																	
                </div>		
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar-left">
                        <section class="menu-sidebar">
                            <div class="title-menu">
                                <h4>Products categories</h4>
                            </div>
                            <ul class="nav-menu">
                                @foreach ($categories as $category)		
                                    <li><a href="{{ $category->path() }}">{{ $category->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </section>
                        <section class="popular-event popular-event-details">
                            <div class="popular-event-title">
                                <h4>Popular Event</h4>
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
                        <!-- <section class="tags">									
                            <div class="tags-title archives-title">
                                <span>Tags</span>
                            </div>
                            <div class="tags-content">
                                <div class="tags-blog">
                                    <a href="#">Doctors</a>
                                </div>
                                <div class="tags-blog">
                                    <a href="#">Lorem ispum</a>
                                </div>
                                <div class="tags-blog">
                                    <a href="#">fitness</a>
                                </div>
                                <div class="tags-blog">
                                    <a href="#">boxing trainers</a>
                                </div>
                                <div class="tags-blog">
                                    <a href="#">health</a>
                                </div>
                                <div class="tags-blog">
                                    <a href="#">foods</a>
                                </div>
                            </div>
                        </section> -->
                    </div>	
                </div>								
            </div>
        </div>
    </div>
    <!-- Main Content -->
</div>

@endsection