<?php
	include '../../configuracion/conexion.php';
	$p_id = $_POST['id_puesto'];
	$p_nombre=$_POST['nom_puesto'];
	
	
	$consulta = mysql_query ("UPDATE puestos
				 SET 
				 nom_puesto =  '$p_nombre'
			     WHERE id_puesto = '$p_id'",$conexion) or die (mysql_error());
	echo "<script language='javascript'> window.location='../../inicio' </script>";
	 // $consulta = mysql_query("SELECT id_puesto, nom_puesto
  //                   FROM puestos 
  //                   WHERE id_puesto = '$id'",$conexion) or die (mysql_error());
?>