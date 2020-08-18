<header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

          <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <img src="img/LUMINOSITE1.png">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a class="js-logo-clone">Joyeria Luminosite</a>
              </div>
            </div>


            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                <?php

if (isset($_SESSION['id']) && is_numeric($_SESSION['id']) && !isset($_SESSION['direccion'])) {

  echo '
  <div class="alert alert-danger" role="alert">
  Llenar el formulario de direccion
  <li><a href="direcciones_formulario.php"><i class="icon icon-exclamation-triangle"></i></a></li>
</div>';
}



if (isset($_SESSION['id']) && is_numeric($_SESSION['id'])) {

  echo '<li><a href="perfil.php"><i class="icon icon-person"></i></a></li>';
}

?>

        <?php

if (!isset($_SESSION['id'])) {

  echo'<li><a href="index.php"><span class="fa fa-address-card"></span>  Inicia sesion / Registrarse </a></li>';
}
?>
          <?php

// printf($_SESSION['id']);

if (isset($_SESSION['id']) && is_numeric($_SESSION['id'])) {

  echo '<li><a href="carrito_compras.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span
                    >
                      
                    </a>
                  </li>';
                }

                ?>




                <?php

// printf($_SESSION['id']);

if (isset($_SESSION['id']) && is_numeric($_SESSION['id'])) {
  
  echo '<a class="navbar-brand mb-20 nav-link"  href="cerrar_sesion.php"><i class="fa fa-sign-out-alt"></i> Cerrar sesion</a>';
}

?>
            
            <!-- <?php

if (isset($_SESSION['id']) && is_numeric($_SESSION['id']) && 'Administrador' == $_SESSION['perfil']) {

  echo '<div class="d-flex">

  <div class="dropdown mr-1">

    <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
      Opciones
    </button>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">

    <a class="dropdown-item" href="ventas.php"><i class="fa fa-piggy-bank"></i> Ventas</a>

    <a class="dropdown-item" href="materiales.php"><i class="fa fa-gem"></i> Materiales</a>

    <a class="dropdown-item" href="Productos.php"><i class="fa fa-cart-plus"></i> Productos</a>

    <a class="dropdown-item" href="clientes.php"><i class="fa fa-user-circle"></i> Clientes</a>

    <a class="dropdown-item" href="tipo_de_joya.php"><i class="fa fa-ring"></i> Tipo de Joya</a>

    </div>

  </div>';
}

?> -->
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li>
              <a href="inicio.php"><i class="fa fa-home"></i>  Inicio</a>
            
            </li>
            
            <li>
              <a href="catalogo.php"><i class="fa fa-book-open"></i>  Catalogo</a>
            </li>



            
<?php

if (isset($_SESSION['id']) && is_numeric($_SESSION['id']) && 'Administrador' == $_SESSION['perfil']) {

  echo '<li class="nav-item">

<a class="nav-link active" href="sql.php"><i class="fa fa-database"></i> Administracion</a>

</li>';
}

?>
 
          </ul>
      
        </div>
      </nav>
    </header>