<?php
	include '../../configuracion/conexion.php';
	$id_usuario = $_POST['id_usuario'];
	$nom_usuario=$_POST['nom_usuario'];
	$contra=$_POST['contra'];
	$caducidad=$_POST['caducidad'];

// Corregido el UPDATE 
// Cambios en la consulta y en la id_persona por id_usuario	
	$consulta = mysql_query ("UPDATE usuarios
				 SET 
				 nom_usuario =  '$nom_usuario',
				 caducidad =  '$caducidad'

			     WHERE id_usuario = '$id_usuario'",$conexion) or die (mysql_error());
	echo "<script language='javascript'> window.location='../../inicio' </script>";
	 // $consulta = mysql_query("SELECT id_puesto, nom_puesto
  //                   FROM puestos 
  //                   WHERE id_puesto = '$id'",$conexion) or die (mysql_error());
?>