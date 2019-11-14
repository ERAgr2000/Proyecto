<!DOCTYPE html>
<html>
<?php

        $username = $_GET['username'];

        $password = $_GET['password'];
    
        $conexion = mysqli_connect("localhost","marktx","12345","usuarios");

        $consult = "SELECT passw FROM registro WHERE username='" . $username . "';"; 
        
        echo $consult;

        

?>
</html>