<?php
    include("../../services/database.php");    
    if(isset($_POST['titulo'])){
        session_start();
        $id = $_SESSION['id'];
        $titulo = $_POST['titulo'];
        $tipo = $_POST['tipo'];
        $motivo = $_POST['motivo'];
        $descripcion = $_POST['descripcion'];

        $query = "INSERT into publicaciones(titulo,mascotaTipo,descripcion,idusuario,motivo) VALUES('$titulo','$tipo','$descripcion','$id','$motivo')";
        
        $result = mysqli_query($con,$query);
        if(!$result){
            die('Error al insertar el dato.');
        }
        echo 'Tarea agregada';
    }
?>