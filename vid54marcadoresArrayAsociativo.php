<?php
//Objetivo:  en una base de datos determinados campos en funcion 
//de dos parametros que le doy en el vid54. Para esto, parto de lo que hicimos en el video 52 y 53 y ahora voy
//a ver como anadir marcadores para un array asociativo o algo asi..

    $busqueda_nombre=$_GET["nombre"]; /* Aqui le indico cual es el nombre del input de la vid52  
                        luego introduzco esta variable en la linea 28 -*/

    $busqueda_edad=$_GET["Edad"];


    try{
    //Es el objeto conexion
    $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', ''); //PDO es la clase
    

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //exect es una funci'on de PDO que me permite entre otras, elegir el tipo de caracter.
    $base->exec("SET CHARACTER SET utf8");

    
    //Aqui voy a crear una instrucci'on SQL en funcion del nombre, y luego le voy a pedir que me de la edad
    
    //Nos va a mostrar todos los campos en los que el nombre sea, el que luego decida en Execute.
    //Esta es la encargada de hacer la busqueda

    //VIDEO 54, en lugar de ? vamos a poder usar un array asociativo.
    $sql="SELECT NIF, NOMBRE, APELLIDO, EDAD FROM DATOSPERSONALES WHERE NOMBRE = :Nombre_User AND EDAD = :Edad_usu";
                                                
                                    //Datospersonales es la tabla dentro de la base de datos


    //Aqui creo un objeto tipo pdo statements:
    $resultado=$base->prepare($sql);


    //Aqui podria poner en lugar de jose, pedir dos pareametros, pero para ello deberia (ver min 10.15 del video 52)
    $resultado->execute(array(":Nombre_User"=>$busqueda_nombre, ":Edad_usu"=> $busqueda_edad )); /* Como arguments de este array le pido que me buscque */


    //Fetch nos devuelve la siguiente fila. resultado es el objeto pdo statement.
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        echo "Nif: ".$registro["NIF"]."<br>";
        echo "Nombre: ".$registro["NOMBRE"]."<br>";
        echo "Apellido: ".$registro["APELLIDO"]."<br>";
        echo "Edad:".$registro["EDAD"];

    }

    //Ahora cerramos el cursor, que es lo que recorre linea a linea. No es imprescindible pero ahorra recursos
    $resultado->closeCursor();


    $resultado->closeCursor();



    }catch(Exception $e){  //Capturo el error, normalmente le nombro "e"
        die("Error: ".$e->GetMessage());                        //Aqui le digo que haga algo.
    
    }finally{
        $base=null;
    }

    //Tras el try y el catch se suele agregar finally: que tanto tenga exito el try o no, se va a ejecutar.

?>