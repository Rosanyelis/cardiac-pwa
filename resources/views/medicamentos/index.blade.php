@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/plugins/extensions/ext-component-sweet-alerts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/summernote/summernote-lite.css') }}"/>
@endsection
@section('contenido')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Medicamentos</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">Configuración</li>
                            <li class="breadcrumb-item active">Medicamentos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <button class="btn btn-primary waves-effect waves-float waves-light" type="button" aria-haspopup="true"
                        aria-expanded="false" data-toggle="modal" data-target="#createMedicamento">
                        Crear Medicamento
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Multilingual -->
    <section id="multilingual-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Listado de Medicamentos</h4>
                    </div>
                    <div class="card-datatable pb-2">
                        <table class="dt-medicamento table">
                            <thead>
                                <tr>
                                    <th>Medicamento</th>
                                    <th width="100px">Acciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="createMedicamento" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <form class="needs-validation" action="">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="titleModal">Crear Medicamento</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="basicInput">Nombre de Medicamento</label>
                                        <input type="text" class="form-control" id="nombreMedicamento"
                                        placeholder="Ejm: Albendazol De 400Mg">
                                        <div class="invalid-feedback nombre"></div>
                                    </div>
                                    <div class="mt-1">
                                        <div class="form-group">
                                            <label for="basicInput">Descripción</label>
                                            <textarea class="form-control" name="content" id="descripcion"></textarea>
                                            <div class="invalid-feedback textod"></div>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <div class="form-group">
                                            <label for="basicInput">Indicaciones</label>
                                            <textarea class="form-control" name="content" id="indicaciones"></textarea>
                                            <div class="invalid-feedback textoi"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="btnModal" type="button" class="btn btn-primary create-record">Crear</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Multilingual -->
