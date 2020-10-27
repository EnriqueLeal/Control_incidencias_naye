<?php
	include '../../configuracion/conexion.php';
	$id_persona = $_POST['id_persona'];
	$nom_usuario=$_POST['nom_usuario'];
	$contra=$_POST['contra'];
	$caducidad=$_POST['caducidad'];

	
	$consulta = mysql_query ("UPDATE personas
				 SET 
				 nom_usuario =  '$nom_usuario',
				 caducidad =  '$caducidad'

			     WHERE id_usuario = '$p_id'",$conexion) or die (mysql_error());
	echo "<script language='javascript'> window.location='../../inicio' </script>";
	 // $consulta = mysql_query("SELECT id_puesto, nom_puesto
  //                   FROM puestos 
  //                   WHERE id_puesto = '$id'",$conexion) or die (mysql_error());
?>