<?php
    include 'conecta_bd.php';

    $cod_prov = $_POST["cod_prov"];
    $nombre = $_POST["nombre"];
    $ciudad = $_POST["ciudad"];
    $calle = $_POST["calle"];
    $colonia = $_POST["colonia"];
    $telefono = $_POST["telefono"];
    if ($nombre!=null) {
        $query = "UPDATE Proveedor SET nombre='$nombre' WHERE idProveedor='$cod_prov'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($ciudad!=null) {
        $query = "UPDATE Proveedor SET ciudad='$ciudad' WHERE idProveedor='$cod_prov'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($calle!=null) {
        $query = "UPDATE Proveedor SET calle='$calle' WHERE idProveedor='$cod_prov'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($colonia!=null) {
        $query = "UPDATE Proveedor SET colonia='$colonia' WHERE idProveedor='$cod_prov'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($telefono!=null) {
        $query = "UPDATE Proveedor SET telefono='$telefono' WHERE idProveedor='$cod_prov'";
        $ejecuta = pg_query($conexion, $query);
    }
    header("location:proveedor.html");
?>