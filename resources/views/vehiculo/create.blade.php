<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">  
  <title>Crear vehículo</title>  
</head>
<section class="section-formu">
  <h2 style="margin-left:50px; margin-top:30px">Crear nuevo vehículo</h2>

  <form action="/vehiculos"method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3" id="formu1">
      <label for="" >Modelo</label>
        <input id="modelo" name="modelo" type="text" placeholder="Nombre" class="form-control" tabindex="1">
    </div>
    <div class="mb-3" id="formu1">
      <label for="" >Matrícula</label>
        <input id="matricula" name="matricula" type="varchar" placeholder="XYZ-123" class="form-control" tabindex="2">
    </div>      
    <div class="mb-3" id="formu1">
      <label for="">Nombre conductor</label>
      <input id="nombreconduc" name="nombreconduc" type="text" placeholder="Nombre" class="form-control" tabindex="3">
    </div>
    <div class="mb-3" id="formu1">
      <label for="">Año</label>
      <input id="año" name="año" type="integer" placeholder="Nombre" class="form-control" tabindex="4">
    </div>
    <div class="mb-3" id="formu1">
      <label for="">Placa</label>
      <input id="placa" name="placa" type="varchar" placeholder="Placa" class="form-control" tabindex="5">
    </div>
    <div class="mb-3" id="formu2">
      <label for="">Documento conductor</label>
      <input id="documentoconduc" name="documentoconduc" placeholder="1234567890"type="integer" class="form-control" tabindex="6">
    </div>
    <div class="mb-3" id="formu2">
      <label for="">Fecha de vencimiento</label>
      <input id="fechavencimiento" name="fechavencimiento" type="date" class="form-control" tabindex="7">
    </div>
<!--         <div class="mb-3" id="formu2">
            <label for="">Tarjeta de propiedad</label>
            <input id="tarjetapropiedad" name="tarjetapropiedad" type="file" class="form-control" tabindex="5">
        </div>
        <div class="mb-3" id="formu2">
            <label for="">SOAT</label>
            <input id="soat" name="soat" type="file" class="form-control" tabindex="6">
        </div>
        <div class="mb-3" id="formu2">
            <label for="">Técnico-mecánica</label>
            <input id="tecnomecanica" name="tecnomecanica" type="file" class="form-control" tabindex="7">
        </div> -->
        <div class="botoncrear">
            <button type=""submit tabindex="9">Crear</button>
        </div>
    </form>
</section>