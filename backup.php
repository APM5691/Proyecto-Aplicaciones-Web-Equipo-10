<?php

require_once './conexion.php';

$alt = "backup-" . rand() . ".sql";
exec('mysqldump.exe --user='.$_ENV['DB_USERNAME'].'  --password='.$_ENV['DB_PASSWORD'].'   '.$_ENV['DB_DATABASE'].'   '.'   > ./backup/'.$alt);

header('Location: sql.php?info=Copia de seguridad creada');

?>