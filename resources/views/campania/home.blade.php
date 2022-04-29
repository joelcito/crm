


@extends('layouts.app')


@section('content')

<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Asignar Vendedor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-8 offset-md-2">
                      <form action="simple-results.html">
                          <div class="input-group">
                              <input type="search" class="form-control form-control-lg" placeholder="Bucar Vendedor">
                              <div class="input-group-append">
                                  <button type="button" class="btn btn-lg btn-default">
                                  <i class="fa fa-search"></i>
                                  </button>
                                  {{-- <button type="button" class="btn btn-lg btn-default">
                                      <i class="fa fa-plus"></i>
                                  </button> --}}
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
        </section>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
  </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 text-center">
    <div class="callout callout-info">
      <h5><i class="fas fa-home"></i> Campaña de Marketing</h5>
        Este es na campaña demo //aqui va la descripcion
      </div>
  </div>
</div>

<section class="content">
<div class="container-fluid">

<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <a href="{{ url('Formulario/formulario',[1]) }}" style="">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Formulario</span>
          <span class="info-box-number">
          10
          <small>%</small>
          </span>
        </div>
      </div>
    </a>

  </div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Me Gusta</span>
        <span class="info-box-number">41,410</span>
      </div>
    </div>
  </div>


  <div class="clearfix hidden-md-up"></div>
  <div class="col-12 col-sm-6 col-md-3">
    <a href="{{ url('Campania/formulario') }}" style="" data-toggle="modal" data-target="#modal-lg">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-plus"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Vendedor</span>
          <span class="info-box-number">760</span>
        </div>
      </div>
    </a>
  </div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
      <div class="info-box-content">
      <span class="info-box-text">Numero de Miembros</span>
      <span class="info-box-number">2,000</span>
      </div>
    </div>
  </div>

</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Informe de resumen mensual</h5>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
            <i class="fas fa-wrench"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
              <a href="#" class="dropdown-item">Action</a>
              <a href="#" class="dropdown-item">Another action</a>
              <a href="#" class="dropdown-item">Something else here</a>
              <a class="dropdown-divider"></a>
              <a href="#" class="dropdown-item">Separated link</a>
            </div>
          </div>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <p class="text-center">
              <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
            </p>
            <div class="chart">
              <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
            </div>
          </div>
          <div class="col-md-4">
            <p class="text-center">
            <strong>Finalización de objetivos</strong>
            </p>
            <div class="progress-group">
              Ventas no iniciada
              <span class="float-right"><b>160</b>/200</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: 80%"></div>
              </div>
            </div>

            <div class="progress-group">
              Ventas perdidas
              <span class="float-right"><b>310</b>/400</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-danger" style="width: 75%"></div>
              </div>
            </div>

            <div class="progress-group">
              <span class="progress-text">Ventas Ganadas</span>
              <span class="float-right"><b>480</b>/800</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-success" style="width: 60%"></div>
              </div>
            </div>

            <div class="progress-group">
              Ventas en proceso
              <span class="float-right"><b>250</b>/500</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-warning" style="width: 50%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-footer">
        <div class="row">
          <div class="col-sm-3 col-6">
            <div class="description-block border-right">
              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
              <h5 class="description-header">$35,210.43</h5>
              <span class="description-text">INGRESOS TOTALES</span>
            </div>
          </div>

          <div class="col-sm-3 col-6">
            <div class="description-block border-right">
              <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
              <h5 class="description-header">$10,390.90</h5>
              <span class="description-text">COSTO TOTAL</span>
            </div>
          </div>

          <div class="col-sm-3 col-6">
            <div class="description-block border-right">
              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
              <h5 class="description-header">$24,813.53</h5>
              <span class="description-text">BENEFICIO TOTAL</span>
            </div>
          </div>

          <div class="col-sm-3 col-6">
            <div class="description-block">
              <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
              <h5 class="description-header">1200</h5>
              <span class="description-text">CUMPLIMIENTOS DE META</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">

