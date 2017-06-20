<?php
include 'db.php';
/**
 *
 */
class pedidos extends db
{



     function listartallas(){
     if ($this->error==true){
         return null;
     }else{
     $resultado = $this->conexion->query("SELECT * FROM tallas )";
   }
 }








}
 ?>
