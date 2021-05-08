<?php
    include("../../services/conexion.php");

    $nombre = $_POST["nombre"];
    $user = $_POST["usuario"];
    $pass = $_POST["contrasenia"];


    $sql = "INSERT  INTO registro (nombre, usuario, contrasenia) VALUES('$nombre','$user','$pass')";
    if(mysqli_query($con,$sql)){
        echo "<script> alert('Se registro con exito: $nombre'); window.location='../login/index.html' </script>";
    }

?>