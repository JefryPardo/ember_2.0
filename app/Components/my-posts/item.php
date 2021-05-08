<?php
    include("../../services/database.php");

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $query = "SELECT * FROM publicaciones WHERE id = $id";
        $result = mysqli_query($con,$query);

        if(!$result){
            die('Error al conectar'. mysqli_error($con));
        }
        while( $row = mysqli_fetch_array($result) ){
            $json[] = array(
                'titulo' => $row['titulo'],
                'tipo' => $row['mascotaTipo'],                
                'descripcion' => $row['descripcion'],
                'motivo' => $row['motivo'],
                'id' => $row['id']
            );
        }
        $jsonstring = json_encode($json[0]);
        echo $jsonstring;
    }
?>