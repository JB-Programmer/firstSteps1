<!DOCTYPE html>
<html>
<head>
    <title>Buenos dias</title>
    <meta charset = "utf-8">
</head>

<body>

<?php
/* 
    //Funciones predefinidas.
    $myString="JaiMe RoDrIgUeZ <br>";

    echo $myString;

    $myStringEnMinusculas=strtolower($myString);

    echo $myStringEnMinusculas;

    $myStringUp=strtoupper($myString);

    echo $myStringUp;


    function suma($num1, $num2){
        
        global $resultado;
        
        $resultado=$num1+$num2;
        
        return $resultado;
       

    }

    suma(5,7);

    echo "$resultado<br>";

 */

    //Funcion que me lo pone un String completo en minusculas y si conversion es true le pido
    //tambien me pone primera letra de cada palabra manusculas.
    function frasemayus($frase, $conversion=true){

        $frase=strtolower($frase);

        if($conversion==true){
                $devolucion=ucwords($frase);
        }else{
                $devolucion=strtoupper($frase);
        }

        return $devolucion;
    }

    echo (frasemayus("bueNASs Tardes", false));
?>

jonathanbentolila@hotmail.com

</body>
</html>