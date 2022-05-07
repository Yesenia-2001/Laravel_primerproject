@extends('layouts.plantillabase')

@section('contenido')
<head><title>Conductores</title></head>


<body class="borde-general">
  <input type="text" class="input-buscar" placeholder="Buscar">
  <a class="nav-link active" href="" class="btn btn-primary" id="boton-filtrar">Filtrar</a>
  <a class="nav-link active" href="conductores/create" class="btn btn-primary" id="boton-crear">Crear +</a>

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
        </tr>
      @endforeach 
      
    </table>
    </body>
@endsection