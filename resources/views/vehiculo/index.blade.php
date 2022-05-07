@extends('layouts.plantillabase')

@section('contenido')
<head><title>Vehículos</title></head>

<body class="borde-general">
  <input type="text" class="input-buscar" placeholder="Buscar">
  <a class="nav-link active" href="" class="btn btn-primary" id="boton-filtrar">Filtrar</a>
  <a class="nav-link active" href="vehiculos/create" class="btn btn-primary" id="boton-crear">Crear +</a>

  <table class=" table mt-4" id="tabla">
      <tr>
        <th scope="col">Modelo</th>
        <th scope="col">Matrícula</th>
        <th scope="col">Conductor</th>
        <th scope="col">Año</th>
        <th scope="col">Placa</th>
        <th scope="col">Documento</th>
        <th scope="col">Fecha de vencimiento</th>
      </tr>
  
      @foreach ($vehiculos as $vehiculo)
        <tr>
          <td>{{ $vehiculo-> modelo}}</td>
          <td>{{ $vehiculo-> matricula}}</td>
          <td>{{ $vehiculo-> nombreconduc}}</td>
          <td>{{ $vehiculo-> año}}</td>
          <td>{{ $vehiculo-> placa}}</td>
          <td>{{ $vehiculo-> documentoconduc}}</td>
          <td>{{ $vehiculo-> fechavencimiento}}</td>
        </tr>
      @endforeach 
  </table>
</body>
@endsection