<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>tipo de joyas formulario</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
</head>

<body>
<?php readfile('./menu.html'); ?>
  <div class="container mt-4">
    <div class="card">
      <div class="card-header">
        Formulario Para Clientes
      </div>
      <div class="card-body">
        <form action="Nombre_guardar.php" method="post">
          <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" class="form-control form-control-sm" id="Nombre" name="Nombre"
              aria-describedby="Nombre_help" />
            <small id="marca_help" class="form-text text-muted">Escribe tu nombre</small>
          </div>
          
          <div class="form-group">
            <label for="perfil">¿Que eres?</label><br />
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                value="option1" />
              <label class="form-check-label" for="inlineRadio1">Administrador</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                value="option2" />
              <label class="form-check-label" for="inlineRadio2">Usuario</label>
            </div>
          </div>
          <div class="form-group">
            <label for="Sexo">Sexo</label><br />
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Sexo" id="Hombre"
                value="option1" />
              <label class="form-check-label" for="Sexo">Hombre</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Sexo" id="Mujer"
                value="option2" />
              <label class="form-check-label" for="Sexo">Mujer</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Sexo" id="Indeterminado"
                value="option2" />
              <label class="form-check-label" for="Sexo">Indeterminado</label>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Direccion de Email </label>
            <input type="email" class="form-control form-control-sm" aria-describedby="emailHelp" />
            <small id="emailHelp" class="form-text text-muted">Escribe tu Email</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control form-control-sm" aria-describedby="password" />
            <small id="emailHelp" class="form-text text-muted">Escribe tu Password</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Primer Apellido</label>
            <input type="text" class="form-control form-control-sm" aria-describedby="text" />
            <small id="emailHelp" class="form-text text-muted">Escribe tu primer Apellido</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Primer Segundo</label>
            <input type="text" class="form-control form-control-sm" aria-describedby="text" />
            <small id="emailHelp" class="form-text text-muted">Escribe tu segundo nombre si tienes</small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Telefono</label>
            <input type="text" class="form-control form-control-sm" aria-describedby="text" />
            <small id="emailHelp" class="form-text text-muted">Telefono</small>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button class="btn btn-success btn-sm" type="submit">
            <i class="fa fa-save"></i> Guardar
          </button>
        </form>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>