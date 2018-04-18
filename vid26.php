<!DOCTYPE html>
<html>
<head>
    <title>POO videos 22, 23.</title>
    <meta charset = "utf-8">
</head>

<body>

<?php

       include('vid24ReutilizadClases.php');

       $mazda = new Coche();

// ENCAPSULACION de propiedades que no deban ser accesibles para fuera de la clase.
//Para evitar por ejemplo que nadie cambie que un coche pueda tener
//cuatro ruedas ya que no es logico que tenga mas o menos, me voy a la clase Coche
//y ahi cambio la variable rueda por private $rueda.

//La herencia es una característica común en la POO


    class Autobus extends Coche{
        
        function __construct(){
            $this->ruedas = 8;
        }


         function frenar(){
            parent::frenar();
            echo "Esto es un bus<br>";  //Autobus hereda todo lo de Coche. Ahora lo que hago con parent es que ademas del frenar de coche, añada algo diferente. Si no hubiera escrito la fila de parent, hubiera machacado la funcion de frenar de coche y la estoy sustituyendo por lo nuevo que incluya.
        }
    }

    $pegaso = new Autobus();

    echo $pegaso->frenar();

    echo "Ruedas del pegaso: ".$pegaso->getRuedas()."<br>";

    echo $mazda->getRuedas(); //Despues de haber encapsulado ruedas, no puedo ver cuanto vale, por eso cree una funcion GetRuedas.




?>

</body>
</html>