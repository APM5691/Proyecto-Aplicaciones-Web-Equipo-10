<?php


$hola=password_hash( 'password', PASSWORD_BCRYPT,['cost'=>12]);

echo($hola);


?>