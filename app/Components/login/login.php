<?php
    include("../../services/database.php");
    session_start();
    $user = $_POST["usuario"];
    $pass = $_POST["contrasenia"];
    $_SESSION['usuario'] = $user;
    $_SESSION['contrasenia'] = $pass;

    $resp = "SELECT * FROM registro WHERE usuario = '$user' && contrasenia = '$pass'";
    
    $datos = $con->query($resp);

    $x = mysqli_num_rows($datos);
    $datos = mysqli_fetch_array($datos);

    $_SESSION['id'] = $datos['id'];

    if($x == 1){
        echo true;
    }else{
        echo false;
    }
?>