@extends('layouts.plantillabase')

@section('contenido')
<head><title>Empresas</title></head>

<body class="borde-general">
  <input type="text" class="input-buscar" placeholder="Buscar">
  <a class="nav-link active" href="" class="btn btn-primary" id="boton-filtrar">Filtrar</a>
  <a class="nav-link active" href="empresas/create" class="btn btn-primary" id="boton-crear">Crear +</a>

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

        </tr>
      @endforeach 
  </table>
</body>
@endsection