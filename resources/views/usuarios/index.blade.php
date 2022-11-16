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
@endsection
@section('contenido')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Usuarios</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">Configuración</li>
                            <li class="breadcrumb-item active">Usuarios</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <button class="btn btn-primary waves-effect waves-float waves-light" type="button" aria-haspopup="true"
                        aria-expanded="false" data-toggle="modal" data-target="#createUsuario">
                        Crear Usuario
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
                        <h4 class="card-title">Listado de Usuarios</h4>
                    </div>
                    <div class="card-datatable pb-2">
                        <table class="dt-usuarios table">
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th width="100px">Acciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="createUsuario" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form class="needs-validation" action="">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Crear Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="basicInput">Nombre Usuario</label>
                                        <input type="text" class="form-control" id="nombreUsuario"
                                            placeholder="Ejm: Dr.Jon Doe">
                                        <div class="invalid-feedback nombre"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="correo"
                                            placeholder="Ejm: Dr.Jon Doe">
                                        <div class="invalid-feedback email"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">Rol</label>
                                        <select class="form-control" id="rol">
                                            <option>Seleccione una opción</option>
                                            <option value="Medico">Médico</option>
                                            <option value="Asistente">Asistente</option>
                                        </select>
                                        <div class="invalid-feedback rol"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">Contraseña</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Ejm: Dr.Jon Doe">
                                        <div class="invalid-feedback password"></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary create-record">Crear</button>
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
    <script>
        $(function() {
            'use strict';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var dt_basic = $('.dt-usuarios').DataTable({
                ajax: '{{ url('/configuracion/usuarios-json') }}',
                columns: [
                    { data: 'name' },
                    { data: 'email'},
                    { data: 'rol' }
                ],
                columnDefs: [{
                        // For Responsive
                        className: 'control',
                        orderable: false,
                        targets: 0
                    },
                    {
                        // Actions
                        targets: 3,
                        title: 'Acciones',
                        orderable: false,
                        render: function(data, type, full, meta) {
                            return (
                                '<a class="item-edit text-danger delete-record" data-id="' +
                                full.id + '">' +
                                feather.icons['trash-2'].toSvg({
                                    class: 'font-medium-4'
                                }) +
                                '</a>'
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
                let dataInputname = $('#nombreUsuario').val();
                let dataInputemail = $('#correo').val();
                let dataInputrol = $('#rol').val();
                let dataInputpassword = $('#password').val();
                let UrlBase = '{{ url('configuracion/usuarios/guardar-usuario') }}/';
                $.ajax({
                    type: 'POST',
                    url: UrlBase,
                    dataType: 'json',
                    data: {
                        name: dataInputname,
                        email: dataInputemail,
                        rol: dataInputrol,
                        password: dataInputpassword,
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
                        $('#nombreUsuario').removeClass('is-invalid');
                        $('#nombreUsuario').val('');
                        $('#correo').removeClass('is-invalid');
                        $('#correo').val('');
                        $('#rol').removeClass('is-invalid');
                        $('#rol').val('');
                        $('#password').removeClass('is-invalid');
                        $('#password').val('');
                        dt_basic.ajax.reload();
                    },
                    error: function(response) {
                        console.log(response.responseJSON.errors)
                        $('#nombreUsuario').addClass('is-invalid');
                        $('.nombre').text(response.responseJSON.errors.name);
                        $('#correo').addClass('is-invalid');
                        $('.email').text(response.responseJSON.errors.email);
                        $('#rol').addClass('is-invalid');
                        $('.rol').text(response.responseJSON.errors.rol);
                        $('#password').addClass('is-invalid');
                        $('.password').text(response.responseJSON.errors.password);
                    }
                });
            });
            // Eliminar registro
            $('.dt-usuarios tbody').on('click', '.delete-record', function() {
                let dataid = $(this).data('id');
                let baseUrl = '{{ url('configuracion/usuarios') }}/' + dataid +
                    '/eliminar-usuario';
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
                $('#nombreUsuario').removeClass('is-invalid');
                $('#nombreUsuario').val('');
                $('#correo').removeClass('is-invalid');
                $('#correo').val('');
                $('#rol').removeClass('is-invalid');
                $('#rol').val('');
                $('#password').removeClass('is-invalid');
                $('#password').val('');
            });
        });
    </script>
@endsection
