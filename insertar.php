<?php
    include 'conecta_bd.php';

    $cod_prod = $_POST["cod_prod"];
    $descripcion = $_POST["descripcion"];
    $precio_uni = $_POST["precio_uni"];
    $existencia = $_POST["existencia"];
    $stock = $_POST["stock"];
    $query = "INSERT INTO Producto VALUES ('$cod_prod', default, '$descripcion', '$precio_uni', '$existencia', '$stock')";
    $ejecuta = pg_query($conexion, $query);
    header("location:index.php");
?>