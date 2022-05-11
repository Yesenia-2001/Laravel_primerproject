@extends('layouts.plantillabase')

@section('contenido')
  <head><title>Editar Vehículos</title></head>

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
          <h5 class="modal-title" id="exampleModalLabel">Editar Vehículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/vehiculos/{{$vehiculo->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
      @csrf
      <div class="mb-3" id="formu1">
        <label for="" >Modelo</label>
          <input id="modelo" name="modelo" type="text" placeholder="Nombre" class="form-control" value="{{$vehiculo->modelo}}" required="true">
      </div>
      <div class="mb-3" id="formu1">
        <label for="" >Matrícula</label>
          <input id="matricula" name="matricula" type="varchar" placeholder="XYZ-123" class="form-control" value="{{$vehiculo->matricula}}" required="true">
      </div>      
      <div class="mb-3" id="formu1">
        <label for="">Nombre conductor</label>
        <input id="nombreconduc" name="nombreconduc" type="text" placeholder="Nombre" class="form-control" value="{{$vehiculo->nombreconduc}}" required="true">
      </div>
      <div class="mb-3" id="formu1">
        <label for="">Año</label>
        <input id="año" name="año" type="integer" placeholder="Nombre" class="form-control" value="{{$vehiculo->año}}" required="true">
      </div>
      <div class="mb-3" id="formu1">
        <label for="">Placa</label>
        <input id="placa" name="placa" type="varchar" placeholder="Placa" class="form-control" value="{{$vehiculo->placa}}" required="true">
      </div>
      <div class="mb-3" id="formu2">
        <label for="">Documento conductor</label>
        <input id="documentoconduc" name="documentoconduc" placeholder="1234567890"type="integer" class="form-control" value="{{$vehiculo->documentoconduc}}" required="true">
      </div>
      <div class="mb-3" id="formu2">
        <label for="">Fecha de vencimiento</label>
        <input id="fechavencimiento" name="fechavencimiento" type="date" class="form-control" value="{{$vehiculo->fechavencimiento}}" required="true">
      </div>
          <div>
          <center><button type="" submit tabindex="9" class="botoncrear">Editar</button></center>
          </div>
      </form>
        </div>
      </div>
    </div>
  </div>
@endsection
