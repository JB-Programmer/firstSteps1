<?php
//Crear array multidimesional
//Foreach y while para array multidimensional
$alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                "citrico"=>"mandarina",
                                "otros"=>"manzana"),
                 "leche"=>array("animal"=>"vaca",
                                "fruto"=>"coco"),

                 "carne"=>array("vacuno"=>"lomo",
                                "porci"=>"pata")
);



echo $alimentos["fruta"]["citrico"];


//Recorrer Array Multidimensional:
foreach($alimentos as $clave_alim=>$alim){ 
    echo "$clave_alim:<br>";
    
    while(list($clavex, $valor)=each($alim)){
        echo "$clavex=$valor<br>";
    }
}

//Hay unafuncion predefinida que es VarDam

echo var_dump($alimentos);



?>