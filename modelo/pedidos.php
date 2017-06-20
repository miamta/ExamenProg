<?php
include 'db.php';
/**
 *
 */
class pedidos extends db
{

  // FUNCION QUE INSERTA PEDIDOS
    function crearPedido($nombre,$apellido,$talla,$numero,$precio,$color){
  		if ($this->hayError()==true){
  			return null;
  		}else{
  			$sqlInserction="INSERT INTO pedidos(id,nombre,apellidos,talla,numero,precio,color) VALUES (NULL,'".$nombre."','".$apellidos."','".$talla."',".$numero.",".$precio.",'".$color."')";
  			$this->conexion()->query($sqlInserction);
  		}
  	}

     function mostrarpedido($nombre){
     if ($this->error==true){
         return null;
     }else{
   $tabla=[];
     $resultado = $this->conexion->query("SELECT * FROM pedidos WHERE nombre='".$nombre."'");
   while ($fila=$resultado->fetch_assoc()){
     $tabla[]=$fila;
   }
   return $tabla;
   }
   }








}
 ?>
