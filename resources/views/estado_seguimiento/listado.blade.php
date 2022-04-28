@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Estado de Seguimiento</h3>
            <div class="card-tools">
                <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Efectividad</th>
                        <th style="width: 40px">Etiqueta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Proceso</td>
                        <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger bg-danger" style="width: 5%"></div>
                        </div>
                        </td>
                        <td><span class="badge bg-danger">5%</span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Iniciado</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-warning" style="width: 30%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-warning">30%</span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Espera</td>
                        <td>
                        <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-warning" style="width: 60%"></div>
                        </div>
                        </td>
                        <td><span class="badge bg-warning">60%</span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Finalizado</td>
                        <td>
                        <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-success" style="width: 100%"></div>
                        </div>
                        </td>
                        <td><span class="badge bg-success">100%</span></td>
                    </tr>
                    {{-- <tr>
                        <td>5.</td>
                        <td>Folletos</td>
                        <td>
                        <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-primary" style="width: 90%"></div>
                        </div>
                        </td>
                        <td><span class="badge bg-success">90%</span></td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
@stop
