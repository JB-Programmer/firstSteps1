<style>
        .validado {
          color: blue;   
        }

        .no_validado {
            color: red;
        }

</style>

<?php
    if(isset($_POST["enviando"])){ //En un formulario de PHP lo que se envia es el name. 

        $usuario=$_POST["usuario"]; //$_POST es una variable superglobal, las variables superglobales son arrays, con 
        //estoestoy metiendo en $usuario lo que el usario introdujo.

        $pass=$_POST["password"];

        //Vamos a validar un user y contrasena, al ser dos variables las que tenemos que evaluar, vamos
        //a acerlo utilizando switch(true) y luego en Case pongo las COMBINACIONES de valores validos.
        switch(true): //Ojo, comienzo con dos puntos y termino con endswitch.
            
            case $usuario=="Juan" && $pass=="1234":
                echo "Puede entrar";
                break;
            
            
            case $usuario=="Jaime" && $pass="octi":
                echo "Puede entrar";
                break;
            
                       
            
            default: //El default es el if else, no necesita break.
                echo "Lo siento, no puede entrar";
        
        endswitch;

        
    }


?>

