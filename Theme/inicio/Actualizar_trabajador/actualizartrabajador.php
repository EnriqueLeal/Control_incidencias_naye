<?php 
	include '../../configuracion/conexion.php';

	// CAMPOS DE LA TABLA;
	// 

	$id = $_POST['id_trabajador'];
$num_empleado = $_POST['numero_empleado'];
$departamento = $_POST['id_departamento'];
$puesto = $_POST['id_puesto'];
$fecha_ingreso = $_POST['fecha_ingreso_sistema'];

	
$actualizar = ("UPDATE trabajadores
                                        SET num_empleado = '$num_empleado',
                                        	id_departamento = '$departamento',
                                        	id_puesto = '$puesto',
                                        	fecha_ingreso = '$fecha_ingreso'
                                        

                                        
                                        WHERE
                                            id_trabajador = '$id'");
$ejecura = mysql_query($actualizar,$conexion);



 ?>