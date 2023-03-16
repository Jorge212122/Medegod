<?php
    include 'conecta_bd.php';

    $cod_prov = $_POST["cod_prov"];
    $query = "DELETE FROM Proveedor WHERE idProveedor = '$cod_prov'";
    $ejecuta = pg_query($conexion, $query);
    header("location:proveedor.html");
?>