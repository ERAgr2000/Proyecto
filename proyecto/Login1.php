<html>
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Login1.css">
    <title>CUENTA teCuentoGT</title>
</head>
    
<body background="vol.jpg">

    <center>
        <img src = "edificio.svg" style="width: 100px; height: 100px;"/>
    </center>
    <center>
        <h1>BIENVENIDO A teCuentoGT </h1><br>
        <strong>
            <?php
            
             //ESTO NO CORRERA AL MOMENTO DE HACER UN LOGIN, FUNCIONARA SOLO AL CREAR REGISTRO, POR ESO MISMO SALDRA UN ERROR PERO UN USUARIO QUE HAYA PASADO POR EL REGISTRO NO VERA ESTE ERROR, POR LOGICA NO EXISTE TU NOMBRE SI NO TE HAS REGISTRADO, POR ESO MISMO SALE ERROR!
         
                echo $_GET['name'] . (" ");
                echo $_GET['apellido'];
    
            ?></strong>
        
        <h3>Informate y da tu opinion sobre los hechos que ocurren día a día en el país de una manera entretenida.</h3>
        
        
        <h3>Tu nombre de usuario es: </h3><strong>
            <?php
               
                    echo $_GET['username'];
                    
        ?>
        </strong>
        <br>
        <br>
        
        <h3>Tu contraseña es: </h3><strong>
            <?php 
                echo $_GET['password'];
        ?>
        </strong>
        <br>
        <br>
        
    </center>
    
    
    <?php
    
        $nombre = $_GET['name'];

        $apellido =$_GET['apellido'];
    
        $username =$_GET['username'];
    
        $password =$_GET['password'];

        $email = $_GET['email'];
    
        $conexion = mysqli_connect("localhost","marktx","12345","usuarios");
        
        $ingreso = "INSERT INTO registro(Nombre, Apellido, username, passw, email)
        
        VALUES('" . $nombre . "','" . $apellido . "','" . $username . "','" . $password . "','" . $email . "')
        ";
        
    
    
        $query = mysqli_query($conexion, $ingreso);
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
    
</body>
</html>