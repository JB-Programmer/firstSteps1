<!DOCTYPE html>
<html>
<head>
    <title>Buenos dias</title>
    <meta charset = "utf-8">


</head>

<body>

<?php

   
 

    $var1 = 1;


    /*
    //BUCLE WHILE: El bucle While sirve muchisimo en php por ejemplo para acceder 
    a base de datos, estos bucles recorren linea a linea los 
    //registros que hay en una base de datos.
    while($var1<6){  //El codigo dentro de las llaves se va a ejecutar una 
        vez cada vez que vea que $var vale 1.
        
        echo "La variable vale 1, por lo tanto es menor que seis.<br>";
        
        $var1++;
        
    }
   
    echo "Fin del bucle";
    
    */
    //Bucle DOWHILE la diferencia con la anterior, ademas de la sintaxis, es que el codigo al menos se va a ejecutar una vez;
    do{
        echo "La variable vale $var1.</br>";
        $var1++;
    
    }while($var1>6);

    echo "Salimos del bucle.";

?>


</body>
</html>