<?php
//Objetivo: INsertar desde la web a una base de datos; 

    $busqueda_nif=$_GET["formNIF"];  
    $busqueda_nombre=$_GET["formNombre"];  
    $busqueda_apellido=$_GET["formApellido"];
    $busqueda_edad=$_GET["formEdad"];

    try{
            //Es el objeto conexion
            $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', ''); //PDO es la clase
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //exect es una funci'on de PDO que me permite entre otras, elegir el tipo de caracter.
            $base->exec("SET CHARACTER SET utf8");

            
            //VIDEO 56 AQUI LA INSTRUCCION ES PARA INSERTAR. TENGO QUE SABER COMO SE LLAMA EXACTAMENTE CADA COLUMNA EN NUESTRA BASE DE DATOS
            $sql="INSERT INTO datospersonales (NIF, NOMBRE, APELLIDO, EDAD) VALUES (:ELNIF, :ELNOMBRE, :ELAPELLIDO, :LAEDAD)";

                                                        
                                            //Datospersonales es la tabla dentro de la base de datos
                                            //He utilizado marcadores para luego asociarlos al array.


            //Aqui creo un objeto tipo pdo statements:
            $resultado=$base->prepare($sql);


            //AQUI TENGO QUE ASOCIAR EL MARCADOR, ES DECIR LOS QUE EMPIEZAN POR : DE LA LINEA 20 CON LAS VARIABLES QUE RECIBE DEL FORMULARIO (ARRIBA).
            $resultado->execute(array(":ELNIF"=>$busqueda_nif, ":ELNOMBRE"=>$busqueda_nombre, ":ELAPELLIDO"=>$busqueda_apellido, ":LAEDAD"=>$busqueda_edad));

            //Fetch nos devuelve la siguiente fila. resultado es el objeto pdo statement.
            echo "Registro insertado";



            //Ahora cerramos el cursor, que es lo que recorre linea a linea. No es imprescindible pero ahorra recursos
            $resultado->closeCursor();



     }catch(Exception $e){  //Capturo el error, normalmente le nombro "e"

            die("Error: ".$e->GetMessage()); 
    }finally{
        $base=null;
        sleep(2);
        include 'vid56-insertarRegistros.php';


    }

    //Tras el try y el catch se suele agregar finally: que tanto tenga exito el try o no, se va a ejecutar.

?>