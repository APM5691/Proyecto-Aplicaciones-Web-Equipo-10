<?php
require_once './conexion.php';
echo'<br>';
$alt = "backup-" . rand() . ".sql";
exec ('C:\xampp\mysql\bin\mysqldump.exe --user='.$_ENV['DB_USERNAME'].'  --password='.$_ENV['DB_PASSWORD'].' '.' '.' '.' '.'aplicaciones_web > C:\xampp\htdocs\Proyecto-Aplicaciones-Web\backup/'.$alt);
header('Location: sql.php?info=Copia de seguridad creada');
?>