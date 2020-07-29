<?php
   $nombre=$_POST['nombre'];
   $apellidopaterno=$_POST['apellidopa'];
   $apellidomaterno=$_POST['apellidoma'];
   $celular=$_POST['celular'];
   $email=$_POST['celular'];
   $password=$_POST['password'];
   $tipo=$_POST['crearusuario'];
   $validar="2";
   if ($tipo==="crearusuario") {
       include '../funciones/conexion.php';
       try {
           $stmt=$conn->prepare('INSERT INTO tabla_cliente (nombre_cliente, apellido_paterno, apellido_materno, celular, correo, contraseña, id_validar) VALUES (?, ?, ?, ?, ?, ?, ?)');
           $stmt->bind_param('sssssss', $nombre, $apellidopaterno, $apellidomaterno, $celular, $email, $password, $validar);
           $stmt->execute();
           $respuesta=array(
            'respuesta'=>'correcto'

           ); 
           $stmt->close();
           $conn->close();

       } catch (Exception $e) {
            $respuesta=array(
            'respuesta'=>$e.getMessage()
           ); 
       }
   }

   
   echo json_encode($respuesta);
?>