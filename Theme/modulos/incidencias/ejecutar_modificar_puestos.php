<?php
	include '../../configuracion/conexion.php';
	$p_id = $_POST['id_incidencia'];
	$p_nombre=$_POST['num_tipo_usuario'];
	
	
	$consulta = mysql_query ("UPDATE incidencias
				 SET 
				 num_tipo_usuario =  '$p_nombre'
			     WHERE id_incidencia = '$p_id'",$conexion) or die (mysql_error());
	echo "<script language='javascript'> window.location='../../inicio' </script>";
	 // $consulta = mysql_query("SELECT id_puesto, nom_puesto
  //                   FROM puestos 
  //                   WHERE id_puesto = '$id'",$conexion) or die (mysql_error());
?>