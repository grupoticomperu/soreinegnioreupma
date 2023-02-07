@extends('admin.layout')


@section('header')
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Modificando el Home Tira con 2 imágenes</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Inicio</a></li>

              <li class="breadcrumb-item active">Modificando</li>
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@stop



@section('content')


    <form method="POST" action="{{ route('admin.hometwo.update', $hometwo)}}" enctype="multipart/form-data">
      {{csrf_field()}} {{ method_field('PUT') }}
      <div class="row">

        <div class="col-md-6">

          <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Crear home con dos imagenes</h3>
                </div>

                  <!-- /.card-header -->
                <div class="card-body">

                    @if($hometwo->image1)
                        <img width="100px" src="{{ Storage::disk("s3")->url($hometwo->image1) }}">
                    @endif




                    <div class="custom-file">

                        <label  for="image1">Subir imagen</label>
                        <input type="file"  name="image1">

                    </div>


                    @if($hometwo->image2)
                        <img width="100px" src="{{ Storage::disk("s3")->url($hometwo->image2) }}">
                    @endif


                    <div class="custom-file">

                        <label  for="image2">Subir imagen</label>
                        <input type="file"  name="image2">

                    </div>


                    <div class="form-group {{ $errors->has('title1') ? 'text-danger' : '' }}">
                      <label>Titulo1 del home con dos imagenes</label>
                      <input name="title1" value="{{old('title1', $hometwo->title1)}}" type="text" class="form-control" placeholder="ingrese aquí el título de la publicación">

                      {!! $errors->first('title1','<span class="help-block">:message</span>') !!}

                    </div>



                    <div class="form-group {{ $errors->has('title2') ? 'text-danger' : '' }}">
                        <label>Titulo2 del home con dos imagenes</label>
                        <input name="title2" value="{{old('title2', $hometwo->title2)}}" type="text" class="form-control" placeholder="ingrese aquí el título de la publicación">

                        {!! $errors->first('title2','<span class="help-block">:message</span>') !!}

                    </div>


                    <div class="form-group {{ $errors->has('title3') ? 'text-danger' : '' }}">
                        <label>Titulo3 del home con dos imagenes</label>
                        <input name="title3" value="{{old('title3', $hometwo->title3)}}" type="text" class="form-control" placeholder="ingrese aquí el título de la publicación">

                        {!! $errors->first('title3','<span class="help-block">:message</span>') !!}

                    </div>



                    <div class="form-group {{ $errors->has('texttitle') ? 'text-danger' : ''}}">
                        <label>Text title</label>
                        <textarea rows= "10" name="texttitle" id="editor" class="form-control" placeholder="Ingrese la publicación Completa">{{old('texttitle', $hometwo->texttitle)}}</textarea>
                        {!! $errors->first('texttitle','<span class="help-block">:message</span>') !!}
                    </div>




                </div>


           </div>

        </div>

        <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                   <h3 class="card-title">Crear home con dos imagenes</h3>
              </div>
            <div class="card-body">


                <div class="form-group {{ $errors->has('subtitle1') ? 'text-danger' : '' }}">
                    <label>Subtitulo 1</label>
                    <input name="subtitle1" value="{{old('subtitle1', $hometwo->subtitle1)}}" type="text" class="form-control" placeholder="ingrese aquí el título de la publicación">

                    {!! $errors->first('subtitle1','<span class="help-block">:message</span>') !!}

                </div>

                <div class="form-group {{ $errors->has('textsubtitle1') ? 'text-danger' : '' }}">
                    <label>Texto del Subtitulo 1</label>
                    <input name="textsubtitle1" value="{{old('textsubtitle1', $hometwo->textsubtitle1)}}" type="text" class="form-control" placeholder="ingrese aquí el título de la publicación">

                    {!! $errors->first('textsubtitle1','<span class="help-block">:message</span>') !!}

                </div>

                <div class="form-group {{ $errors->has('iconsubtitle1') ? 'text-danger' : '' }}">
                    <label>icono del Subtitulo 1</label>
                    <input name="iconsubtitle1" value="{{old('iconsubtitle1', $hometwo->iconsubtitle1)}}" type="text" class="form-control" placeholder="ingrese aquí el título de la publicación">

                    {!! $errors->first('iconsubtitle1','<span class="help-block">:message</span>') !!}

                </div>


                <div class="form-group {{ $errors->has('subtitle2') ? 'text-danger' : '' }}">
                    <label>Subtitulo 2</label>
                    <input name="subtitle2" value="{{old('subtitle2', $hometwo->subtitle2)}}" type="text" class="form-control" placeholder="ingrese aquí el título de la publicación">

                    {!! $errors->first('subtitle2','<span class="help-block">:message</span>') !!}

                </div>

                <div class="form-group {{ $errors->has('textsubtitle2') ? 'text-danger' : '' }}">
                    <label>Texto del Subtitulo 2</label>
                    <input name="textsubtitle2" value="{{old('textsubtitle2', $hometwo->textsubtitle2)}}" type="text" class="form-control" placeholder="ingrese aquí el título de la publicación">

                    {!! $errors->first('textsubtitle2','<span class="help-block">:message</span>') !!}

                </div>

                <div class="form-group {{ $errors->has('iconsubtitle2') ? 'text-danger' : '' }}">
                    <label>icono del Subtitulo 2</label>
                    <input name="iconsubtitle2" value="{{old('iconsubtitle2', $hometwo->iconsubtitle2)}}" type="text" class="form-control" placeholder="ingrese aquí el título de la publicación">

                    {!! $errors->first('iconsubtitle2','<span class="help-block">:message</span>') !!}

                </div>



              <div class="form-group">
                  <button type='submit' class="btn btn-primary btn-block">Guardar Datos</button>
                </div>
              </div>


            </div>
        </div>
      </div>
    </form>




@stop

@push('scripts')

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>  -->

    <script>
      CKEDITOR.replace('editor');
      CKEDITOR.config.height = 115;


    </script>

  @endpush








