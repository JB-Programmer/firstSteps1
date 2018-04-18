<!-- Ojo, estamos usando mysqli -->


<?php

    require 'video5701config.php';

    class Conexion{

    protected $conexion_db;
    
        
        public function __construct(){

        //Vamos a programar la conexion dentro del constructor, para que se conecte automat al crear una instancia.
        $this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);

        echo "[Objeto creado]<br>";


            //Si no logra conectarse, le pido que muestre un error
            if($this->conexion_db->connect_errno){

                //Mensaje que quiero que muestre
                echo "Fallo: ".$this->conexion_db->connect_erro;


            }

        //Tambien dentro del constructor establezco los caracteres de este objeto.
        $this->conexion_db->set_charset(DB_CHARSET);

        }


    }



?>