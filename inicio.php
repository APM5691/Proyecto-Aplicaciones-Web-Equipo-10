<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <style>
    .bg {
      background: url(https://www.corazondejoyas.com/wp-content/uploads/2013/05/ComoVenderJoyasOro.jpg);
      position: fixed;
      width: 100%;
      height: 600px;
      /*same height as jumbotron */
      top: 15;
      left: 0;
      z-index: -1;
    }

    .jumbotron {
      height: 600px;
      color: white;
      text-shadow: #444 0 1px 1px;
      background: transparent;
    }
  </style>
</head>

<body>

  <?php require_once('./menu.php'); ?>


  <div class="bg"></div>
  <div class="jumbotron">
    <h1>Joyeria Luminosite</h1>
    <p class="lead">El lujo no debe, salir caro</p>
  </div>
  </div>

  <div class="container">
    <div class="row">
      <h2>ANTECEDENTES DE LA ORGANIZACIÓN</h2>
      Joyería Luminosité es una empresa orgullosamente mexicana , establecida en el año 2020
      ubicada en Toluca con presencia en el centro de toluca, a un lado de la plaza de los mártires.

      Esta empresa fue creada por 3 estudiantes apasionados por el mundo de digital
      para facilitar la búsqueda de joyas al mejor precio, pero manteniendo la mejor calidad posible, a su disposición.

      Nos enfocamos en la venta de joyeria de segunda mano, no incluyendo los aspectos de distribución y entrega de los productos, directamente la empresa no proporciona estos servicios pero contando con terceros para la distribución.

    </div>
    <hr>
    <div class="row">
      <h2>MISIÓN DE LA ORGANIZACIÓN</h2>
      Ofrecer una amplia variedad de joyas con la mejor, calidad y
      valor, y brindar los mejores precios en el mercado.

      <h2>VISIÓN DE LA ORGANIZACIÓN</h2>
      Crecer como empresa líder en el mercado de de venta de joyas de segunda mano en línea,buscando la innovación en el sector, motivados por la pasión y compromiso para nuestra empresa y sus nuevos intereses.
      <h2>OBJETIVOS DE LA ORGANIZACIÓN</h2>
      Promover un mercado dentro del sector de la joyería de segunda mano a una escala global,convirtiendo a nuestra empresa en una de las mejores dentro de su campo.

    </div>
   
    
  </div>

  <hr>

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>The End.</p>

      </div>
    </div>
  </div>
  </div>
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