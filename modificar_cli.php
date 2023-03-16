<?php
    include 'conecta_bd.php';

    $cod_cli = $_POST["cod_cli"];
    $nombre = $_POST["nombre"];
    $ape_pat = $_POST["ape_pat"];
    $ape_mat = $_POST["ape_mat"];

    $estado = $_POST["estado"];
    $calle = $_POST["calle"];
    $colonia = $_POST["colonia"];
    $numero = $_POST["numero"];
    $telefono = $_POST["telefono"];
    if ($nombre!=null) {
        $query = "UPDATE Cliente SET nombre='$nombre' WHERE idCliente='$cod_cli'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($ape_pat!=null) {
        $query = "UPDATE Cliente SET apellidopaterno='$ape_pat' WHERE idCliente='$cod_cli'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($ape_mat!=null) {
        $query = "UPDATE Cliente SET apellidomaterno='$ape_mat' WHERE idCliente='$cod_cli'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($estado!=null) {
        $query = "UPDATE Cliente SET estado='$estado' WHERE idCliente='$cod_cli'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($calle!=null) {
        $query = "UPDATE Cliente SET calle='$calle' WHERE idCliente='$cod_cli'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($colonia!=null) {
        $query = "UPDATE Cliente SET colonia='$colonia' WHERE idCliente='$cod_cli'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($numero!=null) {
        $query = "UPDATE Cliente SET numero='$numero' WHERE idCliente='$cod_cli'";
        $ejecuta = pg_query($conexion, $query);
    }if ($telefono!=null) {
        $query = "UPDATE Cliente SET telefono='$telefono' WHERE idCliente='$cod_cli'";
        $ejecuta = pg_query($conexion, $query);
    }
    header("location:cliente.html");
?>