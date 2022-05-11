@extends('layouts.plantillabase')

@section('contenido')
<head><title>Conductores</title></head>


<body class="borde-general">
  <input type="text" class="input-buscar" placeholder="Buscar">
  <a class="nav-link active" href="" class="btn btn-primary" id="boton-filtrar">Filtrar</a>
  <button type="button" class="btn btn-primary" id="boton-crear" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Crear +
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" style="width=100em" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear nuevo Conductor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="width=100em">
        <form action="/conductores" method="POST" style="width=100em">
          @csrf
          <div class="mb-3" id="formu1">
              <label for="" class="form-label">Nombre</label>
              <input id="nombre" name="nombre" type="string" placeholder="Nombre" class="form-control" tabindex="1" required pattern="[A-Za-z]+" require="true">
          </div>
          <div class="mb-3" id="formu1">
              <label for="" class="form-label">Apellidos</label>
              <input id="apellido" name="apellido" type="string" placeholder="Apellidos" class="form-control" tabindex="2"  require="true">
          </div>
          
          <div class="mb-3" id="formu1">
              <label for="" class="form-label">Teléfono</label>
              <input id="telefono" name="telefono" type="integer" placeholder="123456789" class="form-control" tabindex="3" require="true">
          </div>
          <div class="mb-3" id="formu2">
              <label for="" class="form-label">Numero de pase</label>
              <input id="numpase" name="numpase" type="integer" placeholder="00000" class="form-control" tabindex="4" require="true">
          </div>
          <div class="mb-3" id="formu2">
              <label for="" class="form-label">Direccón</label>
              <input id="direccion" name="direccion" type="char" placeholder="Cra 0#00-00" class="form-control" tabindex="5" require="true">
          </div>
          <center><button type=""submit tabindex="9" class="botoncrear">Crear</button></center>
        </form>
      </div>
    </div>
  </div>
</div>

  <table class=" table mt-4" id="tabla">
      <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Numero de pase</th>
      </tr>
      @foreach ($conductores as $conductores)
        <tr>
          <td>{{ $conductores-> nombre}}</td>
          <td>{{ $conductores-> apellido}}</td>
          <td>{{ $conductores-> telefono}}</td>
          <td>{{ $conductores-> direccion}}</td>
          <td>{{ $conductores-> numpase}}</td>
          <td>
            <a class="btn btn-info">edit</a>
            <button class="btn btn-danger">-</button>
          </td>
        </tr>
      @endforeach 
      
    </table>
    </body>
@endsection