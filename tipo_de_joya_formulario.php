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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="Inicio.html"><i class="fa fa-gem"></i> Venta de joyas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Inicio.html"><i class="fa fa-home"></i> Inicio<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catalogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="usuarios_formulario.html"><i class="fa fa-address-card"></i>Ingresar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="ventas_formulario.html"> Ventas</a>
                        <a class="dropdown-item" href="marcas_formulario.html">Marcas</a>
                        <a class="dropdown-item" href="Usuarios.html">Usuarios</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Productos.html">Productos</a>
                        <a class="dropdown-item" href="tipo_de_joya_formulario.html">Tipo de Joya</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-eye"></i>Ver</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Tipo de joya
            </div>
            <div class="card-body">
                <form action="marcas_guardar.php" method="post">
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tipo de joya
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                        </div>
                    </div>
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
                        <label for="material_secundario">Material Secundario</label>
                            <select class="form-control" id="material_secundario" name="material_secundario">
                              <option>Seleccionar</option>
                              <option>Oro</option>
                              <option>Plata</option>
                              <option>Metal Bañado en Oro</option>
                              <option>Metal Bañado en Plata</option>
                            </select>
                            <small id="material_secundario_help" class="form-text text-muted">Selecciona el Material Secundario</small>
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