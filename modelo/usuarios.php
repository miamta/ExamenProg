<?php
include 'db.php';
/**
 *
 */
class Usuarios extends db
{

  function __construct()
  {
    parent::__construct();
  }

  //funcion insertar equipo en la bd
  function insertarUsuario($nombre,$numAbonados,){
    $sql="INSERT INTO usuarios (id, numAbonados)
          VALUES (NULL, '".$nombre."', '".$numAbonados."')";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      //Recogemos el ultimo usuario insertado
      $sql="SELECT * from usuarios ORDER BY id DESC";
      //Realizamos la consulta
      $resultado=$this->realizarConsulta($sql);
      if($resultado!=false){
        return $resultado->fetch_assoc();
      }else{
        return null;
      }
    }else{
      return null;
    }
  }



  // login
  function LoginUsuario(){
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

// comprobar usuario
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

// verificacion listar usuarios
function listarusuarios(){
if ($this->error==true){
    return null;
}else{
$resultado = $this->conexion->query("SELECT * FROM usuarios )";
}
}




 ?>
