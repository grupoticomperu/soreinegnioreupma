@extends('layout')

@section('title')
{{ $subcategory->title }}
@stop

@section('meta-title')
{{ $subcategory->title }}
@stop

@section('meta-description')
{{ $subcategory->description }}
@stop

@section('keywords')
{{ $subcategory->keywords }}
@stop



@section('contenido')

<section class="section novi-bg novi-bg-img section-lg bg-default">
    <div class="container">
      <h2 class="text-center mt-5"><span class="font-weight-black">{{ $subcategory->name }}</span> </h2>

    </div>
</section>

@php
$i = 0;
@endphp

@foreach ($products as $product )

@php
$i = $i +1;
@endphp

  <!-- Best Services-->
  @if($i % 2 != 0)
  <section class="section novi-bg bg-primary text-center object-wrap">
    <div class="novi-bg-img object-body object-body-left" style="background-image: url({{ Storage::disk("s3")->url($product->image1 ) }})"></div>
    <div class="container container-fluid">
      <div class="row justify-content-end section-xl">
        <div class="col-lg-6">
          <h3> <span class="font-weight-black">{{ $product->name }}</span></h3>
          <p class="big font-weight-light px-lg-5 text-white-6">{!! $product->description !!}</p><a class="button button-white" href="{{ route('sucategoryproducts.showp', $product) }}">Ver más</a>
        </div>
      </div>
    </div>
  </section>
  @endif

  <!-- 100% Result Guarantee-->
  @if($i % 2 == 0)
  <section class="section novi-bg bg-gray-900 text-center object-wrap">
    <div class="novi-bg-img object-body object-body-right" style="background-image: url({{ Storage::disk("s3")->url($product->image1 ) }})"></div>
    <div class="container container-fluid">
      <div class="row section-xl">
        <div class="col-lg-6">
          <h3><span class="font-weight-black">{{ $product->name }}</span></h3>
          <p class="big font-weight-light px-lg-5 text-white-6">{!! $product->description !!}</p><a class="button button-secondary" href="{{ route('sucategoryproducts.showp', $product) }}">ver más</a>
        </div>
      </div>
    </div>
  </section>
  @endif

@endforeach

@stop