<div class="col-md-8">

  {{-- <div class="card">
    <div class="card-header">
      <h3 class="card-title">US-Visitors Report</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
        <i class="fas fa-times"></i>
        </button>
      </div>
    </div>

    <div class="card-body p-0">
      <div class="d-md-flex">
        <div class="p-1 flex-fill" style="overflow: hidden">

          <div id="world-map-markers" style="height: 325px; overflow: hidden">
          <div class="map"></div>
          </div>
        </div>
        <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
          <div class="description-block mb-4">
            <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
            <h5 class="description-header">8390</h5>
            <span class="description-text">Visits</span>
          </div>

          <div class="description-block mb-4">
            <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
            <h5 class="description-header">30%</h5>
            <span class="description-text">Referrals</span>
          </div>

          <div class="description-block">
            <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
            <h5 class="description-header">70%</h5>
            <span class="description-text">Organic</span>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

<div class="row">
  <div class="col-md-6">
    <div class="card direct-chat direct-chat-warning">
      <div class="card-header">
        <h3 class="card-title">Chat directo</h3>
        <div class="card-tools">
          <span title="3 New Messages" class="badge badge-warning">3</span>
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
          <i class="fas fa-comments"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <div class="card-body">
        <div class="direct-chat-messages">

            <div class="direct-chat-msg">
              <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-left">Alexander Pierce</span>
                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
              </div>

              <img class="direct-chat-img" src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="message user image">

              <div class="direct-chat-text">
              Is this template really for free? That's unbelievable!
              </div>
            </div>


            <div class="direct-chat-msg right">
              <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-right">Sarah Bullock</span>
                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
              </div>

              <img class="direct-chat-img" src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="message user image">

              <div class="direct-chat-text">
                You better believe it!
              </div>

            </div>


            <div class="direct-chat-msg">
              <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-left">Alexander Pierce</span>
                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
              </div>

              <img class="direct-chat-img" src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="message user image">

              <div class="direct-chat-text">
              Working with AdminLTE on a great new app! Wanna join?
              </div>

            </div>


            <div class="direct-chat-msg right">
              <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-right">Sarah Bullock</span>
                <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
              </div>

              <img class="direct-chat-img" src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="message user image">

              <div class="direct-chat-text">
              I would love to.
              </div>

            </div>

        </div>

        <div class="direct-chat-contacts">
          <ul class="contacts-list">
            <li>
              <a href="#">
                <img class="contacts-list-img" src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User Avatar">
                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                  Count Dracula
                  <small class="contacts-list-date float-right">2/28/2015</small>
                  </span>
                  <span class="contacts-list-msg">How have you been? I was...</span>
                </div>
              </a>
            </li>

            <li>
              <a href="#">
                <img class="contacts-list-img" src="{{ asset('dist/img/user7-128x128.jpg') }}" alt="User Avatar">
                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                  Sarah Doe
                  <small class="contacts-list-date float-right">2/23/2015</small>
                  </span>
                  <span class="contacts-list-msg">I will be waiting for...</span>
                </div>
              </a>
            </li>

            <li>
              <a href="#">
                <img class="contacts-list-img" src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="User Avatar">
                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                  Nadia Jolie
                  <small class="contacts-list-date float-right">2/20/2015</small>
                  </span>
                  <span class="contacts-list-msg">I'll call you back at...</span>
                </div>
              </a>
            </li>

            <li>
              <a href="#">
                <img class="contacts-list-img" src="{{ asset('dist/img/user5-128x128.jpg') }}" alt="User Avatar">
                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                  Nora S. Vans
                  <small class="contacts-list-date float-right">2/10/2015</small>
                  </span>
                  <span class="contacts-list-msg">Where is your new...</span>
                </div>
              </a>
            </li>

            <li>
              <a href="#">
                <img class="contacts-list-img" src="{{ asset('dist/img/user6-128x128.jpg') }}" alt="User Avatar">
                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                  John K.
                  <small class="contacts-list-date float-right">1/27/2015</small>
                  </span>
                  <span class="contacts-list-msg">Can I take a look at...</span>
                </div>
              </a>
            </li>

            <li>
              <a href="#">
                <img class="contacts-list-img" src="{{ asset('dist/img/user8-128x128.jpg') }}" alt="User Avatar">
                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                  Kenneth M.
                  <small class="contacts-list-date float-right">1/4/2015</small>
                  </span>
                  <span class="contacts-list-msg">Never mind I found...</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="card-footer">
        <form action="#" method="post">
          <div class="input-group">
            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
            <span class="input-group-append">
            <button type="button" class="btn btn-warning">Send</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
      <h3 class="card-title">Nuevos Miembros</h3>
        <div class="card-tools">
        <span class="badge badge-danger">8 New Members</span>
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
        <i class="fas fa-times"></i>
        </button>
        </div>
      </div>
      <div class="card-body p-0">
        <ul class="users-list clearfix">
          <li>
            <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User Image">
            <a class="users-list-name" href="#">Alexander Pierce</a>
            <span class="users-list-date">Today</span>
          </li>
          <li>
            <img src="{{ asset('dist/img/user8-128x128.jpg') }}" alt="User Image">
            <a class="users-list-name" href="#">Norman</a>
            <span class="users-list-date">Yesterday</span>
          </li>
          <li>
            <img src="{{ asset('dist/img/user7-128x128.jpg') }}" alt="User Image">
            <a class="users-list-name" href="#">Jane</a>
            <span class="users-list-date">12 Jan</span>
          </li>
          <li>
            <img src="{{ asset('dist/img/user6-128x128.jpg') }}" alt="User Image">
            <a class="users-list-name" href="#">John</a>
            <span class="users-list-date">12 Jan</span>
          </li>
          <li>
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" alt="User Image">
            <a class="users-list-name" href="#">Alexander</a>
            <span class="users-list-date">13 Jan</span>
          </li>
          <li>
            <img src="{{ asset('dist/img/user5-128x128.jpg') }}" alt="User Image">
            <a class="users-list-name" href="#">Sarah</a>
            <span class="users-list-date">14 Jan</span>
          </li>
          <li>
            <img src="{{ asset('dist/img/user4-128x128.jpg') }}" alt="User Image">
            <a class="users-list-name" href="#">Nora</a>
            <span class="users-list-date">15 Jan</span>
          </li>
          <li>
            <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="User Image">
            <a class="users-list-name" href="#">Nadia</a>
            <span class="users-list-date">15 Jan</span>
          </li>
        </ul>
      </div>
      <div class="card-footer text-center">
        <a href="javascript:">View All Users</a>
      </div>
    </div>
  </div>
</div>


<div class="card">
<div class="card-header border-transparent">
<h3 class="card-title">Lista de tareas</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body p-0">
<div class="table-responsive">
<table class="table m-0">
  <thead>
<tr>
  <th>Orden ID</th>
  <th>Tarea</th>
  <th>Prioridad</th>
  {{-- <th>Popularity</th> --}}
</tr>
</thead>
<tbody>
  @foreach ($formularios as $f)
    <tr>
      <td>{{ $f->formulario->nombre }}</td>
      <td>{{ $f->formulario->campania }}</td>
      <td><a href="{{ url('Formulario/respuestaFormulario', [$f->campania_id,$f->formulario_id]) }}" class="btn btn-success btn-icon"><i class="fa fa-list-alt"></i></a></td>
      {{-- @dd($f->formulario->nombre) --}}
    </tr>
  @endforeach
{{-- <tr>
<td><a href="pages/examples/invoice.html">OR9842</a></td>
<td>Recogida y análisis de datos</td>
<td><span class="badge badge-success">Baja</span></td>
<td>
<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
</td>
</tr> --}}
{{-- <tr>
<td><a href="pages/examples/invoice.html">OR1848</a></td>
<td>Investigación y análisis del público objetivo.</td>
<td><span class="badge badge-warning">Media</span></td>
<td>
<div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
</td>
</tr> --}}
{{-- <tr>
<td><a href="pages/examples/invoice.html">OR7429</a></td>
<td>Elaboración y planificación de informes.</td>
<td><span class="badge badge-danger">Alta</span></td>
<td>
<div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
</td>
</tr> --}}
{{-- <tr>
<td><a href="pages/examples/invoice.html">OR7429</a></td>
<td>SDesarrollo de estrategias de promoción de la marca de la empresa.</td>
<td><span class="badge badge-info">Proceso</span></td>
<td>
<div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
</td>
</tr> --}}
{{-- <tr>
<td><a href="pages/examples/invoice.html">OR1848</a></td>
<td>Auditoría de ventas y canales de venta.</td>
<td><span class="badge badge-warning">Media</span></td>
<td>
<div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
</td>
</tr> --}}
{{-- <tr>
<td><a href="pages/examples/invoice.html">OR7429</a></td>
<td>iPhone 6 Plus</td>
<td><span class="badge badge-danger">Alta</span></td>
<td>
<div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
</td>
</tr> --}}
{{-- <tr>
<td><a href="pages/examples/invoice.html">OR9842</a></td>
<td>Call of Duty IV</td>
<td><span class="badge badge-success">Baja</span></td>
<td>
<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
</td>
</tr> --}}
</tbody>
</table>
</div>

</div>

<div class="card-footer clearfix">
<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
<a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
</div>

</div>

</div>

<div class="col-md-4">

<div class="info-box mb-3 bg-warning">
<span class="info-box-icon"><i class="fas fa-tag"></i></span>
<div class="info-box-content">
<span class="info-box-text">Inventory</span>
<span class="info-box-number">5,200</span>
</div>

</div>

<div class="info-box mb-3 bg-success">
<span class="info-box-icon"><i class="far fa-heart"></i></span>
<div class="info-box-content">
<span class="info-box-text">Mentions</span>
<span class="info-box-number">92,050</span>
</div>

</div>

<div class="info-box mb-3 bg-danger">
<span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>
<div class="info-box-content">
<span class="info-box-text">Downloads</span>
<span class="info-box-number">114,381</span>
</div>

</div>

<div class="info-box mb-3 bg-info">
<span class="info-box-icon"><i class="far fa-comment"></i></span>
<div class="info-box-content">
<span class="info-box-text">Direct Messages</span>
<span class="info-box-number">163,921</span>
</div>

</div>

  {{-- <div class="card">
    <div class="card-header">
      <h3 class="card-title">Browser Usage</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
        <i class="fas fa-times"></i>
        </button>
      </div>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-md-8">
          <div class="chart-responsive">
            <canvas id="pieChart" height="150"></canvas>
          </div>

        </div>

        <div class="col-md-4">
          <ul class="chart-legend clearfix">
            <li><i class="far fa-circle text-danger"></i> Chrome</li>
            <li><i class="far fa-circle text-success"></i> IE</li>
            <li><i class="far fa-circle text-warning"></i> FireFox</li>
            <li><i class="far fa-circle text-info"></i> Safari</li>
            <li><i class="far fa-circle text-primary"></i> Opera</li>
            <li><i class="far fa-circle text-secondary"></i> Navigator</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="card-footer p-0">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="#" class="nav-link">
            United States of America
            <span class="float-right text-danger">
            <i class="fas fa-arrow-down text-sm"></i>
            12%</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            India
            <span class="float-right text-success">
            <i class="fas fa-arrow-up text-sm"></i> 4%
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            China
            <span class="float-right text-warning">
            <i class="fas fa-arrow-left text-sm"></i> 0%
            </span>
          </a>
        </li>
      </ul>
    </div>
  </div> --}}


<div class="card">
<div class="card-header">
<h3 class="card-title">Carreras de la Campaña</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
 </div>
</div>

<div class="card-body p-0">
<ul class="products-list product-list-in-card pl-2 pr-2">
<li class="item">
<div class="product-img">
<img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
</div>
<div class="product-info">
<a href="javascript:void(0)" class="product-title">Contaduria General
<span class="badge badge-warning float-right">$1800</span></a>
<span class="product-description">
Samsung 32" 1080p 60Hz LED Smart HDTV.
</span>
</div>
</li>

<li class="item">
<div class="product-img">
<img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
</div>
<div class="product-info">
<a href="javascript:void(0)" class="product-title">Derecho
<span class="badge badge-info float-right">$700</span></a>
<span class="product-description">
26" Mongoose Dolomite Men's 7-speed, Navy Blue.
</span>
</div>
</li>

<li class="item">
<div class="product-img">
<img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
</div>
<div class="product-info">
<a href="javascript:void(0)" class="product-title">
Mecanica<span class="badge badge-danger float-right">
$350
</span>
</a>
<span class="product-description">
Xbox One Console Bundle with Halo Master Chief Collection.
</span>
</div>
</li>

<li class="item">
<div class="product-img">
<img src="{{ asset('dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
</div>
<div class="product-info">
<a href="javascript:void(0)" class="product-title">Gastronomia
<span class="badge badge-success float-right">$399</span></a>
<span class="product-description">
PlayStation 4 500GB Console (PS4)
</span>
</div>
</li>

</ul>
</div>

<div class="card-footer text-center">
<a href="javascript:void(0)" class="uppercase">View All Products</a>
</div>

</div>

</div>

</div>

</div>
</section>
@stop
@section('js')
  <script src="{{ asset('dist/js/pages/dashboard_modificado.js') }}"></script>
@endsection
