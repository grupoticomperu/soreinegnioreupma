@extends('admin.layout')


@section('header')
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Modificando el Home Tira con 4 imágenes</h1>
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


    <form method="POST" action="{{ route('admin.homethree.update', $homethree)}}" enctype="multipart/form-data">
      {{csrf_field()}} {{ method_field('PUT') }}
      <div class="row">

        <div class="col-md-6">

          <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Crear home con dos imagenes</h3>
                </div>

                  <!-- /.card-header -->
                <div class="card-body">

                    @if($homethree->image1)
                        <img width="100px" src="{{ Storage::disk("s3")->url($homethree->image1) }}">
                    @endif




                    <div class="custom-file">

                        <label  for="image1">Subir imagen</label>
                        <input type="file"  name="image1">

                    </div>


                    @if($homethree->image2)
                        <img width="100px" src="{{ Storage::disk("s3")->url($homethree->image2) }}">
                    @endif


                    <div class="custom-file">

                        <label  for="image2">Subir imagen</label>
                        <input type="file"  name="image2">

                    </div>




                    @if($homethree->image3)
                        <img width="100px" src="{{ Storage::disk("s3")->url($homethree->image3) }}">
                    @endif


                    <div class="custom-file">

                        <label  for="image3">Subir imagen</label>
                        <input type="file"  name="image3">

                    </div>


                    @if($homethree->image4)
                        <img width="100px" src="{{ Storage::disk("s3")->url($homethree->image4) }}">
                    @endif


                    <div class="custom-file">

                        <label  for="image4">Subir imagen</label>
                        <input type="file"  name="image4">

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


                <div class="form-group {{ $errors->has('title1') ? 'text-danger' : '' }}">
                    <label>Subtitulo 1</label>
                    <input name="title1" value="{{old('title1', $homethree->title1)}}" type="text" class="form-control" placeholder="ingrese aquí el título ">

                    {!! $errors->first('subtitle1','<span class="help-block">:message</span>') !!}

                </div>

                <div class="form-group {{ $errors->has('title2') ? 'text-danger' : '' }}">
                    <label>Subtitulo 1</label>
                    <input name="title2" value="{{old('title2', $homethree->title2)}}" type="text" class="form-control" placeholder="ingrese aquí el título ">

                    {!! $errors->first('subtitle2','<span class="help-block">:message</span>') !!}

                </div>

                <div class="form-group {{ $errors->has('title3') ? 'text-danger' : '' }}">
                    <label>Subtitulo 1</label>
                    <input name="title3" value="{{old('title3', $homethree->title3)}}" type="text" class="form-control" placeholder="ingrese aquí el título ">

                    {!! $errors->first('subtitle3','<span class="help-block">:message</span>') !!}

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








