<!-- <?php
if(isset($_SESSION['id']) && is_numeric($_SESSION['id'])){
require_once'./checar_sesion.php';
}
?> -->

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
        Inicio de sesion
      </div>
      <div class="card-body">
        <form action="inicio_sesion.php" method="post">

          <div class="form-group">
            <label for="correo_electronico">Direccion de E-mail </label>
            <input type="text" class="form-control form-control-sm" id="correo_electronico" name="correo_electronico" aria-describedby="correo_electronico" required />
            <small id="email_help" class="form-text text-muted">Escribe tu Email</small>
            <div class="invalid-feedback"> Please provide a valid city.</div>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control form-control-sm" id="password" name="password" aria-describedby="password" required />
            <small id="password_help" class="form-text text-muted">Escribe tu Contraseña</small>
          </div>

          <button class="btn btn-success" type="submit">
            Iniciar Sesion
          </button>
          <a class="btn btn-dark" href="clientes_formularios.php" role="button">Registrarse</a>
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
          <p><?php echo isset($_REQUEST['error']) ? htmlentities($_REQUEST['error']) : ''; ?></p>
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

</body>

</html>