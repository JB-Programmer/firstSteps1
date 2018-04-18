<!-- Objetivo: traer los datos de la base de datos -->

<?php

//Necesito que se conecte a la base de datos, o poder usar al menos lo escrito ahi
require 'video5702Conexion.php';

class DevuelveDatos extends Conexion{
//Podre usar todo lo que este escrito en Conexion como Public o como Protected.

/* ESTO LO HIZO EN EL VIDEO, PERO SI SE LLAMA CONSTRUCT, CREO QUE NO NECESITA
    public function _construct(){
        //Conecta automaticamente con la base de datos
        parent::__construct();

    }
 */
public function getDatos(){


    //Con query hago una peticion de ejecucion del statement sobre la TABLA 
    $resultado = $this->conexion_db->query('SELECT * FROM DATOSPERSONALES');


    //Ahora ese objeto lo quiero transformar en un array
    $datitos = $resultado->fetch_all(MYSQLI_ASSOC);

    //Devuelve los datos de la TABLA
    return $datitos;

    echo "[Devolvio los datos<br>]";


}


    
}

//Ojo, a esta altura he creado las clases, pero no tengo ninguna instancia.



?>