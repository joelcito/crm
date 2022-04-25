@extends('layouts.app')

@section('metadatos')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('css')
@endsection
<style>
     body {
          margin:0px;
        }
      
        .center {
          display:inline;
          margin: 3px;
        }
      
        .form-input {
          width:100px;
          padding:3px;
          background:#fff;
          border:2px dashed dodgerblue;
        }
        .form-input input {
          display:none;
        }
        .form-input label {
          display:block;
          width:100px;
          height: auto;
          max-height: 100px;
          background:#333;
          border-radius:10px;
          cursor:pointer;
        }
      
        .form-input img {
          width:100px;
          height: 100px;
          margin: 2px;
          opacity: .4;
        }
      
        .imgRemove{
          position: relative;
          bottom: 114px;
          left: 68%;
          background-color: transparent;
          border: none;
          font-size: 30px;
          outline: none;
        }
        .imgRemove::after{
          content: ' \21BA';
          color: #fff;
          font-weight: 900;
          border-radius: 8px;
          cursor: pointer;
        }
        .small{
          color: firebrick;
        } 
        .image{
          max-width: 100%;
    max-height: 100%;
        }
        #required{
          display: inline-block;
                        position: absolute;
                        right: 10px;
        }
        @media screen and (max-width: 768px) {
          body{
            width: 120%;
          }

        }
</style>

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3">
                            FORMULARIO
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            {{-- <button class="btn btn-success"  data-toggle="modal" onclick="abreModal()"><i class="fa fa-plus"></i> Nueva Campaña</button> --}}
                            {{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                                Launch Large Modal
                            </button> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="question">
                        <div class="description_class">
                            <input  type="text" name="Title" value="Title" id="title">
                            <textarea id="discpn" type="text" name="Description" placeholder="Form description"
                                rows="1"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')

    <script  type="text/javascript">

        $( document ).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });

        
    </script>
@endsection