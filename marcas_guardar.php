<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Marca</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="Inicio.html"><i class="fa fa-gem"></i> Venta de joyas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Inicio.html"><i class="fa fa-home"></i> Inicio
            <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuarios_formulario.html"><i class="fa fa-address-card"></i>Ingresar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Opciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="ventas_formulario.html"> Ventas</a>
            <a class="dropdown-item" href="marcas_formulario.html">Marcas</a>
            <a class="dropdown-item" href="Usuarios.html">Usuarios</a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Productos.html">Productos</a>
            <a class="dropdown-item" href="tipo_de_joya_formulario.html">Tipo de Joya</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-eye"></i>Ver</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" />
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
          Buscar
        </button>
      </form>
    </div>
  </nav>
    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['marca']) || empty($_POST['marca'])) {
            echo '<strong>Debes escribir un valor para "marca"</strong>';
        } else {
            echo '<strong>El valor que escribiste para marca es: ' . $_POST['marca'] . '</strong>';
        }
        ?>
    </pre>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>