<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">  
  <title>Crear empresa</title>  
</head>
<section class="section-formu">
  <h2 style="margin-left:50px; margin-top:30px">Crear empresa</h2>

  <form action="/empresas"method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3" id="formu1">
      <label for="" >Nombre Empresa</label>
        <input id="nombrempresa" name="nombrempresa" type="string" placeholder="Nombre" class="form-control" tabindex="1">
    </div>
    <div class="mb-3" id="formu1">
      <label for="" >Dirección</label>
        <input id="direccion" name="direccion" type="char" placeholder="Cra 0# 00-00" class="form-control" tabindex="2">
    </div>      
    <div class="mb-3" id="formu1">
      <label for="">Teléfono de contácto</label>
      <input id="telefono" name="telefono" type="integer" placeholder="123456789" class="form-control" tabindex="3">
    </div>
    <div class="mb-3" id="formu1">
      <label for="">Correo electrónico</label>
      <input id="correo" name="correo" type="char" placeholder="Email" class="form-control" tabindex="4">
    </div>
    <div class="mb-3" id="formu1">
      <label for="">Kit</label>
      <input id="kit" name="kit" type="char" placeholder="Kit" class="form-control" tabindex="5">
    </div>
    <div class="mb-3" id="formu2">
      <label for="">Persona de contacto</label>
      <input id="personacontac" name="personacontac" type="string" placeholder="Nombre" class="form-control" tabindex="6">
    </div>
    <div class="mb-3" id="formu2">
      <label for="">Contraseña</label>
      <input id="contraseña" name="contraseña" type="password" placeholder="****" class="form-control" tabindex="7">
    </div>
    <div class="botoncrear">
        <button type=""submit tabindex="9">Crear</button>
    </div>
    </form>
</section>