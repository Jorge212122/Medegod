<?php
    include 'conecta_bd.php';

    $cod_usu = $_POST["cod_usu"];
    $nombre = $_POST["nombre"];
    $contrasena = $_POST["contrasena"];
    $query = "INSERT INTO Usuario VALUES ('$cod_usu', '$nombre', '$contrasena')";
    $ejecuta = pg_query($conexion, $query);
    header("location:usuario.html");    
?>