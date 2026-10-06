<?php

$conexion = mysql_connect("localhost", "root", "");

if (!$conexion) {
    die('No se pudo conectar: ' . mysql_error());
}

mysql_select_db("proyecto1", $conexion);

$consulta = "SELECT * FROM clientes";

$resultado = mysql_query($consulta);

echo '<table border="1">';

while ($fila = mysql_fetch_array($resultado)) {
    echo '<tr>';
    echo '<td>' . $fila['nombre'] . '</td>';

    ?>