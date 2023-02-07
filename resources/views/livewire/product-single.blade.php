<div>




    <section class="section section-sm bg-transparent novi-background" data-preset='{"title":"Breadcrumb","category":"breadcrumb","reload":true,"id":"breadcrumb-6"}'>
        <div class="container">
                <!-- Breadcrumb-->
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.html">inicio</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">productos</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Single product</a></li>
                  <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">{{ $product->name }}</span></li>
                </ul>
        </div>
      </section>
      <!-- Product overview-->
      <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Product Overview","category":"shop","reload":true,"id":"product-overview-2"}'>
        <div class="container">
          <div class="row row-50">
            <div wire:ignore class="col-md-6 col-lg-7">
              <div class="slick-modern">
                <div class="slick-slider slider-nav" data-slick='{"slidesToShow":5,"slidesToScroll":5,"arrows":false,"asNavFor":".slider-for","focusOnSelect":true,"vertical":true}'>
                  <div class="slick-content"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($product->image1 ) }}" alt="{{ $product->name }}" width="542" height="694">
                  </div>
                  <div class="slick-content"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($product->image2 ) }}" alt="{{ $product->name }}" width="542" height="694">
                  </div>
                  <div class="slick-content"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($product->image3 ) }}" alt="{{ $product->name }}" width="542" height="694">
                  </div>
                  <div class="slick-content"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($product->image4 ) }}" alt="{{ $product->name }}" width="542" height="694">
                  </div>

                </div>
                <div class="slick-slider slider-for" data-slick='{"arrows":false,"asNavFor":".slider-nav","autoplay":true,"autoplaySpeed":2000,"fade":true}'>
                  <div class="slick-content"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($product->image1 ) }}" alt="{{ $product->name }}" width="542" height="694">
                  </div>
                  <div class="slick-content"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($product->image2 ) }}" alt="{{ $product->name }}" width="542" height="694">
                  </div>
                  <div class="slick-content"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($product->image3 ) }}" alt="{{ $product->name }}" width="542" height="694">
                  </div>
                  <div class="slick-content"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($product->image4 ) }}" alt="{{ $product->name }}" width="542" height="694">
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5">
              <div class="product-overview ps-xxl-5">
                <div class="product-overview-item">
                  {{-- <div class="small fw-normal">----</div> --}}
                  <h3 class="product-overview-name">{{ $product->name }}</h3>
                  <div class="product-overview-price">
                    {{-- <del>$27</del><span>$24</span> --}}
                  </div>
                  <div class="product-overview-rating">
                          <div class="rating rating-orange">
                            <div class="rating-body">
                              <div class="rating-empty"><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span>
                              </div>
                              <div class="rating-fill" style="width: 90%"><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span>
                              </div>
                            </div>
                          </div><a class="product-overview-review ms-4" href="#reviews" data-anchor-link="">3 customer reviews</a>
                  </div>
                </div>




                <div>

                    @if(session()->has('flash'))
                    <div class="alert alert-success "><mark>{{ session('flash') }}</mark></div>
                    @endif


                    <div class="col-md-11 col-lg-10 col-xl-9 ">
                      {{-- <h3>Cotizar </h3> --}}

                     {{--  <form class="form-control"> --}}
                        <div class="form-control form-group">
                          <div >
                            <textarea wire:model="message" class="form-control" placeholder="ingrese su solicitud..."></textarea>
                            {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                          </div>
                        </div>

                        <div class="form-group">
                         {{--  <label for="input-name">Name *</label> --}}
                          <div class="position-relative {{ $errors->has('name') ? 'text-danger' : '' }}">
                            <input wire:model="name" value="{{ old('name') }}" class="form-control" type="text" placeholder="Nombres y Apellidos" >
                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                          </div>
                        </div>

                        <div class="form-group">
                         {{--  <label for="input-email">E-mail *</label> --}}
                          <div class="position-relative {{ $errors->has('email') ? 'text-danger' : '' }}">
                            <input wire:model="email" class="form-control" type="email"  placeholder="Tu Correo" >
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                          </div>
                        </div>

                        <div class="form-group">
                            {{--  <label for="input-name">Name *</label> --}}
                             <div class="position-relative {{ $errors->has('movil') ? 'text-danger' : '' }}">
                               <input wire:model="movil" class="form-control" type="text" placeholder="Celular" >
                               {!! $errors->first('movil', '<span class="help-block">:message</span>') !!}
                             </div>
                        </div>

                        <button class="btn btn-lg btn-secondary" wire:click="enviar">Solicitar este Producto Ahora</button>
                      {{-- </form> --}}
                    </div>
                  </div>







              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Product details-->
      <section class="section section-lg bg-transparent novi-background" id="reviews" data-preset='{"title":"Product Details","category":"shop, tab","reload":true,"id":"product-details"}'>
        <div class="container">
          <div class="row justify-content-lg-end">
            <div class="col-lg-11">
              <div class="tab">
                <ul class="nav nav-classic" role="tablist">
                  <li class="nav-item"><a class="nav-link h4 active" data-bs-toggle="tab" href="#navClassic1-1" role="tab" aria-selected="true">Descripción</a></li>
                  <li class="nav-item"><a class="nav-link h4" data-bs-toggle="tab" href="#navClassic1-2" role="tab" aria-selected="false">Brochure</a></li>
                  <li class="nav-item"><a class="nav-link h4" data-bs-toggle="tab" href="#navClassic1-3" role="tab" aria-selected="false">Video</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="navClassic1-1" role="tabpanel">
                    <p>Descripción:</p> {!! $product->description !!}
                    <p>Marca:</p>{{ $product->marca->name }}
                  </div>

                  <div class="tab-pane fade" id="navClassic1-2" role="tabpanel">
                    <div>
                        <label>Brochure</label>
                        <div>
                            @isset($product->brochure)
                                <a href="{{ Storage::disk("s3")->url($product->brochure) }}" target="_blank">
                                    <img src="{{ asset('images/logopdf.jpg') }}">
                                </a>
                            @else
                                <a href="#">No hay Brochure</a>
                            @endif
                        </div>
                    </div>
                  </div>


                  <div class="tab-pane fade" id="navClassic1-3" role="tabpanel">

                    @isset($product->video)
                        <h3>Video del Producto</h3>
                        <div>{!! $product->video !!}</div>
                    @else
                        <a href="#">No hay Video</a>
                    @endif

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Popular product-->

      @if( $cant > 0)



      <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Popular Product","category":"shop","reload":true,"id":"popular-product"}'>
        <div class="container">
          <h3>Productos Similares</h3>



          <div class="row row-30 row-sm-40 row-md-50">



            @foreach ( $productrelacionado->take($cant) as $pr)
            <div class="col-6 col-md-4 col-lg-3">
                    <!-- Product-->
                    <article class="product">
                      <div class="product-figure"><img class="lazy-img product-image" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="{{ Storage::disk("s3")->url($product->image4 ) }}" alt="{{ $product->name }}" width="290" height="372">
                        <div class="product-link"><a class="icon icon-circle icon-xs icon-primary-filled int-cart novi-icon" href="{{ route('sucategoryproducts.showp', $pr) }}"></a></div>
                      </div>
                      <div class="product-title h6"><a href="{{ route('sucategoryproducts.showp', $pr) }}">{{ $pr->name }}</a></div>
                      <div class="product-price"><span>US$ {{ $pr->saleprice }}</span>
                      </div>
                    </article>
            </div>
            @endforeach

          </div>
        </div>
      </section>
      @endif
      <!-- Grid view-->



</div>
