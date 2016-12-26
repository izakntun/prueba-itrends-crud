<?php

require_once 'conexion.php';
/* @var $_POST string */

if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
        isset($_POST['razon']) && !empty($_POST['razon']) &&
        isset($_POST['creacion']) && !empty($_POST['creacion']) &&
        isset($_POST['trabajadores']) && !empty($_POST['trabajadores']) &&
        isset($_POST['rfc']) && !empty($_POST['rfc']) &&
        isset($_POST['estado']) && !empty($_POST['estado'])) {

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
        $mensaje = "Error al crear el usuario." . $query . "<br>" . $conexion->error;
    }
    mysqli_close($conexion);
}
