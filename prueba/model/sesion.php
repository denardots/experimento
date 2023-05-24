<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        $dato="1";
    }else{
        $dato="0";
    }
    $json=json_encode($dato);
    echo $json;
?>