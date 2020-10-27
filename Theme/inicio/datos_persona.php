<?php 
	include '../configuracion/conexion.php';
	$id = $_POST['id_persona'];
	
	$consulta = mysql_query("SELECT id_persona, nombre, ap_paterno, ap_materno, correo, telefono
                    FROM personas 
                    WHERE id_persona = '$id'",$conexion) or die (mysql_error());
                  
 	$row=mysql_fetch_array($consulta);
 	$array = array($id, $row[1], $row[2], $row[3], $row[4], $row[5]);
 	$datos = json_encode($array);
 	echo "$datos";
 ?>