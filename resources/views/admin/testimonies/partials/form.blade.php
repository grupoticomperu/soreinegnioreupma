<div class="row">


    <div class="col-4 form-group">
        {!! Form::label('name', 'Nombre:') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}

        @error('name')
            <small class="text-danger">{{$message}}</small>
        @enderror

    </div>

    <div class="col-4 form-group">
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'slug ', 'readonly']) !!}
        @error('slug')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="col-4 form-group">
        {!! Form::label('dni', 'Dni:') !!}
        {!! Form::text('dni', null, ['class'=>'form-control', 'placeholder'=>'DNI']) !!}

        @error('dni')
            <small class="text-danger">{{$message}}</small>
        @enderror

    </div>

    <div class="col-4 form-group">
        {!! Form::label('phone', 'Teléfono:') !!}
        {!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Teléfono']) !!}

        @error('phone')
            <small class="text-danger">{{$message}}</small>
        @enderror

    </div>


    <div class="col-4 form-group">
        {!! Form::label('movil', 'Celular:') !!}
        {!! Form::text('movil', null, ['class'=>'form-control', 'placeholder'=>'Movil']) !!}
        @error('movil')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
</div>



    <div class="form-group">
        <p class="font-weight-bold">Estado</p>
        <label for="">
          Activado {!! Form::radio('state', 1, true) !!}
        </label>
        <label for="">
            Desactivado{!! Form::radio('state', 0) !!}
        </label>

        @error('state')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>






    <div class="form-group">
        {!! Form::label('shortdescription', 'Descripción Corta') !!}
        {!! Form::textarea('shortdescription', null, ['class' => 'form-control', 'rows'=>3]) !!}
        @error('shortdescription')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>

    <div class="form-group">
        {!! Form::label('longdescription', 'Descripcion Larga') !!}
        {!! Form::textarea('longdescription', null, ['class' => 'form-control']) !!}
        @error('longdescription')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>



    <div class="col-12 form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'title Google']) !!}
        @error('title')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>


    <div class="form-group">
        {!! Form::label('description', 'Descripción Google') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=>3]) !!}
        @error('description')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>

    <div class="col-12 form-group">
        {!! Form::label('keywords', 'Keywords:') !!}
        {!! Form::text('keywords', null, ['class'=>'form-control', 'placeholder'=>'keywords Google']) !!}
        @error('keywords')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>



    <div class="form-group">
        {!! Form::label('video', 'Video') !!}
        {!! Form::textarea('video', null, ['class' => 'form-control', 'rows'=>3]) !!}
        @error('video')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>


    <div class="col-6 mb-8 row p-2 mb-4" >
            @isset($testimony)
            <div class="col">
                <div class="image-wrapper">
                    @isset($testimony->image)
                        <img width="300px" id="picture" src="{{Storage::disk("s3")->url($testimony->image)}}" alt="">
                    @else
                        <img width="300px" id="picture" src="/images/default.jpg" alt="">
                    @endif

                </div>
            </div>
            @endif
            <div class="col">
                <div class="form-group">
                    {!! Form::label('image', 'Imagen baner, parte superior') !!}
                    {!! Form::file('image', ['class'=> 'form-control-file', 'accept'=>'image/*']) !!}

                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror

                </div>


            </div>
    </div>





