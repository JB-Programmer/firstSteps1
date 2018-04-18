<!-- Ojo, estamos usando mysqli -->


<?php

    require 'video5800configPDO.php';

    class Conexion{

    protected $conexion_db;
    
        
        public function __construct(){


        //HE VISTO QUE USANDO PDO SIEMPRE LO HACEN MEDIANTE TRY/CATCH
        try{
        //Vamos a programar la conexion dentro del constructor, para que se conecte automat al crear una instancia.
            $this->conexion_db=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
        
        //OJO ESTO TB ES EXCLUSIVO PARA PDO
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //OJO ESTA LINEA ES DIF PARA MYSQLI Y PARA PDO    
            $this->conexion_db->exec("SET CHARACTER SET utf8");

        //RETURN TB ES EXCLUSIVO PARA PDO

            return $this->conexion_db;
        echo "[Conexion Creada]<br>";

     
        }catch (Exception $e){
            
                    //OJO ESTA LINEA ES DIF PARA MYSQLI Y PARA PDO    

            //Nos va a decir en caso de error, en que linea esta ese error.
            echo "Fallo: ".$e->getLine();
        
        }
        
        //Tambien dentro del constructor establezco los caracteres de este objeto.

        }


    }



?>