@endsection
@section('scripts')
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/summernote/summernote-lite.js') }}"></script>
    <script>
        $(function() {
            'use strict';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var dt_basic = $('.dt-medicamento').DataTable({
                ajax: '{{ url('/configuracion/medicamentos-json') }}',
                columns: [{
                    data: 'nombre'
                }, ],
                columnDefs: [{
                        // For Responsive
                        className: 'control',
                        orderable: false,
                        targets: 0
                    },
                    {
                        // Actions
                        targets: 1,
                        title: 'Acciones',
                        orderable: false,
                        render: function(data, type, full, meta) {
                            return (
                                '<a class="item-edit text-primary editar-record mr-50" data-id="' +
                                full.id + '">' +
                                feather.icons['edit'].toSvg({
                                    class: 'font-medium-4 '
                                }) +'</a>'+
                                '<a class="item-edit text-danger delete-record" data-id="' +
                                full.id + '">' +
                                feather.icons['trash-2'].toSvg({
                                    class: 'font-medium-4'
                                }) + '</a>'

                            );
                        }
                    }
                ],
                language: {
                    paginate: {
                        // remove previous & next text from pagination
                        previous: '&nbsp;',
                        next: '&nbsp;'
                    }
                },
                dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                displayLength: 7,
                lengthMenu: [7, 10, 25, 50, 75, 100],
            });

            // Crear registro
            $('.create-record').on('click', function() {
                let dataNombre = $('#nombreMedicamento').val();
                let dataDescripcion = $('#descripcion').val();
                let dataIndicaciones = $('#indicaciones').val();
                let UrlBase = '{{ url('configuracion/medicamentos/guardar-medicamento') }}/';
                $.ajax({
                    type: 'POST',
                    url: UrlBase,
                    dataType: 'json',
                    data: {
                        nombre: dataNombre,
                        descripcion: dataDescripcion,
                        indicaciones: dataIndicaciones,
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Exito!',
                            text: 'Registro Guardado Exitosamente.',
                            customClass: {
                                confirmButton: 'btn btn-success'
                            }
                        });
                        $('.close').click();
                        $('#nombreMedicamento').removeClass('is-invalid');
                        $('#nombreMedicamento').val('');
                        $('#descripcion').removeClass('is-invalid');
                        $('#descripcion').summernote("reset");
                        $('#indicaciones').removeClass('is-invalid');
                        $('#indicaciones').summernote("reset");
                        dt_basic.ajax.reload();
                    },
                    error: function(response) {
                        $('#nombreMedicamento').addClass('is-invalid');
                        $('.nombre').text(response.responseJSON.errors.nombre);
                        $('#descripcion').addClass('is-invalid');
                        $('.textod').text(response.responseJSON.errors.descripcion);
                        $('#indicaciones').addClass('is-invalid');
                        $('.textoi').text(response.responseJSON.errors.indicaciones);
                    }
                });
            });

            // Mostrar Registro a Editar
            $('.dt-medicamento tbody').on('click', '.editar-record',function() {
                let dataid = $(this).data('id');
                let baseUrl = '{{ url('configuracion/medicamentos') }}/' + dataid +
                    '/editar-medicamento';
                $.ajax({
                    type: 'GET',
                    url: baseUrl,
                    dataType: 'json',
                    success: function(response) {
                        $('#createMedicamento').modal('show');
                        $('#titleModal').text('Editar Medicamento');
                        $('#nombreMedicamento').val(response.data.nombre);
                        $('#texto').summernote('editor.pasteHTML', response.data.texto);
                        $('#btnModalUpdate').remove();
                        let btn = '<button type="button" id="btnModalUpdate" class="btn btn-primary" data-id="'+ dataid +'">Actualizar</button>'
                        $('#btnModal').remove();
                        $('.modal-footer').append(btn);
                    },error: function(response) {
                        Swal.fire({
                            title: 'Error al Mostrar el Registro!',
                            icon: 'error',
                            customClass: {
                            confirmButton: 'btn btn-primary'
                            },
                            buttonsStyling: false
                        });
                    }
                });
            });
             // Actualizar registro
             $('body').on('click', '#btnModalUpdate', function() {
                let dataid = $(this).attr('data-id');
                let dataNombre = $('#nombreMedicamento').val();
                let dataDescripcion = $('#descripcion').val();
                let dataIndicaciones = $('#indicaciones').val();
                let UrlBase = '{{ url('configuracion/medicamentos') }}/'+ dataid +'/actualizar-medicamento';
                $.ajax({
                    type: 'POST',
                    url: UrlBase,
                    dataType: 'json',
                    data: {
                        nombre: dataNombre,
                        descripcion: dataDescripcion,
                        indicaciones: dataIndicaciones,
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Exito!',
                            text: 'Registro Actualizado Exitosamente.',
                            customClass: {
                                confirmButton: 'btn btn-success'
                            }
                        });
                        $('.close').click();
                        $('#nombreMedicamento').removeClass('is-invalid');
                        $('#nombreMedicamento').val('');
                        $('#descripcion').summernote("reset");
                        $('#indicaciones').summernote("reset");
                        dt_basic.ajax.reload();
                    },
                    error: function(response) {
                        $('#nombreMedicamento').addClass('is-invalid');
                        $('.invalid-feedback').text(response.responseJSON.errors.nombre);
                    }
                });
            });
            // Eliminar registro
            $('.dt-plantilla tbody').on('click', '.delete-record', function() {
                let dataid = $(this).data('id');
                let baseUrl = '{{ url('configuracion/plantillas') }}/' + dataid +
                    '/eliminar-plantilla';
                Swal.fire({
                    title: '¿Está seguro de eliminar este registro?',
                    text: "No podra recuperarlo nuevamente!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si, estoy seguro!',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        cancelButton: 'btn btn-outline-danger ml-1'
                    },
                    buttonsStyling: false
                }).then(function(result) {
                    if (result.value) {
                        $.ajax({
                            type: 'DELETE',
                            url: baseUrl,
                            dataType: 'json',
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Eliminado!',
                                    text: 'Registro Eliminado Exitosamente.',
                                    customClass: {
                                        confirmButton: 'btn btn-success'
                                    }
                                });
                                dt_basic.ajax.reload();
                            }
                        });
                    }
                });
            });
            // Limpieza de input al cerrar el modal
            $('.close').click(function() {
                $('#nombrePlantilla').val('');
                $('#nombrePlantilla').removeClass('is-invalid');
            });
            $('#descripcion').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['view', ['help']]
                ]
            });
            $('#indicaciones').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['view', ['help']]
                ]
            });
        });
    </script>
@endsection
