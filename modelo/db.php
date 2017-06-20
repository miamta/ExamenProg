<?php
/**
 *
 */
class db
{
  //Atributos
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="camisetavlcbasket";
  //Conector
  private $conexion;
  //Propiedades
  private $error=false;
  private $error_msj="";
  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
        $this->error_msj="No se ha podido realizar la conexion a la bd. Revisar base de datos o parámetros";
      }
  }
  //Funciones de error
  function hayError(){
    return $this->error;
  }
  function msjError(){
    return $this->error_msj;
  }
  public function realizarConsulta($consulta){
    if($this->error==false){
      $resultado = $this->conexion->query($consulta);
      return $resultado;
    }else{
      $this->error_msj="Imposible realizar la consulta: ".$consulta;
      return null;
    }
  }
}
 ?>
