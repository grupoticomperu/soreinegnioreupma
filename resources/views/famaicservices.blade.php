@extends('layout')

@section('title')
  {{ $pageservice->title }}
@stop

@section('meta-title')

@stop

@section('meta-description')

@stop

@section('keywords')

@stop

@section('contenido')




    <!--====== Breadcrumb Start ======-->
    <section class="breadcrumb-section" style="background-image: url( {{ Storage::disk("s3")->url($pageservice->image ) }} );">
        <div class="container">
            <span class="page-tag">Famaic</span>
            <h1 class="page-title"> {{ $pageservice->head1 }} </h1>

            <ul class="breadcrumb-nav">
                <li><a href="#">Inicio</a></li>
                <li>Servicios</li>
            </ul>
        </div>
    </section>
    <!--====== Breadcrumb end ======-->

    <!--====== Advanced Tab Start ======-->
    <section class="advanced-tabs section-gap">
        <div class="container">
            <div class="tab-content">
                @php
                    $i = 0;
                @endphp
                @foreach ($services as $service )
                    @php
                        $i = $i+1;
                    @endphp

                <div role="tabpanel" class="tab-pane fade {{ $i==1?'active show':'' }} " id="tab-{{ $i }}">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <img src="{{ Storage::disk("s3")->url($service->imagen1 ) }}" alt="{{ $service->title }}">
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="advanced-tab-text">
                                <div class="section-title mb-40">
                                    <span class="title-tag">famaic</span>
                                    <h2 class="title">{{ $service->title }} </h2>
                                    <p>
                                        {!!  $service->shortdescription !!}
                                    </p>
                                </div>
                                <p>
                                    {!!  $service->longdescription !!}
                                </p>

                                <a href="{{ route('pagecontacs.index')}}" class="main-btn main-btn-2 mt-40">Contáctenos <span class="icon">+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav advanced-tab-btns" role="tablist">
                @php
                    $i = 0;
                @endphp
                @foreach ($services as $service )
                    @php
                        $i = $i+1;
                    @endphp

                <li class="nav-item">
                    <a class="nav-link {{ $i==1?'active':'' }}" href="#tab-{{ $i }}" role="tab" data-toggle="tab">
                        <span class="icon"><i class="flaticon-alarm-clock"></i></span>
                        <span class="title">{{ $service->title }}</span>
                        {{-- <span>FAMAIC</span> --}}
                    </a>
                </li>
                @endforeach

            </ul>
        </div>
    </section>


@stop
