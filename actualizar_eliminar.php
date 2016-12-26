<?php
require_once 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM datos WHERE id = '$id'";

    $resultado = mysqli_query($conexion, $query);
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Lista de Empresas Registradas</title>

        <!-- Bootstrap -->
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Inicio</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registros<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="agregar_empresa.php">Agregar</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="index.php">Activas</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="index.php">Inactivas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="jumbotron center-block">
                <p class="text-center">Modifica Los Datos De La Empresa</p>
            </div>
            <form method="POST" action="edit_delete.php">
                <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
                
                    <div class="form-group has-success">
                        <input type="hidden" class="form-control" id="inputSuccess1" name="id" value="<?php echo $row['id']; ?>">
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="inputSuccess1">Ingrese el nombre de la empresa</label>
                        <input type="text" class="form-control" id="inputSuccess1" name="nombre" value="<?php echo $row['nombre']; ?>">
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="inputSuccess1">Ingrese la razon social</label>
                        <input type="text" class="form-control" id="inputSuccess1" name="razon" value="<?php echo $row['razon_social']; ?>">
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="inputSuccess1">Ingrese la fecha de creacion</label>
                        <input type="text" class="form-control" id="inputSuccess1" name="creacion" value="<?php echo $row['fec_creacion']; ?>">
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="inputSuccess1">Ingrese el numero de trabajadores</label>
                        <input type="text" class="form-control" id="inputSuccess1" name="trabajadores" value="<?php echo $row['no_trabajadores']; ?>">
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="inputSuccess1">Ingrese el RFC</label>
                        <input type="text" class="form-control" id="inputSuccess1" name="rfc" value="<?php echo $row['rfc']; ?>">
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="inputSuccess1">Estado de la empresa</label>
                        <input type="text" class="form-control" id="inputSuccess1" name="estado" value="<?php echo $row['estado']; ?>">
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Actualizar" name="actualiza">
                        <input onclick="return confirm('¿Estas seguro de eliminar la empresa del sistema?');" type="submit" class="btn btn-danger" value="Eliminar" name="elimina">
                    </div>
                
                <?php } ?>

            </form>
        </div>
        <footer>
            <div class="container">
                <p class="text-muted">Ingreso de Empresas Derechos Reservados <?php echo date('Y') ?></p>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
</html>