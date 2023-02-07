<div>

    <section class="section section-sm bg-transparent novi-background" data-preset='{"title":"Breadcrumb","category":"breadcrumb","reload":true,"id":"breadcrumb-6"}'>
        <div class="container">
                <!-- Breadcrumb-->
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.html">inicio</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Productos</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">{{$subcategory->categoria->name}}</a></li>
                  <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">{{$subcategory->name}}</span></li>
                </ul>
        </div>
      </section>


    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Shop Grid","category":"shop","reload":true,"id":"shop-grid"}'>
        <div class="container">
          <h1 class="text-center">{{$subcategory->name}}</h1>
          <div class="row row-50 novi-disabled">

                <div class="col-lg-3">
                    <div class="row row-40 row-md-50">
                        <div class="col-sm-6 col-md-4 col-lg-12">
                             <h6>Marcas</h6>
                            <div class="offset-xs">

                                @foreach ($marcas as $marca )
                                <div >
                                    <a class="form-check-label" for="check2">{{ $marca->name }}
                                    </a>
                                </div>
                                @endforeach



                            </div>
                        </div>



                    </div>
                </div>

                <div class="col-lg-9">
                                <!-- Product toolbar-->

                    <div class="row row-30 row-sm-40 row-md-50 row-offset-lg">
                        @foreach ($products as $product )
                            <div class="col-6 col-md-4">
                                <article class="product">
                                    <div class="product-figure"><img class="lazy-img product-image" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($product->image1 ) }}" alt="" width="290" height="372">
                                        <div class="product-link">
                                            <a class="icon icon-circle icon-xs icon-primary-filled int-cart novi-icon" href="{{ route('sucategoryproducts.showp', $product) }}"></a>
                                        </div>
                                    </div>
                                    <div class="product-title h6"><a href="{{ route('sucategoryproducts.showp', $product) }}">{{ $product->name }}</a></div>
                                    <div class="product-price"><span>US$ {{ $product->saleprice }}</span>
                                    </div>
                                </article>
                            </div>
                        @endforeach

                    </div>
                    {{-- <div class="d-flex flex-row justify-content-center"> --}}
                        <ul class="pag pag-simple justify-content-center">
                            <div> {!! $products->links() !!} </div>
                        </ul>


                    {{-- </div> --}}
                </div>

          </div>
        </div>
    </section>

    
    @push('styles')
      {{-- <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css"> --}}
    {{-- <link rel="stylesheet" href="/adminlte/css/adminlte.min.css"> --}}
     {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}

    @endpush

    @push('scripts')
            <!-- jQuery -->
        {{-- <script src="/adminlte/plugins/jquery/jquery.min.js"></script> --}}

        <!-- Bootstrap 4 -->
{{--         <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="/adminlte/js/adminlte.min.js"></script> --}}


         {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> --}}

         {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> --}}

    @endpush

</div>
