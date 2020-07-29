<?php

    $nombre=$_POST['nombre'];
    $id_subcategoria=$_POST['id'];
    $tipo=$_POST['tipo'];

    if ($tipo==="crearop") {
        include '../funciones/conexion.php';
        try {
            $stmt=$conn->prepare('INSERT INTO tabla_op_categoria (nombre_op_categoria, id_subcategoria) VALUES (?, ?)');
            $stmt->bind_param('ss', $nombre, $id_subcategoria);
            $stmt->execute();
            $respuesta=array(
                'respueta'=>'correcto'
            );
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            $respuesta=array(
                'respueta'=>$e->getMessage()
            );
        }
    }

    
    echo json_encode($respuesta);
?>