<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar tipo de joya</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
</head>
<body>
<?php readfile('./menu.html'); ?>
    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['tipo_de_joya']) || empty($_POST['tipo_de_joya'])) {
            echo '<strong>Debes escribir un valor para "tipo_de_joya"</strong>';
        } else {
            echo '<strong>El valor que escribiste para tipo_de_joya es: ' . $_POST['tipo_de_joya'] . '</strong>';
        }
        ?>
    </pre>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>