@extends('adminlte::page')

@section('title', 'Comités Ciudadanos')

@section('content_header')
    <h1>Candidatos</h1>
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
                        <th scope="col">Planilla</th>
                        <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($candidatos as $candidato)
                        <tr>
                            <th scope="row">{{ $candidato-> id_demarcacion}}</th>
                            <td>{{ $candidato-> nombre_planilla}}</td>
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
