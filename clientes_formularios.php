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
  <?php require_once('./menu.php'); ?>
  <div class="container mt-4">
    <div class="card">
      <div class="card-header">
        Formulario Para Clientes
      </div>
      <div class="card-body">
        <form action="clientes_guardar.php" method="post" enctype='multipart/form-data'>
          <div class="form-group">
            <label for="nombre_cliente">Nombre</label>
            <input type="text" class="form-control form-control-sm" id="nombre_cliente" name="nombre_cliente" aria-describedby="nombre_help" required />
            <small id="nombre_help" class="form-text text-muted">Escribe tu nombre</small>
          </div>
          <div class="form-group">
            <label for="primer_apellido">Primer Apellido</label>
            <input type="text" class="form-control form-control-sm" id="primer_apellido" name="primer_apellido" aria-describedby="primer_apellido" required />
            <small id="primer_apellido_help" class="form-text text-muted">Escribe tu primer Apellido</small>
          </div>
          <div class="form-group">
            <label for="segundo_apellido">Segundo Apellido</label>
            <input type="text" class="form-control form-control-sm" id="segundo_apellido" name="segundo_apellido" aria-describedby="segundo_apellido" required />
            <small id="segundo_apellido_help" class="form-text text-muted">Escribe tu segundo nombre si tienes</small>
          </div>


          <div class="form-group">
            <label for="perfil">¿Que eres?</label><br />
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="perfil" id="perfil" value="Administrador" />
              <label class="form-check-label" for="perfil">Administrador</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="perfil" id="perfil2" value="Tecnico" />
              <label class="form-check-label" for="perfil2">Tecnico</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="perfil" id="perfil3" value="Staff" />
              <label class="form-check-label" for="perfil3">Staff</label>
            </div>
          </div>
          <div class="form-group">
            <label for="estatus">Estatus</label><br />
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estatus" id="estatus" value="Activo" />
              <label class="form-check-label" for="estatus">Activo</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estatus" id="estatus2" value="Inactivo" />
              <label class="form-check-label" for="estatus2">Inactivo</label>
            </div>
          </div>
          <div class="form-group">
            <label for="sexo">Sexo</label><br />
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Hombre" />
              <label class="form-check-label" for="sexo">Hombre</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="Mujer" />
              <label class="form-check-label" for="sexo2">Mujer</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexo" id="sexo3" value="Indeterminado" />
              <label class="form-check-label" for="sexo3">Indeterminado</label>
            </div>
          </div>
          <div class="form-group">
            <label for="correo_electronico">Direccion de E-mail </label>
            <input type="text" class="form-control form-control-sm" id="correo_electronico" name="correo_electronico" aria-describedby="correo_electronico" required />
            <small id="email_help" class="form-text text-muted">Escribe tu Email</small>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control form-control-sm" id="password" name="password" aria-describedby="password" required />
            <small id="password_help" class="form-text text-muted">Escribe tu Contraseña</small>
          </div>
          <div class="form-group">
            <label for="password">Confirmar Contraseña</label>
            <input type="password" class="form-control form-control-sm" id="password2" name="password2" aria-describedby="password2" required />
            <small id="password_help" class="form-text text-muted">Confirmar tu Contraseña</small>
          </div>


          <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control form-control-sm" id="telefono" name="telefono" aria-describedby="telefono" required />
            <small id="telefono_help" class="form-text text-muted">Telefono</small>
          </div>

          <div class="form-group">
            <input type='file' name='imagen' accept="image/*">
            <br>
            </div>
          
          <button class="btn btn-success btn-sm" type="submit">
            <i class="fa fa-save"></i> Guardar
          </button>
        </form>
      </div>
    </div>
  </div>
  <div class="modal" tabindex="-1" role="dialog" id="dsm33-modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">ATENCIÓN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><?php echo isset($_REQUEST['error']) ? htmlentities($_REQUEST['error']) : '&nbsp;'; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <?php
  if (isset($_REQUEST['error'])) {
    echo <<<fin
<script>
    $(function(e) {
        $('#dsm33-modal').modal();
    })
</script>
fin;
  }
  ?>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>