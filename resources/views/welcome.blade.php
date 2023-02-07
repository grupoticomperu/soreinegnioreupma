@extends('layout')

@section('title')
{{ $configurations->metatitle }}
@stop

@section('meta-title')
{{ $configurations->metatitle }}
@stop

@section('meta-description')
{{ $configurations->metadescription }}
@stop

@section('keywords')
{{ $configurations->keywords }}
@stop



@section('contenido')

     @include('parts.slider')
	{{-- @include('parts.famaicslider') --}}

   {{--  @include('parts.famaicabout')
    @include('parts.famaiccounter')
    @include('parts.famaicsolidsolutions')
    @include('parts.famaiccontact')
    @include('parts.famaicgallery') --}}
    {{-- @include('parts.famaicteam')
    @include('parts.famaicblog') --}}



<!-- a Few words About Us-->
  <section class="section novi-bg novi-bg-img section-xl bg-gray-900 text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-11">
          <h2><span class="font-weight-black">FABRICAMOS</span></h2>
          <p class="big font-weight-light px-lg-4 text-white-6">{{ $configurations->description }}</p><a class="button button-primary" href="{{ route('about.index') }}">Ver más</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Best Services-->
{{--   <section class="section novi-bg bg-primary text-center object-wrap">
    <div class="novi-bg-img object-body object-body-left" style="background-image: url(images/home-01-960x710.jpg)"></div>
    <div class="container container-fluid">
      <div class="row justify-content-end section-xl">
        <div class="col-lg-6">
          <h2>Best <span class="font-weight-black">Services</span></h2>
          <p class="big font-weight-light px-lg-5 text-white-6">Car Repair can solve almost any problem that occurs with your vehicle. From engine repairs and oil change to regular maintenance and diagnostics, you will always get reliable services from our ASE certified technicians who use the latest in automotive equipment and diagnostic software.</p><a class="button button-white" href="#">Read More</a>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- 100% Result Guarantee-->
{{--   <section class="section novi-bg bg-gray-900 text-center object-wrap">
    <div class="novi-bg-img object-body object-body-right" style="background-image: url(images/home-02-960x710.jpg)"></div>
    <div class="container container-fluid">
      <div class="row section-xl">
        <div class="col-lg-6">
          <h2>100% Result <span class="font-weight-black">Guarantee</span></h2>
          <p class="big font-weight-light px-lg-5 text-white-6">Car Repair stands for expertise, value, and professionalism - and has from the day the company began. We were the first automotive aftermarket repair company to offer a lifetime guarantee on select services, and today we guarantee that the results of our work will meet your expectations.</p><a class="button button-secondary" href="#">Read More</a>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- Our Advantages-->
  <section class="section novi-bg novi-bg-img bg-white section-xl">
    <div class="container">
      <h2 class="text-center"><span class="font-weight-black d-inline-block">Ampuero Ingenieros</span> </h2>
      <div class="row row-50 row-lg-80 box-modern-wrap mt-lg-80">

        @foreach ( $offers->take(4) as $offer )
        <div class="col-sm-6">

          <div class="box-modern">
            <div class="box-modern-header">

              <div class="box-modern-icon icon novi-icon"><img src="/images/svg/{{ $offer->image }}" width="80px" alt="Ampuero Ingenieros"></div>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="130.5px" height="150.5px">
                <path fill-rule="evenodd" stroke="#ea202e" stroke-width="3px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M64.500,147.500 L1.511,111.000 L1.511,38.000 L64.500,1.500 L127.489,38.000 L127.489,111.000 L64.500,147.500 Z"></path>
              </svg>
            </div>
            <div class="box-modern-body">
              <h4 class="box-modern-title"><a href="#">{{ $offer->title }}</a></h4>
              <p class="box-modern-text">{{ $offer->description }}</p>
            </div>
          </div>
        </div>
        @endforeach



      </div>
      <div class="mt-50 mt-lg-80 text-center"><a class="button button-secondary" href="{{ route('about.index') }}">Ver más</a></div>
    </div>
  </section>


  <!-- Our Services-->
{{--   <section class="parallax-container section-xl" data-parallax-img="images/home-03-1920x1200.jpg">
    <div class="parallax-content">
      <div class="container">
        <h2 class="text-center">Our <span class="font-weight-black">Services</span></h2>
        <div class="row row-30 mt-lg-90">
          <div class="col-xl-6 col-lg-4 col-sm-6">
            <!-- Box Classic-->
            <div class="box-classic">
              <figure class="box-classic-figure"><a href="#"><img src="images/home-04-210x210.jpg" alt="" width="210" height="210"/></a></figure>
              <div class="box-classic-body">
                <h4 class="box-classic-title"><a href="#">Brake Repair</a></h4>
                <p class="box-classic-text">From the brake pedal to hydraulic brake fluid, our technicians can perform brake repair on any make and model.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-4 col-sm-6">
            <!-- Box Classic-->
            <div class="box-classic">
              <figure class="box-classic-figure"><a href="#"><img src="images/home-05-210x210.jpg" alt="" width="210" height="210"/></a></figure>
              <div class="box-classic-body">
                <h4 class="box-classic-title"><a href="#">Engine Repair</a></h4>
                <p class="box-classic-text">We take the welfare of your engine seriously and offer services to prevent the need for future engine replacement.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-4 col-sm-6">
            <!-- Box Classic-->
            <div class="box-classic">
              <figure class="box-classic-figure"><a href="#"><img src="images/home-06-210x210.jpg" alt="" width="210" height="210"/></a></figure>
              <div class="box-classic-body">
                <h4 class="box-classic-title"><a href="#">Oil Change</a></h4>
                <p class="box-classic-text">One of the most effective and inexpensive ways to help protect your car, is to change the oil and the oil filter regularly.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-4 col-sm-6">
            <!-- Box Classic-->
            <div class="box-classic">
              <figure class="box-classic-figure"><a href="#"><img src="images/home-07-210x210.jpg" alt="" width="210" height="210"/></a></figure>
              <div class="box-classic-body">
                <h4 class="box-classic-title"><a href="#">Wheel Change</a></h4>
                <p class="box-classic-text">We provide extensive wheel change services that include emergency tire replacement when you are on the road.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- What Our Clients say-->
{{--   <section class="section novi-bg novi-bg-img bg-white section-xxl">
    <div class="container">
      <h2 class="text-center"><span class="font-weight-black">What Our</span> Clients say</h2>
      <div class="row row-fix justify-content-center">
        <div class="col-lg-8 col-sm-10">
          <!-- Owl Carousel-->
          <div class="owl-carousel" data-items="1" data-dots="true" data-autoplay="5000" data-loop="true" data-mouse-drag="false">
            <div class="quote-classic">
              <figure class="quote-classic-figure"><img src="images/home-08-302x302.jpg" alt="" width="302" height="302"/>
              </figure><img class="quote-classic-quote" src="images/quote-97x51.png" alt="" width="97" height="51"/>
              <h4 class="quote-classic-title">Jane Williams</h4>
              <p class="quote-classic-text">I love Car Repair because they treat their customers with special knowledge of all auto repairs, big or small. They are always courteous and friendly and contact you about any extra needed repairs before the work is done. I would recommend them to everyone for your auto needs. </p>
            </div>
            <div class="quote-classic">
              <figure class="quote-classic-figure"><img src="images/home-09-302x302.jpg" alt="" width="302" height="302"/>
              </figure><img class="quote-classic-quote" src="images/quote-97x51.png" alt="" width="97" height="51"/>
              <h4 class="quote-classic-title">Peter Smith</h4>
              <p class="quote-classic-text">I have been going to Car Repair for almost four years now, and have always received great service and fair prices. They always go out of their way to finish the work on time, and if it’s very busy they will rent a car. Also, you can’t beat their National Certified Auto Guarantee.</p>
            </div>
            <div class="quote-classic">
              <figure class="quote-classic-figure"><img src="images/home-10-302x302.jpg" alt="" width="302" height="302"/>
              </figure><img class="quote-classic-quote" src="images/quote-97x51.png" alt="" width="97" height="51"/>
              <h4 class="quote-classic-title">Kate McMillan</h4>
              <p class="quote-classic-text">The owner of Car Repair didn’t want me to have to leave with a car that doesn’t work. So she adjusted the price to meet my ability to pay and did the work at a great rate as a favor to me. Besides they offered the top-notch customer service that’s hard to find nowadays.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}



@stop

