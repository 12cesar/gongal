<?php
    $nombre=$_POST['nombremarca'];
    $tipo=$_POST['tipomarca'];

    if($tipo=="crearmarca")
    {

        include '../funciones/conexion.php';
        try {
          $stmt=$conn->prepare('INSERT INTO tabla_marca (nombre_marca) VALUES (?)');
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
