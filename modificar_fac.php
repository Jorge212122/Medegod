<?php
    include 'conecta_bd.php';

    $cod_fac = $_POST["cod_fac"];
    $fecha = $_POST["fecha"];
    $descuento = $_POST["descuento"];
    $subtotal = $_POST["subtotal"];
    $total = $_POST["total"];
    if ($fecha!=null) {
        $query = "UPDATE Factura SET fecha='$fecha' WHERE idFactura='$cod_fac'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($descuento!=null) {
        $query = "UPDATE Factura SET descuento='$descuento' WHERE idFactura='$cod_fac'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($subtotal!=null) {
        $query = "UPDATE Factura SET subtotal='$subtotal' WHERE idFactura='$cod_fac'";
        $ejecuta = pg_query($conexion, $query);
    }
    if ($total!=null) {
        $query = "UPDATE Factura SET total='$total' WHERE idFactura='$cod_fac'";
        $ejecuta = pg_query($conexion, $query);
    }
    header("location:factura.html");
?>