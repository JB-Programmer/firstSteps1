<!DOCTYPE html>
<html>
<head>
    <title>POO videos 22, 23.</title>
    <meta charset = "utf-8">
</head>

<body>

<?php

        class Coche{

            protected $ruedas; // //LO CAMBIE LUEGO A PROTECTED. Con private gano 
            //que cualquier instancia de objeto no pueda tener un numero de ruedas 
            //diferente al predeterminado en la función constructor. 

            //Ojo, despues de encapsular una variable no puedo ver en pantalla el 
            //numero de ruedas que tiene el vehiculo.
            public $color;
            public $motor;

            //Cuando un constructor no recibe parametro, podria no ponerle parentesis 
            //cuando lo creo aunque mejor hacerlo porque Java si recibe.

            //Podria ser que una clase no tenga metodo constructor, y cuando eso se hace, 
            //podria hacer new Coche() y seria un
            //constructor vacio.

            function __construct(){

                //Usamos la palabra this para referirnos a la CLASE en la que nos encontramos.
                //En la funcion constructor defino la situacion inicial de cada objeto.
                $this->ruedas=4;


                //En este ejemplo pongo por ejemplo que el color esta sin definir.
                $this->color="";
                $this->motor="1600";


            }


            function getRuedas(){
                return $this->ruedas;
            }

            function setRuedas($nuevasRuedas){
                $this->ruedas = $nuevasRuedas;
                
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

            function set_color($color_camion, $marca_camion){
                $this->color=$color_camion;
        
                echo "El color del " . $marca_camion . " es: " . $this->color . "<br>";

            }



        }





        //Copio y pego lo que hice con el coche y a continuacion cambio algunas cosillas para que sea un camion, mas ruedas, mas motor...

        class Camion{

            public $rueda;
            public $color;
            public $motor;


            function __construct(){

                //Usamos la palabra this para referirnos a la CLASE en la que nos encontramos.
                //En la funcion constructor defino la situacion inicial de cada objeto.
                $this->ruedas=8;


                //En este ejemplo pongo por ejemplo que el color esta sin definir.
                //Aqui al camion le estoy poniendo que no puedo elegir el color, sino que por
                //defecto es gris.
                $this->color="Gris";

                $this->motor="2600";


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




        }


?>

</body>
</html>