<?php
$conn=new mysqli('localhost','root','tiger122014','gongal');
if ($conn->connect_error) {
  echo $conn->connect_error;
}
$conn->set_charset('utf8');
 ?>
