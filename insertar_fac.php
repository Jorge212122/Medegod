<?php
    include 'conecta_bd.php';

    $cod_fac = $_POST["cod_fac"];
    $fecha = $_POST["fecha"];
    $descuento = $_POST["descuento"];
    $subtotal = $_POST["subtotal"];
    $total = $_POST["total"];
    $query = "INSERT INTO Factura VALUES ('$cod_fac', default, '$fecha', '$descuento', '$subtotal', '$total')";
    $ejecuta = pg_query($conexion, $query);
    header("location:factura.html");
?>