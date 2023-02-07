@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Crear Categoria </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('categoria.index')}}">Categorias</a></li>
                    <li class="breadcrumb-item active">Crear</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    @stop

@section('content')


 <section class="content">
      <div class="container-fluid">

        <form method="POST" action="{{ route('categoria.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row">

              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">

                    <div class="card-header">
                      <h3 class="card-title">Nueva Categoria</h3>
                    </div>
                  <!-- /.card-header -->
                  <!-- form start -->

                    <div class="card-body">


                        <div class="custom-file">

                          <label  for="image">Subir imagen</label>
                          <input type="file"  name="image" value="{{old('image')}}">
                          <div>
                              @error('image')
                                <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="form-group {{ $errors->has('name') ? 'text-danger' : '' }}">
                          <label for="name">Categoria</label>
                          <input name="name" type="text" class="form-control" id="name" placeholder="Ingrese la Categoria" value="{{old('name')}}">
                          {!! $errors->first('name','<span class="help-block">:message</span>') !!}

                        </div>



                        <div class="form-group {{ $errors->has('shortdescription') ? 'text-danger' : ''}}">
                            <label>Resumen de la Categoria</label>
                            <textarea name="shortdescription" class="form-control" placeholder="Ingrese resumen de la Categoria">{{old('shortdescription')}}</textarea>
                            {!! $errors->first('shortdescription','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('longdescription') ? 'text-danger' : ''}}">
                            <label>Contenido de la Categoria</label>
                            <textarea rows= "3" name="longdescription" id="editor" class="form-control" placeholder="Ingrese descripción ">{{old('longdescription')}}</textarea>
                            {!! $errors->first('longdescription','<span class="help-block">:message</span>') !!}


                        </div>

                        <div class="row mb-2 mr-4 flex">
                            <div class="col-md-4 form-group {{ $errors->has('order') ? 'text-danger' : '' }}">
                                <label for="order">Orden</label>
                                <input name="order" type="number" class="form-control" id="order" placeholder="Ingrese odrden de la Categoria" value="{{old('order')}}">
                                {!! $errors->first('order','<span class="help-block">:message</span>') !!}

                            </div>

                            <div class="col-md-8 mb-2 mr-4 flex">
                                <label class="text-danger">Estado</label>
                                <label >
                                    <input
                                        type="radio"
                                        class="flex py-1 "
                                        name="state"
                                        value="1" />
                                    Activado

                                    <input
                                        type="radio"
                                        class="flex py-1 "
                                        name="state"
                                        value="0" />
                                    Descativado
                                </label>
                                {{-- <input-error for="state" /> --}}
                                <div class="form-group {{ $errors->has('state') ? 'text-danger' : '' }}">
                                    {!! $errors->first('state', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>


                        </div>



                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->



              </div>
              <!--/.col (left) -->
              <!-- right column -->

           </div>

           <div class="row">

            <div class="col-md-4">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Google</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body col-md-12">
                        <div class="form-group {{ $errors->has('titlegoogle') ? 'text-danger' : '' }}">
                            <label>Title para Google </label>
                            <input name="titlegoogle"  value="{{ old('titlegoogle') }}" type="text"
                                class="form-control" placeholder="ingrese aquí el título del producto">

                            {!! $errors->first('titlegoogle', '<span class="help-block">:message</span>') !!}

                        </div>


                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Google</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body col-md-12">
                        <div class="form-group {{ $errors->has('descriptiongoogle') ? 'text-danger' : '' }}">
                            <label>Description para Google</label>
                            <textarea rows="3" name="descriptiongoogle" value="{{ old('descriptiongoogle') }}" class="form-control"
                                placeholder="Ingrese Conenido embebido de audio o video ">{{ old('descriptiongoogle') }}</textarea>
                            {!! $errors->first('descriptiongoogle', '<span class="help-block">:message</span>') !!}


                        </div>

                    </div>

                </div>

            </div>



            <div class="col-md-4">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Google</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body col-md-12">


                        <div class="form-group {{ $errors->has('keywordsgoogle') ? 'text-danger' : '' }}">
                            <label>Keywords para Google </label>
                            <input name="keywordsgoogle" value="{{ old('keywordsgoogle') }}" type="text"
                                class="form-control" placeholder="ingrese aquí el título del producto">
                            {!! $errors->first('keywordsgoogle', '<span class="help-block">:message</span>') !!}
                            <!-- </div>-->
                            <!-- le ponemos !! a cambio del { y del }-->
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-block">Guardar Categoria</button>
        </div>
        </form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
 </section>
<!--
  <div class="row">
    <div class="col-md-8">
           <div class="box">
              <div class="box-header">
                 <h3 class="box-title">Crear una Publicación</h3>

              </div>
            </div>

            <form>
              <div class="box-body">
                  <div class="form-group">
                      <label>Título de la Publicación</label>
                      <input name="title" class="form-control" placeholder="Ingrese el título de la Publicación">
                  </div>
              </div>

            </form>



    </div>
  </div>

-->

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


