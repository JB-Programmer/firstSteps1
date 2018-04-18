<?php

    require 'video5803DevuelveDatosPorNombre.php';

    $todosLosDatos = new DevuelveDatosPorNombre();

    $NombreDelTipo = $_GET['nombre'];

    echo $NombreDelTipo;
    
    $array_datos = $todosLosDatos->getDatos($NombreDelTipo);




    foreach($array_datos as $filas){
        echo "NIF: ".$filas['NIF']."<br>";
        echo "NOMBRE: ".$filas['NOMBRE'].".<br>";
        echo "APELLIDO: ".$filas['APELLIDO'].".<br>";
        echo "EDAD: ".$filas['EDAD'].".<br>";
        echo  "Fin de registro";
        echo "<br>";
    }



?>