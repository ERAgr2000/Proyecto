<html>
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="reg.css">
    <title>REGISTRO teCuentoGT</title>
    <link rel="icon" href="imgs/icon.png" type="image/gif" sizes="16x16">
</head>
    
<body background="imgs/fon.jpg">
    <center>
        
    </center>
    
   
        <center>
            <table>
                <tr>
                    <td>
                        <center>
                        <img src = "imgs/edificio.svg" style="width: 60px; height: 60px;"/>
                        <h3>BIENVENIDO A teCuentoGT</h3>
                        
                        <h4>Ingresa tus datos en los campos requeridos(*)</h4>

                        <img src = "imgs/65251.png" style="width: 30px; height: 30px;"/>
                    
                        <form action="Login1.php">
                            
                                <strong>Nombre*: </strong><br>
                                    <input type="text" name="name" method="get"/required><br><br>
                            
                                <strong>Apellido*: </strong><br>
                                    <input type="text" name="apellido" method="get"/required><br><br>
                				
                				<strong>Nombre de Usuario*: </strong>
                					<input type="text" name="username"  method ="get"/required><br>
                					<br>
                				
                				<strong>Contraseña*: </strong><br>
                					<input type="password" name="password" method="get"/required>
                					<br><br>
                            
                                <strong>E-mail*: </strong><br>
                					<input type="email" name="email" method="get"/required>
                					<br><br>
                                    
                                <label><input type="submit" name= "cc" value="Crear Cuenta"></label><br>

                                
                                
                            </form>
                            <form action="Login.html">
                                 <label><input type="submit" value="Regresar"></label>
                            </form>
                        </center>
                    </td>
                </tr>
             </table>
        </center>

    
    
</body>
</html>