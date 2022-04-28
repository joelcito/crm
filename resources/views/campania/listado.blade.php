@extends('layouts.app')

@section('metadatos')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}"> --}}
@endsection

@section('content')

    <div class="modal fade" id="modal-nuevo">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Formulario de Campaña</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <p>One fine body&hellip;</p> --}}
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Formulario de Campaña</h3>
                        </div>
                        <form action="" id="formulario-campania" name="formulario-campania">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nombre_campania">Nombre de la Campaña</label>
                                    <input type="text" class="form-control" id="nombre_campania" name="nombre_campania" placeholder="Ingrese el nombr de la campaña...">
                                    <small class="text-danger" id="_nombre_campania"></small>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fecha_inicio">Fecha Inicio</label>
                                            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" >
                                            <small class="text-danger" id="_fecha_inicio"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fecha_fin">Fecha Final</label>
                                            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" >
                                            <small class="text-danger" id="_fecha_fin"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="descripcion_campania">Descripcion de la Campaña</label>
                                            <textarea class="form-control" name="descripcion_campania" id="descripcion_campania" cols="2" rows="5" ></textarea>
                                            <small class="text-danger" id="_descripcion_campania"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <button type="button"  class="btn btn-success btn-block" onclick="crearCampania()">GUARDAR</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3">
                            Lista de Campañas
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <button class="btn btn-success"  data-toggle="modal" onclick="abreModal()"><i class="fa fa-plus"></i> Nueva Campaña</button>
                            {{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                                Launch Large Modal
                            </button> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="tabla-campania">
                        {{-- <table id="example2" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Fin</th>
                                    <th>Descripcion</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($campanias as $ca)
                                    <tr>
                                        <td>{{ $ca->id }}</td>
                                        <td>{{ $ca->nombre }}</td>
                                        <td>{{ $ca->fecha_inicio }}</td>
                                        <td>{{ $ca->fecha_fin }}</td>
                                        <td>{{ $ca->descripcion }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Fin</th>
                                    <th>Descripcion</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    {{-- <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script> --}}

    <script  type="text/javascript">

        $( document ).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            ajaxListado();
        });

        function abreModal(){
            
            document.getElementById("formulario-campania").reset();

            $('#modal-nuevo').modal('show');
        }
        

        function crearCampania(){

            if($('#formulario-campania')[0].checkValidity()){

                var datos = $('#formulario-campania').serialize();

                $.ajax({
                    url: "{{ url('Campania/guarda') }}",
                    data: datos,
                    type: 'POST',
                    success: function(data) {

						let campania = JSON.parse(data);

                        $('#_fecha_inicio, #_nombre_campania, #_fecha_fin, #_descripcion_campania').text('');

                        if(campania.success === false){

                            $.each(campania.errors, function(index, value){
                                $('#_'+index).text(value);
                            });    

                        }else{

                            Swal.fire({
                                title: 'Exito!',
                                text: 'Se guardo los datos con exito',
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            });

                            setTimeout(function(){

                                $('#modal-nuevo').modal('hide');

                            }, 3000);

                            // window.location.reload("{{ url('Campania/home') }}");
                            window.location.href = "{{ url('Campania/home')}}"

                            ajaxListado();

                        }

                    },
                    error: function(error){

                    }
                });
            }else{
				$('#formulario-campania')[0].reportValidity()
            }
        }

        function ajaxListado(){
            $.ajax({
                url: "{{ url('Campania/ajaxListado') }}",
                // data: datos,
                type: 'POST',
                success: function(data) {

                    $('#tabla-campania').html(data);
                    
                },
                error: function(error){
                    console.log(error);
                }
            });
        }

        function formulario(){
			// window.location.href = "{{ url('Campania/formulario') }}";
			window.location.href = "{{ url('Campania/home') }}";
        }
    </script>
@endsection