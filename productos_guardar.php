<?php
if (

  !isset($_POST['nombre_producto']) || empty($_POST['nombre_producto'])

  || !isset($_POST['tipo_de_joya_id']) || empty($_POST['tipo_de_joya_id'])

   || !isset($_POST['no_existencias']) || empty($_POST['no_existencias'])

   || !isset($_POST['precio']) || empty($_POST['precio'])

   || !isset($_POST['descripcion']) || empty($_POST['descripcion'])

   || !isset($_POST['medida']) || empty($_POST['medida'])

   || !isset($_POST['precio_oferta']) || empty($_POST['precio_oferta'])

   || !isset($_POST['foto']) || empty($_POST['foto'])

){header('Location: productos_formulario.php?info=Parámetros incorrectos');

    exit;

}

require_once './conexion.php';

$nombreimg = $_FILES['imagen']['name'];

$archivo = $_FILES['imagen']['tmp_name'];

$ruta ="img";


$ruta=$ruta."/"."productos"."/".$nombreimg;


move_uploaded_file($archivo,$ruta);


$_POST['productos']=$ruta;

                           

$sql = <<<fin

insert into producto set

     nombre_producto = :nombre_producto

    , tipo_de_joya_id = :tipo_de_joya_id

    , no_existencias = :no_existencias

    , precio = :precio

    , descripcion = :descripcion

    , medida = :medida

    , precio_oferta = :precio_oferta

    , foto = :foto

    

fin;

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);

$sentencia->execute([

    ':nombre_producto' => $_POST['nombre_producto']

    , ':tipo_de_joya_id' => $_POST['tipo_de_joya_id']

    , ':no_existencias' => $_POST['no_existencias']

    , ':precio' => $_POST['precio']

    , ':descripcion' => $_POST['descripcion']

    , ':medida' => $_POST['medida']

    , ':precio_oferta' => $_POST['precio_oferta']

    , ':foto' => $_POST['foto']

    

]);

header('Location: Productos.php?info=Producto creado exitosamente');

?>



                            

                        