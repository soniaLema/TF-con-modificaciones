<!DOCTYPE html>
<html>
<head><title>formulario de trabajo final</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
	$nomb=$_POST['nombre'];
	$apell=$_POST['apellido'];
	$doc=$_POST['dni'];
	$tel=$_POST['telefono'];
	$calles=$_POST['calle'];
	$nro=$_POST['numero'];
	$postal=$_POST['codigoPostal'];
	$paises=$_POST['pais'];
	$pcia=$_POST['provincia'];
	$city=$_POST['ciudad'];
	$fechaNac=$_POST['fechaNacimiento'];
	$correo=$_POST['mail'];
	$usu=$_POST['usuario'];
	$passw=$_POST['password1'];
	$password2=$_POST['password2'];
	
	$file=fopen("formulario.txt", "w");
	
	fwrite($file, $nomb.PHP_EOL);
	fwrite($file, $apell.PHP_EOL);
	fwrite($file, $doc.PHP_EOL);
	fwrite($file, $tel.PHP_EOL);
	fwrite($file, $calles.$nro.$postal.PHP_EOL);
	fwrite($file, $paises.PHP_EOL);
	fwrite($file, $pcia.PHP_EOL);
	fwrite($file, $city.PHP_EOL);
	fwrite($file, $fechaNac.PHP_EOL);
	fwrite($file, $correo.PHP_EOL);
	fwrite($file, $usu.PHP_EOL);
	fwrite($file, $passw.PHP_EOL);
	fclose($file);
	
	echo "Muchas gracias por registrarse:".$nomb.$apell;
?>
</body>
</html>