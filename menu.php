
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5c02c;">
  <img src="img/LUMINOSITE1.png" class="img-fluid" alt="Responsive image" />
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="Inicio.php"><i class="fa fa-home"></i> Inicio<span
            class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="catalogo.php">Catalogo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="index.php"><i class="fa fa-address-card"></i> Inicio de Sesion</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Opciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #f5ef38;">
          <a class="dropdown-item" href="ventas.php"><i class="fa fa-piggy-bank"></i> Ventas</a>
          <a class="dropdown-item" href="materiales.php"><i class="fa fa-user"></i> Materiales</a>
          <a class="dropdown-item" href="Productos.php"><i class="fa fa-cart-plus"></i> Productos</a>
          <a class="dropdown-item" href="clientes.php"><i class="fa fa-user-circle"></i> Clientes</a>
          <a class="dropdown-item" href="tipo_de_joya.php"><i class="fa fa-ring"></i> Tipo de Joya</a>
        </div>
      </li>
      <?php
      if(isset($_SESSION['id']) && is_numeric($_SESSION['id'])){
     echo ' <li class="nav-item">
        <a class="nav-link active" href="perfil.php" tabindex="-1" aria-disabled="true"><i class="fa fa-eye"></i> Ver</a>
      </li>';
      }
      ?>
      <?php
      if(isset($_SESSION['id']) && is_numeric($_SESSION['id']) && 'Administrador' == $_SESSION['perfil']){
   echo '<li class="nav-item">
   <a class="nav-link active" href="sql.php"><i class="fa fa-database"></i> Administracion</a>
 </li>';
      }
      ?>

    </ul>

    <form class="form-inline my-2 my-lg-0">

      <?php
      // printf($_SESSION['id']);
      if(isset($_SESSION['id']) && is_numeric($_SESSION['id'])){
   echo '<a class="nav-item nav-link" href="cerrar_sesion.php"><i class="fa fa-sign-out-alt"></i> Cerrar sesion</a>';
      }
      ?>

      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" />
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
        Buscar
      </button>
    </form>
  </div>
</nav>
