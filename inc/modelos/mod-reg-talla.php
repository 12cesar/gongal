<?php
    $nombre=$_POST['nombre'];
    $tipo=$_POST['tipo'];

    if($tipo=="creartalla")
    {

        include '../funciones/conexion.php';
        try {
          $stmt=$conn->prepare('INSERT INTO tabla_talla (nombre_talla) VALUES (?)');
          $stmt->bind_param('s', $nombre);
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
