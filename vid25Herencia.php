<!DOCTYPE html>
<html>
<head>
    <title>POO videos 22, 23.</title>
    <meta charset = "utf-8">
</head>

<body>

<?php

    //PHP como JAVA no soporta la herencia multiple, solo
    //se puede heredar a una clase lo que hay en otra clase.

    class Coche{

        public $rueda;
        public $color;
        public $motor;

        //Cuando un constructor no recibe parametro, podria no ponerle parentesis cuando lo creo aunque mejor hacerlo porque Java si recibe.
        //Podria ser que una clase no tenga metodo constructor, y cuando eso se hace, podria hacer new Coche() y seria un
        //constructor vacio.

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

        function set_color($color_coche, $marca_coche){
            $this->color=$color_coche;
    
            echo "El color del " . $marca_coche . " es: " . $this->color . "<br>";

        }


    }





//Ahora estoy heredando a Camion todas las variables y metodos
//que existen en la clase coche.
//Me encuentro con el problema que quiero que un metodo
//no lo haya en el Camion, el de establecer color para el camion. Eso lo 
//solucionaremos con la sobreescritura de metodos.

    class Camion extends Coche{

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

        //Sobreescribo este metodo que no quiero que exista
        function set_color($color_camion, $marca_camion){
            $this->color=$color_camion;
    
            echo "El color del " . $marca_camion . " es: " . $this->color . "<br>";

        }



    }    
           
    $volvo = new Camion();

    echo $volvo->arrancar(). "<br>";

    echo $volvo->set_color("Negro", "Volvo");

    //Si por ejemplo quiero que para el camion me diga Estoy frenando y tambien ya frene, en 
    //lugar de sobreescribir todo el metodo, puedo utilizar la funcion parent.

    function frenar(){
        //Con esto le digo que lo primero que tiene que hacer es ejecutar todo 
        //el metodo de la clase padre.
        parent::frenar();
        
        echo "Camion frenado";

    }

    echo $volvo->frenar();
?>

</body>
</html>