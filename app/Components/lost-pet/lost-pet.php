<?php
    include("../../services/database.php");
    $query = "SELECT * FROM publicaciones WHERE motivo = 'extraviada'";
    $result = mysqli_query($con,$query);

    if(!$result){
        die('Error al conectar');
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id' => $row['id'],
            'titulo' =>$row['titulo'],
            'mascotaTipo' => $row['mascotaTipo'],
            'descripcion' => $row['descripcion']            
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>