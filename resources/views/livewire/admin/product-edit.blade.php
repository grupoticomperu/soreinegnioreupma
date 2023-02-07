<div>

    <div>
        <div class="row">

            <div class="col-md-4">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Modificando Producto</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body col-md-12">
                        <div class="form-group {{ $errors->has('name') ? 'text-danger' : '' }}">
                            <label class="text-danger">Nombre del Producto </label>
                            <input wire:model="name" value="{{ old('name') }}" type="text"
                                class="form-control" placeholder="ingrese aquí el Nombre del producto">
                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                            <!-- </div>-->
                            <!-- le ponemos !! a cambio del { y del }-->
                        </div>



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


                        <div class="form-group {{ $errors->has('subcategory_id') ? 'text-danger' : ''}}">
                            <label class="text-danger">Sub Categoria</label>
                            <select wire:model="subcategory_id" class="form-control">
                              <option value="">Selecciona una subcategoria</option>
                              @foreach($subcategories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                            </select>
                             {!! $errors->first('category_id','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('marca_id') ? 'text-danger' : ''}}">
                            <label class="text-danger">Marca</label>
                            <select wire:model="marca_id" class="form-control">
                              <option value="">Selecciona una Marca</option>
                              @foreach($marcas as $marca)
                              <option value="{{$marca->id}}">{{$marca->name}}</option>
                              @endforeach
                            </select>
                             {!! $errors->first('marca_id','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('modelo_id') ? 'text-danger' : ''}}">
                            <label>Modelo</label>
                            <select wire:model="modelo_id" class="form-control">
                              <option value="">Selecciona un modelo</option>
                              @foreach($modelos as $modelo)
                              <option value="{{$modelo->id}}">{{$modelo->name}}</option>
                              @endforeach
                            </select>
                             {!! $errors->first('modelo_id','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('um_id') ? 'text-danger' : ''}}">
                            <label>Unidad de Medida</label>
                            <select wire:model="um_id" class="form-control">
                              <option value="">Selecciona la unidad de medida</option>
                              @foreach($ums as $um)
                              <option value="{{$um->id}}">{{$um->name}}</option>
                              @endforeach
                            </select>
                             {!! $errors->first('um_id','<span class="help-block">:message</span>') !!}
                        </div>


                        <div class="form-group {{ $errors->has('typeproduct') ? 'text-danger' : ''}}">
                            <label>Tipo Producto</label>
                            <select wire:model="typeproduct" class="form-control">
                              <option value="">Escoger</option>
                              <option value="1">Nuevo</option>
                              <option value="2">Usado</option>
                            </select>
                             {!! $errors->first('typeproduct','<span class="help-block">:message</span>') !!}
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-2">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">-</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body col-md-12">


                        <div class="form-group {{ $errors->has('currency') ? 'text-danger' : ''}}">
                            <label>Moneda</label>
                            <select wire:model="currency" class="form-control">
                                <option value="">Escoger</option>
                                <option value="1">Soles</option>
                                <option value="2">Dolares</option>
                              </select>
                             {!! $errors->first('currency','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('purchaseprice') ? 'text-danger' : '' }}">
                            <label>Precio Compra </label>
                            <input wire:model="purchaseprice" value="{{ old('purchaseprice') }}" type="text"
                                class="form-control" placeholder="ingrese el precio de compra">
                            <!-- el segundo parametro del old sirve para pintar en caso este vacio -->
                            <!-- <div class="poner la clase para sombrear solo el mensaje">-->
                            {!! $errors->first('purchaseprice', '<span class="help-block">:message</span>') !!}
                            <!-- </div>-->
                            <!-- le ponemos !! a cambio del { y del }-->
                        </div>

                        <div class="form-group {{ $errors->has('saleprice') ? 'text-danger' : '' }}">
                            <label class="text-danger">Precio Venta </label>
                            <input wire:model="saleprice" value="{{ old('saleprice') }}" type="text"
                                class="form-control" placeholder="precio de venta">
                            <!-- el segundo parametro del old sirve para pintar en caso este vacio -->
                            <!-- <div class="poner la clase para sombrear solo el mensaje">-->
                            {!! $errors->first('saleprice', '<span class="help-block">:message</span>') !!}
                            <!-- </div>-->
                            <!-- le ponemos !! a cambio del { y del }-->
                        </div>

                        <div class="form-group {{ $errors->has('salepricemin') ? 'text-danger' : '' }}">
                            <label>Precio Venta Minimo </label>
                            <input wire:model="salepricemin" value="{{ old('salepricemin') }}" type="text"
                                class="form-control" placeholder="precio de venta min">
                            <!-- el segundo parametro del old sirve para pintar en caso este vacio -->
                            <!-- <div class="poner la clase para sombrear solo el mensaje">-->
                            {!! $errors->first('salepricemin', '<span class="help-block">:message</span>') !!}
                            <!-- </div>-->
                            <!-- le ponemos !! a cambio del { y del }-->
                        </div>

                        <div class="form-group {{ $errors->has('stock') ? 'text-danger' : '' }}">
                            <label>Stock </label>
                            <input wire:model="stock" value="{{ old('stock') }}" type="text"
                                class="form-control" placeholder="stock">
                            <!-- el segundo parametro del old sirve para pintar en caso este vacio -->
                            <!-- <div class="poner la clase para sombrear solo el mensaje">-->
                            {!! $errors->first('stock', '<span class="help-block">:message</span>') !!}
                            <!-- </div>-->
                            <!-- le ponemos !! a cambio del { y del }-->
                        </div>

                        <div class="form-group {{ $errors->has('stockmin') ? 'text-danger' : '' }}">
                            <label>Stock Minimo </label>
                            <input wire:model="stockmin" value="{{ old('stockmin') }}" type="text"
                                class="form-control" placeholder="stock min">
                            <!-- el segundo parametro del old sirve para pintar en caso este vacio -->
                            <!-- <div class="poner la clase para sombrear solo el mensaje">-->
                            {!! $errors->first('stockmin', '<span class="help-block">:message</span>') !!}
                            <!-- </div>-->
                            <!-- le ponemos !! a cambio del { y del }-->
                        </div>

                        <div class="form-group {{ $errors->has('codigo') ? 'text-danger' : '' }}">
                            <label>Código de Barras </label>
                            <input wire:model="codigo" value="{{ old('codigo') }}" type="text"
                                class="form-control" placeholder="código">
                            <!-- el segundo parametro del old sirve para pintar en caso este vacio -->
                            <!-- <div class="poner la clase para sombrear solo el mensaje">-->
                            {!! $errors->first('codigo', '<span class="help-block">:message</span>') !!}
                            <!-- </div>-->
                            <!-- le ponemos !! a cambio del { y del }-->
                        </div>






                    </div>

                </div>

            </div>

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">-</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body col-md-12">

                        <div class="form-group {{ $errors->has('description') ? 'text-danger' : '' }}">
                            <div wire:ignore>
                                <label class="text-danger">Contenido de la Publicación</label>
                                <textarea rows= "10" wire:model="description" id="editor" class="form-control" placeholder="Ingrese la publicación Completa">{{ $description }}</textarea>
                                {!! $errors->first('body','<span class="help-block">:message</span>') !!}
                            </div>
                            <div>{!! $errors->first('description', '<span class="help-block">:message</span>') !!}</div>
                        </div>





                        <div class="form-group {{ $errors->has('video') ? 'text-danger' : '' }}">
                            <label>Enlace Video o Audio</label>
                            <textarea wire:model="video" rows="2"  class="form-control"
                                placeholder="Ingrese Conenido embebido de audio o video ">{{ old('video') }}</textarea>
                            {!! $errors->first('video', '<span class="help-block">:message</span>') !!}

                        </div>


                        <div class="form-group {{ $errors->has('brochure') ? 'text-danger' : '' }}">
                            <label>Brochure</label>
                            <div>
                                @isset($brochureback)
                                    <a href="{{ Storage::disk("s3")->url($brochureback) }}" target="_blank">
                                        <img src="{{ asset('images/logopdf.jpg') }}">
                                    </a>
                                @else
                                    <a href="#">No hay Brochure</a>
                                @endif
                            </div>
                            <div class="flex">
                                <input type="file" wire:model="brochure" }}" >
                            </div>
                            {!! $errors->first('brochure', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="mb-2 mr-4 ">
                            <label class="text-danger">Estado</label>
                            <label class="flex">
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
                            <input-error for="state" />
                        </div>

                    </div>

                </div>

            </div>



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
                            <input wire:model="titlegoogle"  type="text"
                                class="form-control" placeholder="ingrese aquí el título del producto">
                            <!-- el segundo parametro del old sirve para pintar en caso este vacio -->
                            <!-- <div class="poner la clase para sombrear solo el mensaje">-->
                            {!! $errors->first('titlegoogle', '<span class="help-block">:message</span>') !!}
                            <!-- </div>-->
                            <!-- le ponemos !! a cambio del { y del }-->
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
                            <textarea rows="3" wire:model="descriptiongoogle" }}" class="form-control"
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
                            <input wire:model="keywordsgoogle" }}" type="text"
                                class="form-control" placeholder="ingrese aquí el título del producto">
                            <!-- el segundo parametro del old sirve para pintar en caso este vacio -->
                            <!-- <div class="poner la clase para sombrear solo el mensaje">-->
                            {!! $errors->first('keywordsgoogle', '<span class="help-block">:message</span>') !!}
                            <!-- </div>-->
                            <!-- le ponemos !! a cambio del { y del }-->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Imagen 1 (ancho 710px alto 910px)  </h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body col-md-12">
                        <div class="form-group {{ $errors->has('image1') ? 'text-danger' : '' }}">
                            <label>Imagen 1</label>
                            <input type="file" wire:model="image1" accept="image/jpeg,image/png" >
                             <p class="mb-0 p-0 my-1 text-blue-600">Imagen 1 del Producto </p>
                            {!! $errors->first('image1', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>


                    <div wire:loading wire:target="image1" class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                        <strong class="font-bold">Cargando imagenn!</strong>
                        <span class="block sm:inline">Espere un momento.</span>
                    </div>
                    @if($image1)
                        <div>
                            <img class="mb-4 ml-2 mt-0" src="{{ $image1->temporaryUrl() }}" width="200px" alt="Imagen 1 del Producto">
                        </div>
                    @elseif($image1back)
                        <img src="{{ Storage::disk("s3")->url($image1back) }}" width="200px" alt="">
                    @endif
                </div>
            </div>



            <div class="col-md-3">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Imagen 2 (ancho 710px alto 910px)  </h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body col-md-12">


                        <div class="form-group {{ $errors->has('image2') ? 'text-danger' : '' }}">
                            <label>Imagen 2</label>
                            <input type="file" wire:model="image2" accept="image/jpeg,image/png">
                             <p class="mb-0 p-0 my-1 text-blue-600">Imagen 2 del Producto </p>
                            {!! $errors->first('image2', '<span class="help-block">:message</span>') !!}
                        </div>

                    </div>


                    <div wire:loading wire:target="image2" class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                        <strong class="font-bold">Cargando imagenn!</strong>
                        <span class="block sm:inline">Espere un momento.</span>
                    </div>

                    @if($image2)
                    <div>
                        <img class="mb-4 ml-2 mt-0" src="{{$image2->temporaryUrl()}}" width="200px" alt="Imagen 2 del Producto">
                    </div>
                    @elseif($image2back)
                        <img src="{{ Storage::disk("s3")->url($image2back) }}" width="200px" alt="">
                    @endif

                </div>

            </div>

            <div class="col-md-3">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Imagen 3 (ancho 710px alto 910px)  </h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body col-md-12">
                        <div class="form-group {{ $errors->has('image3') ? 'text-danger' : '' }}">
                                <label>Imagen 3</label>
                            <input type="file" wire:model="image3" accept="image/jpeg,image/png">
                             <p class="mb-0 p-0 my-1 text-blue-600">Imagen 3 del Producto </p>
                            {!! $errors->first('image3', '<span class="help-block">:message</span>') !!}
                        </div>

                    </div>


                    <div wire:loading wire:target="image3" class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                        <strong class="font-bold">Cargando imagenn!</strong>
                        <span class="block sm:inline">Espere un momento.</span>
                    </div>

                    @if($image3)
                    <div>
                        <img class="mb-4 ml-2 mt-0" src="{{$image3->temporaryUrl()}}" width="200px" alt="Imagen 3 del Producto">
                    </div>
                    @elseif($image3back)
                     <img src="{{ Storage::disk("s3")->url($image3back) }}" width="200px" alt="">
                    @endif

                </div>

            </div>


            <div class="col-md-3">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Imagen 4 (ancho 710px alto 910px)  </h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body col-md-12">
                        <div class="form-group {{ $errors->has('image4') ? 'text-danger' : '' }}">
                            <label>Imagen 4</label>
                            <input type="file" wire:model="image4" accept="image/jpeg,image/png">
                             <p class="mb-0 p-0 my-1 text-blue-600">Imagen 4 del Producto </p>
                            {!! $errors->first('image4', '<span class="help-block">:message</span>') !!}
                        </div>

                    </div>


                    <div wire:loading wire:target="image4" class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                        <strong class="font-bold">Cargando imagenn!</strong>
                        <span class="block sm:inline">Espere un momento.</span>
                    </div>

                    @if($image4)
                    <div>
                        <img class="mb-4 ml-2 mt-0" src="{{$image4->temporaryUrl()}}" width="200px" alt="Imagen 4 del Producto">
                    </div>
                    @elseif($image4back)
                        <img src="{{ Storage::disk("s3")->url($image4back) }}" width="200px" alt="">
                    @endif

                </div>

            </div>


        </div>






        <div >

            <div class="card-footer">
                <button type="submit" wire:click='save' class="btn btn-primary btn-block">Guardar Producto</button>

            </div>

        </div>

    </div>

    @push('scripts')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.1/min/dropzone.min.js"></script>



  <script src="/adminlte/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>



  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>  -->

  <script>
      $('#datepicker').datepicker({
        autoclose: true
      });

    $('.select2').select2({
      tags:true
    });

/*     CKEDITOR.replace('editor');
    CKEDITOR.config.height = 200; */

  </script>


<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>



<script>


/*   CKEDITOR.replace('editor');
  CKEDITOR.config.height = 230; */


  <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
     <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then(function(editor){
                editor.model.document.on('change:data', () =>{
                    @this.set('description',editor.getData());
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
</script>

@endpush



</div>





