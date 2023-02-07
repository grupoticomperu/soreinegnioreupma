  <!DOCTYPE html>
  <html lang="es">

  <head>
      <!--====== Required meta tags ======-->
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
      <!--====== Title ======-->
          <!-- Site Title-->
      <title>@yield('title', 'FAMAIC')</title>
      <META name="title" content="@yield('meta-title','FAMAIC') ">
      <META charset="utf-8" name="description" content="@yield('meta-description','FAMAIC')">
      <META name="keywords" content="@yield('keywords','FAMAIC')">

      <!--====== Favicon Icon ======-->
      <link rel="icon" href="{{ Storage::disk("s3")->url($configurations->icon) }}" type="/image/x-icon">

    <!--====== meta tags ======-->
    <title>@yield('title', 'AMPUERO INGENIEROS')</title>
    <META name="title" content="@yield('meta-title','AMPUERO INGENIEROS') ">
    <META charset="utf-8" name="description" content="@yield('meta-description','AMPUERO INGENIEROS')">
    <META name="keywords" content="@yield('keywords','AMPUERO INGENIEROS')">
    <!--====== meta tags ======-->


    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesomee.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/stylef.css') }}" />



      <!--====== Animate Css ======-->

      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100,300,400,700,900">

      <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!--====== Animate Css ======-->






      {{-- ckeditor --}}
      <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
      @stack('styles')
      @livewireStyles
  </head>

  <body>
    <div class="social-body">
        <ul>
            @if($configurations->facebook)
            <li class="facebook"><a href="{{ $configurations->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
            @endif
            {{-- <li class="twitter"><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li> --}}
            @if($configurations->youtube)
            <li class="youtube"><a href="{{ $configurations->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
            @endif

            @if($configurations->instagram)
            <li class="instagram"><a href="{{ $configurations->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
            @endif
            {{-- <li class="pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li> --}}
        </ul>
    </div>

    <div class="div_btn_pal">
        <div class="palpitar"></div>
        <a class="btn_wht_escr" href="https://api.whatsapp.com/send?phone=51{{ $configurations->movil }}&text=Hola,%20tengo%20una%20consulta" target="_blank">
            <img class="img_wht_avz" src="/images/whatsapp.png">
            <div class="info_num">
                <p class="txt_num_hover">{{ $configurations->movil }}</p>
            </div>
        </a>
    </div>



    	<!--====== Preloader ======-->
        <div class="preloader">
            <div class="preloader-body">
              <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
              </div>
            </div>
        </div>

    <div class="page">
        <!--RD Navbar-->

        @include('parts.header')

        <!-- Intro-->


        @yield('contenido')

         @include('parts.footer')

      </div>
      <!-- Page Loader-->


      <div class="snackbars" id="form-output-global"></div>
      <script src="{{ asset('js/core.min.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>



      @stack('scripts')
      @livewireScripts

 </body>
 </html>














