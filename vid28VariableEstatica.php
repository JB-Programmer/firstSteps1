<?php

    class Compra_vehiculo{

        private $precio_base;
        //Ejemplo de campo o variable estatica, esta va a ser comun, 
        //independientemente del tipo de vehiculo.

        private static $descuento=0; //Supongo que es un descuento del gobierno a todos 
        //los coches. Al se static, ya no pertenece a ninguna instancia, la variable esta 
        //va a pertenecer solamente a la clase. Ojo en la funcion getfinalprice a como se llama
        //a una variable estatica. Ya no puedo utilizar this, porque no pertenecer'a 
        //ninguna instancia.

        function __construct($gama){
            if($gama == "urbano"){
                $this->precio_base=10000;
            
            } else if($gama == "compacto"){
                $this->precio_base=20000;
            
            } else if($gama == "berlina"){
                $this->precio_base=30000;
            } else{
                echo "Not valid gama";
            } 

        }

        static function setDescuento(){
            self::$descuento = 10000;
        }

        function addNavegador(){  //Si lo defino estatico quiero decir que este metodo pertenece solo a la clase creada, y las instancias no tendrian copia de este metodo, sino que seria un metodo compratido por todas las instancias que cree.
            $this->precio_base+=3000;
        }


        
        function addLuxeTapiceria($color){
            if ($color=="blanco"){
                $this->precio_base+=2000;
            
            }else if($color=="marron"){
                $this->precio_base+=3000;
            
            }else {
                $this->precio_base+=5000;
            }
        }



        function getFinalPrice(){
            $valor_final = $this->precio_base-self::$descuento;   //ojo a como se llaman a las variables estaticas.
            return "El precio del coche es: ".$valor_final."<br>";
        }

    }






