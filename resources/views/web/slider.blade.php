<div class="carousel-inner" role="listbox">
@if (count($sliders))
    {{$cont = 0}}

    @foreach($sliders as $slider)
        {{$cont ++}}
        @if ($cont ==1)
            <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url({{$slider->url_image}});">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>{{$slider->title}}</span></h2>
                            <p>{{$slider->description}}</p>
                            @if ($slider->text_btn!='')
                                <div class="text-center"><a href="{{$slider->url_btn}}"
                                                            class="btn-get-started">{{$slider->text_btn}}</a>
                                </div>

                            @endif

                        </div>
                    </div>
                </div>
        @else
            <!-- Slide * -->
                <div class="carousel-item" style="background-image: url({{$slider->url_image}});">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>{{$slider->title}}</span></h2>
                            <p>{{$slider->description}}</p>
                            @if ($slider->text_btn!='')
                                <div class="text-center"><a href="{{$slider->url_btn}}"
                                                            class="btn-get-started">{{$slider->text_btn}}</a>
                                </div>

                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @else
    @endif


</div>

<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
</a>

<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
</a>

<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
