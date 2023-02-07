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


    <!--====== Breadcrumb Start ======-->
    <section class="breadcrumb-section" style="background-image: url({{ Storage::disk("s3")->url($subcategory->image ) }});">
        <div class="container">
            <span class="page-tag">FAMAIC</span>
            <h1 class="page-title">{{ $subcategory->name }}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="#">inicio</a></li>
                <li>{{ $subcategory->name }}</li>
            </ul>
        </div>
    </section>
    <!--====== Breadcrumb end ======-->


 <!--====== Portfolio start ======-->
    <section class="portfolio-section section-gap" id="portfolio">
        <div class="container">
            <div class="portfolio-items">

           @php
               $i = 0;
           @endphp

            @foreach ($products as $product )

                @php
                $i = $i +1;
                @endphp

            @if($i % 2 != 0)
                <div class="portfolio-item portfolio-style-four">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="portfolio-thumb">
                                <img src="{{ Storage::disk("s3")->url($product->image1) }}" alt="{{ $product->name }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="portfolio-desc">
                                <span class="count">{{ $i }}</span>
                                <span class="line"></span>
                                <h5 class="title"><a href="{{ route('sucategoryproducts.showp', $product) }}">{{ $product->name }}</a></h5>
                                <span class="completed-date"></span>
                                <p>
                                    {!! $product->description !!}
                                </p>
                                <a href="{{ route('sucategoryproducts.showp', $product) }}" class="portfolio-link">Detalles del producto <span class="icon">+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($i % 2 == 0)
                <div class="portfolio-item portfolio-style-four">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 order-md-2">
                            <div class="portfolio-thumb">
                                <img src="{{ Storage::disk("s3")->url($product->image1 ) }}" alt="{{ $product->name }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 order-md-1">
                            <div class="portfolio-desc">
                                <span class="count">{{ $i }}</span>
                                <span class="line"></span>
                                <h5 class="title"><a href="{{ route('sucategoryproducts.showp', $product) }}">{{ $product->name }}</a></h5>
                                <span class="completed-date"></span>
                                <p>
                                    {!! $product->description !!}
                                </p>
                                <a href="{{ route('sucategoryproducts.showp', $product) }}" class="portfolio-link">Detalles del producto <span class="icon">+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @endforeach

            </div>
        </div>
    </section>



        <!--====== Counter Start ======-->
        <section class="counter-section counter-section-three">
            <div class="container">
                <div class="row counter-boxes counter-boxes-two">
                    <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="400ms">
                        <div class="counter-box text-center">
                            <span class="count">{{ $configurations->years }}</span>
                            <span class="title">AÑOS DE EXPERIENCIA</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="counter-box text-center">
                            <span class="count">{{ $configurations->works }}</span>
                            <span class="title">TRABAJOS REALIZADOS</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInRight" data-wow-delay="70ms">
                        <div class="counter-box text-center">
                            <span class="count">{{ $configurations->customers }}</span>
                            <span class="title">CLIENTES</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--====== Counter End ======-->
    @stop
