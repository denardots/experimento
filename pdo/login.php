<?php
    if($_POST){
        session_start();
        require('conexion.php');
        $u=$_POST['t1'];
        $p=$_POST['t2'];
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $query=$conexion->prepare("SELECT * FROM login WHERE username= :u AND password= :p");
        $query->bindParam(":u",$u);
        $query->bindParam(":p",$p);
        $query->execute();
        $usuario=$query->fetch(PDO::FETCH_ASSOC);
        if($usuario){
            $_SESSION['usuario']=$usuario['username'];
            header("location:panel.php");
        }else{
            echo "DATOS INCORRECTOS";
        }
    }
?>