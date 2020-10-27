<?
//se manda llamar la conexion
include("../configuracion/conexion.php");
// include("../configuracion/credenciales.php");

date_default_timezone_set('America/Monterrey');
//variables post
$pNombre=$_POST["num_empleado"]; 
$pId_departamento=$_POST["cbo_departamento"];
$pId_puesto=$_POST["cbo_puesto"];
$pId_persona=$_POST["cbo_persona"];
$pFechaIngreso=$_POST["fecha_ingreso"];




//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

mysql_query("SET NAMES utf8");	
$insertar= mysql_query("INSERT INTO trabajadores (num_empleado,id_departamento,id_puesto,id_persona, fecha_ingreso,fecha_registro, hora_registro, activo, id_usuario)	
						VALUES
							('$pNombre', '$pId_departamento','$pId_puesto','$pId_persona','$pFechaIngreso','$fecha', '$hora', 1, 1)",$conexion) or die (mysql_error());



?>

