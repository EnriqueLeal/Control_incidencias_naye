<?php
	include '../../configuracion/conexion.php';
	$p_nombre_horario=$_POST['nombre_horario'];
	$p_hora_entrada=$_POST['hora_entrada'];
	$p_hora_salida=$_POST['hora_salida'];
	
	
	$consulta = mysql_query ("UPDATE personas
				 SET 
				 nombre_horario =  '$p_nombre_horario',
				 hora_entrada =  '$p_hora_entrada',
				 hora_salida =  '$p_hora_salida'

			     WHERE id_horario = '$p_id'",$conexion) or die (mysql_error());
	echo "<script language='javascript'> window.location='../../inicio' </script>";
	 // $consulta = mysql_query("SELECT id_puesto, nom_puesto
  //                   FROM puestos 
  //                   WHERE id_puesto = '$id'",$conexion) or die (mysql_error());
?>