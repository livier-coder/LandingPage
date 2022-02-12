<?php
    include('conexion.php');
    if(count($_POST) > 0){
        $nombre=$_POST['nombre'];
        $tipo=$_POST['tipo'];
        $vinedo=$_POST['vinedo'];
        $cantidad=$_POST['cantidad'];

        $sql= "INSERT INTO vinos(nombre,tipo,vinedo,cantidad) VALUES ('$nombre','$tipo','$vinedo','$cantidad')";

        $conn->exec($sql);
        header('Location: index.php');
    }
?>