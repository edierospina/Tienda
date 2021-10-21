<?php

    class Productos
    {
        public $nombresProducto;
        public $marcaProducto;
        public $precioProducto;
        public $descripcionProducto;
        public $fotoProducto;

        public function __construct($nombresRegistro,$marcaRegistro,$precioRegistro,$descripcionRegistro,$fotoRegistro)
        {

        $this->nombresProducto=$nombresRegistro;
        $this->marcaProducto=$marcaRegistro;
        $this->precioProducto=$precioRegistro;
        $this->descripcionProducto=$descripcionRegistro;
        $this->fotoProducto=$fotoRegistro;
        
        }
    
        public function registrarProductos()
        {
            $consultaProductoSQL="INSERT INTO productos(nombresProducto,marcaProducto,precioProducto,descripcionProducto,fotoProducto) 
            VALUES ('$this->nombresProducto','$this->marcaProducto','$this->precioProducto','$this->descripcionProducto','$this->fotoProducto')";

            return $consultaProductoSQL;
        }
        public function buscarProductos()
        {
            $consultaProductoSQL="SELECT + FROM productos";
            return $consultaProductoSQL;

        }
        public function eliminarProductos($idProducto)
        {
            $consultaProductoSQL="DELETE FROM `productos` WHERE idProducto='$idProducto'";
            return $consultaProductoSQL;
        }
        public function editarProductos($idProducto)
        {
            $consultaProductoSQL="UPDATE productos SET nombreProducto='$this->nombresProducto',precioProducto='$this->precioProducto',descripcionProducto='$this->$descripcionProducto',fotoProducto='$this->$fotoProducto' WHERE idProducto='$idProducto'";
            return $consultaSQL;
        }
    }

?>