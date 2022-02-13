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
                    <h2 class="content-header-title float-left mb-0">Plantillas</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">Configuración</li>
                            <li class="breadcrumb-item active">Plantillas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <button class="btn btn-primary waves-effect waves-float waves-light" type="button" aria-haspopup="true"
                        aria-expanded="false" data-toggle="modal" data-target="#createPlantilla">
                        Crear Plantilla
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
                        <h4 class="card-title">Listado de Plantillas</h4>
                    </div>
                    <div class="card-datatable pb-2">
                        <table class="dt-plantilla table">
                            <thead>
                                <tr>
                                    <th>Plantillas</th>
                                    <th width="100px">Acciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="createPlantilla" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <form class="needs-validation" action="">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="titleModal">Crear Plantilla</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="basicInput">Nombre de Plantilla</label>
                                        <input type="text" class="form-control" id="nombrePlantilla"
                                        placeholder="Ejm: Plantilla ejemplo">
                                        <div class="invalid-feedback nombre"></div>
                                    </div>
                                    <div class="mt-1">
                                        <div class="form-group">
                                            <label for="basicInput">Descripción</label>
                                            <textarea class="form-control" name="content" id="texto"></textarea>
                                            <div class="invalid-feedback textoe"></div>
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
            var dt_basic = $('.dt-plantilla').DataTable({
                ajax: '{{ url('/configuracion/plantillas-json') }}',
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
                let dataNombre = $('#nombrePlantilla').val();
                let dataDescripcion = $('#texto').val();
                let UrlBase = '{{ url('configuracion/plantillas/guardar-plantilla') }}/';
                $.ajax({
                    type: 'POST',
                    url: UrlBase,
                    dataType: 'json',
                    data: {
                        nombre: dataNombre,
                        texto: dataDescripcion,
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
                        $('#nombrePlantilla').removeClass('is-invalid');
                        $('#nombrePlantilla').val('');
                        $('#texto').removeClass('is-invalid');
                        $('#texto').summernote("reset");
                        dt_basic.ajax.reload();
                    },
                    error: function(response) {
                        $('#nombrePlantilla').addClass('is-invalid');
                        $('.nombre').text(response.responseJSON.errors.nombre);
                        $('#texto').addClass('is-invalid');
                        $('.textoe').text(response.responseJSON.errors.texto);
                    }
                });
            });

            // Mostrar Registro a Editar
            $('.dt-plantilla tbody').on('click', '.editar-record',function() {
                let dataid = $(this).data('id');
                let baseUrl = '{{ url('configuracion/plantillas') }}/' + dataid +
                    '/editar-plantilla';
                $.ajax({
                    type: 'GET',
                    url: baseUrl,
                    dataType: 'json',
                    success: function(response) {
                        $('#createPlantilla').modal('show');
                        $('#titleModal').text('Editar Plantilla');
                        $('#nombrePlantilla').val(response.data.nombre);
                        $('#texto').summernote('editor.pasteHTML', response.data.texto);
                        $('#btnModal').removeClass('.create-record');
                        $('#btnModal').addClass('.update-record');
                        $('#btnModal').text('Actualizar');
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
            $('#texto').summernote({
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
