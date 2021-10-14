@extends('layouts.theme')
@section('content')
<!--Banner-->
@if (isset($aboutus->banner))
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
@endif
<div class="page-content">					
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                        <ul>
                            <li class="home"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li><span>//</span></li>
                            <li class="category-2">About us</li>
                        </ul>
                </div>
            </div>
        </div>		
    </div>
    <!-- End Breadcrumbs -->
					
    <!-- Menu About-->
    <div class="navbar-custom navbar menu-about">
        <div class="container">
            <div class="row">					
                <div class="nav-container">
                    <nav class="collapse navbar-collapse navbar-main-collapse mainnav" role="navigation">
                        <ul class="nav-menu nav navbar-nav">
                            <li class="selected active"><a href="#classes">Why choose us</a></li>
                            <li><a href="#gallery">gallery</a></li>
                        </ul>
                    </nav>							
                </div>
            </div>
        </div>
    </div>
    <!-- End Menu About-->
    
    <!-- Athlete Class -->
    <section id="classes" class="classes">						
        <div class="container">						
            <div class="classes-athlete">
                <div class="classes-inner choose">
                    <div class="classes-content">									
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="block-left">
                                        <div class="about-img">
                                        @if(isset($aboutus->sec_one_img))
                                        <img src="/storage/images/banners/{{ $aboutus->sec_one_img ?? ''}}" alt="{{ $aboutus->sec_one_img ?? ''}}"/>
                                        @endif
                                        </div>
                                        <div class="about-title">
                                            <h3>{{ $aboutus->sec_one_title ?? ''}}</h3>
                                        </div>
                                        <div class="about-desc">
                                            {!! $aboutus->sec_one_text ?? '' !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="block-right">
                                        <div class="block-right-info">
                                            <div class="about-info">
                                                <div class="icon-block">
                                                    <i class="fa fa-tablet"></i>
                                                </div>
                                                <div class="about-details">
                                                    <h4 class="about-details-title">{{ $aboutus->sec_two_t1 ?? ''}}</h4>
                                                    <p>
                                                    {!! $aboutus->sec_two_desc1 ?? '' !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="about-info">
                                                <div class="icon-block">
                                                    <i class="fa fa-paint-brush"></i>
                                                </div>
                                                <div class="about-details">
                                                    <h4 class="about-details-title">{{ $aboutus->sec_two_t2 ?? ''}}</h4>
                                                    <p>
                                                    {!! $aboutus->sec_two_desc2 ?? '' !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="about-info">
                                                <div class="icon-block">
                                                    <i class="fa fa-paper-plane"></i>
                                                </div>
                                                <div class="about-details">
                                                    <h4 class="about-details-title">{{ $aboutus->sec_two_t3 ?? ''}}</h4>
                                                    <p>
                                                    {!! $aboutus->sec_two_desc3 ?? '' !!}
                                                    </p>
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
    </section>
    <!-- End Athlete Class -->
    
    <!--Modern Equipment-->
    <section class="training modern" id="gallery">					
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
                        <img alt="" src="/storage/images/banners/{{ $aboutus->gallery_banner ?? '' }}">
                    </div>
                    
                    <div class="parallax-block-content default-pos">
                        <div class="container">
                            <div class="parallax-text parallax-gallery">
                                <h1 class="training-title" style="color: white;">{{ $aboutus->gallery_title ?? ''}}</h1>
                                <p class="join-us" style="color: white;">{{ $aboutus->gallery_subtitle ?? ''}}</p>
                                <span class="button open-btn"><span>Gallery Images</span></span>								
                            </div>
                        </div>
                    </div>
                    
                    <div class="overlay-loading">
                        <span class="loading"><img src="{{ asset('theme/images/loading-black.gif') }}" alt=""/></span>
                    </div>    

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
                </div>
            </div>
        </div>													
    </section>				
    <!--End Modern Equipment-->
    
    
</div>


@endsection