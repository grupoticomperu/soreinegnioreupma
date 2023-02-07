@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Modificar Página de Servicios </h1>
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


        {!! Form::model($pageservice, ['route'=>['pageservices.update', $pageservice], 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}

        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificando Página de Servicios</h3>
              </div>
              <div class="card-body">

                <div class="form-group">
                  {!! Form::label('head1', 'Contenido:') !!}
                  {!! Form::text('head1', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el título1 de contacto']) !!}

                  @error('head1')
                      <small class="text-danger">{{$message}}</small>
                  @enderror

                </div>


                <div class="form-group">
                    {!! Form::label('head2', 'Contenido:') !!}
                    {!! Form::text('head2', null, ['class'=>'form-control', 'placeholder'=>'Ingrese contenido de servicio']) !!}



                </div>





                <div class="mb-12 row">
                    <div class="col-md-6">
                        <div class="image-wrapper">
                            @isset($pageservice->image)
                                <img width="200px" id="logo" src="{{ Storage::disk("s3")->url($pageservice->image)}}" alt="">
                            @else
                                <img width="200px" id="logo" src="/images/default.jpg" alt="">
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('image', 'imagen de servicio') !!}
                            {!! Form::file('image', ['class'=> 'form-control-file', 'accept'=>'img/*']) !!}
                        @error('image')
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

                  {!! Form::submit('Actualizar datos de la Página Servicios', ['class'=>'btn btn-primary btn-block']) !!}

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



