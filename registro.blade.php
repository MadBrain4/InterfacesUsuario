<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
    <link href="estilosCSS.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <nav class="d-flex flex-row-reverse p-5">
      <button type="button" class="btn btn-primary">Iniciar Sesión</button>
    </nav>
    <div class="container w-25 border border-info rounded-4" style="background-color:#9BD1E5" >
      <form class="d-flex flex-column">
        <div class="mb-3 pt-4 px-4">
          <label for="inputNombre" class="form-label fs-5">Nombre</label>
          <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
        </div>
        <div class="mb-3 px-4">
          <label for="inputCorreo" class="form-label fs-5">Correo</label>
          <input type="email" class="form-control" id="inputCorreo" placeholder="Correo">
        </div>
        <div class="mb-3 px-4">
          <label for="inputContra" class="form-label fs-5">Contraseña</label>
          <input type="password" class="form-control" id="inputContra" placeholder="Contraseña">
        </div>
        <div class="mb-3 px-4 pb-3">
          <label for="inputRepeContra" class="form-label fs-5">Repetir Contraseña</label>
          <input type="password" class="form-control" id="inputRepeContra" placeholder="Repetir Contraseña">
        </div>
        <button type="submit" class="btn btn-primary mx-5 col-auto mb-5 boton">Registrarse</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
