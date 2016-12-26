<?php

require_once 'conexion.php';

$query = "SELECT * FROM datos";

$resultado = mysqli_query($conexion, $query);