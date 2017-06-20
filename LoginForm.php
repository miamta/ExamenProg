<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>
    <!-- Formulario de registro -->
    <form class="" action="Login.php" method="post">
      nombre:<input type="text" name="email" value=""><br><br>
      numero abonado:<input type="text" name="numero" value=""><br><br>


      <input type="submit" name="Registrarse" value="Registrarse">
    </form>

    <a href="index.php">Iniciar sesion</a><br>


    <!--php  -->
    <?php
    $comprobacion=0;
    if (isset($_POST['nombre']) && isset($_POST['numero'])) {
      include '/modelo/usuarios.php';
      $usuario= new Usuario();

      $tabla=$usuario->Comprobarusuario($_POST['usuario']);

      if ($tabla==null) {
        echo "El usuario ya esta registrado.";
      }else {
        if ($_POST['usuario']==$_POST['usuario']) {
          $resultado=$usuario->insertarUsuario($_POST["nombre"],  $_POST["numero"]);
          if ($resultado==null) {
            echo "Error";
          }else {
            echo "nombre: " .$resultado['nombre'] ."<br><br>";
            echo "numero: " .$resultado['numero'] ."<br><br>";

            }
          }else {
            echo "<a href='registro.php'>Algo falla, revisa tu contraseña.</a>";
        }
      }


    }
     ?>
  </body>
</html>
