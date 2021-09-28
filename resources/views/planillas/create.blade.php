@extends('adminlte::page')

@section('title', 'Comités Ciudadanos')

@section('content_header')
    <h1>Nueva Planilla</h1>
@stop

@section('content')
<div class="container">
    <div class="accordion" id="accordionExample">
      <form action="/planillas" method="POST">
            @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                            Municipio
                        </label><br>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id_municipio" type="text">
                    </div>
                    <div class="col-sm">
                        <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                            Demarcación
                        </label><br>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id_demarcacion" name="id_demarcacion" type="texto">
                    </div>
                    <div class="col-sm">
                        <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                            Nombre de la planilla
                        </label><br>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre_planilla" name="nombre_planilla" type="texto">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                        <button type="submit" class="btn btn-outline-secondary btn-block">Guardar</button>
                    </div>
                    <div class="col-sm"> <br> 
                    </div>
                </div>
            </div>
        </div>

      </form>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
