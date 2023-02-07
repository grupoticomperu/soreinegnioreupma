@extends('layout')

@section('title')
{{ $abouts->title }}
@stop

@section('meta-title')
{{ $abouts->title }}
@stop

@section('meta-description')
{{ $abouts->description }}
@stop

@section('keywords')
{{ $abouts->keywords }}
@stop

@section('contenido')

    <!--====== Breadcrumb Start ======-->


    <section class="section novi-bg novi-bg-img section-lg bg-default">
        <div class="container">
          <h3 class="text-center"><span class="font-weight-black">Nosotros</span></h3>
          <div class="row row-30">
            <div class="col-lg-5">
                @if($abouts->imagenbaner)
                <img src="{{ Storage::disk("s3")->url($abouts->imagenbaner ) }}" alt="{{ $abouts->title }}" width="500" height="250"/>
                @else
                <img src="" alt="{{ $abouts->title }}" width="500" height="250"/>
                @endif

            </div>
            <div class="col-lg-7">
              <h6>NOSOTROS.</h6>
              <p>{!! $abouts->our !!}</p>
            </div>
          </div>
        </div>
      </section>
    <!--====== Breadcrumb end ======-->

    <!--====== About Section Start ======-->

    <!--====== About Section End ======-->

    <!--====== Counter Start ======-->

    <section class="section novi-bg novi-bg-img bg-primary text-center object-wrap">
        @if ($abouts->imagen1)
        <div class="novi-bg-img object-body object-body-right object-75" style="background-image: url({{ Storage::disk("s3")->url($abouts->imagen1 ) }})"></div>
        @else
        <div class="novi-bg-img object-body object-body-right object-75" style="background-image: url()"></div>
        @endif

        <div class="container">
          <div class="row row-fix section-lg">
            <div class="col-lg-9">
              <h3><span class="font-weight-black">AMPUERO</span> INGENIEROS</h3>
              <div class="row row-50 box-index">
                <div class="col-md-6">
                  <div class="post-classic">
                    <div class="post-classic-icon box-index-count"></div>
                    <h6 class="post-classic-title"><a href="#">MISIÓN</a></h6>
                    <p class="post-classic-text">{!! $abouts->mission !!}</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="post-classic">
                    <div class="post-classic-icon box-index-count"></div>
                    <h6 class="post-classic-title"><a href="#">vISIÓN</a></h6>
                    <p class="post-classic-text">{!! $abouts->vission !!}</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="section novi-bg novi-bg-img section-lg bg-white">
        <div class="container">
          <h3 class="text-center"><span class="font-weight-black">AMPUERO</span> INGENIEROS</h3>
          <!--Bootstrap tabs-->
          <div class="tabs-custom tabs-vertical tabs-corporate" id="tabs-1">
            <!--Nav tabs-->
            <ul class="nav nav-tabs nav-tabs-modern">
              <li class="nav-item" role="presentation"><a class="nav-link-modern active" href="#tabs-1-1" data-toggle="tab">
                  <div class="icon novi-icon linearicons-volume-high"></div>FABRICACIÓN</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link-modern" href="#tabs-1-2" data-toggle="tab">
                  <div class="icon novi-icon linearicons-volume-high"></div>MANTENIMIENTO</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link-modern" href="#tabs-1-3" data-toggle="tab">
                  <div class="icon novi-icon linearicons-volume-high"></div>ACCESORIOS</a></li>
            </ul>
            <!--Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-1-1">
                <h4>{{ $offers[0]->title }}</h4>
                <p>{{ $offers[0]->description }}</p>

              </div>
              <div class="tab-pane fade" id="tabs-1-2">
                <h4>{{ $offers[1]->title }}</h4>
                <p>{{ $offers[1]->description }}</p>
              </div>
              <div class="tab-pane fade" id="tabs-1-3">
                <h4>{{ $offers[2]->title }}</h4>
                <p>{{ $offers[2]->description }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>



    <!--====== Counter End ======-->

    <!--====== History Section Start ======-->
    <!--====== Team Section Start ======-->

    <!--====== Team Section End ======-->

    <!--====== Testimonials End ======-->
@stop
