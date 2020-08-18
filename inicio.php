<?php

if (!isset($_SESSION)) {

  require_once './checar_sesion.php';

}

?>
<!DOCTYPE html>
<html lang="es-Mx">
  <head>
  <meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Lunimosite Inicio</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
  <?php include('./menu.php'); ?>

    <div class="site-blocks-cover" style="background-image: url(https://www.corazondejoyas.com/wp-content/uploads/2013/05/ComoVenderJoyasOro.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2 active">El lujo no debe salir caro</h1>
            <div class="intro-text text-center text-md-left">
              <p>
                <a href="catalogo.php" class="btn btn-sm btn-primary">Abrir el Catalogo</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class=""></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">ANTECEDENTES DE LA ORGANIZACIÓN</h2>
              <p>Joyería Luminosité es una empresa orgullosamente mexicana , establecida en el año 2020
ubicada en Toluca con presencia en el centro de toluca, a un lado de la plaza de los mártires. Esta empresa fue creada por 3 estudiantes apasionados por el mundo de digital

para facilitar la búsqueda de joyas al mejor precio, pero manteniendo la mejor calidad posible, a su disposición.



Nos enfocamos en la venta de joyeria de segunda mano, no incluyendo los aspectos de distribución y entrega de los productos, directamente la empresa no proporciona estos servicios pero contando con terceros para la distribución.
</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class=""></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">MISIÓN DE LA ORGANIZACIÓN</h2>
              <p>Ofrecer una amplia variedad de joyas con la mejor, calidad y

valor, y brindar los mejores precios en el mercado.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class=""></span>
            </div>
            <div class="text">
              <h2 class="">VISIÓN DE LA ORGANIZACIÓN</h2>
              <p>Crecer como empresa líder en el mercado de de venta de joyas de segunda mano en línea,buscando la innovación en el sector, motivados por la pasión y compromiso para nuestra empresa y sus nuevos intereses.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Obten productos!!</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a><img src="https://joyerialuminosete.000webhostapp.com/img/productos/anillo_oro2.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="#">Ofertas % en casi todos los productos</a></h2>
            <p class="post-meta mb-4"><a></a> <span class="block-8-sep">&bullet;</span> September 13, 2020</p>
            <p>Quieres adquirir uno de nuestros productos da quick en el enlace de abajo.</p>
            <p><a href="catalogo.php" class="btn btn-primary btn-sm">Abrir el catalogo</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include('./pie_pagina.php'); ?>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
<!-- Development version -->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

<!-- Production version -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="js/main.js"></script>
  
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
var jumboHeight = $('.jumbotron').outerHeight();

function parallax() {

var scrolled = $(window).scrollTop();

$('.bg').css('height', (jumboHeight - scrolled) + 'px');
}
$(window).scroll(function(e) {

parallax();

});

</script>

</body>
</html>