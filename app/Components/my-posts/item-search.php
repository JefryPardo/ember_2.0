<?php
    include("../../services/database.php");  
    $search = $_POST['search'];
    if(!empty($search)){
        session_start();
        $id = $_SESSION['id'];
        $query = "SELECT * FROM publicaciones WHERE titulo LIKE '$search%' && idusuario = '$id'";
        $result = mysqli_query($con,$query);
        if(!$result){
            die('Query Error'. mysqli_error($con));
        }
        $json = array();
        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                'titulo' => $row['titulo'],
                'tipo' => $row['mascotaTipo'],                
                'descripcion' => $row['descripcion'],
                'motivo' => $row['motivo'],
                'id' => $row['id']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
?>