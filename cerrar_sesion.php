<?php
if(!session_start()){
// session_start();
$_SESSION = [];

session_destroy();

header('Location: index.php?error=Sesion cerrada');
}else{
    header('Location: index.php?error=Inicia Sesion'); 
}


?>