@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('dist/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dist/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('contenido')
    <div class="section-header">
        <h1>Antecedentes</h1>
        <div class="section-header-button">
            <a href="" class="btn btn-primary">Nuevo Antecedente</a>
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

                                </tbody>
                            </table>
                        </div>
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
@endsection
