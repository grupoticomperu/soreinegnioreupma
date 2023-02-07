@extends('layout')

@section('title')
{{ $configurations->title }}
@stop

@section('meta-title')
{{ $configurations->title }}
@stop

@section('meta-description')
{{ $configurations->description }}
@stop

@section('keywords')
{{ $configurations->keywords }}
@stop

@section('contenido')



<section class="section section-sm bg-transparent novi-background" data-preset='{"title":"Breadcrumb","category":"breadcrumb","reload":true,"id":"breadcrumb-1"}'>
    <div class="container">
            <!-- Breadcrumb-->
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Components</a></li>
              <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Testimonios</span></li>
            </ul>
      <h4>Testimonials</h4>
    </div>
  </section>

  <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Quote Cloud Slider","category":"quote, carousel","reload":true,"id":"quote-cloud-slider-2"}'>
    <div class="container">
      <h2 class="text-center">Testimonios</h2>
      <!-- Owl Carousel-->
      <div class="owl-carousel owl-style-2" data-owl="{&quot;dots&quot;:true,&quot;dotsClass&quot;:&quot;owl-dots text-center&quot;}" data-items="1" data-sm-items="2" data-md-items="3">



        @foreach ( $testimonies as $testimonie )


            <article class="quote quote-cloud quote-warning">
                <div class="quote-body">
                        <div class="rating quote-rating">
                          <div class="rating-body">
                            <div class="rating-empty"><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span>
                            </div>
                            <div class="rating-fill" style="width: 90%"><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span>
                            </div>
                          </div>
                        </div>
                  <div class="quote-text h5">
                    <q>{!! $testimonie->shortdescription !!} </q>
                  </div>
                </div>
                      <!-- Quote author-->
                      <div class="quote-author">
                        <div class="media media-md align-items-center">
                          <div class="media-left"><img class="lazy-img quote-author-image" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($testimonie->image) }}" alt="VyV Salud" width="64" height="64">
                          </div>
                          <div class="media-body">
                            <div class="quote-author-name">{{ $testimonie->name }}</div>
                            <div class="quote-author-position">Client</div>
                          </div>
                        </div>
                      </div>
            </article>



        @endforeach





      </div>
    </div>
  </section>








@stop
