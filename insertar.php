<?php

require_once 'conexion.php';
/* @var $_POST string */

if (isset($_POST['nombre']) && !empty($_POST['nombre']) && trim($_POST['nombre']) &&
        isset($_POST['razon']) && !empty($_POST['razon']) && trim($_POST['razon']) &&
        isset($_POST['creacion']) && !empty($_POST['creacion']) && trim($_POST['creacion']) &&
        isset($_POST['trabajadores']) && !empty($_POST['trabajadores']) && trim($_POST['trabajadores']) &&
        isset($_POST['rfc']) && !empty($_POST['rfc']) && trim($_POST['rfc'], 'trim_value') &&
        isset($_POST['estado']) && !empty($_POST['estado']) && trim($_POST['estado'])) {

    $nombre = $_POST['nombre'];
    $razon = $_POST['razon'];
    $creacion = $_POST['creacion'];
    $trabajadores = $_POST['trabajadores'];
    $rfc = $_POST['rfc'];
    $estado = $_POST['estado'];

    $query = "INSERT INTO datos (nombre, razon_social, fec_creacion, no_trabajadores, rfc, estado)
           VALUES ('$nombre', '$razon', '$creacion', '$trabajadores', '$rfc', '$estado')";

    if ($conexion->query($query) === TRUE) {
        $mensaje = "Registro Exitoso";
    } else {
        $mensaje = "Error al crear el usuario.";
    }
    mysqli_close($conexion);
}
