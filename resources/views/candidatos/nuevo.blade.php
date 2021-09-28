@extends('adminlte::page')

@section('title', 'Comités Ciudadanos')

@section('content_header')
    <h1>Nuevo candidato</h1>
@stop

@section('content')
<div class="container">
    <div class="accordion" id="accordionExample">
      <form action="">

        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-light btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseuno" aria-expanded="true" aria-controls="collapseOne">
                Datos de la planilla
              </button>
            </h2>
          </div>

          <div id="collapseuno" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                    municipio
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                    demarcacion
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="app" type="texto">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Planilla
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="apm" type="text">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Cargo
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="sobrenombre" type="text">
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Datos biográficos
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                    Nombre
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Apellido Paterno
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="app" type="texto">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Apellido Materno
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="apm" type="text">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Sobrenombre
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="sobrenombre" type="text">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Género
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="genero" type="text">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Género que le identifica
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="genero_identifica" type="text">
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Fecha de nacimiento
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha_nacimiento" type="text">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Lugar de nacimiento
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lugar_nacimiento" type="date" min="1900-01-01" max="2010-12-31">
                </div>
                <div class="col-sm">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Domicilio e INE
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Domicilio
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="domicilio" type="text">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Originario
                  </label><br>
                  <select name="" id="originario" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option>Seleccionar</option>
                    <option value=0>No</option>
                    <option value=1>Si</option>
                  </select>
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Tiempo de residencia (años)
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="residencia" type="number" min=0 max=100>
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      CURP
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="curp" type="text">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      RFC
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="rfc" type="text" title="4 letras 6 digitos">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Clave de elector
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="clave_elector" type="text">
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Número de emisión
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="numero_emision" type="text">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      CIC
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cic" type="text" title="4 letras 6 digitos">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      OCR
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ocr" type="text">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Datos de contacto y escolaridad
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Número telefonico
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telefono" type="text" pattern="[0-9]{10}">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Correo electrónico
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="correo" type="email">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Ocupación
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id_ocupacion" type="text">
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Nivel de escolaridad
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id_escolaridad" type="text">
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                Datos de grupos Étnico y Vulnerable (Opcionales)
              </button>
            </h2>
          </div>
          <div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                      Grupo étnico
                  </label><br>
                  <select name="" id="etnia" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option>Seleccionar</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                    Grupo al que se adscribe
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="grupo_adscribe" type="email">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                    Originario del ámbito
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="originario_ambito" type="text">
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                    Hablante indígena
                  </label><br>
                  <select name="" id="hablante_indigena" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option>Seleccionar</option>
                    <option value="1">No</option>
                    <option value="2">Si</option>
                  </select>
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                    Grupo Vulnerable
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="gpo_vulnerable" type="email">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                    Grupo Diversidad Sexual
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="gpo_diversidad" type="text">
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                    Ingrese otra forma de diversidad sexual
                  </label><br>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="otra_diversidad" type="text">
                </div>
                <div class="col-sm">
                  <label class=" text-gray-700 text-sm font-bold mb-2" for="nombre">
                    Privacidad
                  </label><br>
                  <select name="" id="privacidad" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option>Seleccionar</option>
                    <option value="1">No</option>
                    <option value="2">Si</option>
                  </select>
                </div>
                <div class="col-sm">
                </div>
              </div> <br>
              <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                  <button type="button" class="btn btn-outline-secondary btn-block">Guardar</button>
                </div>
                <div class="col-sm">
                </div>
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

