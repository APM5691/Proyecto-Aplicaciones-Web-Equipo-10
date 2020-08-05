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
      height: 400px;
      /*same height as jumbotron */
      top: 15;
      left: 0;
      z-index: -1;
    }

    .jumbotron {
      height: 400px;
      color: white;
      text-shadow: #444 0 1px 1px;
      background: transparent;
    }
  </style>
</head>

<body>
  <div class="container-fluid">

    <?php readfile('./menu.html'); ?>

  </div>
 <br>
  <div class="bg"></div>
  <div class="jumbotron">
    <h1>Joyeria Luminosete</h1>
    <p class="lead">+ Parallax Effect using jQuery</p>
  </div>
  </div>

  <div class="container">
    <div class="row">
      <h2>Page Content</h2>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
      Aliquam in felis sit amet augue.
      <br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
      Aliquam in felis sit amet augue.
      <br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
      Aliquam in felis sit amet augue.
      <br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
      Aliquam in felis sit amet augue.
    </div>
    <hr>
    <div class="row">
      <h2>Page Content</h2>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
      Aliquam in felis sit amet augue.
      <h2>Page Content</h2>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
      Aliquam in felis sit amet augue.
      <h2>Page Content</h2>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
      Aliquam in felis sit amet augue.

    </div>
    <hr>
    <div class="row">
      <h2>Page Content</h2>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
      Aliquam in felis sit amet augue.
    </div>
  </div>
 
  <hr>

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>The End.</p>
  <div class="container mt-4">
    <div class="card">
      <div class="card-header">
        <div class="container mt-4">
          <h1 class="text-center active">Joyeria Luminosité
          </h1>
        </div>
      </div>
      <div class="card-body">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="Productos.php"> <img src="img/joyas4.jpg" class="rounded mx-auto d-block">
                <div class="carousel-caption d-none d-md-block " alt="Responsive image">
                  <h5> Tenemos lo que necesitas</h5>
                  <p>Puedes encontrar anillos</p>
                </div>
            </div>
            <div class="carousel-item">
              <a href="Productos.php"> <img src="img/joyas2.jpg" class="rounded mx-auto d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                  <h5>Tenemos lo que necesitas</h5>
                  <p>Puedes encontrar collares</p>
                </div>
            </div>
            <div class="carousel-item">
              <a href="Productos.php"> <img src="img/joyas3.jpg" class="rounded mx-auto d-block">
                <div class="carousel-caption d-none d-md-block ">
                  <h5>Tenemos lo que necesitas</h5>
                  <p>Puedes encontrar relojes</p>
                </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
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