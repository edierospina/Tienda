<?php

    class BaseDatos
    {
        public $usuario="root";
        public $passwordBD="";
        public $servidorBD="mysql:host=localhost;";
        public $nombreBD="dbname=tiendabello";


        public function __construct(){}

        public function conectarConBD()
        {
            try
            {
                $datosGeneralesBD = $this->servidorBD.$this->nombreBD;
                $conexion = new PDO($datosGeneralesBD,$this->usuario,$this->passwordBD);
                echo("exito concetandonos a la BD");
                return $conexion;

            }catch(PDOException $error)
            {
                die("Tenemos un problema ".$error->getMessage());
            }
        }

        public function insertarRegistro($consultaSQL)
        {
            try
            {
                //1. contruir puente con la bd
                $conexion=$this->conectarConBD();

                // 2. preparar la bd para que reciba mi consulta
                $operacion=$conexion->prepare($consultaSQL);

                // ejcutar la operacion
                $resultado=$operacion->execute();

                return $resultado;
            }
            catch(PDOException $error)
            {
                die("Tenemos un problema ".$error->getMessage());
            }
        }
        

    }

?>