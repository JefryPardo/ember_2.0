<?php
    include("../../services/database.php");

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $query = "DELETE FROM publicaciones WHERE id = $id";
        $result = mysqli_query($con,$query);

        if(!$result){
            die('Error al conectar'. mysqli_error($con));
        }
        echo 'Se elimino el dato';
    }
?>