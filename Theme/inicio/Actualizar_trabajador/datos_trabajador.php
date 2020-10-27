<?php 
	include '../../configuracion/conexion.php';
	$id = $_POST['id_trabajador'];
	

	
	$consulta = mysql_query("SELECT id_trabajador,num_empleado,fecha_ingreso
						 		 FROM trabajadores 
                   				WHERE id_trabajador = '$id' AND activo = '1'",$conexion) or die (mysql_error());
                  
 	$row=mysql_fetch_array($consulta);
 	$array = array($id, $row[1], $row[2]); 
 	$datos = json_encode($array);
 	echo "$datos";
 ?>