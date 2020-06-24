<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Clientes Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
</head>
<body>
<?php readfile('./menu.html'); ?>
    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['detalle_venta']) || empty($_POST['detalle_venta'])) {
            echo '<strong>Debes escribir un valor para "detalle_venta"</strong>';
        } else {
            echo '<strong>El valor que escribiste para detalle venta es: ' . $_POST['detalle_venta'] . '</strong>';
        }
        ?>
    </pre>
    </div>

    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['primer_apellido']) || empty($_POST['primer_apellido'])) {
            echo '<strong>Debes escribir un valor para "primer_apellido"</strong>';
        } else {
            echo '<strong>El valor que escribiste para primer_apellido es: ' . $_POST['primer_apellido'] . '</strong>';
        }
        ?>
    </pre>
    </div>
    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['segundo_apellido']) || empty($_POST['segundo_apellido'])) {
            echo '<strong>Debes escribir un valor para "segundo_apellido"</strong>';
        } else {
            echo '<strong>El valor que escribiste para segundo_apellido es: ' . $_POST['segundo_apellido'] . '</strong>';
        }
        ?>
    </pre>
    </div>

    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['email']) || empty($_POST['email'])) {
            echo '<strong>Debes escribir un valor para "email"</strong>';
        } else {
            echo '<strong>El valor que escribiste para email es: ' . $_POST['email'] . '</strong>';
        }
        ?>
    </pre>
    </div>

    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['password']) || empty($_POST['password'])) {
            echo '<strong>Debes escribir un valor para "password"</strong>';
        } else {
            echo '<strong>El valor que escribiste para password es: ' . $_POST['password'] . '</strong>';
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
    <div class="container">
    <pre>
    <?php
        if (!isset($_POST['comentarios']) || empty($_POST['comentarios'])) {
            echo '<strong>Debes escribir un valor para "comentarios"</strong>';
        } else {
            echo '<strong>El valor que escribiste para comentarios es: ' . $_POST['comentarios'] . '</strong>';
        }
        ?>
    </pre>
    </div>
   


    <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>