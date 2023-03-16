<?php
    include 'conecta_bd.php';

    $cod_prov = $_POST["cod_prov"];
    $nombre = $_POST["nombre"];
    $ciudad = $_POST["ciudad"];
    $calle = $_POST["calle"];
    $colonia = $_POST["colonia"];
    $telefono = $_POST["telefono"];
    $query = "INSERT INTO Proveedor VALUES ('$cod_prov', '$nombre', '$ciudad', '$calle', '$colonia','$telefono')";
    $ejecuta = pg_query($conexion, $query);
    header("location:proveedor.html");
?>