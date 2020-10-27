<?php
	include '../../configuracion/conexion.php';
	$p_id = $_POST['id_persona'];
	$p_nombre=$_POST['nombre'];
	$p_ap_paterno=$_POST['ap_paterno'];
	$p_ap_materno=$_POST['ap_materno'];
	$p_correo=$_POST['correo'];
	$p_telefono=$_POST['telefono'];
	
	
	$consulta = mysql_query ("UPDATE personas
				 SET 
				 nombre =  '$p_nombre',
				 ap_paterno =  '$p_ap_paterno',
				 ap_materno =  '$p_ap_materno',
				 correo =  '$p_correo',
				 telefono =  '$p_telefono'

			     WHERE id_persona = '$p_id'",$conexion) or die (mysql_error());
	echo "<script language='javascript'> window.location='../../inicio' </script>";
	 // $consulta = mysql_query("SELECT id_puesto, nom_puesto
  //                   FROM puestos 
  //                   WHERE id_puesto = '$id'",$conexion) or die (mysql_error());
?>