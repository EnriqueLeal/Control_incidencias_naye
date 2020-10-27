<?
//se manda llamar la conexion
include("../conexion/conexion.php");
date_default_timezone_set('America/Monterrey');
//variables post
$NombreC=$_POST["nombreC"];
$siglas=$_POST["siglas"];




//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

mysql_query("SET NAMES utf8");	


$insertar= mysql_query("INSERT INTO carreras

							(nombre, abreviatura, fecha_registro, hora_registro, activo)
							
						VALUES
							('$NombreC', '$siglas', '$fecha', '$hora', 1)",$conexion) or die (mysql_error());

?>

