<!DOCTYPE html>
<html>
<head>
    <title>Buenos dias</title>
    <meta charset = "utf-8">
    <style>
        p{
            color: blue;
            text-align:center;
        }
    </style>

</head>

<body>



<?php



   

/*     FOR: Ejemplo tabla Dividir: VEREMOS EL USO DE CONTINUE, QUE LO QUE HACE ES QUE CUANDO SE
    ENCUENTRA CON UNA CONDICION DETERMINADA, NO HACE ESA INTERACCION Y CONTINUA CON EL SIGUIENTE
    VALOR INDICADO EN LA SINTAXIS. */

    for($i=10; $i>=-10;$i--){  

        if($i==0){
            echo "<p style='font-weight: 800px;'>Division por cero invalida<br></p>";  //PROFESOR PORQUE NO COGE EL 800px
            continue;
        }
        echo "<p class='centered'>9 dividido entre $i es igual a " . 9/$i . "</p>";

    }



?>


</body>
</html>