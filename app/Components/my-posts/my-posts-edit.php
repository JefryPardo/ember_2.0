<?php
    include("../../services/database.php");  

    if(isset($_POST['id'])){

        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $tipo = $_POST['tipo'];
        $motivo = $_POST['motivo'];
        $descripcion = $_POST['descripcion'];

        $query = "UPDATE publicaciones SET titulo = '$titulo',	mascotaTipo = '$tipo',  descripcion = '$descripcion', motivo = '$motivo'  WHERE id = '$id'";
        $result = mysqli_query($con,$query);

        if(!$result){
            die('Error al conectar'. mysqli_error($con));
        }
        echo 'Se edito';
    }
?>