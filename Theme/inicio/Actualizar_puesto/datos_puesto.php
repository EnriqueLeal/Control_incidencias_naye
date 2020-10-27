<?php 
	include '../../configuracion/conexion.php';
	$id = $_POST['p_id_puesto'];
	
	$consulta = mysql_query("SELECT 
									id_puesto, 
									nom_puesto
									
                    FROM puestos 
                    WHERE id_puesto = '$id'",$conexion) or die (mysql_error());
                  
 	$row=mysql_fetch_array($consulta);
 	$array = array($id, $row[1]);
 	$datos = json_encode($array);
 	echo "$datos";
 ?>