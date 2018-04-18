<?php

//Al dividir un codigo en varios archivos gano:
//-Facilidad para detectar un error.
//-Reutilizar codigo.


//Objetivo: devolver datos personales. 

//Primero necesito  traer la conexion


require "vid57ConexionABaseDeDatos.php";

class DevuelveDatos extends Conexion {  //Heredo todo lo que este en protected o public. REutilizo codigo

    public function __construct(){  //Desde el constructor este voy a llamar a una variable o metodo de la clase padre

        parent::__construct(); //Asi cuando el flujo llegue aqui, se va a ejecutar automaticamente la funcion que conecta con la base de datos.

    }


    //Ahora quiero conocer los datos. ESte metodo va a hacer la consulta SQL y va a devolver un array con registros
    public function getDatos(){
        $resultado=$this->conexion_db->query('SELECT * FROM DATOSPERSONALES'); //Podemos usar conexion_db gracias a la herencia

        $datos=$resultado->fetch_all(MYSQLI_ASSOC); //Es un array asociativo, mas facil de trabajar que uno indexado
    
        return $datos;
        
    }





}




?>