<?php
if (
  !isset($_POST['nombre_producto']) || empty($_POST['nombre_producto'])
  || !isset($_POST['tipo_de_joya_id']) || empty($_POST['tipo_de_joya_id'])
   || !isset($_POST['no_existencias']) || empty($_POST['no_existencias'])
   || !isset($_POST['precio']) || empty($_POST['precio'])
   || !isset($_POST['descricion']) || empty($_POST['descricion'])
   || !isset($_POST['medida']) || !in_array($_POST['medida'])
   || !isset($_POST['precio_oferta']) || !in_array($_POST['precio_oferta'])
   || !isset($_POST['foto']) || !in_array($_POST['foto'])
   || !isset($_POST['foto_original']) || empty($_POST['foto_original'])
    header('Location: productos_formulario.php?info=Parámetros incorrectos');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
insert into producto set
     nombre_producto = :nombre_producto
    , tipo_de_joya_id = :tipo_de_joya_id
    , no_existencias = :no_existencias
    , precio = :precio
    , descricion = :descricion
    , medida = :medida
    , precio_oferta = :precio_oferta
    , foto = :foto
    , foto_original = :foto_original
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre_producto' => $_POST['nombre_producto']
    , ':tipo_de_joya_id' => $_POST['tipo_de_joya_id']
    , ':no_existencias' => $_POST['no_existencias']
    , ':precio' => $_POST['precio']
    , ':descricion' => $_POST['descricion']
    , ':medida' => $_POST['medida']
    , ':precio_oferta' => $_POST['precio_oferta']
    , ':foto' => $_POST['foto']
    , ':foto_original' => $_POST['foto_original']
]);
header('Location: Productos.php?info=Producto creado exitosamente');
?>