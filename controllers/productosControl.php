<?php

    include("../models/BaseDatos.php");
    include("../models/Productos.php");

    if(isset($_POST["registrar"]))
    {
        $nombresProducto=$_POST["nombresProducto"];
        $marcaProducto=$_POST["marcaProducto"];
        $precioProducto=$_POST["precioProducto"];
        $descripcionProducto=$_POST["descripcionProducto"];
        $fotoProducto=$_POST["fotoProducto"];

        //3. Creo un objeto(variable) del moedelo PRODUCTO
        $producto=new Productos($nombresProducto,$marcaProducto,$precioProducto,$descripcionProducto,$fotoProducto);

        echo($producto->registrarProductos());

        $baseDatos=new BaseDatos();
        $resultado=$baseDatos->insertarRegistro($producto->registrar());

        if($resultado)
        {
            echo("Registro de producto exitoso")
        }
        else
        {
            echo("No se pudo registrar el procto")
        }
    }
    else
    {
        echo("No deberias estar acaen esta pagina:  ");
    }


    
?>