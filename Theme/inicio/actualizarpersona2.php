<?php 
	include '../configuracion/conexion.php';
	$id = $_POST['id_persona'];
$nom = $_POST['persona_nombre'];
$ap = $_POST['persona_ap_paterno'];
$am = $_POST['persona_ap_materno'];
$corr = $_POST['persona_correo'];
$tel = $_POST['persona_telefono'];
	
$actualizar = ("UPDATE personas
                                        SET nombre = '$nom',
                                         ap_paterno = '$ap',
                                         ap_materno = '$am',
                                         correo = '$corr',
                                         telefono = '$tel'
                                        WHERE
                                            id_persona = '$id'");
$ejecura = mysql_query($actualizar,$conexion);

 ?>