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
          <h1 class="text-center">Joyeria luminose
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
            <a href="tipo_de_joya_formulario.html"> <img src="img/joyas4.jpg" class="rounded mx-auto d-block"> 
              <div class="carousel-caption d-none d-md-block " alt="Responsive image">
                <h5> First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item">
            <a href="tipo_de_joya_formulario.html"> <img src="img/joyas2.jpg" class="rounded mx-auto d-block">
              <div class="carousel-caption d-none d-md-block text-dark">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
            <a href="tipo_de_joya_formulario.html">  <img src="img/joyas3.jpg" class="rounded mx-auto d-block" >
              <div class="carousel-caption d-none d-md-block ">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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