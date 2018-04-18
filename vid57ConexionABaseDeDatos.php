<?php
    //Objetivo: conectar a la base de datos mediante clases. En principio utilizaremos MySqli.
    //En este archivo creo la conexion
    //En un archivo nuevo voy a

    
    require ("vid57-configConexionABaseDatosconClases.php"); //Con esto ya estoy trayendo aqui las constantes que cree en el otro archivo


    class Conexion{

        protected $conexion_db;

        public function Conexion(){
            //Aqui va la conexion que se hace. Usaremos mysqli. Lo traigo de las constantes, donde tengo guardado sus valores.
            $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);  //host, usuario, contrasena y base de datos
            echo  "Conexion Satisfactoria";



        //Si ha habido error en la conexion, le pido que me muestre algo, la funcion es connect errno
            if($this->conexion_db->connect_errno){ //En otro video explico que es errno

            echo "Fallo al conectar: ".$this->conexion_db->connect_error;  //Recordar que el this llama a esta clase

            return; //Tambien lo explico antes
        }
        

        $this->conexion_db->set_charset(DB_CHARSET);  //Con esto nos amite eñes, acentos y tal.

        }

    //Con esto tengo terminado el archivo de conexion


    }


?>