<?php

//Primera forma de crear un array, vemos que el ultimo se indexa (array indexado tiene numeros como clave /creo/) solo como el siguient
//numericamente con respecto al primero.
$semana[]="Lunes";
$semana[]="Martes";
$semana[]="Miercoles";
$semana[]="Jueves";

//Cuando omito el indice, php supone que las posiciones comienzan desde 0 y continua avanznado.


//Segunda forma de crear un array.
echo $semana[68]."<br>";

$meses=array("Enero", "Febrero", "Marzo");


//Tercera forma, aqui con un indice asociativo (la clave es una palabra y no un numero);

$datos=array("Nombre"=>"Jaime", "Apellido"=>"Jander", "Edad"=>30);

echo $datos["Nombre"]."<br>";


//Si quiero agregar un elemento mas a un array asociativo:

$datos["Pais"]="USA";



foreach($datos as $claves/*Este termino me lo invento*/=>$valores/*Esto tambien me lo invento*/){

    echo "Esta es la clave: ".$claves.", y este es su valor: ".$valores.".<br>";

}

for($i=0; $i<count($semana); $i++){
    echo $semana[$i] . "<br>";

}

$datos1 = array("Calle"=>"Agusto", "Numero"=>2, "Telefono"=>489034809);
$datos1["Fax"]=493809;

foreach($datos1 as $indice=>$value){
    echo "Este es el indice: ".$indice.". "." Este es el valor: ".$value."<br>";

}

$otroArray=array("casa", "coche", "reloj");

foreach ($otroArray as $index=>$val){
    echo $index.". Y ahora el valor: ".$val.".<br>";
}

if(is_array($otroArray)==true){
     echo "OtroArray es un array<br>";

}else{
    echo "OtroArray no es un array";

}

$otroArray[]="bolso";

for($i=0; $i<count($otroArray); $i++){
    echo $otroArray[$i]."<br>";
}

$mesesitos=array("Enero", "Marzo", "Febrero");

for($i=0; $i<count($mesesitos); $i++){
    echo $mesesitos[$i]."<br>";

}

sort($mesesitos); //Ordena el array alfabeticamente.
for($i=0; $i<count($mesesitos); $i++){
    echo $mesesitos[$i]."<br>";

}







?>