<?php


require_once 'conexion.php';


$query = "SELECT * FROM datos WHERE estado = 'inactiva'";

$resultado = mysqli_query($conexion, $query);

