<html>
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Login1.css">
    <title>CUENTA teCuentoGT</title>

    <link rel="icon" href="imgs/icon.png" type="image/gif" sizes="16x16">
</head>
    
<body background="imgs/vol.jpg">

    <center>
        <img src = "imgs/edificio.svg" style="width: 100px; height: 100px;"/>
    </center>
    <center>
        <h1>BIENVENIDO A teCuentoGT </h1><br>
        <strong>
            <?php

            $name = $_GET['name'];
            $apellido = $_GET['apellido'];
            $email = $_GET['email'];
            
         
                echo $name . (" ");
                echo $apellido;

            ?></strong>
        
        <h3>Informate y da tu opinion sobre los hechos que ocurren día a día en el país de una manera entretenida.</h3>
        
        
        <h3>Tu nombre de usuario es: </h3><strong>
            <?php
               
                    $username = $_GET['username'];
                    echo $username;
                    
        ?>
        </strong>
        <br>
        <br>
        
        <h3>Tu contraseña es: </h3><strong>
            <?php 

                $pass = $_GET['password'];
                echo $pass;
        ?>
        </strong>
        <br>
        <br>
        
    </center>
    
    
    <?php
    

    include_once 'datab.inc.php';
    

    $obj = new Datab;
    $obj->connect();



    ?>
    
</body>
</html>