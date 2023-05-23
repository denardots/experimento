<?php
    session_start();
    if(isset($_SESSION['usuario'])){
?>
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>PANEL</title>
            </head>
            <body>
                <h1>BIENVENIDO<?php echo $_SESSION['usuario'];?></h1>
                <a href="cerrar.php">CERRAR</a>
            </body>
        </html>
<?php
    }else{
        header("location:login.html");
    }
?>