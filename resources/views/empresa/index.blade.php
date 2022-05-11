@extends('layouts.plantillabase')

@section('contenido')
<head><title>Empresas</title></head>

<body class="borde-general">
  <input type="text" class="input-buscar" placeholder="Buscar">
  <a class="nav-link active" href="" class="btn btn-primary" id="boton-filtrar">Filtrar</a>
  <button type="button" class="btn btn-primary" id="boton-crear" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Crear +
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear nueva Empresa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/empresas"method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3" id="formu1">
      <label for="" >Nombre Empresa</label>
        <input id="nombrempresa" name="nombrempresa" type="string" placeholder="Nombre" class="form-control" tabindex="1" require="true" >
    </div>
    <div class="mb-3" id="formu1">
      <label for="" >Dirección</label>
        <input id="direccion" name="direccion" type="char" placeholder="Cra 0# 00-00" class="form-control" tabindex="2" require="true">
    </div>      
    <div class="mb-3" id="formu1">
      <label for="">Teléfono de contácto</label>
      <input id="telefono" name="telefono" type="integer" placeholder="123456789" class="form-control" tabindex="3" require="true">
    </div>
    <div class="mb-3" id="formu1">
      <label for="">Correo electrónico</label>
      <input id="correo" name="correo" type="char" placeholder="Email" class="form-control" tabindex="4" require="true" pattern="[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+">
    </div>
    <div class="mb-3" id="formu1">
      <label for="">Kit</label>
      <input id="kit" name="kit" type="char" placeholder="Kit" class="form-control" tabindex="5" require="true">
    </div>
    <div class="mb-3" id="formu2">
      <label for="">Persona de contacto</label>
      <input id="personacontac" name="personacontac" type="string" placeholder="Nombre" class="form-control" tabindex="6" require="true">
    </div>
    <div class="mb-3" id="formu2">
      <label for="">Contraseña</label>
      <input id="contraseña" name="contraseña" type="password" placeholder="****" class="form-control" class="form-control is-valid" tabindex="7" require="true">
    </div>
    <div>
        <center><button type=""submit tabindex="9" class="botoncrear">Crear</button></center>
    </div>
    </form>
      </div>
    </div>
  </div>
</div>

  <table class=" table mt-4" id="tabla">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Dirección</th>
        <th scope="col">Télefono contácto</th>
        <th scope="col">Email</th>
        <th scope="col">Kit</th>
        <th scope="col">Persona contacto</th>
      </tr>
  
      @foreach ($empresas as $empresa)
        <tr>
          <td>{{ $empresa-> nombrempresa}}</td>
          <td>{{ $empresa-> direccion}}</td>
          <td>{{ $empresa-> telefono}}</td>
          <td>{{ $empresa-> correo}}</td>
          <td>{{ $empresa-> kit}}</td>
          <td>{{ $empresa-> personacontac}}</td>
          <td>
            <a class="btn btn-info">edit</a>
            <button class="btn btn-danger">-</button>
          </td>
          

        </tr>
      @endforeach 
  </table>
</body>
@endsection