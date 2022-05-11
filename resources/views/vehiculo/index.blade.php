@extends('layouts.plantillabase')

@section('contenido')
<head><title>Vehículos</title></head>

<body class="borde-general">
  <input type="text" class="input-buscar" placeholder="Buscar">
  <a class="nav-link active" href="" class="btn btn-primary" id="boton-filtrar">Filtrar</a>

<button type="button" class="btn btn-primary" id="boton-crear" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Crear +
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear nuevo Vehículo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/vehiculos"method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3" id="formu1">
      <label for="" >Modelo</label>
        <input id="modelo" name="modelo" type="text" placeholder="Nombre" class="form-control" tabindex="1" required="true">
    </div>
    <div class="mb-3" id="formu1">
      <label for="" >Matrícula</label>
        <input id="matricula" name="matricula" type="varchar" placeholder="XYZ-123" class="form-control" tabindex="2" required="true">
    </div>      
    <div class="mb-3" id="formu1">
      <label for="">Nombre conductor</label>
      <input id="nombreconduc" name="nombreconduc" type="text" placeholder="Nombre" class="form-control" tabindex="3" required="true">
    </div>
    <div class="mb-3" id="formu1">
      <label for="">Año</label>
      <input id="año" name="año" type="integer" placeholder="Nombre" class="form-control" tabindex="4" required="true">
    </div>
    <div class="mb-3" id="formu1">
      <label for="">Placa</label>
      <input id="placa" name="placa" type="varchar" placeholder="Placa" class="form-control" tabindex="5" required="true">
    </div>
    <div class="mb-3" id="formu2">
      <label for="">Documento conductor</label>
      <input id="documentoconduc" name="documentoconduc" placeholder="1234567890"type="integer" class="form-control" tabindex="6" required="true">
    </div>
    <div class="mb-3" id="formu2">
      <label for="">Fecha de vencimiento</label>
      <input id="fechavencimiento" name="fechavencimiento" type="date" class="form-control" tabindex="7" required="true">
    </div>
        <div>
        <center><button type="" submit tabindex="9" class="botoncrear">Crear</button></center>
        </div>
    </form>
      </div>
    </div>
  </div>
</div>

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
          <td>
            <form action="{{route ('vehiculos.destroy',$vehiculo->id)}}" method="POST">
              <a href="/vehiculos/{{ $vehiculo->id}}/edit" class="btn btn-info">edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">-</button>
            </form>
          </td>
        </tr>
      @endforeach 
  </table>
</body>

@endsection

