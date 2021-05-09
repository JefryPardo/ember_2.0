<?php
    include("../../services/database.php");
    $user = $_POST["usuario"];

    $resp = "SELECT * FROM registro WHERE usuario = '$user'";
    
    $datos = $con->query($resp);

    $x = mysqli_num_rows($datos);

    if($x == 1){
        echo true;
    }else{
        echo false;
    }
?>