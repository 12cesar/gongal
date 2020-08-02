<?php

  $stock=$_POST['stock'];
  $id=$_POST['id'];
  include '../funciones/conexion.php';
  try {
    $stmt=$conn->prepare('UPDATE tabla_producto  SET stock_producto=stock_producto+? WHERE id_producto=?');
    $stmt->bind_param('ss', $stock,$id);
    $stmt->execute();
    $respuesta=array(
      'respuesta'=>'correcto'
    );
  } catch (Exception $e) {
    $respuesta=array(
      'respuesta'=>$e->getMessage()
    );
  }


  echo json_encode($respuesta);
 ?>
