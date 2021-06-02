<?php 
	
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$edad=$_POST['edad'];
	$fechaNacimiento=$_POST['fechaNacimiento'];
	$email=$_POST['email'];

	if($nombre !== "" && $apelllido !== "" && $edad !== "" && $telefono !== ""  && $fechaNacimiento !== ""  && $email !== ""){
	registrar($nombre,$apellido,$email,$edad,$telefono,$fechaNacimiento);

	function registrar($nombre,$apellido,$email,$edad,$telefono,$fechaNacimiento)
	{
	require 'config.php';
	$sql = "INSERT INTO persona (nombre,apellido,email,edad,telefono,fechaNacimiento) VALUES (
			'$nombre',
			'$apellido',
			'$email',
			'$telefono',
			'$edad',
			'$fechaNacimiento}'
			)";
	 	echo $sql;
 	return mysqli_query($conexion,$sql);
 	}
}else{
	 header("HTTP/1.0 500 Internal Server Error");
    }