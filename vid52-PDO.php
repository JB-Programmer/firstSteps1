<?php


    $busqueda=$_GET["buscar"];  /*Aqui le indico cual es el nombre del input de la vid52 
                                 luego introduzco esta variable en la linea 28 -*/

    //Try: le indico que intente hacer algo y que si no, capture el error (catch).

    try{  //Pildoras lo suele poner junto  

            //Es el objeto conexion. Me pide tres argumentos: el host con la base de datos, el usuario y la contraseña.
            $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', ''); //PDO es una libreria con funciones (es como una clase).
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexion ok <br>"; //Con esto puedo ver si consiguio conectar o no.

            //exect es una funci'on de PDO que me permite entre otras, elegir el tipo de caracter.
            $base->exec("SET CHARACTER SET utf8");

            
            //Aqui voy a crear una instrucci'on SQL en funcion del nombre, y luego le voy a pedir que me de la edad
            
            //Nos va a mostrar todos los campos en los que el nombre sea, el que luego decida en Execute.
            //Esta es la encargada de hacer la busqueda

            $sql="SELECT NIF, NOMBRE, APELLIDO, EDAD FROM DATOSPERSONALES WHERE NOMBRE = ?"; //Nos permite buscar segun un nombre
                                                        
                                                         //Datospersonales es la tabla dentro de la base de datos


            //El metodo es el que hay que usar para crear consultas preparads. Admite una sentencia.
            //Este metodo nos devuelve un objeto que se llama pdo statemente que es el resultado de la funcion prepare
            //me devuelve como una tabla virtual donde se encuentran todos los campos que participan en la consulta con
            //sus registros almacenados en el interior. Despues de hacer prepare hay que ejecutarlo y luego usar fetch (para recorrer los resultados).
            //En resultado queda grabado un objeto llamado PDO statement.
            $resultado=$base->prepare($sql);


            //Aqui podria poner en lugar de jose, pedir dos pareametros, pero para ello deberia (ver min 10.15 del video 52)
            $resultado->execute(array($busqueda)); /* Aqui va a leer el parametro de la otra pagina, pero podria escribir directamente entre corchetes que nombre quiero que me busque en la tabla */


            //Fetch nos devuelve la siguiente fila. resultado es el objeto pdo statement.
            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){  //registro me lo invento, me refiero a la fila donde encuentre ese nombre
                echo "Nif: ".$registro["NIF"]."<br>";                 //con fetch assoc asocia el nombre de...
                echo "Nombre: ".$registro["NOMBRE"]."<br>";
                echo "Apellido: ".$registro["APELLIDO"]."<br>";
                echo "Edad:".$registro["EDAD"];

            }

            //Ahora cerramos el cursor, que es lo que recorre linea a linea. No es imprescindible pero ahorra recursos
            $resultado->closeCursor();  //Hemos recorrido con fetch registro a registro la tabla, ahora cerramos el cursor 
                                        //que es el que recorre linea a linea el objeto virtual. 


    }catch(Exception $e){  //El catch es como el else y el try como el if. Capturo el error, normalmente le nombro "e", es una convencion
            
            die("Error: ".$e->GetMessage());                        //Esta es una funcion que tiene el objeto creado.
    


    }finally{ //Esa tercera estructura forma parte del try catch, es opcional, y lo que haya aqui dentro se va a ejecutar haya tenido exito o no.
        
            $base=null;  //Vacio la memoria del programa.

    }

    //Tras el try y el catch se suele agregar finally: que tanto tenga exito el try o no, se va a ejecutar.

?>