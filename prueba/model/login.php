<?php
    session_start();
	require('connect.php');
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $query=$conexion->prepare("SELECT * FROM login WHERE username= :usuario AND password= :clave");
    $query->bindParam(":usuario",$usuario);
    $query->bindParam(":clave",$clave);
    $query->execute();
    $usuario=$query->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        $_SESSION['usuario']=$usuario;
        echo "1";
    }else{
        echo "0";
    }
?>