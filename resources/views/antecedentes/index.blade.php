@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('dist/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dist/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/modules/izitoast/css/iziToast.css') }}">
@endsection
@section('contenido')
    <div class="section-header">
        <h1>Antecedentes</h1>
        <div class="section-header-button ">
            <a href="" class="btn btn-primary ">Nuevo Antecedente</a>
        </div>
    </div>

    <div class="section-body">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="tablet">
                                <thead>
                                    <tr>
                                        <th width="10px">#</th>
                                        <th>Antecedentes</th>
                                        <th width="100px">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nombre }}</td>
                                            <td>
                                                <button type="button" class="deleteRow btn btn-icon btn-sm btn-danger " value="{{ url('/configuracion/antecedentes/' . $item->id . '/eliminar-antecedente') }}" >
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                <form class="borrarRecord" method="post" action="">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{ asset('dist/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('dist/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dist/modules/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('dist/modules/izitoast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('dist/js/page/modules-datatables.js') }}"></script>
    <script>
        (function($) {

            $('.deleteRow').click(function(){
                let val = $(this).val();
                console.log(val);
                swal({
                        title: '¿Está seguro de eliminar éste registro?',
                        text: 'El registro eliminado no podrá ser recuperado!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3f51b5',
                        cancelButtonColor: '#ff4081',
                        buttons: {
                            cancel: {
                                text: "Cancelar",
                                value: null,
                                visible: true,
                                className: "btn btn-danger",
                                closeModal: true,
                            },
                            confirm: {
                                text: "Sí, estoy seguro",
                                value: true,
                                visible: true,
                                className: "btn btn-primary",
                                closeModal: true
                            }
                        }
                    })
                    .then((result) => {
                        if (result == true) {
                            $('.borrarRecord').attr('action', val);
                            $('.borrarRecord').submit();
                        }
                    });
            });
                
                // console.log($('#valorId-{{ $item->id }}').val());
                
            
            @if (session('success'))
                iziToast.success({
                title: '{{ session('success') }}',
                position: 'topRight'
                });
            @endif
        })(jQuery);
    </script>
@endsection
