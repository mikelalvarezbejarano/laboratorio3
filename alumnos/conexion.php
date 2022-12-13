<?php
    $conn = new mysqli("localhost", "root", "", "parcial1");

    if($conn->connect_errno){
        echo "Error al conectar a la base de datos";
        exit();
    }
?>