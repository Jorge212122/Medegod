<?php
    include 'conecta_bd.php';

    $cod_usu = $_POST["cod_usu"];
    $query = "DELETE FROM Usuario WHERE idUsuario = '$cod_usu'";
    $ejecuta = pg_query($conexion, $query);
    header("location:usuario.html");
?>