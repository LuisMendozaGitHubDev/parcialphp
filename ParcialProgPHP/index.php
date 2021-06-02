<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Parcial 1 - Programacion-PHP</title>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<h2>Registro de Persona</h2>
	    <form id="formulario" action="/formulario.php" method="post">
	        Nombre: <input type="text" name="nombre" id="nombre"> <br>
	        Apellido: <input type="text" name="apellido" id="apellido"> <br>
	        Telefono: <input type="number" name="telefono" id="edad"> <br>
	        Edad: <input type="number" name="edad" id="edad"> <br>
			Fech Nac: <input type="date" name="fechaNacimiento" id="fechaNacimiento"> <br>
	        Email: <input type="email" name="email" id="email"> <br>
			<br>       
	        <input type="submit" value="Enviar">
    	</form>
	</body>
</html>