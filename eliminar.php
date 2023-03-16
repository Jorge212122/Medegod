<?php
    include 'conecta_bd.php';

    $cod_prod = $_POST["cod_prod"];
    $query = "DELETE FROM Producto WHERE idProducto = '$cod_prod'";
    $ejecuta = pg_query($conexion, $query);
    header("location:index.php");
?>