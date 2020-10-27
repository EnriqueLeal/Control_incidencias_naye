<?php
	include '../configuracion/conexion.php';
	$p_user = $_POST['usuario'];
	$p_contra=$_POST['contrasena'];
	$p_contraNueva=$_POST['contrasenaNueva'];

	
	$consulta = mysql_query ("UPDATE usuarios
SET contra =  '$p_contraNueva' , prez = '1'
	WHERE nom_usuario = '$p_user' AND contra = '$p_contra'",$conexion) or die (mysql_error());
	header("Location: login.php");

?>