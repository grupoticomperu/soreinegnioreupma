@extends('layout')

@section('title')
{{ $product->name }}
@stop

@section('meta-title')
{{ $product->title}}
@stop

@section('meta-description')
{{ $product->description }}
@stop

@section('keywords')
{{ $product->keywords }}
@stop

@section('contenido')




    <!--====== Breadcrumb Start ======-->

    <section class="section novi-bg novi-bg-img section-lg bg-gray-600 text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-md-11">
              <h2><span class="font-weight-black mt-5">{{ $product->name }}</span></h2>
              <p class="big font-weight-light text-white-6">{!! $product->description !!}</p>
              {{-- <a class="button button-primary" href="{{ route('about.index') }}">Ver más</a> --}}
            </div>
          </div>
        </div>
      </section>


    <!--====== Breadcrumb end ======-->

      @if ($product->image1 )
      <section class="section novi-bg bg-primary text-center object-wrap">
        <div class="novi-bg-img object-body object-body-left" style="background-image: url({{ Storage::disk("s3")->url($product->image1 ) }})"></div>

        <div class="container container-fluid">
          <div class="row justify-content-end section-xl">
            <div class="col-lg-6">
               <h4> <span class="font-weight-black">{{ $product->name }}</span></h4>
              <p class="big font-weight-light px-lg-5 text-white-6"></p>
              <a class="button button-white" href="{{ route('pagecontacs.index') }}">Contactar</a>
            </div>
          </div>
        </div>
      </section>
      @endif



      @if ($product->image2 )
      <section class="section novi-bg bg-gray-900 text-center object-wrap">
        <div class="novi-bg-img object-body object-body-right" style="background-image: url({{ Storage::disk("s3")->url($product->image2 ) }})"></div>

        <div class="container container-fluid">
          <div class="row section-xl">
            <div class="col-lg-6">
               <h4><span class="font-weight-black">{{ $product->name }}</span></h4>
              <p class="big font-weight-light px-lg-5 text-white-6"></p>
              <a class="button button-secondary" href="{{ route('pagecontacs.index') }}">Contactar</a>
            </div>
          </div>
        </div>
      </section>
      @endif

      @if ($product->image3 )
      <section class="section novi-bg bg-primary text-center object-wrap">
        <div class="novi-bg-img object-body object-body-left" style="background-image: url({{ Storage::disk("s3")->url($product->image3 ) }})"></div>

        <div class="container container-fluid">
          <div class="row justify-content-end section-xl">
            <div class="col-lg-6">
               <h4> <span class="font-weight-black">{{ $product->name }}</span></h4>
              <p class="big font-weight-light px-lg-5 text-white-6"></p>
              <a class="button button-white" href="{{ route('pagecontacs.index') }}">Contactar</a>
            </div>
          </div>
        </div>
      </section>
      @endif

      @if ($product->image4 )
      <section class="section novi-bg bg-gray-900 text-center object-wrap">
        <div class="novi-bg-img object-body object-body-right" style="background-image: url({{ Storage::disk("s3")->url($product->image4 ) }})"></div>

        <div class="container container-fluid">
          <div class="row section-xl">
            <div class="col-lg-6">
               <h4><span class="font-weight-black">{{ $product->name }}</span></h4>
              <p class="big font-weight-light px-lg-5 text-white-6"></p>
              <a class="button button-secondary" href="{{ route('pagecontacs.index') }}">Contactar</a>
            </div>
          </div>
        </div>
      </section>
      @endif
    <!--====== Portfolio Details Start ======-->

    <!--====== Portfolio Details End ======-->
@stop
