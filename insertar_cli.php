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
    $query = "INSERT INTO Cliente VALUES ('$cod_cli', default, '$nombre', '$ape_pat', '$ape_mat', '$estado', '$calle', '$colonia', '$numero', '$telefono')";
    $ejecuta = pg_query($conexion, $query);
    header("location:cliente.html"); 
?>