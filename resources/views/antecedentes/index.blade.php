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
                            <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            </div>
                            <table class="table table-striped dataTable no-footer" id="table-1" role="grid"
                                aria-describedby="table-1_info">
                                <thead>
                                    <tr role="row">
                                        <th style="width: 10px;">#</th>
                                        <th>Antecedentes</th>
                                        <th style="width: 100px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nombre }}</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm btn-danger"
                                                    onclick="deletedRegistro()"><i class="fas fa-trash"></i></button>
                                                <input type="hidden" id="url"
                                                    value="{{ url('configuracion/antecedentes/' . $item->id . '/eliminar-antecedente') }}">
                                                <form id="borrarRecord" method="post" action="">
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
    <script src="{{ asset('dist/js/page/modules-datatables.js') }}"></script>
    <script src="{{ asset('dist/modules/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('dist/modules/izitoast/js/iziToast.min.js') }}"></script>
    <script>
        (function($) {
            @if (session('success'))
                iziToast.success({
                title: '{{ session('success') }}',
                position: 'topRight'
                });
            @endif
            deletedRegistro = function() {
                console.log($('#url').val());
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
                            var url = $('#url').val();
                            $('#borrarRecord').attr('action', url);
                            $('#borrarRecord').submit();
                        }
                    });
            }
        })(jQuery);
    </script>
@endsection
