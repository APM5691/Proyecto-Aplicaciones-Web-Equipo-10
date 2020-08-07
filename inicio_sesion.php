<?php

if (
     !isset($_POST['correo_electronico']) 
      || empty($_POST['correo_electronico']) 
      || !filter_var($_POST['correo_electronico'], FILTER_VALIDATE_EMAIL)
      || !isset($_POST['password']) 
      || empty($_POST['password']) 
      
    
) {
    header('Location: index.php?error=Escribe tu correo y contraseña');
    exit;
}

require_once './conexion.php';
$sql = 'select id_cliente,nombre_cliente,perfil, password from cliente where correo_electronico =:correo_electronico';

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':correo_electronico'=>$_POST['correo_electronico']]);
$usuario =$sentencia->fetch(PDO::FETCH_ASSOC);

// el usuario existe?
if($usuario==false){
    header('Location: index.php?error=Cliente no encontrado '.$_POST['correo_electronico']);
   
    exit;
}

// ¿contraseña coincide?
if (!password_verify($_POST['password'], $usuario['password'])) {
    header('Location: index.php?error=Usuario o contraseña incorrectos');
    exit;
}
session_start();
$_SESSION['id']=$usuario;
$_SESSION['nombre']=$usuario;
$_SESSION['perfil']=$usuario;

header('Location: inicio.php?info=Bienvenido '.$usuario['nombre_cliente']);
?>
