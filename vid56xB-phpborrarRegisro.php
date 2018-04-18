<?php
//Objetivo: INsertar desde la web a una base de datos; 


    $busqueda_edad=$_GET["formEdad"];

    try{
            //Es el objeto conexion
            $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', ''); //PDO es la clase
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //exect es una funci'on de PDO que me permite entre otras, elegir el tipo de caracter.
            $base->exec("SET CHARACTER SET utf8");

            
          
            //Creo una instruccion delete
            $sql="DELETE FROM datospersonales WHERE EDAD=:LAEDAD";

            //Aqui creo un objeto tipo pdo statements:
            $resultado=$base->prepare($sql);

            $resultado->execute(array(":LAEDAD"=>$busqueda_edad));

            //Fetch nos devuelve la siguiente fila. resultado es el objeto pdo statement.
            echo "Registro Eliminado";

            //Ahora cerramos el cursor, que es lo que recorre linea a linea. No es imprescindible pero ahorra recursos
            $resultado->closeCursor();



     }catch(Exception $e){  //Capturo el error, normalmente le nombro "e"

            die("Error: ".$e->GetMessage()); 
    }finally{
        $base=null;
    }

    //Tras el try y el catch se suele agregar finally: que tanto tenga exito el try o no, se va a ejecutar.

?>