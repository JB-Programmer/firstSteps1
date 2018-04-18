<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Devolviendo base de datos</title>

    </head>




    <body>

    <?php

include 'vid5702ParaModularizar.php';

$recuperarDatos=new DevuelveDatos();

$arrayDeDatos=$recuperarDatos->getDatos();
      echo "probando"; 
      //Lo primero que haremos es recorrer el array

      foreach($arrayDeDatos as $filas){
       echo "probando<br>";

        echo "<table><tr><td>";
        echo $filas['NIF']."</td><td>";
        echo $filas['NOMBRE']."</td><td>";
        echo $filas['APELLIDO']."</td><td>";
        echo $filas['EDAD']."</td><td>";
        echo "</td></table>";

        echo "<br>";
        echo "<br>"; 

      }
    ?>

    </body>


</html>