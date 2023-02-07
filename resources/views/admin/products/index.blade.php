@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Lista de Productos </h1>
                <a href="{{ route('product.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"> </i> Crear Producto</a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">inicio</a></li>
                <li class="breadcrumb-item active">Productos</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    @endsection


    @section('content')

      <div class="card">
          <div class="card-header">

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="posts-table" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Producto</th>
                <th>Resumen</th>
                <th>Acciones</th>
              </tr>
              </thead>

              <tbody>

                  @foreach ($products as $product)
                      <tr>
                          <td>{{ $product->id }}</td>
                          <td>
                            @if ($product->image1)
                                {{-- <img width="100px" src="{{url($product->image1) }}" alt=""> --}}
                                <img width="100px" src="{{ Storage::disk("s3")->url($product->image1) }}" alt="HPR GROUP">

                            @else
                                {{-- <img src="/storage/products/default.jpg" alt=""> --}}
                                <img src="products/default.jpg" alt="HPR GROUP">
                            @endif
                          </td>
                          <td>{{ $product->name}}</td>
                          <td>{!! $product->description !!}</td>
                          <td>
                              {{-- <a href="{{ route('product.show', $product)}}" class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a> --}}
                              <a href="{{ route('product.edit', $product)}}" class="btn btn-xs btn-info"><i class="fas fa-pencil-alt"></i></a>

                              <a class="btn btn-xs btn-danger" wire:click="$emit('deleteProduct', {{ $product->id }})"><i class="fas fa-times-circle"></i></a>

                              <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $product->id }}"
                                class="btn btn-xs btn-danger"><i class="fas fa-times-circle"></i></button>



                          </td>
                      </tr>

                  @endforeach

              </tbody>

              <tfoot>
              <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Título</th>
                <th>Resumen</th>
                <th>Acciones</th>

              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

    @endsection

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Seguro que desea borrar el registro seleccionado?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                <form id="formDelete" method="POST" action="{{ route('admin.product.destroy',0) }}"
                    data-action="{{ route('admin.product.destroy',0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>


            </div>
        </div>
    </div>
</div>


@push('styles')
    <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

      action = $('#formDelete').attr('data-action').slice(0,-1)
      action += id
      console.log(action)

      $('#formDelete').attr('action',action)

      var modal = $(this)
      modal.find('.modal-title').text('Vas a borrar El Producto: ' + id)
    })
    </script>



    <script>
      $(function () {

        $('#posts-table').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });

      Livewire.on('deleteProduct', productId => {
            Swal.fire({
                title: 'Estas seguro?',
                text: "No se podrá revertir!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {

                    Livewire.emitTo('admin.brand-list','delete',ProductId);

                    Swal.fire(
                        'Eliminado!',
                        'El Registro fue eliminado.',
                        'success'
                    )
                }
            })
        })



    </script>


    <div class="modal fade" id="exampleModalp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form method="POST" action="{{ route('admin.product.store') }}">
          {{ csrf_field() }}
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresando Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="form-group {{ $errors->has('titulo') ? 'text-danger' : '' }}">
                          <label for="titulo">Título del producto </label>
                          <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Ingrese el título del producto" required>
                          {!! $errors->first('titulo','<span class="help-block">:message</span>') !!}
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary">Crear Producto</button>
              </div>
            </div>
          </div>
      </form>
    </div>
@endpush
