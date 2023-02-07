@extends('admin.layout')
    @section('header')
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Trabajos </h1>
                <a class="btn btn-primary pull-right" href="{{route('testimonies.create')}}"><i class="fa fa-plus"> </i> Nuevo Testimonio</a>

            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">inicio</a></li>
                <li class="breadcrumb-item active">Testimonios</li>
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
                <th>Nombre</th>
                <th>image</th>
                <th>descripcion corta</th>
                <th>descripcion larga</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
              </thead>

              <tbody>

                  @foreach ($testimonies as $testimony)
                      <tr>
                          <td>{{ $testimony->id }}</td>
                          <td>{{ $testimony->name }}</td>
                          <td>
                            @if($testimony->image)
                             <img width="50px"src="{{ Storage::disk("s3")->url($testimony->image) }}" alt="{{ $testimony->title }}">
                            @else
                            <img width="50px"src="/images/default.jpg" alt="imagen no disponible">
                            @endif

                          </td>

                          <td>{!! $testimony->shortdescription !!}</td>
                          <td>{!! $testimony->longdescription !!}</td>
                          <td>

                          @if ($testimony->state == 1)

                            <div class='btn btn-success btn-xs btnActivar'  > Activo</div>
                          @else
                            <button class='btn btn-danger btn-xs btnActivar' > desactivo</button>
                          @endif

                          </td>
                          <td>
                              {{-- <a href="{{ route('hostings.show', $hosting)}}" class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a> --}}
                               <a href="{{ route('testimonies.edit', $testimony)}}" class="btn btn-xs btn-info"><i class="fas fa-pencil-alt"></i></a>
                               <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $testimony->id }}"
                                class="btn btn-xs btn-danger"><i class="fas fa-times-circle"></i></button>

                          </td>
                      </tr>

                  @endforeach

              </tbody>

              <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>image</th>
                    <th>descripcion corta</th>
                    <th>descripcion corta</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

    @endsection

@push('styles')
    <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

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
    </script>


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

                    <form id="formDelete" method="POST" action="{{ route('testimonies.destroy',0) }}"
                        data-action="{{ route('testimonies.destroy',0) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

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
    modal.find('.modal-title').text('Vas a borrar el Testimonio : ' + id)
    })
    </script>





@endpush
