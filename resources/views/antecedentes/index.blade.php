@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/plugins/extensions/ext-component-sweet-alerts.css') }}">
@endsection
@section('contenido')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Antecedentes</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">Configuración</li>
                            <li class="breadcrumb-item active">Antecedentes</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <button class="btn btn-primary waves-effect waves-float waves-light" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather='plus-circle'></i>
                        Crear Antecedente
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
                        <h4 class="card-title">Listado de Antecedentes</h4>
                    </div>
                    <div class="card-datatable pb-2">
                        <table class="dt-antecedentes table">
                            <thead>
                                <tr>
                                    <th>Antecedentes</th>
                                    <th width="100px">Acciones</th>
                                </tr>
                            </thead>
                        </table>
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
    <script>
        $(function() {
            'use strict';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var dt_basic = $('.dt-antecedentes').DataTable({
                ajax: '{{ url('/configuracion/antecedentes-json') }}',
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

            $('.dt-antecedentes tbody').on('click', '.delete-record', function() {
                
                let dataid = $(this).data('id');
                let baseUrl ='{{ url("configuracion/antecedentes") }}/'+dataid+'/eliminar-antecedente';
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
                            success: function (response) {
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
                // console.log();
            });
        });
    </script>
@endsection
