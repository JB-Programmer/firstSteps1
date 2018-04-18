<!DOCTYPE html>
<html>
<head>
    <title>Buenos dias</title>
    <meta charset = "utf-8">


</head>

<body>

<?php

   

    /* FOR: es un bucle determinado, es decir, sabemos a priori antes de ejecutarlo 
    cuantas veces se va a ejecutar.
    Vamos a ver sentencias que le hacen salir del bucle antes de que termine. 
    En el ejemplo ya se que se va a ejecutar 11 veces.
    Es el bucle que mas cuesta entender, for(iniciacion bucle; condicion del bucle 
    -cuando es falsa el bucle termina-; incremento o decremento del bucle){CODIGO A EJECUTAR} */


    for($i=0; $i<=10;$i++){  //En la primera parte hemos definido que $i valga 1, en la segunda parte preguntamos si se da esa condicion, en el tercer bloque lo que hacemos en incrementar o decrementar el bucle, le estamos diciendo que DESPUES de ejecutar el codigo que esta dentro de las llaves, haga algo, en este caso, aumentar el valor de $i.

        //A continuacion vamos a mostrar una sentencia que lo que hace es interrumpir la ejecucion dada una determinada condicion
/* 
        if($i==6){
    
            echo "<p>Bucle interrumpido</br></p>";
            break;  //Esta es la palabra clave que interrumpe la ejecucion.
        }

 */
        echo "<p> Hemos entrado en el bucle porque la variable i vale $i.</p>";

       
    }



?>


</body>
</html>