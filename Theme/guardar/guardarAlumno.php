<?
//se manda llamar la conexion
include("../conexion/conexion.php");
date_default_timezone_set('America/Monterrey');
//variables post
$id_persona=$_POST["idpersona"];
$id_carrera=$_POST["idcarrera"];
$matricula=$_POST["matricula"];
$fechaing=$_POST["fechaing"];




//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

mysql_query("SET NAMES utf8");	


$insertar= mysql_query("INSERT INTO alumnos

							(id_persona, id_carrera, matricula, fecha_ingreso, fecha_registro, hora_registro, activo)
							
						VALUES
							('$id_persona', '$id_carrera', '$matricula','$fechaing', '$fecha', '$hora', 1)",$conexion) or die (mysql_error());

?>

