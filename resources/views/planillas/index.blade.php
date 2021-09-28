@extends('adminlte::page')

@section('title', 'Comités Ciudadanos')

@section('content_header')
    <h1>Planillas</h1>
@stop

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">

            <div class="table-responsive-sm">
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Demarcación</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($planillas as $planilla)
                        <tr>
                            <th scope="row">{{ $planilla-> id_demarcacion}}</th>
                            <td>{{ $planilla-> nombre_planilla}}</td>
                            <td>Otto</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
