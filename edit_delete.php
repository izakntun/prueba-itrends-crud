<?php
require_once 'conexion.php';

if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
        isset($_POST['razon']) && !empty($_POST['razon']) &&
        isset($_POST['creacion']) && !empty($_POST['creacion']) &&
        isset($_POST['trabajadores']) && !empty($_POST['trabajadores']) &&
        isset($_POST['rfc']) && !empty($_POST['rfc']) &&
        isset($_POST['estado']) && !empty($_POST['estado']) &&
        isset($_POST['id']) && !empty($_POST['id']) &&
        isset($_POST['actualiza'])) {
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $razon = $_POST['razon'];
    $creacion = $_POST['creacion'];
    $trabajadores = $_POST['trabajadores'];
    $rfc = $_POST['rfc'];
    $estado = $_POST['estado'];


    $query = "UPDATE datos SET nombre = '$nombre', razon_social = '$razon', fec_creacion = '$creacion', no_trabajadores = '$trabajadores', rfc = '$rfc', estado = '$estado' WHERE id = $id";

    if ($conexion->query($query) === TRUE) {
        $mensaje = "Se Realizo la Actualizacion con Exito";
    } else {
        $mensaje = "Error al crear el usuario." . $query . "<br>" . $conexion->error;
    }
    mysqli_close($conexion);
    
} elseif (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
        isset($_POST['razon']) && !empty($_POST['razon']) &&
        isset($_POST['creacion']) && !empty($_POST['creacion']) &&
        isset($_POST['trabajadores']) && !empty($_POST['trabajadores']) &&
        isset($_POST['rfc']) && !empty($_POST['rfc']) &&
        isset($_POST['estado']) && !empty($_POST['estado']) &&
        isset($_POST['id']) && !empty($_POST['id']) &&
        isset($_POST['elimina'])) {
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $razon = $_POST['razon'];
    $creacion = $_POST['creacion'];
    $trabajadores = $_POST['trabajadores'];
    $rfc = $_POST['rfc'];
    $estado = $_POST['estado'];


    $query = "DELETE FROM datos WHERE id = $id";

    if ($conexion->query($query) === TRUE) {
        $mensaje = "Se Realizo la Actualizacion con Exito";
    } else {
        $mensaje = "Error al crear el usuario." . $query . "<br>" . $conexion->error;
    }
    mysqli_close($conexion);
}
?>
<script>
    window.location = 'index.php';

</script>


