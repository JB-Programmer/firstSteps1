<?php
//OBJETIVO, BUSCAR DE UNA BASE DE DATOS SEGUN EL VALOR DE UN CAMPO. LO MISMO QUE HICIMOS EN EL VIDEO 57 PERO AHORA CON PDO Y NO CON MYSQLI
//Objetivo, hacerme la busqueda del formulario, traer los datos
//Necesito que se conecte a la base de datos, o poder usar al menos lo escrito ahi

require 'video5801ConexionPDO.php';

class DevuelveDatosPorNombre extends Conexion{


        public function getDatos($aBuscar){

            //DIFERENTE PDO
            //La sentencia la guardo en una variable
            $sql = "SELECT * FROM DATOSPERSONALES WHERE NOMBRE ='" .$aBuscar . "'";


            //DIFERENTE PDO
            //Consulta preparada
            $sentencia = $this->conexion_db->prepare($sql);

            //EXCLUSIVO PDO
            //Ejecuto la sentencia y me devuelve un array.
            $sentencia->execute(array());

            //Leo el array y lo almaceno en una variable.
            //DIFERENTE EN PDO
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            $sentencia->closeCursor();

            //OJO, SE ME SUELE OLVIDAR! Devuelve los datos de la TABLA
            return $resultado;

            echo "[Devolvio los datos]<br>";

            //CERRAR CONEXION Y ELIMINAR DE LA MEMORIA TODO LO QUE PUEDA HABER ABIERTO
            $this->conexion_db=null;

        }


    
}

//Ojo, a esta altura he creado las clases, pero no tengo ninguna instancia.



?>