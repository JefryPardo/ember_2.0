<?php
    include("../../services/database.php");
    session_start();
    $id = $_SESSION['id'];

    $query = "SELECT * FROM publicaciones WHERE idusuario = '$id'";
    $result = mysqli_query($con,$query);

    if(!$result){
        die('Error al conectar');
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id' => $row['id'],
            'titulo' => $row['titulo'],
            'mascotaTipo' => $row['mascotaTipo'],
            'motivo' => $row['motivo'],
            'descripcion' => $row['descripcion']            
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>