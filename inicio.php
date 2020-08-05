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