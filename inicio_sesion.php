<?php

if (
     !isset($_POST['correo_electronico']) 
      || empty($_POST['correo_electronico']) 
      || !filter_var($_POST['correo_electronico'], FILTER_VALIDATE_EMAIL)
      || !isset($_POST['password']) 
      || empty($_POST['password']) 
      
    
) {
    header('Location: index.php?info=Escribe tu correo y contraseña');
    exit;
}

require_once './conexion.php';
$sql = 'select id_cliente,nombre_cliente,perfil, password from cliente where correo_electronico =:correo_electronico';

$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':correo_electronico'=>$_POST['correo_electronico']]);
$usuario =$sentencia->fetch(PDO::FETCH_ASSOC);

// el usuario existe?
if($usuario==false){
    header('Location: index.php?info=Cliente no encontrado '.$_POST['correo_electronico']);
   
    exit;
}

// ¿contraseña coincide?
if (!password_verify($_POST['password'], $usuario['password'])) {
    header('Location: index.php?info=Usuario o contraseña incorrectos');
?>
 <div class="modal" tabindex="-1" role="dialog" id="dsm33-modal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <script>
    $(function(e) {
        $('#dsm33-modal').modal();
    })
</script>
<?php

    exit;
}
header('Location: inicio.php?info=Bienvenido '.$usuario['nombre_cliente']);
?>
