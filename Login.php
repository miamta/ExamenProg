<?php

include 'db.php';

/**
 *
 */
class Login extends db
{


function LoginUsuario($usuario){
  //Construimos la consulta
  $sql="SELECT * from usuarios WHERE usuario='".$usuario."'";
  //Realizamos la consulta
  $resultado=$this->realizarConsulta($sql);
  if($resultado!=false){
    if($resultado!=false){
      return $resultado->fetch_assoc();
    }else{
      return null;
    }
  }else{
    return null;
  }
}








function Comprobarusuario($usuario){
  //Construimos la consulta
  $sql="SELECT usuario from usuarios WHERE usuario='".$usuario."'";
  //Realizamos la consulta
  $resultado=$this->realizarConsulta($sql);
  if($resultado!=null){
    if ($resultado->num_rows>0) {
      return null;
    }else {
      return 1;
    }
  }else{
    return null;
  }
}
}








 ?>
