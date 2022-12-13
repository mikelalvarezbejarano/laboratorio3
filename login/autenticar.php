<?php
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    if ($usuario == 'mikel' && $contrasena == 'admin') {
        echo 'Bienvenido';
        Header("Location: ../alumnos/Introducir.php");
    } else {
        echo 'Usuario o contraseña incorrectos';
        Header("Location: loguearse.php");
    }
?>