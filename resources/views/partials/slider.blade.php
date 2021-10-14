<!--Banner-->
<section class="slide-container to-top">
    <div class="ms-fullscreen-template" id="slider1-wrapper">
        <!-- masterslider -->
        <div class="master-slider ms-skin-default" id="masterslider-index">
            @foreach ($sliders as $key => $slider)
            <div class="ms-slide slide-{{ $key+1 }}" data-delay="0">
                <div class="slide-pattern"></div>
                <img src="{{ asset('theme/images/blank.gif') }}" data-src="/storage/sliders/{{ $slider->picture}}" alt="{{ $slider->picture}}"/>
                <h3 class="ms-layer hps-title1" style="left:101px"
                    data-type="text"
                    data-ease="easeOutExpo"
                    data-delay="1000"
                    data-duration="0"
                    data-effect="skewleft(30,80)"
                >
                    {{ $slider->title}}
                </h3>																												
                <h3 class="ms-layer hps-title3" style="left:95px"
                    data-type="text"
                    data-delay="1900"
                    data-duration="0"
                    data-effect="rotate3dtop(-100,0,0,40,t)"
                    data-ease="easeOutExpo"
                >
                    {{ $slider->subtitle}} 
                </h3>
                
                <h3 class="ms-layer hps-title4" style="left:101px"
                    data-type="text"
                    data-delay="2500"
                    data-duration="0"
                    data-effect="rotate3dtop(-100,0,0,18,t)"
                    data-ease="easeOutExpo"
                >
                    Start Shopping
                </h3>
            </div>
            @endforeach
        </div>
        <!-- end of masterslider -->
        <div class="to-bottom" id="to-bottom"><i class="fa fa-angle-down"></i></div>
    </div>
</section>
<!--End Banner-->