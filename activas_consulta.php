<?php

require_once 'conexion.php';


$query = "SELECT * FROM datos WHERE estado = 'activa'";

$resultado = mysqli_query($conexion, $query);

