<?php
    include("../../services/database.php");

    $nombre = $_POST["nombre"];
    $user = $_POST["usuario"];
    $pass = $_POST["contrasenia"];


    $sql = "INSERT  INTO registro (nombre, usuario, contrasenia) VALUES('$nombre','$user','$pass')";
    if(mysqli_query($con,$sql)){
        echo 'Se creo.';
    }

?>