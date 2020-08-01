<?php


  $nombre=$_POST['nombre'];
  $stock=$_POST['stock'];
  $id_op=$_POST['id_op'];
  $id_marca=$_POST['id_marca'];
  $precio=$_POST['precio'];
  $descuento=$_POST['descuento'];
  $talla=$_POST['talla'];
  $id_color=$_POST['id_color'];
  $id_codigo_producto=$_POST['id_cod_pro'];
  $tipo=$_POST['tipo'];
  $nombre_detalle=$_FILES['img']['tmp_name'];
  $nombrefile=$_FILES['img']['name'];
  move_uploaded_file($nombre_detalle,'../../archivos/'.$nombrefile);
  if ($tipo==="seguirreg" && $descuento==="") {
    include '../funciones/conexion.php';
    try {
      $stmt=$conn->prepare('INSERT INTO tabla_producto (nombre_producto, stock_producto, id_op_categoria, id_marca, id_talla, id_color, id_codigo_producto) VALUES (?, ?, ?, ?, ?, ?, ?)');
      $stmt->bind_param('sssssss', $nombre, $stock, $id_op, $id_marca, $talla, $id_color, $id_codigo_producto);
      $stmt->execute();
      $vali=$stmt->affected_rows;
      $id_pro=$stmt->insert_id;
      if ($vali==1) {
        $stmt2=$conn->prepare('INSERT INTO tabla_precio (precio, descuento, id_producto) VALUES (?, ?, ?)');
        $stmt2->bind_param('sss', $precio, $descuento, $id_pro);
        $stmt2->execute();
        $vali2=$stmt2->affected_rows;
        if ($vali2==1) {

          $stmt3=$conn->prepare('INSERT INTO tabla_imagen (url_imagen, id_producto) VALUES (?, ?)');
          $stmt3->bind_param('ss', $nombrefile, $id_pro);
          $stmt3->execute();
          $respuesta=array(
            'respuesta'=>'correcto',
            'codigo_producto'=>$id_codigo_producto
          );
        }

      }
      $stmt3->close();
      $stmt2->close();
      $stmt->close();
      $conn->close();

    } catch (Exception $e) {
      $respuesta=array(
        'respuesta'=>$e->getMessage()
      );
    }


  }
  if ($tipo==="seguirreg" && $descuento!="") {
    $descfinal=$precio-(($precio*$descuento)/100);
    include '../funciones/conexion.php';
    try {
      $stmt=$conn->prepare('INSERT INTO tabla_producto (nombre_producto, stock_producto, id_op_categoria, id_marca, id_talla, id_color, id_codigo_producto) VALUES (?, ?, ?, ?, ?, ?, ?)');
      $stmt->bind_param('sssssss', $nombre, $stock, $id_op, $id_marca, $talla, $id_color, $id_codigo_producto);
      $stmt->execute();
      $vali=$stmt->affected_rows;
      $id_pro=$stmt->insert_id;
      if ($vali==1) {
        $stmt2=$conn->prepare('INSERT INTO tabla_precio (precio, descuento, id_producto) VALUES (?, ?, ?)');
        $stmt2->bind_param('sss', $precio, $descfinal, $id_pro);
        $stmt2->execute();
        $vali2=$stmt2->affected_rows;
        if ($vali2==1) {

          $stmt3=$conn->prepare('INSERT INTO tabla_imagen (url_imagen, id_producto) VALUES (?, ?)');
          $stmt3->bind_param('ss', $nombrefile, $id_pro);
          $stmt3->execute();
          $respuesta=array(
            'respuesta'=>'correcto',
            'codigo_producto'=>$id_codigo_producto
          );
        }

      }
      $stmt3->close();
      $stmt2->close();
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
