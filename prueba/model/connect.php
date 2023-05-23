<?php
    $conexion=null;
    $servidor="localhost";
    $bd="ferreteria";
    $user="root";
    $pass="";
    try{
        $conexion=new PDO("mysql:host=".$servidor.";dbname=".$bd,$user,$pass);
    }catch(PDOException $e){
        echo "Error de conexión";
        exit;
    }
    return $conexion;
?>