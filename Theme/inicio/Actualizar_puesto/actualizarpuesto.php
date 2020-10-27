<?php 
	include '../../configuracion/conexion.php';
	$id = $_POST['p_id_puesto'];
$nom_puesto = $_POST['nombre_puesto'];

	
$actualizar = ("UPDATE puestos
                                        SET nom_puesto = '$nom_puesto'
                                        
                                        WHERE
                                            id_puesto = '$id'");
$ejecura = mysql_query($actualizar,$conexion);

 ?>