<?php
    include 'conecta_bd.php';

    $cod_cli = $_POST["cod_cli"];
    $query = "DELETE FROM Cliente WHERE idCliente = '$cod_cli'";
    $ejecuta = pg_query($conexion, $query);
    header("location:cliente.html");
?>