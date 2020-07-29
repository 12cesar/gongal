<?php
   $nombre=$_POST['nombre'];
   $id=$_POST['id'];
   $tipo=$_POST['tipo'];

   if ($tipo==="crearsub") {
      include '../funciones/conexion.php';
      try {
          $stmt=$conn->prepare('INSERT INTO tabla_subcategoria (nombre_subcategoria, id_categoria) VALUES (?, ?)');
          $stmt->bind_param('ss', $nombre, $id);
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