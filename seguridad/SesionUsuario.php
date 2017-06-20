<?php
/**
 *
 */
class sesion
{
  private $usuario=null;
  private $apellido=null;
  private $nombre=null;



  function __construct()
  {
    session_start();
    if(isset($_SESSION["usuario"])) $this->usuario=$_SESSION["usuario"];
  }
  public function getUsuario(){
    return $this->usuario;
  }
  public function addUsuario($usuario){
    $_SESSION["usuario"]=$usuario;
    $this->usuario=$usuario;
  }
  public function logOut(){
    $_SESSION=[];
    session_destroy();
  }
}

 ?>
