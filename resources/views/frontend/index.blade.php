@extends('layouts.theme')
@section('content')

@include('partials.slider', $sliders)
<div class="contents-main" id="contents-main">	
    <!--Price Table-->
    <section class="price-table">
        <div class="container">
            <div class="row">							
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="col-md-12 price-table-content">
                            <div class="price-table-img">
                                <img alt="" src="/storage/products/{{ $home_page->sec2_image1 ?? ''}}">
                            </div>
                            <div class="price-table-text">
                                {!! $home_page->sec2_text1 ?? ''!!}
                                <div class="border-bottom"></div>
                                <p>{{ $home_page->sec2_desc1 ?? '' }}</p>
                                <a href="{{ $home_page->sec2_link1 ?? '#'}}"><span>Shop Now</span></a>
                            </div>
                        </div>							
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="col-md-12 price-table-content">
                            <div class="price-table-img">
                                <img alt="" src="/storage/products/{{ $home_page->sec2_image2 ?? ''}}">
                            </div>
                            <div class="price-table-text">
                                {!! $home_page->sec2_text2 ?? ''!!}
                                <div class="border-bottom"></div>
                                <p>{{ $home_page->sec2_desc2 ?? '' }}</p>
                                <a href="{{ $home_page->sec2_link2 ?? '#'}}"><span>Shop Now</span></a>
                            </div>
                        </div>							
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="col-md-12 price-table-content">
                            <div class="price-table-img">
                                <img alt="" src="/storage/products/{{ $home_page->sec2_image3 ?? ''}}">
                            </div>
                            <div class="price-table-text">
                                {!! $home_page->sec2_text3 ?? ''!!}
                                <div class="border-bottom"></div>
                                <p>{{ $home_page->sec2_desc3 ?? '' }} </p>
                                <a href="{{ $home_page->sec2_link3 ?? '#'}}"><span>Shop Now</span></a>
                            </div>
                        </div>								
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Price Table-->

    <div class="collection">
        <div class="container">
            <div class="row">									
                <div class="collection-content">
                    <div class="col-md-4 col-sm-12 col-xs-12 box">											
                        <div class="women-content">
                            @if(isset($categories[0]))
                            <div class="masonry-small move_to_center" style="">
                                <div class="price-table-img">
                                    <img alt="" src="/storage/images/category_image/{{ $categories[0]['category_image'] ?? ''}}">
                                </div>
                                <div class="price-table-text" style="width: 100%;padding: 30px;left: unset;">
                                    <h3>{{ $categories[0]['subtitle'] ?? ''}}</h3>
                                    <h2><a href="/products/{{$categories[0]['id']}}-{{$categories[0]['slug']}}" style="color: #fff;">{{ $categories[0]['category_name'] ?? ''}}</a></h2>
                                    <div class="border-bottom"></div>
                                    <p>{{ $categories[0]['desc'] ?? ''}}</p>
                                    <!-- <span>From <span> $59</span></span> -->
                                </div>
                            </div>
                            @endif
                            @if(isset($categories[3]))
                            <div class="masonry-lagar move_to_center" style="">
                                <div class="price-table-img">
                                    <img alt="" src="/storage/images/category_image/{{ $categories[3]['category_image'] ?? ''}}">
                                </div>
                                <div class="price-table-text">
                                    <div class="masonry-lagar-content">
                                        <div class="title-masory">
                                            <h3>{{ $categories[3]['subtitle'] ?? ''}}</h3>
                                            <h2><a href="/products/{{$categories[3]['id']}}-{{$categories[3]['slug']}}" style="color: #fff;">{{ $categories[3]['category_name'] ?? ''}}</a></h2>
                                            <div class="border-bottom"></div>
                                        </div>
                                        <div class="text-masony">
                                            <p>{{ $categories[3]['desc'] ?? ''}}</p>
                                            <!-- <span>From <span> $59</span></span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 box">											
                        <div class="man-content">
                            @if(isset($categories[1]))
                            <div class="masonry-lagar move_to_center" >
                                <div class="price-table-img">
                                    <img alt="" src="/storage/images/category_image/{{ $categories[1]['category_image'] ?? ''}}">
                                </div>
                                <div class="price-table-text">
                                    <div class="masonry-lagar-content">
                                        <div class="title-masory">
                                            <h3>{{ $categories[1]['subtitle'] ?? ''}}</h3>
                                            <h2><a href="/products/{{$categories[1]['id']}}-{{$categories[1]['slug']}}" style="color: #fff;">{{ $categories[1]['category_name'] ?? ''}}</a></h2>
                                            <div class="border-bottom"></div>
                                        </div>
                                        <div class="text-masony">
                                            <p>{{ $categories[1]['desc'] ?? ''}}</p>
                                            <!-- <span>From <span> $59</span></span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(isset($categories[4]))
                            <div class="masonry-small move_to_center">
                                <div class="price-table-img">
                                    <img alt="" src="/storage/images/category_image/{{ $categories[4]['category_image'] ?? ''}}">
                                </div>
                                <div class="price-table-text" style="width: 100%;padding: 30px;left: unset;">
                                    <h3>{{ $categories[4]['subtitle'] ?? ''}}</h3>
                                    <h2><a href="/products/{{$categories[4]['id']}}-{{$categories[4]['slug']}}" style="color: #fff;">{{ $categories[4]['category_name'] ?? ''}}</a></h2>
                                    <div class="border-bottom"></div>
                                    <p>{{ $categories[4]['desc'] ?? ''}}</p>
                                    <!-- <span>From <span> $59</span></span> -->
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 box">											
                        <div class="collect-content">
                            @if(isset($categories[2]))
                            <div class="masonry-small move_to_center">
                                <div class="price-table-img">
                                    <img alt="" src="/storage/images/category_image/{{ $categories[2]['category_image'] ?? ''}}">
                                </div>
                                <div class="price-table-text" style="width: 100%;padding: 30px;left: unset;">
                                    <h3>{{ $categories[2]['subtitle'] ?? ''}}</h3>
                                    <h2><a href="/products/{{$categories[2]['id']}}-{{$categories[2]['slug']}}" style="color: #fff;">{{ $categories[2]['category_name'] ?? ''}}</a></h2>
                                    <div class="border-bottom"></div>
                                    <p>{{ $categories[1]['desc'] ?? ''}}</p>
                                    <!-- <span>From <span> $59</span></span> -->
                                </div>
                            </div>	
                            @endif
                            @if(isset($categories[5]))
                            <div class="masonry-lagar move_to_center">													
                                <div class="price-table-img">
                                    <img alt="" src="/storage/images/category_image/{{ $categories[5]['category_image'] ?? ''}}">
                                </div>
                                <div class="price-table-text">
                                    <div class="masonry-lagar-content">
                                        <div class="title-masory">
                                            <h3>{{ $categories[5]['subtitle'] ?? ''}}</h3>
                                            <h2><a href="/products/{{$categories[5]['id']}}-{{$categories[5]['slug']}}" style="color: #fff;">{{ $categories[5]['category_name'] ?? ''}}</a></h2>
                                            <div class="border-bottom"></div>
                                        </div>
                                        <div class="text-masony">
                                            <p>{{ $categories[5]['desc'] ?? ''}}</p>
                                            <!-- <span>From <span> $59</span></span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>	
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Discover-->
    <section class="training modern">
        <div class="wpb-wrapper">
            <!-- PARALLAX WINDOWS -->
            <div class="parallax-block-wrap-module auto-width">
                <div class="parallax-block bt-advance-parallax" id="parallax-block-modern">
                    <!-- PARALLAX CONTENT -->
                    <div class="control-button">
                        <div class="nav-wrap hidden">
                            <div class="nav-wrap-in next">
                                <span class="nav-next"></span>
                            </div>
                            <div class="nav-wrap-in prev">
                                <span class="nav-prev"></span>
                            </div>
                        </div>
                        <div class="button-wrap">
                            <span class="button close-btn"></span>
                        </div>
                    </div>
                    <div class="parallax-background">
                        <!--Textured and color-->
                        <div class="parallax-background-overlay"></div>
                        <img alt="" src="{{ asset('theme/images/bg-discover.png') }}">
                    </div>
                    
                    <div class="parallax-block-content default-pos">
                        <div class="container">
                            <div class="parallax-text parallax-shop parallax-gallery">																								
                                <h1>Christmas & New Years Discount</h1> 
                                <p>Click here to discover our Christmas and New Years promotion</p>
                                <span class="button open-btn"><span>Discover Now</span></span>								
                            </div>
                        </div>
                    </div>
                    
                    <div class="overlay-loading"><span class="loading"><img src="{{ asset('theme/images/loading-black.GIF')}}" alt=""/></span></div>    

                    <!-- GALLERY CONTENT -->
                    <!-- GALLERY CONTENT -->
                    @if ($galleries)
                    <div class="parallax-content-wrap">
                        <div class="parallax-content hidden">
                            <div class="parallax-content-in">
                                <div class="defxault">
                                    @foreach ($galleries->chunk(9) as $key => $chunk )
                                    <div class="parallax-col">
                                        <div class="parallax-row in-pos box1">
                                             @foreach ($chunk->chunk(3) as $key => $chunk )
                                            <div class="parallax-row">
                                                @foreach ($chunk as $key => $gallery )
                                                <div class="parallax-box-image">
                                                    <div class="thumb">
                                                        <img src="../storage/gallery/thumbnail/{{ $gallery->picture }}" alt="{{ $gallery->picture }} thumbnail"/>
                                                    </div>
                                                    <div class="show_box hidden">
                                                        <img alt="{{ $gallery->picture }}" src="../storage/gallery/{{ $gallery->picture }}" class="image-show"/>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>	
                            </div>
                            <div class="content-show-large hidden">
                                <div class="item-contain"></div>
                                <div class="loading"><img src="{{ asset('theme/images/loading-black.gif') }}" alt=""/></div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- end GALLERY CONTENT -->
                    <!-- end GALLERY CONTENT -->				  
                </div>
            </div>
        </div>													
    </section>
    <!--End Discover-->
    
   <!--Sport News-->	
   <section class="sport-new product-store">
        <div class="container">
            <div class="row">
                <div class="title-page title-about">
                    <h4>Latest News</h4>
                </div>
                @foreach ($blogs as $blog)
                <div class="col-md-4 col-sm-4 col-xs-12 sport-box">
                    <div class="img-sport">
                        <a href="{{ $blog->path() }}"><img alt="{{ $blog->image }}" src="../storage/blogs/thumbnail/{{ $blog->image }}"></a>
                        <div class="icon-sport">
                            <i class="fa fa-camera"></i>
                        </div>
                    </div>
                    <div class="sport-content">
                        <div class="title-sport"><a href="{{ $blog->path() }}">{{ $blog->title ?? ''}}</a></div>
                        {!! Str::limit($blog->text, 100) ?? '' !!}
                        <div class="read-more">
                            <a href="{{ $blog->path() }}"><i class="fa fa-chevron-right"></i> Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Sport New-->        
</div>

@endsection