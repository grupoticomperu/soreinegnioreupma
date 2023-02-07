@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Modificar Página de Contactos </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">inicio</a></li>
                    <li class="breadcrumb-item active">Modificar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    @stop

@section('content')


 <section class="content">
      <div class="container-fluid">


        {!! Form::model($pagecontact, ['route'=>['pagecontacts.update', $pagecontact], 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}

        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificando Página de Contactos</h3>
              </div>
              <div class="card-body">

                <div class="form-group">
                  {!! Form::label('title1', 'Título:') !!}
                  {!! Form::text('title1', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el título1 de contacto']) !!}

                  @error('title1')
                      <small class="text-danger">{{$message}}</small>
                  @enderror

                </div>


                <div class="form-group">
                    {!! Form::label('title2', 'Título:') !!}
                    {!! Form::text('title2', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el título2 de contacto']) !!}

                    @error('title2')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>


                <div class="form-group">
                    {!! Form::label('saludo', 'Saludo:') !!}
                    {!! Form::text('saludo', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Saludo de contacto']) !!}

                    @error('saludo')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>


                <div class="form-group">
                    {!! Form::label('map', 'Mapa de Ubicación:') !!}
                    {!! Form::textarea('map', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Mapa', 'rows'=>'4']) !!}

                    @error('map')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>


                <div class="mb-12 row">
                    <div class="col-md-6">
                        <div class="image-wrapper">
                            @isset($pagecontact->imagen)
                                <img width="200px" id="logo" src="{{ Storage::disk("s3")->url($pagecontact->imagen)}}" alt="">
                            @else
                                <img width="200px" id="logo" src="/images/default.jpg" alt="">
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('imagen', 'imagen de contacto') !!}
                            {!! Form::file('imagen', ['class'=> 'form-control-file', 'accept'=>'img/*']) !!}
                        @error('imagen')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        </div>

                        <p>Escoja tu imagen</p>
                    </div>

                </div>




                <div class="form-group">
                  {!! Form::label('title', 'Título Google:') !!}
                  {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Ingrese titulo para google']) !!}

                  @error('title')
                      <small class="text-danger">{{$message}}</small>
                  @enderror

                </div>


                <div class="form-group">
                  {!! Form::label('description', 'Description Google') !!}
                  {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la descripción de tu Empresa', 'rows'=>'3']) !!}

                  @error('description')
                      <small class="text-danger">{{$message}}</small>
                  @enderror

                </div>


                <div class="form-group">
                  {!! Form::label('keywords', 'Keywords Google') !!}
                  {!! Form::textarea('keywords', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la descripción de tu Empresa', 'rows'=>'3']) !!}

                  @error('keywords')
                      <small class="text-danger">{{$message}}</small>
                  @enderror

                </div>






              </div>


                <div class="card-footer">

                  {!! Form::submit('Actualizar configuration', ['class'=>'btn btn-primary btn-block']) !!}

                </div>

            </div>
          </div>
        </div>


      {!! Form::close() !!}


        <!-- /.row -->
      </div><!-- /.container-fluid -->
 </section>

@stop

@push('styles')
  <link rel="stylesheet" href="/adminlte/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
@endpush

@push('scripts')

  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script src="/adminlte/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>

<script>
    //Timepicker
   // $('#timepicker').datetimepicker({
   //   format: 'LT'
   // })

    $('#datepicker').datepicker({
      autoclose: true
    })
</script>


<script>

    CKEDITOR.replace('editor')
    //bootstrap WYSIHTML5 - text editor
    $('.select2').select2()
</script>

@endpush


