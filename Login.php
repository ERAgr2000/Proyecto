<!DOCTYPE HTML>
<html>
<body>

<?php
$nombrerror = $emailerror = $contraseñaerror = "";
$nombre = $email = $contraseña = "";

if ($_SERVER["REQUEST_METHOD"]=="POST")
	if (empty($_POST["nombre"])){
		$nombrerror = "El nombre es requerido";
	} else{
		$nombre = test_input($_POST["nombre"]);
	}

if (empty($_POST["email"])){
	$emailerror = "El correo es requerido"
} else {
	$email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$emailerror = "El correo es invalido"
	}
}

if (empty($_POST["contraseña"])){
	$contraseñaerror = "La contraseña es requerida"
} else{
	$contraseña = test_input($_POST["contraseña"]);
}

function test_input($data){
	$data =trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
} 
¿>


<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nombrerror;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailerror;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $contraseñaerror;?></span>
  <br><br>
  <input type="Ingresar" name="Ingresar" value="Ingresar">  
</form>

<?php

echo $nombre;
echo $email;
echo $contraseña;
¿>

</body>
</html>