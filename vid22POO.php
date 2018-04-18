<!DOCTYPE html>
<html>
<head>
    <title>POO videos 22, 23.</title>
    <meta charset = "utf-8">
</head>

<body>

<?php

        class Coche{

            public $rueda;
            public $color;
            public $motor;


            function __construct(){

                //Usamos la palabra this para referirnos a la CLASE en la que nos encontramos.
                //En la funcion constructor defino la situacion inicial de cada objeto.
                $this->ruedas=4;


                //En este ejemplo pongo por ejemplo que el color esta sin definir.
                $this->color="";

                $this->motor="1600";


            }



            function arrancar(){

                echo "Estoy arrancando.<br>";
            
            }


            function girar(){
                
                echo "Estoy girando.<br>";

            }


            function frenar(){

                echo "Estoy frenando.<br>";

            }

            function set_color($colorcoche, $nombre_coche){
                $this->color=$colorcoche;
        
                echo "El color del " . $nombre_coche . " es: " . $this->color . "<br>";

            }


        }


        //Con el new estoy haciendo una llamada al constructor.

    $mercedes = new Coche();

    $renault = new Coche();
    
    $mercedes->girar();

    echo $mercedes->ruedas;

    $renault->set_color("Verde", "Renault");

?>

</body>
</html>