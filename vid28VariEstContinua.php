<?php

    include('vid28VariableEstatica.php');


    Compra_vehiculo::setDescuento();
    //Cada vez que se crea una instancia, se copian los metodos propios de la clase 
    //a esa instancia. Lo vemos ahora por ejemplo como el precio de la tapiceria 
    //se aplica diferente a cada cliente.

    //Antonio entra a comprar

    $compra_antonio = new Compra_vehiculo("compacto");

    $compra_antonio->addNavegador();

    $compra_antonio->addLuxeTapiceria("marron");

    echo $compra_antonio->getFinalPrice();


    //Ana entra a comprar

    $compra_jose = new Compra_vehiculo("berlina");

    $compra_jose->addNavegador();

    $compra_jose->addLuxeTapiceria("verdePistacho");

    echo $compra_jose->getFinalPrice();





?>