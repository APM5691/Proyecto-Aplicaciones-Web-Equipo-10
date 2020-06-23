<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Joya Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
<?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Tipo dejoya</div>
            <div class="card-body">
                <form action="tipo_de_joya_guardar.php" method="post">
                    <div class="dropdown"></div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"></div>
                    <div class="form-group">
                        <label for="marca">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="marca" name="marca" aria-describedby="marca_help">
                        <small id="marca_help" class="form-text text-muted">Escribe el nombre del producto</small>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="material_principal">Material Principal</label>
                            <select class="form-control" id="material_principal" name="material_principal">
                              <option>Seleccionar</option>
                              <option>Oro</option>
                              <option>Plata</option>
                              <option>Metal Bañado en Oro</option>
                              <option>Metal Bañado en Plata</option>
                            </select>
                            <small id="material_principal_help" class="form-text text-muted">Selecciona el Material Principal</small>
                          </div>
                        <div class="form-group">
                            <label for="descripcion">Kilates</label>
                            <select class="form-control" id="descripcion" name="descripcion" >
                                <option>Seleccionar</option>
                                <option>6</option>
                                <option>10</option>
                                <option>12</option>
                                <option>24</option>
                                <option>32</option>
                            </select>
                            <small id="descripcion_help" class="form-text text-muted">Selecciona los Kilates</small>
                        </div>
                        <div class="form-group">
                            <label for="descripcion1">Estado</label>
                            <select class="form-control" id="descripcion1" name="descripcion1">
                                <option>Seleccionar</option>
                                <option>Casi nuevo</option>
                                <option>Casi usado</option>
                                <option>Usado</option>
                                <option>Semi Usado</option>
                                <option>Desgastado</option>
                                <option>Muy usado</option>
                                <option style="height: 50%;" class="alert alert-danger">Roto</option>
                            </select>
                            <small id="descripcion1_help" class="form-text text-muted">Selecciona el estado en el que se encuentra</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Comentarios </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
                        </div>
                        <button class="btn btn-success btn-sm" type="submit"> <i class="fa fa-save"></i> Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>