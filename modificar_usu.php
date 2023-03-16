<?php
    include 'conecta_bd.php';

    $cod_usu = $_POST["cod_usu"];
    $nombre = $_POST["nombre"];
    $contrasena = $_POST["contrasena"];
    if ($nombre!=null) {
        $query = "UPDATE Usuario SET nombre='$nombre' WHERE idUsuario='$cod_usu'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($contrasena!=null) {
        $query = "UPDATE Usuario SET contrasena='$contrasena' WHERE idUsuario='$cod_usu'";
        $ejecuta = pg_query($conexion, $query);
    }
    header("location:usuario.html");
?>