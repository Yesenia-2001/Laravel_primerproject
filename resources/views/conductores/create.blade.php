<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">  
    <title>Crear conductor</title>  
</head>
<section class="section-formu-con">
<h2 style="margin-left:23px;">Crear nuevo conductor</h2>

<form action="/conductores" method="POST">
    @csrf
    <div class="mb-3" id="formucon">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="string" placeholder="Nombre" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3" id="formucon">
        <label for="" class="form-label">Apellidos</label>
        <input id="apellido" name="apellido" type="string" placeholder="Apellidos" class="form-control" tabindex="2">
    </div>
    
    <div class="mb-3" id="formucon">
        <label for="" class="form-label">Teléfono</label>
        <input id="telefono" name="telefono" type="integer" placeholder="123456789" class="form-control" tabindex="3">
    </div>
    <div class="mb-3" id="formucon1">
        <label for="" class="form-label">Numero de pase</label>
        <input id="numpase" name="numpase" type="integer" placeholder="00000" class="form-control" tabindex="4">
    </div>
    <div class="mb-3" id="formucon1">
        <label for="" class="form-label">Direccón</label>
        <input id="direccion" name="direccion" type="char" placeholder="Cra 0#00-00" class="form-control" tabindex="5">
    </div>
    <button type=""submit class="btn btn-primary" tabindex="9" style="margin-top:10em; margin-left:20em">Guardar</button>
</form>
</section>
