<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pedidos</title>
    <link rel="stylesheet" href="./css/estilos.css">
  </head>
  <body>

    <form class="" action="pedido.php" method="post">
      nombre:<input type="text" name="nombre" value=""><br><br>
      apellidos:<input type="text" name="apellidos" value=""><br><br>
      talla:<input type="text" name="talla" value=""><br><br>
      numero:<input type="text" name="numero" value=""><br><br>
      Precio:<input type="text" name="precio" value=""><br><br>
      <input type="submit" name="Realizar" value="Realizar">
    </form>


    <?php
    if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['talla']) && isset($_POST['numero']) && isset($_POST['precio'])) {
      include '/modelo/usuarios.php';
      $pedido = new pedidos();

      if ($_POST['usuario']==$_POST['usuario']) {
          $resultado=$usuario->crearPedido($_POST["nombre"],  $_POST["apellido"], $_POST["talla"], $_POST["numero"], $_POST["precio"]);
          if ($resultado==null) {
            echo "Error";
          }else {
            echo "nombre: " .$resultado['nombre'] ."<br><br>";
            echo "apellido: " .$resultado['apellido'] ."<br><br>";
            echo "talla: " .$resultado['talla'] ."<br><br>";
            echo "numero: " .$resultado['numero'] ."<br><br>";
            echo "precio: " .$resultado['precio'] ."<br><br>";
            }
          }
      }

     ?>
  </body>
</html>
