<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
  <?php readfile('./menu.html'); ?>

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
</body>

</html>