<?php 
    
    $servidor = "localhost";
    $basededatos = "barsa";
    $usuario = "root";
    $contrasenia = "";
    // conexión en BD en xampp server
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=barsa', $usuario, $contrasenia);
        echo "conectada";
        $sentencia = $conexion->prepare("SELECT * FROM cliente");
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        print_r($registros);

    }
    catch(EXCEPTION $error){
        echo $error->getMessage();
    }

?>