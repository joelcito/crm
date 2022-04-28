@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tipos de campañas</h3>
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
                        {{-- <th>Descripcion</th> --}}
                        <th style="width: 40px">Etiqueta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Campañas de medios tradicionales</td>
                        {{-- <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger bg-danger" style="width: 55%"></div>
                        </div>
                        </td> --}}
                        <td><span class="badge bg-danger"><p style="padding-left:50px"></p></span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Campaña de marketing en redes sociales</td>
                        {{-- <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                            </div>
                        </td> --}}
                        <td><span class="badge bg-warning"><p style="padding-left:50px"></p></span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Campaña de empuje estacional</td>
                        {{-- <td>
                        <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-success" style="width: 100%"></div>
                        </div>
                        </td> --}}
                        <td><span class="badge bg-success"><p style="padding-left:50px"></p></span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Campaña de reconocimiento de marca</td>
                        {{-- <td>
                        <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-success" style="width: 100%"></div>
                        </div>
                        </td> --}}
                        <td><span class="badge bg-success"><p style="padding-left:50px"></p></span></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Campaña de lanzamiento de producto.
                            Email Marketing</td>
                        {{-- <td>
                        <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-primary" style="width: 90%"></div>
                        </div>
                        </td> --}}
                        <td><span class="badge bg-success"><p style="padding-left:50px"></p></span></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Campaña de publicidad pagada</td>
                        {{-- <td>
                        <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-primary" style="width: 90%"></div>
                        </div>
                        </td> --}}
                        <td><span class="badge bg-success btn-lg"><p style="padding-left:50px"></p></span></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Campaña de Marketing de contenidos</td>
                        {{-- <td>
                        <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-primary" style="width: 90%"></div>
                        </div>
                        </td> --}}
                        <td><span class="badge bg-success"><p style="padding-left:50px"></p></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
