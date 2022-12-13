<?php
include("conexion.php");
$numero = $_POST['numero'];
$i = 1;
while ($i <= $numero) {
    $nombre = $_POST['nombre' . $i];
    $apellidos = $_POST['apellido' . $i];
    $cu = $_POST['cu' . $i];
    $sexo = $_POST['sexo' . $i];
    $carrera = $_POST['carrera' . $i];
    $sql = "INSERT INTO alumnos (nombre, apellidos, cu, sexo, codigoCarrera) VALUES ('$nombre', '$apellidos', '$cu', '$sexo', '$carrera')";
    $conn->query($sql);
    $i++;
}
