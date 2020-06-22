<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar direccion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
</head>
<body>
<?php readfile('./menu.html'); ?>
    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['calle']) || empty($_POST['calle'])) {
            echo '<strong>Debes escribir el nombre de tu calle para "calle"</strong>';
        } else {
            echo '<strong>Tu calle es: ' . $_POST['calle'] . '</strong>';
        }
        ?>
        <br>
    <?php
        if (!isset($_POST['numero']) || empty($_POST['numero'])) {
            echo '<strong>Debes escribir el numero de tu dirección para "numero"</strong>';
        } else {
            echo '<strong>Tu numero es: ' . $_POST['numero'] . '</strong>';
        }
        ?>
        <br>
    <?php
        if (!isset($_POST['localidad']) || empty($_POST['localidad'])) {
            echo '<strong>Debes escribir el nombre de tu localidad para "localidad"</strong>';
        } else {
            echo '<strong>Tu localidad es: ' . $_POST['localidad'] . '</strong>';
        }
        ?>
        <br>
    <?php
        if (!isset($_POST['municipio']) || empty($_POST['municipio'])) {
            echo '<strong>Debes escribir el nombre de tu municipio para "municipio"</strong>';
        } else {
            echo '<strong>Tu municipio es: ' . $_POST['municipio'] . '</strong>';
        }
        ?>
        <br>
    <?php
        if (!isset($_POST['estado']) || empty($_POST['estado'])) {
            echo '<strong>Debes escribir el nombre de tu estado para "estado"</strong>';
        } else {
            echo '<strong>Tu estado es: ' . $_POST['estado'] . '</strong>';
        }
        ?>
    </pre>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>