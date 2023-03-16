<?php
    include 'conecta_bd.php';

    $cod_fac = $_POST["cod_fac"];
    $query = "DELETE FROM Factura WHERE idFactura = '$cod_fac'";
    $ejecuta = pg_query($conexion, $query);
    header("location:factura.html");
?>