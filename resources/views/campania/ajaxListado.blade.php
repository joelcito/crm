
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

<table id="example2" class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Progreso</th>
            <th>Porcentaje</th>
            <th>Estado</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Campaña de medios tradicionales</td>
            <td>15/04/2022</td>
            <td>20/05/2022</td>
            <td>
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
                </div>
            </td>
            <td>
                <span class="badge bg-danger">55%</span>
            </td>
            <td>
                <span class="badge badge-danger">Baja</span>
            </td>
            <td>
                <button class="btn btn-info btn-icon" title="Formulario" onclick="formulario()"><i class="fa fa-list"></i></button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Campaña de empuje estacional</td>
            <td>15/04/2022</td>
            <td>20/05/2022</td>
            <td>
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-danger" style="width: 90%"></div>
                </div>
            </td>
            <td>
                <span class="badge bg-success">95%</span>
            </td>
            <td>
                <span class="badge badge-success">Alto</span>
            </td>
            <td>
                <button class="btn btn-info btn-icon" title="Formulario" onclick="formulario()"><i class="fa fa-list"></i></button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Campaña de publicidad</td>
            <td>15/04/2022</td>
            <td>20/05/2022</td>
            <td>
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
            </td>
            <td>
                <span class="badge bg-warning">70%</span>
            </td>
            <td>
                <span class="badge badge-warning">Media</span>
            </td>
            <td>
                <button class="btn btn-info btn-icon" title="Formulario" onclick="formulario()"><i class="fa fa-list"></i></button>
            </td>
        </tr>
        {{-- @foreach ($campanias as $ca)
            <tr>
                <td>{{ $ca->id }}</td>
                <td>{{ $ca->nombre }}</td>
                <td>{{ $ca->fecha_inicio }}</td>
                <td>{{ $ca->fecha_fin }}</td>
                <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%">
                        </div>
                    </div>
                </td>
                <td>
                    <span class="badge bg-warning">70%</span>
                </td>
                <td>
                    <button class="btn btn-info btn-icon" title="Formulario" onclick="formulario()"><i class="fa fa-list"></i></button>
                </td>
            </tr>
        @endforeach --}}
    </tbody>
    <tfoot>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Progreso</th>
            <th>Porcentaje</th>
            <th>Estado</th>
            <th></th>
        </tr>
    </tfoot>
</table>

<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>

<script type="text/javascript">

    $(function () {
        // $("#example2").DataTable({
        //     "responsive": true, 
        //     "lengthChange": false, 
        //     "autoWidth": false,
        //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $('#example2').DataTable({
            order: [[ 0, "desc" ]],
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
    });
</script>