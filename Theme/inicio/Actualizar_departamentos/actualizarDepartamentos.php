<?php 
	include '../../configuracion/conexion.php';

	// CAMPOS DE LA TABLA;
	// 

	$id = $_POST['p_id_departamento'];
$nom_departamento = $_POST['depa_nom_departamento'];
$siglas_departamento = $_POST['depa_siglas_departamento'];


	
$actualizar = ("UPDATE departamentos
                                        SET nom_departamento = '$nom_departamento',

                                        	siglas_departamento = '$siglas_departamento'
                                        

                                        
                                        WHERE
                                            id_departamento = '$id'");
$ejecura = mysql_query($actualizar,$conexion);

 ?>