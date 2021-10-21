<?php
    // 1. incluirr modelo de la base de datos
    // incluir el modelo empleado
    include("../models/BaseDatos.php");
    include("../models/Empleado.php");
   
    //2. recoger los datos de la vista
    if(isset($_POST["boton"]))
    {
        $nombres = $_POST["nombres"];
        $apellidos =$_POST["apellidos"];
        $email = $_POST["email"];
        $edad = $_POST["edad"];
        $descripcion = $_POST["descripcion"];
        $fotografia = $_POST["fotografia"];


        //3. Creo un objeto(variable) del moedelo EMPLEADO
        $empleado=new Empleado($nombres,$apellidos,$email,$edad,$descripcion,$fotografia);

        //accerder a los metodos de  Empleado

        echo($empleado->registrar());

        //4. ejecutar el metodo insertar registro de la bd
        $baseDatos=new BaseDatos();
        $resultado=$baseDatos->insertarRegistro($empleado->registrar());

        //5. valido el resultado
        if($resultado)
        {
            echo("exito en le registro ");
            header("Location:../views/registroUsuario.php");
            

        }
        else
        {
            echo("tenemos problemas en el registro ");
        }
    }
    else
    {
        echo("No deberias estar aca:  ");
    }


?>
