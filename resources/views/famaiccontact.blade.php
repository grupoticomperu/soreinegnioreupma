@extends('layout')


@section('title')
{{ $pagescontacts->title }}
@stop

@section('meta-title')
{{ $pagescontacts->title }}
@stop

@section('meta-description')
{{ $pagescontacts->description }}
@stop

@section('keywords')
{{ $pagescontacts->keywords }}
@stop

@section('contenido')


    <!--====== Breadcrumb Start ======-->

    <!--====== Breadcrumb end ======-->



    <!--====== Contact Section Start ======-->

    <!--====== Contact Section End ======-->





    <section class="section novi-bg novi-bg-img section-md bg-default mt-50">
        <div class="container">
          <div class="row row-fix row-50">
            <div class="col-lg-6">
              <h3 class="text-center"><span class="font-weight-black"></span> </h3>
              <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
              <!--Please note that YOUR_API_KEY should replaced with your key.-->
              <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
              <div>

                <img src="/images/contactar.jpg" width="400px" alt="Ampuero Ingenieros">
                <ul class="google-map-markers">
                  <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                </ul>
              </div>
              <div class="address-wrap">

                <ul class="contact-list">
                  <li><span>Cel:</span><a href="tel:#">{{ $configurations->movil }}</a></li>
                  <li><span>Telf:</span><a href="tel:#">{{ $configurations->telephono }}</a></li>

                  <li><span>Correo:</span><a href="mailto:#">{{ $configurations->email }}</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-6">
              <h3 class="text-center"><span class="font-weight-black">Contáctenos</span></h3>
              <!--RD Mailform-->
              @if(session()->has('flash'))
              <div class="col-md-12 mb-3">
                <div class="alert alert-danger ">{{ session('flash') }}</div>
              </div>
              @endif
              <form  method="post" action="{{ route('contacts.store') }}">
                {{ csrf_field() }}
                <div class="col-md-12 mb-3">
                    <div class="form-wrap">

                    <label >Nombres y Apellidos</label>
                    <input class="form-control" id="contact-name" type="text" name="nombres" value="{{old('nombres')}}" required data-constraints="@Required">
                    {!! $errors->first('nombres', '<span class=error>:message</span>')!!}

                    </div>
                </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-wrap">
                        <label> Celular o Telefono </label>
                      <input class="form-control" id="contact-phone" type="text" name="celular" value="{{old('celular')}}" required data-constraints="@PhoneNumber @Required">
                      {!! $errors->first('celular', '<span class=error>:message</span>')!!}
                    </div>
                  </div>
                  <div class="col-sm-12 mb-3">
                    <div class="form-wrap">
                      <label>Mensaje</label>
                      <textarea class="form-control" rows= "5" id="contact-message" name="mensaje" required data-constraints="@Required"> {{old('mensaje')}} </textarea>

                      @error('mensaje')
                      <mark> {{$message}} </mark>
                     @enderror

                    </div>
                  </div>
                  <div class="col-md-12 mb-4">
                    <div class="form-wrap">
                        <label for="contact-email">E-mail</label>
                      <input class="form-control" id="contact-email" type="email" name="email" value="{{old('email')}}" required data-constraints="@Email @Required">

                      {!! $errors->first('email', '<span class=error>:message</span>')!!}
                    </div>
                  </div>




                  <div class="col-md-12">
                    <div class="form-button">
                    {{-- <button class="button button-primary-outline" type="submit">Send</button> --}}
                    <button class="btn btn-primary " type="submit">Enviar mensaje</button>
                    </div>
                  </div>

              </form>
            </div>
          </div>
        </div>
      </section>


    <!--====== Contact Maps Start ======-->
    <section class="contact-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.477979942005!2d-77.09144418464946!3d-12.01057954449978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce902365f0c7%3A0x9c8d73c2d5d5e281!2sGRUAS%20AMPUERO!5e0!3m2!1ses!2spe!4v1675367875657!5m2!1ses!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!--====== Contact Maps End ======-->

@stop
