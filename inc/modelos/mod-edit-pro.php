<?php
  $id=$_POST['id'];
  include '../funciones/funciones.php';
  $mos=mosproductoid($id);
if ($mos->num_rows) {
  foreach ($mos as $mos1) {
      $respuesta=array(
        'respuesta'=>'correcto',
        'id_pro'=>$mos1['id_producto'],
        'nombre'=>$mos1['nombre_producto'],
        'stock'=>$mos1['stock_producto'],
        'id_ops'=>$mos1['id_op_categoria'],
        'id_mar'=>$mos1['id_marca'],
        'id_ta'=>$mos1['id_talla'],
        'id_co'=>$mos1['id_color'],
        'prec'=>$mos1['precio'],
        'des'=>$mos1['descuento'],
        'url'=>$mos1['url_imagen']
      );
  }
}
echo json_encode($respuesta);

 ?>
