<?php
    include 'conecta_bd.php';

    $cod_com = $_POST["cod_com"];
    $fecha = $_POST["fecha"];
    $cant = $_POST["cant"];
    $desc = $_POST["desc"];
    $importe = $_POST["importe"];
    $total = $_POST["total"];
    $query = "INSERT INTO Compra VALUES ('$cod_com', default, '$fecha', '$cant', '$desc', '$importe', '$total')";
    $ejecuta = pg_query($conexion, $query);
    header("location:compra.html");    
?>