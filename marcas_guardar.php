<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Marca</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
</head>
<body>
<?php readfile('./menu.html'); ?>
    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['marca']) || empty($_POST['marca'])) {
            echo '<strong>Debes escribir un valor para "marca"</strong>';
        } else {
            echo '<strong>El valor que escribiste para marca es: ' . $_POST['marca'] . '</strong>';
        }
        ?>
    </pre>
    </div>
    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['direccion_marca']) || empty($_POST['direccion_marca'])) {
            echo '<strong>Debes escribir un valor para "direccion_marca"</strong>';
        } else {
            echo '<strong>El valor que escribiste para direccion_marca es: ' . $_POST['direccion_marca'] . '</strong>';
        }
        ?>
    </pre>
    </div>
    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['pais']) || empty($_POST['pais'])) {
            echo '<strong>Debes escribir un valor para "pais"</strong>';
        } else {
            echo '<strong>El valor que escribiste para pais es: ' . $_POST['pais'] . '</strong>';
        }
        ?>
    </pre>
    </div>
    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['correo_electronico_marca']) || empty($_POST['correo_electronico_marca'])) {
            echo '<strong>Debes escribir un valor para "correo_electronico_marca"</strong>';
        } else {
            echo '<strong>El valor que escribiste para correo_electronico_marca es: ' . $_POST['correo_electronico_marca'] . '</strong>';
        }
        ?>
    </pre>
    </div>
    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['telefono']) || empty($_POST['telefono'])) {
            echo '<strong>Debes escribir un valor para "telefono"</strong>';
        } else {
            echo '<strong>El valor que escribiste para telefono es: ' . $_POST['telefono'] . '</strong>';
        }
        ?>
    </pre>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>