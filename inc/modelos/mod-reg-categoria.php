<?php 
    $nombre_categoria=$_POST['categoria'];
    $tipo=$_POST['tipocat'];

    if($tipo=="crearcat")
    {

        include '../funciones/conexion.php';
        try {
          $stmt=$conn->prepare('INSERT INTO tabla_categoria (nombre_categoria) VALUES (?)');
          $stmt->bind_param('s', $nombre_categoria);
          $stmt->execute();
          $respuesta=array(
            'respuesta'=>'correcto'
          );
          $stmt->close();
          $conn->close();
        } catch (Exception $e) {
          $respuesta=array(
            'respuesta'=>$e->getMessage()
          );
        }
    
    }

    
    echo json_encode($respuesta);
?>