<?php 
	include '../../configuracion/conexion.php';
	$id = $_POST['p_id_departamento'];
	
	$consulta = mysql_query("SELECT id_departamento, 	
									nom_departamento,
									siglas_departamento
								


                    FROM departamentos 
                    WHERE id_departamento = '$id'",$conexion) or die (mysql_error());
                  
 	$row=mysql_fetch_array($consulta);
 	$array = array($id, $row[1], $row[2]);
 	$datos = json_encode($array);
 	echo "$datos";
 ?>