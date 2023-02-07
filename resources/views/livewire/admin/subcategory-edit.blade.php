<div>

    <div class="row">

        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Edicion de Sub Categoria</h3>
              </div>
            <!-- /.card-header -->
            <!-- form start -->

              <div class="card-body">


                  <div class="form-group {{ $errors->has('categoria_id') ? 'text-danger' : ''}}">
                    <label class="text-danger">Categoria</label>
                    <select wire:model="categoria_id" class="form-control">
                      <option value="">Selecciona una categoria</option>
                      @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                     {!! $errors->first('categoria_id','<span class="help-block">:message</span>') !!}
                  </div>



                  <div class="form-group {{ $errors->has('name') ? 'text-danger' : '' }}">
                    <label class="text-danger" for="name">Sub Categoria</label>
                    <input  wire:model="name" type="text" class="form-control" placeholder="Ingrese la Sub Categoria" value="{{old('name')}}">
                    {!! $errors->first('name','<span class="help-block">:message</span>') !!}

                  </div>



                  <div class="form-group {{ $errors->has('shortdescription') ? 'text-danger' : ''}}">
                      <label>Resumen de la Sub Categoria</label>
                      <textarea wire:model="shortdescription" class="form-control" placeholder="Ingrese resumen de la sub Categoria">{{old('shortdescription')}}</textarea>
                      {!! $errors->first('shortdescription','<span class="help-block">:message</span>') !!}
                  </div>



                  <div class="form-group {{ $errors->has('longdescription') ? 'text-danger' : '' }}">
                    <div wire:ignore>
                        <label >descripción de la subcategoria </label>
                        <textarea id="editor" wire:model.defer="longdescription" value="{{ old('longdescription') }}" rows="10" class="form-control"
                            placeholder="Ingrese decripción del producto">{{ old('longdescription') }}</textarea>
                    </div>
                    <div>{!! $errors->first('longdescription', '<span class="help-block">:message</span>') !!}</div>
                  </div>



                  <div class="row mb-2 mr-4 flex">
                      <div class="col-md-4 form-group {{ $errors->has('order') ? 'text-danger' : '' }}">
                          <label for="order">Orden</label>
                          <input  wire:model="order" type="number" class="form-control" id="order" placeholder="Ingrese orden de la Categoria" value="{{old('order')}}">
                          {!! $errors->first('order','<span class="help-block">:message</span>') !!}

                      </div>

                      <div class="col-md-8 mb-2 mr-4 flex">
                          <label class="text-danger">Estado</label>
                          <label >
                                <input
                                    type="radio"
                                    wire:model="state"
                                    class="flex py-1 "

                                    name="state"
                                    value="1" />
                                Activado

                                <input
                                wire:model="state"
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
                  <div class="form-group {{ $errors->has('title') ? 'text-danger' : '' }}">
                      <label>Title para Google </label>

                      <input wire:model="title"  value="{{ old('title') }}" type="text"
                          class="form-control" placeholder="ingrese aquí el título para google">

                      {!! $errors->first('title', '<span class="help-block">:message</span>') !!}

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
                  <div class="form-group {{ $errors->has('description') ? 'text-danger' : '' }}">
                      <label>Description para Google</label>

                      <textarea rows="3" wire:model="description" value="{{ old('description') }}" class="form-control"
                      placeholder="Ingrese Descripcion de Google ">{{ old('description') }}</textarea>

                      {!! $errors->first('description', '<span class="help-block">:message</span>') !!}


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


                  <div class="form-group {{ $errors->has('keywords') ? 'text-danger' : '' }}">
                      <label>Keywords para Google </label>
                      <input wire:model="keywords" value="{{ old('keywords') }}" type="text"
                                class="form-control" placeholder="ingrese aquí las palabras claves">
                      {!! $errors->first('keywords', '<span class="help-block">:message</span>') !!}
                      <!-- </div>-->
                      <!-- le ponemos !! a cambio del { y del }-->
                  </div>
              </div>

          </div>
      </div>

     </div>


      <div class="row">
        <div class="col-md-4">
            <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Imagen  (ancho 710px alto 910px)  </h3>
                    </div>
                <!-- /.card-header -->

                    <div class="card-body col-md-12">
                        <div class="form-group {{ $errors->has('image') ? 'text-danger' : '' }}">
                            <label>Imagen </label>
                            <input type="file" wire:model="image" accept="image/jpeg,image/png" >
                            <p class="mb-0 p-0 my-1 text-blue-600">Imagen  de la Subcategoria </p>
                            {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>


                    <div wire:loading wire:target="image" class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                        <strong class="font-bold">Cargando imagenn!</strong>
                        <span class="block sm:inline">Espere un momento.</span>
                    </div>
                    @if($image)
                    <div>
                        <img class="mb-4 ml-2 mt-0" src="{{ $image->temporaryUrl() }}" width="200px" alt="Imagen de la Subcategoria">
                    </div>
                    @elseif($imageback)
                        <img src="{{ Storage::disk("s3")->url($imageback) }}" width="200px" alt="">


                    @endif
            </div>
        </div>
      </div>




      <div >

        <div class="card-footer">
            <button type="submit" wire:click='save' class="btn btn-primary btn-block">Guardar Sub Categoria de Producto</button>

        </div>

    </div>



  </div>







  @push('scripts')




    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>  -->


    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>

    <script>
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then(function(editor){
        editor.model.document.on('change:data', () =>{
            @this.set('longdescription',editor.getData());
        });

        Livewire.on('resetCKEditor',()=>{
            editor.setData('');
        })
    }

    )
    .catch( error => {
        console.error( error );
    } );
    </script>




    @endpush


</div>
