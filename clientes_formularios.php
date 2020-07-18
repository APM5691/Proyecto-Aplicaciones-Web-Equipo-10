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
        <form action="clientes_guardar.php" method="post">
          <div class="form-group">
            <label for="nombre_cliente">Nombre</label>
            <input type="text" class="form-control form-control-sm" id="nombre_cliente" name="nombre_cliente" aria-describedby="nombre_help" />
            <small id="nombre_help" class="form-text text-muted">Escribe tu nombre</small>
          </div>
          <div class="form-group">
            <label for="primer_apellido">Primer Apellido</label>
            <input type="text" class="form-control form-control-sm" id="primer_apellido" name="primer_apellido" aria-describedby="primer_apellido" />
            <small id="primer_apellido_help" class="form-text text-muted">Escribe tu primer Apellido</small>
          </div>
          <div class="form-group">
            <label for="segundo_apellido">Segundo Apellido</label>
            <input type="text" class="form-control form-control-sm" id="segundo_apellido" name="segundo_apellido" aria-describedby="segundo_apellido" />
            <small id="segundo_apellido_help" class="form-text text-muted">Escribe tu segundo nombre si tienes</small>
          </div>


          <div class="form-group">
            <label for="perfil">¿Que eres?</label><br />
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="perfil" id="perfil" value="Administrador" />
              <label class="form-check-label" for="perfil">Administrador</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="perfil" id="perfil" value="Tecnico" />
              <label class="form-check-label" for="perfil">Tecnico</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="perfil" id="perfil" value="Staff" />
              <label class="form-check-label" for="perfil">Staff</label>
            </div>
          </div>
          <div class="form-group">
            <label for="estatus">Estatus</label><br />
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estatus" id="estatus" value="Activo" />
              <label class="form-check-label" for="estatus">Activo</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estatus" id="estatus" value="Inactivo" />
              <label class="form-check-label" for="estatus">Inactivo</label>
            </div>
          </div>
          <div class="form-group">
            <label for="sexo">Sexo</label><br />
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexo" id="Hombre" value="Hombre" />
              <label class="form-check-label" for="sexo">Hombre</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexo" id="Mujer" value="Mujer" />
              <label class="form-check-label" for="sexo">Mujer</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexo" id="Indeterminado" value="Indeterminado" />
              <label class="form-check-label" for="sexo">Indeterminado</label>
            </div>
          </div>
          <div class="form-group">
            <label for="correo_electronico">Direccion de E-mail </label>
            <input type="text" class="form-control form-control-sm" id="correo_electronico" name="correo_electronico" aria-describedby="correo_electronico" />
            <small id="email_help" class="form-text text-muted">Escribe tu Email</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control form-control-sm" id="password" name="password" aria-describedby="password" />
            <small id="password_help" class="form-text text-muted">Escribe tu Password</small>
          </div>


          <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control form-control-sm" id="telefono" name="telefono" aria-describedby="telefono" />
            <small id="telefono_help" class="form-text text-muted">Telefono</small>
          </div>
          <div class="form-group">
            <label for="comentarios">Comentarios</label>
            <textarea class="form-control" id="comentarios" name="comentarios" rows="3"></textarea>
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