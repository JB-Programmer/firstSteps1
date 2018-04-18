<!DOCTYPE html>
<html>
<head>
    <title>Buenos dias</title>
    <meta charset = "utf-8">
</head>

<body>

<?php

    //Esto es similar para Java.

    //Si lo hago por referencia anado & al parametro que le doy a la funcion
    //y asi lo que se hace es que cuando lo aplico a $numero, ahora numero quedara
    //para siempre modificado segun lo que hace la funcion.
    function incrementa(&$valor1){

        $valor1++;
        return $valor1;
    }

    $numero=5;

    echo incrementa($numero)."<br>";
    echo $numero."<br>";


    //Otro ejemplo, puedo probar que si lo recibe por referencia (agrego &), crea un vinculo
    //de forma que si aplico la funcion a $prueba, ahora va a quedar con la funcion
    //aplicada.

    function pasar_a_mayu($frase){
        $frase=strtolower($frase);
        $frase=ucwords($frase);

        return $frase;
    }

    $prueba="HoLa MUNdo";

    echo(pasar_a_mayu($prueba));

    echo "<br>".$prueba;


?>

</body>
</html>