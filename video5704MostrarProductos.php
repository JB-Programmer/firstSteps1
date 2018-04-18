<!-- Mostrar en pantalla los productos de la Tabla de la base de datos
 -->
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Datos que hay en la BD llamada Pruebas, en la tabla Base de Datos</title>
</head>

<body>

<?php

    require 'video5703DevuelveDatos.php';

    $todosLosDatos = new DevuelveDatos();

    $arrayDatos = $todosLosDatos->getDatos();

    echo "ejecuto los datos get datos y lo metio en array";


    
    foreach($arrayDatos as $filas){
        echo "NIF: ".$filas['NIF']."<br>";
        echo "NOMBRE: ".$filas['NOMBRE'].".<br>";
        echo "APELLIDO: ".$filas['APELLIDO'].".<br>";
        echo "EDAD: ".$filas['EDAD'].".<br>";
        echo  "Fin de registro";
        echo "<br>";
    }

?>

</body>

</html>