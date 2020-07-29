<?php
    $nombre=$_POST['nombre'];
    $tipo=$_POST['tipo'];

    if($tipo=="crearcolor")
    {

        include '../funciones/conexion.php';
        try {
          $kat=$conn->prepare('INSERT INTO tabla_color (nombre_color) VALUES (?)');
          $kat->bind_param('s', $nombre);
          $kat->execute();
          $respuesta=array(
            'respuesta'=>'correcto'
          );
          $kat->close();
          $conn->close();
        } catch (Exception $e) {
          $respuesta=array(
            'respuesta'=>$e->getMessage()
          );
        }

    }
    echo json_encode($respuesta);
?>
